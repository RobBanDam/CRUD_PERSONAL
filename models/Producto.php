<?php 
    class Producto extends Conectar{
        public function get_producto(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto WHERE estado = 1";
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

        public function insert_producto($prodnom, $proddesc){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "INSERT INTO tm_producto (prodid, prodnom, proddesc, fecha, fechamod, fechaelim, estado) VALUES (NULL, ?, ?, now(), NULL, NULL, 1);";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$prodnom);
            $sql->bindValue(2,$proddesc);
            $sql -> execute();
            return $resultado = $sql->fetchAll();
        }

        public function update_producto($prodid, $prodnom, $proddesc){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "UPDATE tm_producto
                SET
                    $prodnom=?,
                    $proddesc=?,
                    fechamod=now()
                WHERE
                    prodid = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$prodnom);
            $sql->bindValue(2,$proddesc);
            $sql->bindValue(3,$prodid);
            $sql -> execute();
            return $resultado = $sql->fetchAll();
        }
    }
?>