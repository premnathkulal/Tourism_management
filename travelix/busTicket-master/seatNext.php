<?php include 'header.php'; ?>




<?php 




if(isset($_POST['txn-submit'])){
    
    
    $txnId = $_POST['txnId'];
    
    $email =  $_SESSION['email'];
    $userAllSeat="";
    $count = 0;
    $totalFare = 0;
    
    $seatOne = $_SESSION['numOne'];
     $seatTwo = $_SESSION['numTwo'];
     $seatThree = $_SESSION['numThree'];
     $seatFour = $_SESSION['numFour'];
     $seatFive = $_SESSION['numFive'];
     $seatSix = $_SESSION['numSix'];
     $seatSeven = $_SESSION['numSeven'];
     $seatEight = $_SESSION['numEight'];
    
    $seatNine = $_SESSION['numNine'];
     $seatTen = $_SESSION['numTen'];
     $seatEleven = $_SESSION['numEleven'];
     $seatTwelve = $_SESSION['numTwelve'];
      
      
   $seatThirteen   = $_SESSION['numThirteen'];
   $seatFourteen   = $_SESSION['numFourteen']; 
   $seatFifteen   = $_SESSION['numFifteen']; 
   $seatSixteen   = $_SESSION['numSixteen']; 
   $seatSeventeen   = $_SESSION['numSeventeen']; 
   $seatEightteen   = $_SESSION['numEightteen'];  
   $seatNineteen   = $_SESSION['numNineteen']; 
   $seatTwenty   = $_SESSION['numTwenty']; 
   $seatTwentyone   = $_SESSION['numTwentyone']; 
   $seatTwentytwo   = $_SESSION['numTwentytwo'];  
   $seatTwentythree   = $_SESSION['numTwentythree']; 
   $seatTwentyfour   = $_SESSION['numTwentyfour']; 
   $seatTwentyfive   = $_SESSION['numTwentyfive']; 
   $seatTwentysix   = $_SESSION['numTwentysix']; 
   $seatTwentyseven   = $_SESSION['numTwentyseven'];
   $seatTwentyeight   = $_SESSION['numTwentyeight']; 
   $seatTwentynine   = $_SESSION['numTwentynine']; 
   $seatThirty   = $_SESSION['numThirty'];
   $seatThirtyone   = $_SESSION['numThirtyone']; 
   $seatThirtytwo   = $_SESSION['numThirtytwo']; 
   $seatThirtythree   = $_SESSION['numThirtythree']; 
   $seatThirtyfour   = $_SESSION['numThirtyfour']; 
   $seatThirtyfive   = $_SESSION['numThirtyfive']; 
   $seatThirtysix   = $_SESSION['numThirtysix']; 
   $seatThirtyseven   = $_SESSION['numThirtyseven']; 
   $seatThirtyeight   = $_SESSION['numThirtyeight']; 
   $seatThirtynine   = $_SESSION['numThirtynine']; 
   $seatFourty   = $_SESSION['numFourty'];
     
        
      if ($_SESSION['oneSeat']=="checked"){
          
          
          
          $sql = "select * from seat where state='$seatOne'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                      $count = $count + 1;
                      
                       $userAllSeat = $userAllSeat."a1, "; 
                      
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatOne'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
       
          
          
          $sql = "UPDATE seat SET val = 1 WHERE state='$seatOne'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
             
         
       }
    
    // set user disAmount 0 while he get one discount
    $email = $_SESSION['email'];
    
    $sql = "SELECT disAmount FROM users WHERE email='$email'";
    $dis_result = mysqli_query($db, $sql);
    while($roww = mysqli_fetch_assoc($dis_result)){
        $disAmount = $roww['disAmount'];
    }
    if($disAmount != 0){
       $sql = "UPDATE users SET disAmount = '0' WHERE email = '$email'";
            mysqli_query($db, $sql); 
    }
    
    
    
    
     if ($_SESSION['twoSeat']=="checked"){
         
         
         $sql = "select * from seat where state='$seatTwo'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                                            $count = $count + 1;
            
                       $userAllSeat = $userAllSeat."a2, "; 
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['threeSeat']=="checked"){
         
          $sql = "select * from seat where state='$seatThree'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."a3, ";
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                      
                  }
              }
          
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
     if ($_SESSION['fourSeat']=="checked"){
          
         $sql = "select * from seat where state='$seatFour'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."a4, "; 
                      $count = $count + 1;
                      
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatFour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatFour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
     if ($_SESSION['fiveSeat']=="checked"){
          
         $sql = "select * from seat where state='$seatFive'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."b1, "; 
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatFive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                      
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatFive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['sixSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatSix'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."b2, "; 
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatSix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatSix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['sevenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatSeven'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."b3, ";
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatSeven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                      
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatSeven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['eightSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatEight'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."b4, ";
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatEight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatEight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['nineSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatNine'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."c1, ";
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatNine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatNine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['tenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."c2, ";
                      $count = $count + 1;
                       $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['elevenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatEleven'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."c3, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatEleven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatEleven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['twelveSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwelve'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."c4, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwelve'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwelve'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['thirteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."d1, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['fourteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatFourteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."d2, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatFourteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatFourteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['fifteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatFifteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."d3, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatFifteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatFifteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['sixteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatSixteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."d4, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatSixteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatSixteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['seventeenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatSeventeen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."e1, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatSeventeen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatSeventeen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['eightteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatEightteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."e2, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatEightteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatEightteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
     if ($_SESSION['nineteenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatNineteen'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."e3, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatNineteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatNineteen'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['twentySeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwenty'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."e4, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwenty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwenty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['twentyoneSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentyone'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."f1, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentyone'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentyone'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
     if ($_SESSION['twentytwoSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentytwo'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."f2, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentytwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentytwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentythreeSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentythree'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."f3, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentythree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
                  
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentythree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentyfourSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentyfour'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."f4, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentyfour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentyfour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentyfiveSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentyfive'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."g1, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentyfive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentyfive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentysixSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentysix'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."g2, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentysix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentysix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentysevenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentyseven'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."g3, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentyseven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentyseven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentyeightSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentyeight'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."g4, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentyeight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentyeight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['twentynineSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatTwentynine'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."h1, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatTwentynine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatTwentynine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
     if ($_SESSION['thirtySeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirty'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."h2, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    if ($_SESSION['thirtyoneSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtyone'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."h3, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtyone'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtyone'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtytwoSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtytwo'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."h4, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtytwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtytwo'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtythreeSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtythree'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."i1, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtythree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
                  
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtythree'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtyfourSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtyfour'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."i2, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtyfour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtyfour'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtyfiveSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtyfive'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."i3, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtyfive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtyfive'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtysixSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtysix'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."i4, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtysix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtysix'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtysevenSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtyseven'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."j1, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtyseven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtyseven'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtyeightSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtyeight'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."j2, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtyeight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtyeight'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['thirtynineSeat']=="checked"){
          
        $sql = "select * from seat where state='$seatThirtynine'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."j3, ";
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatThirtynine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatThirtynine'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    if ($_SESSION['fourtySeat']=="checked"){
          
        $sql = "select * from seat where state='$seatFourty'";
          
          $result = mysqli_query($db, $sql);
              while($row = mysqli_fetch_assoc($result)){
                  
                  if($row['val'] != 1){
                      
                       $userAllSeat = $userAllSeat."j4, "; 
                      $count = $count + 1;
                      $sql = "UPDATE seat SET txnId = '$txnId' WHERE state='$seatFourty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
                  }
              }
          
                $sql = "UPDATE seat SET val = 1 WHERE state='$seatFourty'";
        
           if (mysqli_query($db, $sql)) { echo ""; }
           else { echo "Error updating record: " . mysqli_error($db); }
          
         
       }
    
    
 
    
    $fare =  $_SESSION['fare'];
  
   
    
    
    
    
    
    $totalFare = $count * $fare;
    
    
    $phone = $_POST['phone'];
    
   $busId = $_SESSION['idVal'];
    
    $sql = "INSERT INTO payment(phone,ticket,amount,txnId,email, busId) VALUES('$phone','$userAllSeat','$totalFare','$txnId','$email','$busId')";
    
    if (mysqli_query($db, $sql)) {  }
           else { echo "Error updating record: " . mysqli_error($db); }
    
    // database for cancel ticket
    
    $sql = "INSERT INTO cancel(phone,ticket,amount,txnId,email, busId) VALUES('$phone','$userAllSeat','$totalFare','$txnId','$email','$busId')";
    
    if (mysqli_query($db, $sql)) { }
           else { echo "Error updating record: " . mysqli_error($db); }
    
    // insert database for user profile stauts change pending or reject his ticket
    
    
    $busDate = $_SESSION['busDate'];
    $busTime = $_SESSION['busTime'];
    $busDesA=  $_SESSION['busDesA']; 
    $busDesB = $_SESSION['busDesB'];
    
    
   
    $sql =  "INSERT INTO report(email,ticket, status, busDate, busTime, busDesA, busDesB) VALUES(
    '$email','$userAllSeat','Pending', '$busDate', '$busTime', '$busDesA', '$busDesB')";
    
    mysqli_query($db, $sql);
    
    
      }

?>


<?php 
  if(isset($_POST['submit'])){
      
      
      
     $seatOne = $_SESSION['numOne'];
     $seatTwo = $_SESSION['numTwo'];
     $seatThree = $_SESSION['numThree'];
     $seatFour = $_SESSION['numFour'];
     $seatFive = $_SESSION['numFive'];
     $seatSix = $_SESSION['numSix'];
     $seatSeven = $_SESSION['numSeven'];
     $seatEight = $_SESSION['numEight'];
     $seatNine = $_SESSION['numNine'];
     $seatTen = $_SESSION['numTen'];
     $seatEleven = $_SESSION['numEleven'];
     $seatTwelve = $_SESSION['numTwelve'];
      
      
   $seatThirteen   = $_SESSION['numThirteen'];
   $seatFourteen   = $_SESSION['numFourteen']; 
   $seatFifteen   = $_SESSION['numFifteen']; 
   $seatSixteen   = $_SESSION['numSixteen']; 
   $seatSeventeen   = $_SESSION['numSeventeen']; 
   $seatEightteen   = $_SESSION['numEightteen'];  
   $seatNineteen   = $_SESSION['numNineteen']; 
   $seatTwenty   = $_SESSION['numTwenty']; 
   $seatTwentyone   = $_SESSION['numTwentyone']; 
   $seatTwentytwo   = $_SESSION['numTwentytwo'];  
   $seatTwentythree   = $_SESSION['numTwentythree']; 
   $seatTwentyfour   = $_SESSION['numTwentyfour']; 
   $seatTwentyfive   = $_SESSION['numTwentyfive']; 
   $seatTwentysix   = $_SESSION['numTwentysix']; 
   $seatTwentyseven   = $_SESSION['numTwentyseven'];
   $seatTwentyeight   = $_SESSION['numTwentyeight']; 
   $seatTwentynine   = $_SESSION['numTwentynine']; 
   $seatThirty   = $_SESSION['numThirty'];
   $seatThirtyone   = $_SESSION['numThirtyone']; 
   $seatThirtytwo   = $_SESSION['numThirtytwo']; 
   $seatThirtythree   = $_SESSION['numThirtythree']; 
   $seatThirtyfour   = $_SESSION['numThirtyfour']; 
   $seatThirtyfive   = $_SESSION['numThirtyfive']; 
   $seatThirtysix   = $_SESSION['numThirtysix']; 
   $seatThirtyseven   = $_SESSION['numThirtyseven']; 
   $seatThirtyeight   = $_SESSION['numThirtyeight']; 
   $seatThirtynine   = $_SESSION['numThirtynine']; 
   $seatFourty   = $_SESSION['numFourty'];

  }
?>

<?php

if(isset($_POST['submit'])){
    
     $oneSeat=$twoSeat=$threeSeat=$fourSeat=$fiveSeat=$sixSeat=$sevenSeat=$eightSeat=$nineSeat=$tenSeat=$elevenSeat=$twelveSeat=$thirteenSeat=$fourteenSeat=$fifteenSeat=$sixteenSeat =$seventeenSeat =$eightteenSeat =$nineteenSeat =$twentySeat =$twentyoneSeat =$twentytwoSeat =$twentythreeSeat =$twentyfourSeat =$twentyfiveSeat =$twentysixSeat =$twentysevenSeat =$twentyeightSeat =$twentynineSeat =$thirtySeat =$thirtyoneSeat =$thirtytwoSeat =$thirtythreeSeat =$thirtyfourSeat =$thirtyfiveSeat =$thirtysixSeat =$thirtysevenSeat =$thirtyeightSeat =$thirtynineSeat =$fourtySeat ="unchecked";
    
    if(!isset( $_POST['one'])){
        
         $_POST['one'] = [];
    }
    
    
    $one = $_POST['one'];
   

      
        foreach($one as $lang=>$value){
        
      if ($value == 'a1'){
          
           
          $oneSeat = "checked";
          $_SESSION['oneSeat'] = $oneSeat;
               
       }
    
     if ($value == 'a2'){
           $twoSeat = "checked";
            
             $_SESSION['twoSeat'] = $twoSeat;
             
           
       }
        if ($value == 'a3'){
           $threeSeat = "checked";
          
            $_SESSION['threeSeat'] = $threeSeat;
            
            
       }
            
             if ($value == 'a4'){
           $fourSeat = "checked";
           $_SESSION['fourSeat'] = $fourSeat;
            
            
           
       }
            
            
        if ($value == 'b1'){
           $fiveSeat = "checked";
           $_SESSION['fiveSeat'] = $fiveSeat;
           
       }
        if ($value == 'b2'){
           $sixSeat = "checked";
           
            $_SESSION['sixSeat'] = $sixSeat;
           
       }
        if ($value == 'b3'){
           $sevenSeat = "checked";
        $_SESSION['sevenSeat'] = $sevenSeat;

           
       }
            
       if ($value == 'b4'){
           $eightSeat = "checked";
           $_SESSION['eightSeat'] = $eightSeat;
          
       }
            
        if ($value == 'c1'){
           $nineSeat = "checked";
            $_SESSION['nineSeat'] = $nineSeat;
          
       }
            
             if ($value == 'c2'){
           $tenSeat = "checked";
                 $_SESSION['tenSeat'] = $tenSeat;
          
       }
             if ($value == 'c3'){
           $elevenSeat = "checked";
                 $_SESSION['elevenSeat'] = $elevenSeat;
          
       }
             if ($value == 'c4'){
           $twelveSeat = "checked";
           $_SESSION['twelveSeat'] = $twelveSeat;
       }
            
            
             if ($value == 'd1'){
           $thirteenSeat = "checked";
                 $_SESSION['thirteenSeat'] = $thirteenSeat;
          
       }
            
       if ($value == 'd2'){
                 
           $fourteenSeat    = "checked";
                 $_SESSION['fourteenSeat'] = $fourteenSeat;
      
       }
            
              if ($value == 'd3'){
           $fifteenSeat   = "checked";
                  $_SESSION['fifteenSeat'] = $fifteenSeat;
        
       }
            
               if ($value == 'd4'){
           $sixteenSeat  = "checked";
                   $_SESSION['sixteenSeat'] = $sixteenSeat;
        
       }
            
            
               if ($value == 'e1'){
           $seventeenSeat = "checked";
                   $_SESSION['seventeenSeat'] = $seventeenSeat;
             
       }
            
               if ($value == 'e2'){
           $eightteenSeat = "checked";
                   $_SESSION['eightteenSeat'] = $eightteenSeat;
          
       }
            
               if ($value == 'e3'){
           $nineteenSeat = "checked";
                   $_SESSION['nineteenSeat'] = $nineteenSeat;
           
       }
            
            if ($value == 'e4'){
           $twentySeat  = "checked";
         $_SESSION['twentySeat'] = $twentySeat;
   
       }
            
             if ($value == 'f1'){
           $twentyoneSeat  = "checked";
                   $_SESSION['twentyoneSeat'] = $twentyoneSeat;    
       }
            
              if ($value == 'f2'){
           $twentytwoSeat  = "checked";
          $_SESSION['twentytwoSeat'] = $twentytwoSeat;
   
       }
            
            if ($value == 'f3'){
           $twentythreeSeat  = "checked";
          
                    $_SESSION['twentythreeSeat'] = $twentythreeSeat;
            
       }
          
               if ($value == 'f4'){
           $twentyfourSeat  = "checked";
          
                     $_SESSION['twentyfourSeat'] = $twentyfourSeat;
   
       }
            
                if ($value == 'g1'){
           $twentyfiveSeat  = "checked";
          
      $_SESSION['twentyfiveSeat'] = $twentyfiveSeat;
    
       }
         
              if ($value == 'g2'){
           $twentysixSeat  = "checked";
           $_SESSION['twentysixSeat'] = $twentysixSeat;
    
       }
            
              if ($value == 'g3'){
           $twentysevenSeat  = "checked";
          
                                 $_SESSION['twentysevenSeat'] = $twentysevenSeat;
 
       }
            
              if ($value == 'g4'){
           $twentyeightSeat  = "checked";
          
                                 $_SESSION['twentyeightSeat'] = $twentyeightSeat;

            
           
       }
            
               if ($value == 'h1'){
           $twentynineSeat  = "checked";
          
                                 $_SESSION['twentynineSeat'] = $twentynineSeat;

            
            
       }
         
           if ($value == 'h2'){
           $thirtySeat  = "checked";
          
                                 $_SESSION['thirtySeat'] = $thirtySeat;

            
            
       }
         
          
           if ($value == 'h3'){
           $thirtyoneSeat  = "checked";
          
                                             $_SESSION['thirtyoneSeat'] = $thirtyoneSeat;

            
            
       }
            
            
             if ($value == 'h4'){
           $thirtytwoSeat  = "checked";
          
                                             $_SESSION['thirtytwoSeat'] = $thirtytwoSeat;

            
           
       }
             if ($value == 'i1'){
           $thirtythreeSeat  = "checked";
          
                                             $_SESSION['thirtythreeSeat'] = $thirtythreeSeat;

                 
           
       }
            
             if ($value == 'i2'){
           $thirtyfourSeat  = "checked";
          
                                             $_SESSION['thirtyfourSeat'] = $thirtyfourSeat;

            
           
       }
             if ($value == 'i3'){
           $thirtyfiveSeat  = "checked";
          
                                             $_SESSION['thirtyfiveSeat'] = $thirtyfiveSeat;

            
             
       }
            
             if ($value == 'i4'){
           $thirtysixSeat  = "checked";
          
            
                                             $_SESSION['thirtysixSeat'] = $thirtysixSeat;

           
       }
         
          if ($value == 'j1'){
           $thirtysevenSeat  = "checked";
          
                                            $_SESSION['thirtysevenSeat'] = $thirtysevenSeat;
 
          
       }
            
             if ($value == 'j2'){
           $thirtyeightSeat  = "checked";
                                           $_SESSION['thirtyeightSeat'] = $thirtyeightSeat;

            
            
       }
         
          
           if ($value == 'j3'){
           $thirtynineSeat  = "checked";
          
                                            $_SESSION['thirtynineSeat'] = $thirtynineSeat;
 
            
            
       }
          
           if ($value == 'j4'){
           $fourtySeat  = "checked";
          
                       $_SESSION['fourtySeat'] = $fourtySeat;
  
            
          
       }
            
        
        
    }
   

    
  
}


//header("location:../");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
       <style>


input[type=text] {
    width: 300%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
    

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
    
        .txnId{
            
            
            width: 50%;
            padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
            
        }
        .txnIdL{
            
            font-size: 120%;
            
        }
        


</style>

        
        
        
        
        
        
        
        
      


</head>

<body>

    <div class="container">


        <h3>Ticket Booking</h3> <br>

        <form action="" method="post">

            <label for="txnId" class="txnIdL">Your txnId</label> <br>
            <input type="text" name="txnId" id="txnId" class="txnId" required> <br>
            <label for="phone" class="txnIdL">Phone no. which use for payment</label> <br>
            <input type="text" id="phone" name="phone" class="txnId" required> 
            <input type="submit" name="txn-submit" value="Submit">

        </form>

        
    </div>

</body>

</html>


<?php include 'footer.php'; ?>