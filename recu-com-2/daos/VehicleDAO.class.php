<?php
    namespace daos;

use PDOException;

    class VehicleDAO{

        private $connection;
        private $tableName = "Vehicle";

        public function add($marca, $modelo, $patente, $anio, $motor, $color){
            echo "<br> ACA el dato con la bdd";
            try{
                $query = "insert into $this->tableName (marca, modelo, patente, anio, motor, color) values (:marca, :modelo, :patente, :anio, :motor, :color);";
                $this->connection = Connection::GetInstance();
                $parameters['marca'] = $marca;
                $parameters['modelo'] = $modelo;
                $parameters['patente'] = $patente;
                $parameters['anio'] = $anio;
                $parameters['motor'] = $motor;
                $parameters['color'] = $color;
                $this->connection->ExecuteNonQuery($query, $parameters);
                echo "agragado";
            }
            catch(PDOException $ex){
                echo "erro al agragar";
                //throw $ex;
            }
        }
    }
?>