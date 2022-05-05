<?php

class ServerLoadException extends Exception{}
class NetworkStorageException extends Exception{}
class DiskFullException extends Exception{}

interface NetworkStorage{
    function connect();
    function getName();
}

class MySQLServer implements NetworkStorage{
    function connect() {
        throw new ServerLoadException();
    }

    function getName() {
        return "MySQLServer";
    }
}

class PostgreSQLServer implements NetworkStorage{
    function connect() {
        return true;
    }

    function getName() {
        return "PostgreSQLServer";
    }
}

class MSSQLServer implements NetworkStorage{
    function connect() {
        throw new DiskFullException();
    }

    function getName() {
        return "MSSQLServer";
    }
}


class ConnectionPool{
    private $connection;
    private $storage;
    function __construct(){
        $this->storage = array();
    }

    function addStorage($storage){
        array_push($this->storage, $storage);
    }

    function getConnection(){
        foreach($this->storage as $storage){
            try{
                $this->connection = $storage->connect();
            }catch(ServerLoadException $e){
               echo $storage->getName()."is facing huge load\n";
            }catch(NetworkStorage $e){
               echo $storage->getName()." has network problems\n";
            }catch(DiskFullException $e){
               echo $storage->getName()."Has full disk\n";
            }
        }

        if($this->connection){
            return $this->connection;
        }
        return false;
    }
}

$mysql = new MySQLServer();
$postgresql = new PostgreSQLServer();
$mssql = new MSSQLServer();

$cp = new ConnectionPool();
$cp->addStorage($mysql);
$cp->addStorage($postgresql);
$cp->addStorage($mssql);

$connection = $cp->getConnection();
print_r($connection);

