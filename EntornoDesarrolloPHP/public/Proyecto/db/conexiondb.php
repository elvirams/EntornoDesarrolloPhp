<?php
    /*
    Este método estático crea una conexión contra la BBDD utilizando los datos del fichero de variables entorno .env
    Al ser un método estático para llamar a la conexión "Database::connect()"
    Devuelve el objeto PDO con la conexión
    En caso de error, captura excepción y muestra mensaje
    */
    class Database {
        public static function connect () 
        {
            $host='mariadb';
            $dbname=getenv('MARIADB_DATABASE');

            try {
                $dsn = 'mysql:host='.$host.";dbname=".$dbname.";charset=UTF8";
                $dbh = new PDO($dsn, getenv('MARIADB_USER'), getenv('MARIADB_PASSWORD'));
                return $dbh;
                
            } catch (PDOException $e){
                //En una aplicación real no se debe mostrar un mensaje
                echo $e->getMessage();
            }

        }
    }
?>