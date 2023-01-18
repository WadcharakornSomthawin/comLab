<?php 
    class Pickup {
        private $ConDB;
        public function __construct(){
            $con = new ConDB();
            $con->connect();
            $this->ConDB = $con->conn;
        }

        public function borrow($data_std)
        {
            $sql = "INSERT INTO `borrow`(room,time_borrow,stu_id_pickUp) VALUES ('$q',NOW(),'$stu_id')";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute($data_course)){
                return true;
            }else {
                return false;
        }
        }
    }
?>