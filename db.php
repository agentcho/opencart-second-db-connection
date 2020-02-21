<?php
/**
 * Addtional connection to opencart base 
 *
 * @author agentcho
 */
class ModelApiDb extends Model
{
    
    public  $dbconnection; 
        
    public function getInstance($driver="MySQLi", $database="u0730855_portal"){
        require_once DIR_SYSTEM.'/library/db/mysqli.php';
        $class='DB\\'.$driver; 
        $this->dbconnection = new $class(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, $database);
        return $this->dbconnection; 
    }
    
    
   
    public function query($sql) {
        return $this->getInstance()->query(); 
    }

    public function escape($value) {
        return $this->getInstance()->escape(); 
    }

    public function countAffected() {

        return $this->getInstance()->countAffected(); 
    }

    public function getLastId() {
        return $this->getInstance()->getLastId(); 
    }
    
    public function __destruct() {
        $this->getInstance()->close();
    }
    
    
}
