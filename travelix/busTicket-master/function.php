<?php
 

    
    // add discount code in user profile
    function discount($a){
        
        global $db;
        
         $sql = "SELECT disAmount FROM discount WHERE code = '$a'";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_assoc($result)){
            
            $disAmount = $row['disAmount'];
            
            return $disAmount;
            
            
            
        }
    }

// read discount status from discount table

    function status($b){
        global $db;
       $sql = "SELECT disStatus FROM discount WHERE code = '$b'";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_assoc($result)){
            
            $status = $row['disStatus'];
            
            return $status;
            
            
            
        }  
        
        
        
    }


// read discount status from user table

    function Ustatus(){
        global $db;
        $email = $_SESSION['email'];
        $sql = "SELECT disStatus FROM users WHERE email = '$email'";
        $result = mysqli_query($db, $sql);
        while($row = mysqli_fetch_assoc($result)){
            
            $status = $row['disStatus'];
        }
        
       return $status; 
    }

// read discount amount from seat page for specific user using email 

    function readDiscount(){
        global $db;
        
        $email = $_SESSION['email'];
        
        $sql = "SELECT disAmount FROM users WHERE email = '$email'";
        $result = mysqli_query($db, $sql);
        while($row = mysqli_fetch_assoc($result)){
            
            $disAmount = $row['disAmount'];
        }
        
        return $disAmount;
        
    }


?>