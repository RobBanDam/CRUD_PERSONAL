<?php
    require_once ("../config/conexion.php");
    require_once ("../models/Producto.php");

    $producto = new Producto();

    switch($_GET["op"]){
        case "listar":
            $datos = $producto->get_producto();
            $data = Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["catnom"];
                $sub_array[] = $row["prodnom"];
                $sub_array[] = $row["proddesc"];
                $sub_array[] = $row["prodcant"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["prodid"].');"  id="'.$row["prodid"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["prodid"].');" id="'.$row["prodid"].'" class="btn btn-outline-danger btn-icon"> <div> <i class="fa fa-trash"> </i> </div> </button>';

                $data[] = $sub_array;
            }

            $results = array(
                "sEcho" => 1,
                "iTotalRecords" => count($data),
                "iTotalDisplayRecords" => count($data),
                "aaData" => $data
            );
            echo json_encode($results);

            break;

        case "guardaryeditar":
            $datos = $producto->get_producto_id($_POST["prodid"]);
            if(empty($_POST["prodid"])){
                if(is_array($datos) === true and count($datos) === 0){
                    $producto -> insert_producto($_POST["catid"], $_POST["prodnom"], $_POST["proddesc"], $_POST["prodcant"]);
                }
            }else{
                $producto -> update_producto($_POST["prodid"], $_POST["catid"], $_POST["prodnom"], $_POST["proddesc"], $_POST["prodcant"]);
            }

            break;

        case "mostrar":
            $datos = $producto->get_producto_id($_POST["prodid"]);
            if(is_array($datos) === true and count($datos) > 0){
                foreach($datos as $row){
                    $output["prodid"] = $row["prodid"];
                    $output["catid"] = $row["catid"];
                    $output["prodnom"] = $row["prodnom"];
                    $output["proddesc"] = $row["proddesc"];
                    $output["prodcant"] = $row["prodcant"];
                }
                echo json_encode($output);
            }
            break;

        case "eliminar":
            $producto -> delete_producto($_POST["prodid"]);
            break;
    }
?>