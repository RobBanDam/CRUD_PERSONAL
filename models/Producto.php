<?php 
    class Producto extends Conectar{
        public function get_producto(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT
            tm_producto.prodid,
            tm_producto.catid,
            tm_producto.prodnom,
            tm_producto.proddesc,
            tm_producto.prodcant,
            tm_categoria.catnom
            FROM
            tm_producto INNER JOIN
            tm_categoria on tm_producto.catid = tm_categoria.catid
            WHERE tm_producto.estado = 1";
            $sql = $conectar->prepare($sql);
            $sql -> execute();
            return $resultado = $sql->fetchAll();
        }

        public function get_producto_id($prodid){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto WHERE prodid = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$prodid);
            $sql -> execute();
            return $resultado = $sql->fetchAll();
        }

        public function delete_producto($prodid){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "UPDATE tm_producto
                SET
                    estado=0,
                    fechaelim=now()
                WHERE
                    prodid = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$prodid);
            $sql -> execute();
            return $resultado = $sql->fetchAll();
        }

        public function insert_producto($catid, $prodnom, $proddesc, $prodcant){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "INSERT INTO tm_producto 
                (prodid, catid, prodnom, proddesc, prodcant, fecha, fechamod, fechaelim, estado) 
                VALUES 
                (NULL, ?, ?, ?, ?, now(), NULL, NULL, 1);";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$catid);
            $sql->bindValue(2,$prodnom);
            $sql->bindValue(3,$proddesc);
            $sql->bindValue(4,$prodcant);
            $sql -> execute();
            return $resultado = $sql->fetchAll();
        }

        public function update_producto($prodid, $catid, $prodnom, $proddesc, $prodcant){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "UPDATE tm_producto
                SET
                    catid=?,
                    prodnom=?,
                    proddesc=?,
                    prodcant=?,
                    fechamod=now()
                WHERE
                    prodid = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$catid);
            $sql->bindValue(2,$prodnom);
            $sql->bindValue(3,$proddesc);
            $sql->bindValue(4,$prodcant);
            $sql->bindValue(5,$prodid);
            $sql -> execute();
            return $resultado = $sql->fetchAll();
        }
    }
?>