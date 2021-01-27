<?php 

class database{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "db_oop";

    private $conn = false;
    private $message = array();
    private $db_con = "";


    //For COnnect DB automaticaly...
    public function __construct(){
        if (!$this->conn) {
            $this->db_con = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
            $this->conn = true;
            if ($this->db_con->connect_error) {
                array_push($this->message->db_con->connect_error);
                return false;
            }else{
                return true;
            }
        }
    }

    //For Insurt Data in Database...
    public function insert($tbl_name,$col_val = array()){
        if ($this->tableExists($tbl_name)) {

            $table_colums = implode(',', array_keys($col_val));
            $table_value = implode("','", $col_val);

            $sql = "INSERT INTO $tbl_name($table_colums) VALUES ('$table_value')";
            if ($this->db_con->query($sql)) {
                array_push($this->message,$this->db_con->insert_id);
                return true;
            }else{
                array_push($this->message, $this->db_con->error);
                return false;
            }
        }else{
            return false;
        }
    }

    //For Update Data in Database...
    public function update($table,$params=array(),$where = null){
        if ($this->tableExists($table)){

            $args = array();
            foreach ($params as $key => $value) {
                $args[] = "$key = '$value'";
            }

            $sql = "UPDATE $table SET ".implode(',',$args);
            if($where != null){
                $sql .= "WHERE $where";
            }
            if ($this->db_con->query($sql)) {
                array_push($this->message,$this->db_con->affected_rows);
                return true;
            }else{
                array_push($this->message,$this->db_con->error);
                return false;
            }

        }else{
            return false;
        }
    }

    //For Delete Data From Database...
    public function delete($table,$where = null){
        if ($this->tableExists($table)){
             $sql = "DELETE FROM $table";
             if ($where != null) {
                 $sql .= " WHERE $where";
             }

             if ($this->db_con->query($sql)) {
                array_push($this->message,$this->db_con->affected_rows);
                return true;
            }else{
                array_push($this->message,$this->db_con->error);
                return false;
            }
        }else{
            return false;
        }
    }

    

    //For Select Data From Database...
    public function select($table, $rows="*",$join = null,$where = null,$order = null, $limit= null){
        $sql = "SELECT $rows FROM $table";
        if ($join != null) {
            $sql .= " JOIN $join";
        }
        if ($where != null) {
            $sql .= " WHERE $where";
        }
        if ($order != null) {
            $sql .= " ORDER $order";
        }
        if ($limit != null) {
            $sql .= " LIMIT 0,$limit";
        }

        echo $sql;

        $query = $this->db_con->query($sql);

        if($query){
          $this->message = $query->fetch_all(MYSQLI_ASSOC);
          return true; // Query was successful
        }else{
          array_push($this->message, $this->db_con->error);
          return false; // No rows were returned
        }
    }

    // public function sql($sql){
    //     $query = $this->db_con->query($sql);

    //     if($query){
    //       $this->message = $query->fetch_all(MYSQLI_ASSOC);
    //       return true; // Query was successful
    //     }else{
    //       array_push($this->message, $this->db_con->error);
    //       return false; // No rows were returned
    //     }
    // }

 

    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->db_con->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true; // The table exists
            }else{
                array_push($this->message,$table." does not exist in this database.");
                return false; // The table does not exist
            }
        }
    }
   

    //For Check Table Exists in Database...
    public function getMessage(){
        $val = $this->message;
        $this->message = array();
        return $val;
    }

    //For Close DB automaticaly...
    public function __distruct(){
        if ($this->conn) {
            if ($this->db_con->close()) {
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }
    }

   


}

?>