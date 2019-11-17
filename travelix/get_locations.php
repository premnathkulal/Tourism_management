<?php
     
    require 'init.php';
    session_start();
     
    try {
     
        $db = new PDO($dsn, $user_name, $user_password);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
         
        $l = $_SESSION['map_place'];
        $q = "select * from locations  where name LIKE '%$l%'";
        $r = mysqli_query($con, $q);
        $n_r = mysqli_num_rows($r);

        if($n_r > 0){
            $s_d = mysqli_fetch_all($r, MYSQLI_ASSOC);
            $lat = $s_d[0]['lat'];
            $lon = $s_d[0]['lon'];

            $query = "SELECT * FROM locations  where ( 6371 * acos ( cos ( radians($lat) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians($lon) ) + sin ( radians($lat) ) * sin( radians( lat ) ) ) ) < 40;";
            
            //SELECT id,  AS distance FROM locations HAVING distance < 30
            
            $sth = $db->query($query);

        }else{              
            $sth = $db->query("SELECT * FROM locations");
        }
        
        $locations = $sth->fetchAll();
        echo json_encode( $locations );
         
    } catch (Exception $e) {
        echo $e->getMessage();
    }

?>