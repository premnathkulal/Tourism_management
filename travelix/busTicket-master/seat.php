<?php include 'header.php'; ?>





<?php

$one = [];

if($_SESSION['isLogged'] == false && $_SESSION['cLog'] == false){
    
    
        header('Location: search.php');
    
}


if(isset($_POST['submit'])){  
    $_SESSION['busDate'] = $_POST['bDate'];
    $_SESSION['busTime'] = $_POST['bTime'];
}

// fare from datebase using destination

    $busDesA=  $_SESSION['busDesA']; 
    $busDesB = $_SESSION['busDesB'];
    $busType = $_SESSION['busType'];
    
    $sql = "SELECT fare FROM place WHERE cityF='$busDesA' AND cityT = '$busDesB'";
    $result = mysqli_query($db, $sql);
    
    while($row = mysqli_fetch_assoc($result)){
        
        $fare = $row['fare'];
        
        
       require_once('function.php');
        $disAmount = readDiscount();
        $fare = $fare - $disAmount;
        
        $_SESSION['fare'] = $fare;
    }

    
    
   


$numOneSeat = 'A1'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwoSeat = 'A2'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThreeSeat = 'A3'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numFourSeat = 'A4'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numFiveSeat = 'B1'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numSixSeat = 'B2'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numSevenSeat = 'B3'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numEightSeat = 'B4'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numNineSeat = 'C1'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTenSeat = 'C2'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numElevenSeat = 'C3'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
 $numTwelveSeat = 'C4'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirteenSeat = 'D1'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numFourteenSeat = 'D2'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numFifteenSeat = 'D3'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numSixteenSeat = 'D4'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];

$numSeventeenSeat = 'E1'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numEightteenSeat = 'E2'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numNineteenSeat = 'E3'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwentySeat = 'E4'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwentyoneSeat = 'F1'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwentytwoSeat = 'F2'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwentythreeSeat = 'F3'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwentyfourSeat = 'F4'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwentyfiveSeat = 'G1'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwentysixSeat = 'G2'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwentysevenSeat = 'G3'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwentyeightSeat = 'G4'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numTwentynineSeat = 'H1'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirtySeat = 'H2'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirtyoneSeat = 'H3'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirtytwoSeat = 'H4'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirtythreeSeat = 'I1'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirtyfourSeat = 'I2'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirtyfiveSeat = 'I3'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirtysixSeat = 'I4'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirtysevenSeat = 'J1'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirtyeightSeat = 'J2'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numThirtynineSeat = 'J3'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];
$numFourtySeat = 'J4'.".".$_SESSION['busDate'].".".$_SESSION['busTime'].".".$_SESSION['busDesA'].".".$_SESSION['busDesB'].".".$_SESSION['idVal'];






// set global value for seatNext.php page (use for database value change)

    $_SESSION['numOne'] = $numOneSeat;
    $_SESSION['numTwo'] = $numTwoSeat;
    $_SESSION['numThree'] = $numThreeSeat;
    $_SESSION['numFour'] = $numFourSeat;
    $_SESSION['numFive'] = $numFiveSeat;
    $_SESSION['numSix'] = $numSixSeat;
    $_SESSION['numSeven'] = $numSevenSeat;
    $_SESSION['numEight'] = $numEightSeat;
    $_SESSION['numNine'] = $numNineSeat;
    $_SESSION['numTen'] = $numTenSeat;
    $_SESSION['numEleven'] = $numElevenSeat;
    $_SESSION['numTwelve'] = $numTwelveSeat;
    $_SESSION['numThirteen'] = $numThirteenSeat;
    $_SESSION['numFourteen'] = $numFourteenSeat;
    $_SESSION['numFifteen'] = $numFifteenSeat;
    $_SESSION['numSixteen'] = $numSixteenSeat;


$_SESSION['numSeventeen'] = $numSeventeenSeat;
$_SESSION['numEightteen'] = $numEightteenSeat;
$_SESSION['numNineteen'] = $numNineteenSeat;
$_SESSION['numTwenty'] = $numTwentySeat;
$_SESSION['numTwentyone'] = $numTwentyoneSeat;
$_SESSION['numTwentytwo'] = $numTwentytwoSeat;
$_SESSION['numTwentythree'] = $numTwentythreeSeat;
$_SESSION['numTwentyfour'] = $numTwentyfourSeat;
$_SESSION['numTwentyfive'] = $numTwentyfiveSeat;
$_SESSION['numTwentysix'] = $numTwentysixSeat;
$_SESSION['numTwentyseven'] = $numTwentysevenSeat;
$_SESSION['numTwentyeight'] = $numTwentyeightSeat;
$_SESSION['numTwentynine'] = $numTwentynineSeat;
$_SESSION['numThirty'] = $numThirtySeat;
$_SESSION['numThirtyone'] = $numThirtyoneSeat;
$_SESSION['numThirtytwo'] = $numThirtytwoSeat;
$_SESSION['numThirtythree'] = $numThirtythreeSeat;
$_SESSION['numThirtyfour'] = $numThirtyfourSeat;
$_SESSION['numThirtyfive'] = $numThirtyfiveSeat;
$_SESSION['numThirtysix'] = $numThirtysixSeat;
$_SESSION['numThirtyseven'] = $numThirtysevenSeat;
$_SESSION['numThirtyeight'] = $numThirtyeightSeat;
$_SESSION['numThirtynine'] = $numThirtynineSeat;
$_SESSION['numFourty'] = $numFourtySeat;



// change seat img



$imgSrc1=$imgSrc2=$imgSrc3=$imgSrc4=$imgSrc5=$imgSrc6=$imgSrc7=$imgSrc8=$imgSrc9=$imgSrc10=
$imgSrc11=$imgSrc12=$imgSrc13=$imgSrc14=$imgSrc15=$imgSrc16=$imgSrc17=$imgSrc18=$imgSrc19=$imgSrc20=
$imgSrc21=$imgSrc22=$imgSrc23=$imgSrc24=$imgSrc25=$imgSrc26=$imgSrc27=$imgSrc28=$imgSrc29=$imgSrc30=
$imgSrc31=$imgSrc32=$imgSrc33=$imgSrc34=$imgSrc35=$imgSrc36=$imgSrc37=$imgSrc38=$imgSrc39=$imgSrc40=
  "images/empty.PNG";


$imgF1="imgChange1()";
$imgF2="imgChange2()";
$imgF3="imgChange3()";
$imgF4="imgChange4()";
$imgF5="imgChange5()";
$imgF6="imgChange6()";
$imgF7="imgChange7()";
$imgF8="imgChange8()";
$imgF9="imgChange9()";
$imgF10="imgChange10()"; 
$imgF11="imgChange11()";
$imgF12="imgChange12()";
$imgF13="imgChange13()";
$imgF14="imgChange14()";
$imgF15="imgChange15()";
$imgF16="imgChange16()";
$imgF17="imgChange17()";
$imgF18="imgChange18()";
$imgF19="imgChange19()";
$imgF20="imgChange20()"; 
$imgF21="imgChange21()";
$imgF22="imgChange22()";
$imgF23="imgChange23()";
$imgF24="imgChange24()";
$imgF25="imgChange25()";
$imgF26="imgChange26()";
$imgF27="imgChange27()";
$imgF28="imgChange28()";
$imgF29="imgChange29()";
$imgF30="imgChange30()"; 
$imgF31="imgChange31()";
$imgF32="imgChange32()";
$imgF33="imgChange33()";
$imgF34="imgChange34()";
$imgF35="imgChange35()";
$imgF36="imgChange36()";
$imgF37="imgChange37()";
$imgF38="imgChange38()";
$imgF39="imgChange39()";
$imgF40= "imgChange40()";
 
      


// Code for A1 seat

    $tableName = "seat";

      $result = mysqli_query($db, "select * from $tableName where state='$numOneSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $a1 = $row['val'];
          
          //echo $a1;
          
          
          if($a1==0){
              $_SESSION['oneSeat'] = "unchecked";
          }
          else{
             $_SESSION['oneSeat'] = "checked"; 
          }
      }
      }

else{
  // header('Location: search.php');
    
}
          
 


if($_SESSION['oneSeat'] == "checked"){
    $num1 = "false";
    
    $imgSrc1 = "images/block.PNG";
    $imgF1 = "";

    
    
} 
else{
    $num1 = "true";
    
}


// Code for A2 seat
 $i_v = $_SESSION['idVal'];
 $result = mysqli_query($db, "select * from seat where state='$numTwoSeat' and busId = '$i_v'");
      
      //echo "select * from seat where state='$numTwoSeat' and busId = '$i_v'";
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $a2 = $row['val'];
          
       
          
          if($a2==0){
              $_SESSION['twoSeat'] = "unchecked";
          }
          else{
             $_SESSION['twoSeat'] = "checked"; 
          }
      }
      }
          
 


if($_SESSION['twoSeat'] == "checked"){
    $num2 = "false";
     $imgSrc2 = "images/block.PNG";
    $imgF2 = "";
} 
else{
    $num2 = "true";
}



// Code for A3 seat

 $result = mysqli_query($db, "select * from seat where state='$numThreeSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $a3 = $row['val'];
          
        
          
          
          if($a3==0){
              $_SESSION['threeSeat'] = "unchecked";
          }
          else{
             $_SESSION['threeSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['threeSeat'] == "checked"){
    $num3 = "false";
     $imgSrc3 = "images/block.PNG";
    $imgF3 = "";
} 
else{
    $num3 = "true";
}


// Code for A4 seat

 $result = mysqli_query($db, "select * from seat where state='$numFourSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $a4 = $row['val'];
          
        
          
          
          if($a4==0){
              $_SESSION['fourSeat'] = "unchecked";
          }
          else{
             $_SESSION['fourSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['fourSeat'] == "checked"){
    $num4 = "false";
     $imgSrc4 = "images/block.PNG";
    $imgF4 = "";
} 
else{
    $num4 = "true";
}



// Code for B1 seat

 $result = mysqli_query($db, "select * from seat where state='$numFiveSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $b1 = $row['val'];
          
    
          
          
          if($b1==0){
              $_SESSION['fiveSeat'] = "unchecked";
          }
          else{
             $_SESSION['fiveSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['fiveSeat'] == "checked"){
    $num5 = "false";
     $imgSrc5 = "images/block.PNG";
    $imgF5 = "";
} 
else{
    $num5 = "true";
}


// Code for B2 seat

 $result = mysqli_query($db, "select * from seat where state='$numSixSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $b2 = $row['val'];
          
        
          
          if($b2==0){
              $_SESSION['sixSeat'] = "unchecked";
          }
          else{
             $_SESSION['sixSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['sixSeat'] == "checked"){
    $num6 = "false";
     $imgSrc6 = "images/block.PNG";
    $imgF6 = "";
} 
else{
    $num6 = "true";
}


// Code for B3 seat

 $result = mysqli_query($db, "select * from seat where state='$numSevenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $b3 = $row['val'];
          
        
          
          if($b3==0){
              $_SESSION['sevenSeat'] = "unchecked";
          }
          else{
             $_SESSION['sevenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['sevenSeat'] == "checked"){
    $num7 = "false";
     $imgSrc7 = "images/block.PNG";
    $imgF7 = "";
} 
else{
    $num7 = "true";
}



// Code for B4 seat

 $result = mysqli_query($db, "select * from seat where state='$numEightSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $b4 = $row['val'];
          
        
          
          if($b4==0){
              $_SESSION['eightSeat'] = "unchecked";
          }
          else{
             $_SESSION['eightSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['eightSeat'] == "checked"){
    $num8 = "false";
     $imgSrc8 = "images/block.PNG";
    $imgF8 = "";
} 
else{
    $num8 = "true";
}





// Code for C1 seat

 $result = mysqli_query($db, "select * from seat where state='$numNineSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $c1 = $row['val'];
          
        
          
          
          if($c1==0){
              $_SESSION['nineSeat'] = "unchecked";
          }
          else{
             $_SESSION['nineSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['nineSeat'] == "checked"){
    $num9 = "false";
     $imgSrc9 = "images/block.PNG";
    $imgF9 = "";
} 
else{
    $num9 = "true";
}


  
// Code for C2 seat

 $result = mysqli_query($db, "select * from seat where state='$numTenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $c2 = $row['val'];
          
        
          
          
          if($c2==0){
              
              $_SESSION['tenSeat'] = "unchecked";
              
          }
          else{
             $_SESSION['tenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['tenSeat'] == "checked"){
    $num10 = "false";
     $imgSrc10 = "images/block.PNG";
    $imgF10 = "";
} 
else{
    $num10 = "true";
} 
          
          
      // Code for C3 seat

 $result = mysqli_query($db, "select * from seat where state='$numElevenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $c3 = $row['val'];
          
        
          
          
          if($c3==0){
              $_SESSION['elevenSeat'] = "unchecked";
          }
          else{
             $_SESSION['elevenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['elevenSeat'] == "checked"){
    $num11 = "false";
     $imgSrc11 = "images/block.PNG";
    $imgF11 = "";
} 
else{
    $num11 = "true";
}        
   
                 
   
          
          
          // Code for C4 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwelveSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $c4 = $row['val'];
          
        
          
          if($c4==0){
              $_SESSION['twelveSeat'] = "unchecked";
          }
          else{
             $_SESSION['twelveSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twelveSeat'] == "checked"){
    $num12 = "false";
     $imgSrc12 = "images/block.PNG";
    $imgF12= "";
} 
else{
    $num12 = "true";
}        
   
// Code for D1 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirteenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $d1 = $row['val'];
          
        
          
          if($d1==0){
              $_SESSION['thirteenSeat'] = "unchecked";
          }
          else{
             $_SESSION['thirteenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirteenSeat'] == "checked"){
    $num13 = "false";
     $imgSrc13 = "images/block.PNG";
    $imgF13 = "";
} 
else{
    $num13 = "true";
}       
    


 



// Code for D2 seat

 $result = mysqli_query($db, "select * from seat where state='$numFourteenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $d2 = $row['val'];
          
        
          
          if($d2==0){
              $_SESSION['fourteenSeat'] = "unchecked";
          }
          else{
             $_SESSION['fourteenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['fourteenSeat'] == "checked"){
    $num14 = "false";
    $imgSrc14 = "images/block.PNG";
    $imgF14 = "";
} 
else{
    $num14 = "true";
}


 


// Code for D3 seat

 $result = mysqli_query($db, "select * from seat where state='$numFifteenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $d3 = $row['val'];
          
        
          
          if($d3==0){
              $_SESSION['fifteenSeat'] = "unchecked";
          }
          else{
             $_SESSION['fifteenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['fifteenSeat'] == "checked"){
    $num15 = "false";
    $imgSrc15 = "images/block.PNG";
    $imgF15 = "";
} 

else{
    $num15 = "true";
}




 


// Code for D4 seat

 $result = mysqli_query($db, "select * from seat where state='$numSixteenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $d4 = $row['val'];
          
        
          
          if($d4==0){
              $_SESSION['sixteenSeat'] = "unchecked";
          }
          else{
             $_SESSION['sixteenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['sixteenSeat'] == "checked"){
    $num16 = "false";
    $imgSrc16 = "images/block.PNG";
    $imgF16 = "";
} 
else{
    $num16 = "true";
}


 


// Code for E1 seat

 $result = mysqli_query($db, "select * from seat where state='$numSeventeenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $e1 = $row['val'];
          
        
          
          if($e1==0){
              $_SESSION['seventeenSeat'] = "unchecked";
          }
          else{
             $_SESSION['seventeenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['seventeenSeat'] == "checked"){
    $num17 = "false";
    $imgSrc17= "images/block.PNG";
    $imgF17 = "";
} 
else{
    $num17 = "true";
}


 


// Code for E2 seat

 $result = mysqli_query($db, "select * from seat where state='$numEightteenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $e2 = $row['val'];
          
        
          
          if($e2==0){
              $_SESSION['eightteenSeat'] = "unchecked";
          }
          else{
             $_SESSION['eightteenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['eightteenSeat'] == "checked"){
    $num18 = "false";
    $imgSrc18 = "images/block.PNG";
    $imgF18 = "";
} 
else{
    $num18 = "true";
}


 


// Code for E3 seat

 $result = mysqli_query($db, "select * from seat where state='$numNineteenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $e3 = $row['val'];
          
        
          
          if($e3==0){
              $_SESSION['nineteenSeat'] = "unchecked";
          }
          else{
             $_SESSION['nineteenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['nineteenSeat'] == "checked"){
    $num19 = "false";
    $imgSrc19 = "images/block.PNG";
    $imgF19 = "";
} 
else{
    $num19 = "true";
}


 


// Code for E4 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwentySeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $e4 = $row['val'];
          
        
          
          if($e4==0){
              $_SESSION['twentySeat'] = "unchecked";
          }
          else{
             $_SESSION['twentySeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twentySeat'] == "checked"){
    $num20 = "false";
    $imgSrc20 = "images/block.PNG";
    $imgF20 = "";
} 
else{
    $num20 = "true";
}


 


// Code for F1 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwentyoneSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $f1 = $row['val'];
          
        
          
          if($f1==0){
              $_SESSION['twentyoneSeat'] = "unchecked";
          }
          else{
             $_SESSION['twentyoneSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twentyoneSeat'] == "checked"){
    $num21 = "false";
    $imgSrc21 = "images/block.PNG";
    $imgF21 = "";
} 
else{
    $num21 = "true";
}


 


// Code for F2 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwentytwoSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $f2 = $row['val'];
          
        
          
          if($f2==0){
              $_SESSION['twentytwoSeat'] = "unchecked";
          }
          else{
             $_SESSION['twentytwoSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twentytwoSeat'] == "checked"){
    $num22 = "false";
    $imgSrc22 = "images/block.PNG";
    $imgF22 = "";
} 
else{
    $num22 = "true";
}


 


// Code for F3 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwentythreeSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $f3 = $row['val'];
          
        
          
          if($f3==0){
              $_SESSION['twentythreeSeat'] = "unchecked";
          }
          else{
             $_SESSION['twentythreeSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twentythreeSeat'] == "checked"){
    $num23 = "false";
    $imgSrc23 = "images/block.PNG";
    $imgF23 = "";
} 
else{
    $num23 = "true";
}


 


// Code for F4 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwentyfourSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $f4 = $row['val'];
          
        
          
          if($f4==0){
              $_SESSION['twentyfourSeat'] = "unchecked";
          }
          else{
             $_SESSION['twentyfourSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twentyfourSeat'] == "checked"){
    $num24 = "false";
    $imgSrc24 = "images/block.PNG";
    $imgF24 = "";
} 
else{
    $num24 = "true";
}


 


// Code for G1 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwentyfiveSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $g1 = $row['val'];
          
        
          
          if($g1==0){
              $_SESSION['twentyfiveSeat'] = "unchecked";
          }
          else{
             $_SESSION['twentyfiveSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twentyfiveSeat'] == "checked"){
    $num25 = "false";
    $imgSrc25 = "images/block.PNG";
    $imgF25 = "";
} 
else{
    $num25 = "true";
}


 


// Code for G2 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwentysixSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $g2 = $row['val'];
          
        
          
          if($g2==0){
              $_SESSION['twentysixSeat'] = "unchecked";
          }
          else{
             $_SESSION['twentysixSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twentysixSeat'] == "checked"){
    $num26 = "false";
    $imgSrc26 = "images/block.PNG";
    $imgF26 = "";
} 
else{
    $num26 = "true";
}


 


// Code for G3 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwentysevenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $g3 = $row['val'];
          
        
          
          if($g3==0){
              $_SESSION['twentysevenSeat'] = "unchecked";
          }
          else{
             $_SESSION['twentysevenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twentysevenSeat'] == "checked"){
    $num27 = "false";
    $imgSrc27 = "images/block.PNG";
    $imgF27 = "";
} 
else{
    $num27 = "true";
}




 


// Code for G4 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwentyeightSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $g4 = $row['val'];
          
        
          
          if($g4==0){
              $_SESSION['twentyeightSeat'] = "unchecked";
          }
          else{
             $_SESSION['twentyeightSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twentyeightSeat'] == "checked"){
    $num28 = "false";
    $imgSrc28 = "images/block.PNG";
    $imgF28 = "";
} 
else{
    $num28 = "true";
}


 


// Code for H1 seat

 $result = mysqli_query($db, "select * from seat where state='$numTwentynineSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $h1 = $row['val'];
          
        
          
          if($h1==0){
              $_SESSION['twentynineSeat'] = "unchecked";
          }
          else{
             $_SESSION['twentynineSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['twentynineSeat'] == "checked"){
    $num29 = "false";
    $imgSrc29 = "images/block.PNG";
    $imgF29 = "";
} 
else{
    $num29 = "true";
}

 

// Code for H2 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirtySeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $h2 = $row['val'];
          
        
          
          if($h2==0){
              $_SESSION['thirtySeat'] = "unchecked";
          }
          else{
             $_SESSION['thirtySeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirtySeat'] == "checked"){
    $num30 = "false";
    $imgSrc30 = "images/block.PNG";
    $imgF30 = "";
} 
else{
    $num30 = "true";
}

 

// Code for H3 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirtyoneSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $h3 = $row['val'];
          
        
          
          if($h3==0){
              $_SESSION['thirtyoneSeat'] = "unchecked";
          }
          else{
             $_SESSION['thirtyoneSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirtyoneSeat'] == "checked"){
    $num31 = "false";
    $imgSrc31= "images/block.PNG";
    $imgF31 = "";
} 
else{
    $num31 = "true";
}


 

// Code for H4 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirtytwoSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $h4 = $row['val'];
          
        
          
          if($h4==0){
              $_SESSION['thirtytwoSeat'] = "unchecked";
          }
          else{
             $_SESSION['thirtytwoSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirtytwoSeat'] == "checked"){
    $num32 = "false";
    $imgSrc32 = "images/block.PNG";
    $imgF32 = "";
} 
else{
    $num32 = "true";
}


 

// Code for I1 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirtythreeSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $i1 = $row['val'];
          
        
          
          if($i1==0){
              $_SESSION['thirtythreeSeat'] = "unchecked";
          }
          else{
             $_SESSION['thirtythreeSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirtythreeSeat'] == "checked"){
    $num33 = "false";
    $imgSrc33 = "images/block.PNG";
    $imgF33 = "";
} 
else{
    $num33 = "true";
}


 

// Code for I2 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirtyfourSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $i2 = $row['val'];
          
        
          
          if($i2==0){
              $_SESSION['thirtyfourSeat'] = "unchecked";
          }
          else{
             $_SESSION['thirtyfourSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirtyfourSeat'] == "checked"){
    $num34 = "false";
    $imgSrc34 = "images/block.PNG";
    $imgF34 = "";
} 
else{
    $num34 = "true";
}
 

// Code for I3 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirtyfiveSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $i3 = $row['val'];
          
        
          
          if($i3==0){
              $_SESSION['thirtyfiveSeat'] = "unchecked";
          }
          else{
             $_SESSION['thirtyfiveSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirtyfiveSeat'] == "checked"){
    $num35 = "false";
    $imgSrc35 = "images/block.PNG";
    $imgF35 = "";
} 
else{
    $num35 = "true";
}


 

// Code for I4 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirtysixSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $i4 = $row['val'];
          
        
          
          if($i4==0){
              $_SESSION['thirtysixSeat'] = "unchecked";
          }
          else{
             $_SESSION['thirtysixSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirtysixSeat'] == "checked"){
    $num36 = "false";
    $imgSrc36 = "images/block.PNG";
    $imgF36 = "";
} 
else{
    $num36 = "true";
}


 

// Code for J1 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirtysevenSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $j1 = $row['val'];
          
        
          
          if($j1==0){
              $_SESSION['thirtysevenSeat'] = "unchecked";
          }
          else{
             $_SESSION['thirtysevenSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirtysevenSeat'] == "checked"){
    $num37 = "false";
    $imgSrc37 = "images/block.PNG";
    $imgF37 = "";
} 
else{
    $num37 = "true";
}


 

// Code for J2 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirtyeightSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $j2 = $row['val'];
          
        
          
          if($j2==0){
              $_SESSION['thirtyeightSeat'] = "unchecked";
          }
          else{
             $_SESSION['thirtyeightSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirtyeightSeat'] == "checked"){
    $num38 = "false";
    $imgSrc38 = "images/block.PNG";
    $imgF38 = "";
} 
else{
    $num38 = "true";
}


 

// Code for J3 seat

 $result = mysqli_query($db, "select * from seat where state='$numThirtynineSeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $j3 = $row['val'];
          
        
          
          if($j3==0){
              $_SESSION['thirtynineSeat'] = "unchecked";
          }
          else{
             $_SESSION['thirtynineSeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['thirtynineSeat'] == "checked"){
    $num39 = "false";
    $imgSrc39 = "images/block.PNG";
    $imgF39 = "";
} 
else{
    $num39 = "true";
}


 

// Code for J4 seat

 $result = mysqli_query($db, "select * from seat where state='$numFourtySeat'");
      
      
      if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
          
          $j4 = $row['val'];
          
        
          
          if($j4==0){
              $_SESSION['fourtySeat'] = "unchecked";
          }
          else{
             $_SESSION['fourtySeat'] = "checked"; 
          }
      }
      }
          
 
if($_SESSION['fourtySeat'] == "checked"){
    $num40 = "false";
    $imgSrc40 = "images/block.PNG";
    $imgF40 = "";
} 
else{
    $num40 = "true";
}















?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP</title>

    <style>



        .allSeat{
            
            float: left;
            padding-top: 40px;
            padding-left: 20px;
            
            
            border: 1px solid #dec8c8;
            
        }
        .img{
            
            float: right;
            position: absolute;
            padding: 30px 0px 0px 165px;
           
        }
        .allSeat label{
                
                
                font-size: 200%;
                margin-right: 10px;
            width: 30px;
            height: 30px;
                
                
            }
        
        
        .fare{
            
            
            float: right;
            
            
            padding-right: 100px;
            
            width: 650px;
            
        }
        
        
        
        input[type=text] {
    width: 150%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
        input[type=submit]{
            
            padding: 10px 50px;
            display: inline-block;
            border: 1px solid #304657;
            border-radius: 4px;
            background-color: #22af0f;
            font-weight: bold;
            font-size: 150%;
            
        }
        
        .form1{
            
            position: absolute;
            margin-top: 350px;
            margin-left: 400px;
        }
        
        .le{
            
            font-size: 150%;
        }
        
        input[type=checkbox]{
           display: none;
          
        }
        
        
        
        </style>


</head>

<body onload="previousCost()">


    <div class="container">

        <div class="img">
            <img src="images/driver.png" alt="no image found">

        </div>


        <h3 style="color:#0045ff" ;>Select your seat</h3>

        <form action="seatNext.php" method="post">

            <div class="allSeat">

                <input type="checkbox" id="s1" name="one[]" value="a1" onclick="return <?php echo " $num1 "; ?> " <?php echo $_SESSION['oneSeat']; ?> > <label title="A1"  for="s1"> <img src="<?php echo $imgSrc1; ?>" id="s1s" onclick="<?php echo $imgF1; ?>" alt=""> </label>


                <input type="checkbox" id="s2" name="one[]" value="a2" onclick="return <?php echo " $num2 "; ?> " <?php echo $_SESSION['twoSeat']; ?> > <label title="A2"  for="s2" style="margin-right:30px;"><img src="<?php echo $imgSrc2; ?>" id="s2s" onclick="<?php echo $imgF2; ?>" alt=""></label>

                <input type="checkbox" id="s3" name="one[]" value="a3" onclick="return <?php echo " $num3 "; ?> " <?php echo $_SESSION['threeSeat']; ?> > <label title="A3"  for="s3"><img src="<?php echo $imgSrc3; ?>" id="s3s" onclick="<?php echo $imgF3; ?>" alt=""></label>

                <input type="checkbox" id="s4" name="one[]" value="a4" onclick="return <?php echo " $num4 "; ?> " <?php echo $_SESSION['fourSeat']; ?> > <label title="A4"  for="s4"><img src="<?php echo $imgSrc4; ?>" id="s4s" onclick="<?php echo $imgF4; ?>" alt=""></label> <br>


                <input type="checkbox" id="s5" name="one[]" value="b1" onclick="return <?php echo " $num5 "; ?> " <?php echo $_SESSION['fiveSeat']; ?> > <label title="B1"  for="s5"><img src="<?php echo $imgSrc5; ?>" id="s5s" onclick="<?php echo $imgF5; ?>" alt=""></label>

                <input type="checkbox" id="s6" name="one[]" value="b2" onclick="return <?php echo " $num6 "; ?> " <?php echo $_SESSION['sixSeat']; ?> > <label title="B2"  for="s6" style="margin-right:30px;"><img src="<?php echo $imgSrc6; ?>" id="s6s" onclick="<?php echo $imgF6; ?>" alt=""></label>

                <input type="checkbox" id="s7" name="one[]" value="b3" onclick="return <?php echo " $num7 "; ?> " <?php echo $_SESSION['sevenSeat']; ?> > <label title="B3"  for="s7"><img src="<?php echo $imgSrc7; ?>" id="s7s" onclick="<?php echo $imgF7; ?>" alt=""></label>
                <input type="checkbox" id="s8" name="one[]" value="b4" onclick="return <?php echo " $num8 "; ?> " <?php echo $_SESSION['eightSeat']; ?> > <label title="B4"  for="s8"><img src="<?php echo $imgSrc8; ?>" id="s8s" onclick="<?php echo $imgF8; ?>" alt=""></label> <br>
                <input type="checkbox" id="s9" name="one[]" value="c1" onclick="return <?php echo " $num9 "; ?> " <?php echo $_SESSION[ 'nineSeat' ]; ?> > <label title="C1"  for="s9"><img src="<?php echo $imgSrc9; ?>" id="s9s" onclick="<?php echo $imgF9; ?>" alt=""></label>
                <input type="checkbox" id="s10" name="one[]" value="c2" onclick="return <?php echo " $num10 "; ?> " <?php echo $_SESSION[ 'tenSeat' ]; ?> > <label title="C2"  for="s10" style="margin-right:30px;"><img src="<?php echo $imgSrc10; ?>" id="s10s" onclick="<?php echo $imgF10; ?>" alt=""></label>

                <input type="checkbox" id="s11" name="one[]" value="c3" onclick="return <?php echo " $num11 "; ?> " <?php echo $_SESSION[ 'elevenSeat' ]; ?> > <label title="C3"  for="s11"><img src="<?php echo $imgSrc11; ?>" id="s11s" onclick="<?php echo $imgF11; ?>" alt=""></label>
                <input type="checkbox" id="s12" name="one[]" value="c4" onclick="return <?php echo " $num12 "; ?> " <?php echo $_SESSION[ 'twelveSeat' ]; ?> > <label title="C4"  for="s12"><img src="<?php echo $imgSrc12; ?>" id="s12s" onclick="<?php echo $imgF12; ?>" alt=""></label> <br>
                <input type="checkbox" id="s13" name="one[]" value="d1" onclick="return <?php echo " $num13 "; ?> " <?php echo $_SESSION[ 'thirteenSeat' ]; ?> > <label title="D1"  for="s13"><img src="<?php echo $imgSrc13; ?>" id="s13s" onclick="<?php echo $imgF13; ?>" alt=""></label>
                <input type="checkbox" id="s14" name="one[]" value="d2" onclick="return <?php echo " $num14 "; ?> " <?php echo $_SESSION[ 'fourteenSeat' ]; ?> > <label title="D2"  for="s14" style="margin-right:30px;"><img src="<?php echo $imgSrc14; ?>" id="s14s" onclick="<?php echo $imgF14; ?>" alt=""></label>
                <input type="checkbox" id="s15" name="one[]" value="d3" onclick="return <?php echo " $num15 "; ?> " <?php echo $_SESSION[ 'fifteenSeat' ]; ?> > <label title="D3"  for="s15"><img src="<?php echo $imgSrc15; ?>" id="s15s" onclick="<?php echo $imgF15; ?>" alt=""></label>
                <input type="checkbox" id="s16" name="one[]" value="d4" onclick="return <?php echo " $num16 "; ?> " <?php echo $_SESSION[ 'sixteenSeat' ]; ?> > <label title="D4"  for="s16"><img src="<?php echo $imgSrc16; ?>" id="s16s" onclick="<?php echo $imgF16; ?>" alt=""></label> <br>
                <input type="checkbox" id="s17" name="one[]" value="e1" onclick="return <?php echo " $num17 "; ?> " <?php echo $_SESSION[ 'seventeenSeat' ]; ?> > <label title="E1"  for="s17"><img src="<?php echo $imgSrc17; ?>" id="s17s" onclick="<?php echo $imgF17; ?>" alt=""></label>
                <input type="checkbox" id="s18" name="one[]" value="e2" onclick="return <?php echo " $num18 "; ?> " <?php echo $_SESSION[ 'eightteenSeat' ]; ?> > <label title="E2"  for="s18" style="margin-right:30px;"><img src="<?php echo $imgSrc18; ?>" id="s18s" onclick="<?php echo $imgF18; ?>" alt=""></label>
                <input type="checkbox" id="s19" name="one[]" value="e3" onclick="return <?php echo " $num19 "; ?> " <?php echo $_SESSION[ 'nineteenSeat' ]; ?> > <label title="E3"  for="s19"><img src="<?php echo $imgSrc19; ?>" id="s19s" onclick="<?php echo $imgF19; ?>" alt=""></label>
                <input type="checkbox" id="s20" name="one[]" value="e4" onclick="return <?php echo " $num20 "; ?> " <?php echo $_SESSION[ 'twentySeat' ]; ?> > <label title="E4"  for="s20"><img src="<?php echo $imgSrc20; ?>" id="s20s" onclick="<?php echo $imgF20; ?>" alt=""></label> <br>
                <input type="checkbox" id="s21" name="one[]" value="f1" onclick="return <?php echo " $num21 "; ?> " <?php echo $_SESSION[ 'twentyoneSeat' ]; ?> > <label title="F1"  for="s21"><img src="<?php echo $imgSrc21; ?>" id="s21s" onclick="<?php echo $imgF21; ?>" alt=""></label>
                <input type="checkbox" id="s22" name="one[]" value="f2" onclick="return <?php echo " $num22 "; ?> " <?php echo $_SESSION[ 'twentytwoSeat' ]; ?> > <label title=F2""  for="s22" style="margin-right:30px;"><img src="<?php echo $imgSrc22; ?>" id="s22s" onclick="<?php echo $imgF22; ?>" alt=""></label>
                <input type="checkbox" id="s23" name="one[]" value="f3" onclick="return <?php echo " $num23 "; ?> " <?php echo $_SESSION[ 'twentythreeSeat' ]; ?> > <label title="F3"  for="s23"><img src="<?php echo $imgSrc23; ?>" id="s23s" onclick="<?php echo $imgF23; ?>" alt=""></label>
                <input type="checkbox" id="s24" name="one[]" value="f4" onclick="return <?php echo " $num24 "; ?> " <?php echo $_SESSION[ 'twentyfourSeat' ]; ?> > <label title="F4"  for="s24"><img src="<?php echo $imgSrc24; ?>" id="s24s" onclick="<?php echo $imgF24; ?>" alt=""></label> <br>
                <input type="checkbox" id="s25" name="one[]" value="g1" onclick="return <?php echo " $num25 "; ?> " <?php echo $_SESSION[ 'twentyfiveSeat' ]; ?> > <label title="G1"  for="s25"><img src="<?php echo $imgSrc25; ?>" id="s25s" onclick="<?php echo $imgF25; ?>" alt=""></label>
                <input type="checkbox" id="s26" name="one[]" value="g2" onclick="return <?php echo " $num26 "; ?> " <?php echo $_SESSION[ 'twentysixSeat' ]; ?> > <label title="G2"  for="s26" style="margin-right:30px;"><img src="<?php echo $imgSrc26; ?>" id="s26s" onclick="<?php echo $imgF26; ?>" alt=""></label>
                <input type="checkbox" id="s27" name="one[]" value="g3" onclick="return <?php echo " $num27 "; ?> " <?php echo $_SESSION[ 'twentysevenSeat' ]; ?> > <label title="G3"  for="s27"><img src="<?php echo $imgSrc27; ?>" id="s27s" onclick="<?php echo $imgF27; ?>" alt=""></label>
                <input type="checkbox" id="s28" name="one[]" value="g4" onclick="return <?php echo " $num28 "; ?> " <?php echo $_SESSION[ 'twentyeightSeat' ]; ?> > <label title="G4"  for="s28"><img src="<?php echo $imgSrc28; ?>" id="s28s" onclick="<?php echo $imgF28; ?>" alt=""></label> <br>
                <input type="checkbox" id="s29" name="one[]" value="h1" onclick="return <?php echo " $num29 "; ?> " <?php echo $_SESSION[ 'twentynineSeat' ]; ?> > <label title="H1"  for="s29"><img src="<?php echo $imgSrc29; ?>" id="s29s" onclick="<?php echo $imgF29; ?>" alt=""></label>
                <input type="checkbox" id="s30" name="one[]" value="h2" onclick="return <?php echo " $num30 "; ?> " <?php echo $_SESSION[ 'thirtySeat' ]; ?> > <label title="H2"  for="s30" style="margin-right:30px;"><img src="<?php echo $imgSrc30; ?>" id="s30s" onclick="<?php echo $imgF30; ?>" alt=""></label>
                <input type="checkbox" id="s31" name="one[]" value="h3" onclick="return <?php echo " $num31 "; ?> " <?php echo $_SESSION[ 'thirtyoneSeat' ]; ?> > <label title="H3"  for="s31"><img src="<?php echo $imgSrc31; ?>" id="s31s" onclick="<?php echo $imgF31; ?>" alt=""></label>
                <input type="checkbox" id="s32" name="one[]" value="h4" onclick="return <?php echo " $num32 "; ?> " <?php echo $_SESSION[ 'thirtytwoSeat' ]; ?> > <label title="H4"  for="s32"><img src="<?php echo $imgSrc32; ?>" id="s32s" onclick="<?php echo $imgF32; ?>" alt=""></label> <br>
                <input type="checkbox" id="s33" name="one[]" value="i1" onclick="return <?php echo " $num33 "; ?> " <?php echo $_SESSION[ 'thirtythreeSeat' ]; ?> > <label title="I1"  for="s33"><img src="<?php echo $imgSrc33; ?>" id="s33s" onclick="<?php echo $imgF33; ?>" alt=""></label>
                <input type="checkbox" id="s34" name="one[]" value="i2" onclick="return <?php echo " $num34 "; ?> " <?php echo $_SESSION[ 'thirtyfourSeat' ]; ?> > <label title="I2"  for="s34" style="margin-right:30px;"><img src="<?php echo $imgSrc34; ?>" id="s34s" onclick="<?php echo $imgF34; ?>" alt=""></label>
                <input type="checkbox" id="s35" name="one[]" value="i3" onclick="return <?php echo " $num35 "; ?> " <?php echo $_SESSION[ 'thirtyfiveSeat' ]; ?> > <label title="I3"  for="s35"><img src="<?php echo $imgSrc35; ?>" id="s35s" onclick="<?php echo $imgF35; ?>" alt=""></label>
                <input type="checkbox" id="s36" name="one[]" value="i4" onclick="return <?php echo " $num36 "; ?> " <?php echo $_SESSION[ 'thirtysixSeat' ]; ?> > <label title="I4"  for="s36"><img src="<?php echo $imgSrc36; ?>" id="s36s" onclick="<?php echo $imgF36; ?>" alt=""></label> <br>
                <input type="checkbox" id="s37" name="one[]" value="j1" onclick="return <?php echo " $num37 "; ?> " <?php echo $_SESSION[ 'thirtysevenSeat' ]; ?> > <label title="J1"  for="s37"><img src="<?php echo $imgSrc37; ?>" id="s37s" onclick="<?php echo $imgF37; ?>" alt=""></label>
                <input type="checkbox" id="s38" name="one[]" value="j2" onclick="return <?php echo " $num38 "; ?> " <?php echo $_SESSION[ 'thirtyeightSeat' ]; ?> > <label title="J2"  for="s38" style="margin-right:30px;"><img src="<?php echo $imgSrc38; ?>" id="s38s" onclick="<?php echo $imgF38; ?>" alt=""></label>
                <input type="checkbox" id="s39" name="one[]" value="j3" onclick="return <?php echo " $num39 "; ?> " <?php echo $_SESSION[ 'thirtynineSeat' ]; ?> > <label title="J3"  for="s39"><img src="<?php echo $imgSrc39; ?>" id="s39s" onclick="<?php echo $imgF39; ?>" alt=""></label>
                <input type="checkbox" id="s40" name="one[]" value="j4" onclick="return <?php echo " $num40 "; ?> " <?php echo $_SESSION[ 'fourtySeat' ]; ?> > <label title="J4"  for="s40"><img src="<?php echo $imgSrc40; ?>" id="s40s" onclick="<?php echo $imgF40; ?>" alt=""></label>

                <br><br>






            </div>
            <br>

            <div class="form1">

                <input type="submit" value='Submit' name="submit">
            </div>


            <div class="fare">
                <img src="images/blockSeat.PNG" alt=""> <br><br>

                <h3>Fare per seat
                    <?php echo $fare; ?>
                </h3> <br>
                <h3 id="para" name="totarlFare"></h3> <br>
                <h3>Your are select</h3>
                <h3 id="seatList"></h3>
                <br>








            </div>


        </form>





        <!-- start new div for calculate fare  -->

        <button onclick="UpdateCost()" id="clicker" style="display:none" ;>button</button>




    </div>
    <input type="hidden" id="refreshed" value="no">

    <!-- start javascript for show fare in same page -->


    <script>
        var imgV1 = imgV2 = imgV3 = imgV4 = imgV5 = imgV6 = imgV7 = imgV8 = imgV9 = imgV10 = imgV11 = imgV12 = imgV13 = imgV14 = imgV15 = imgV16 = imgV17 = imgV18 = imgV19 = imgV20 = imgV21 = imgV22 = imgV23 = imgV24 = imgV25 = imgV26 = imgV27 = imgV28 = imgV29 = imgV30 = imgV31 = imgV32 = imgV33 = imgV34 = imgV35 = imgV36 = imgV37 = imgV38 = imgV39 = imgV40 = 0;

        var seatList = [];

        // show function for seatList show

        function show() {

            document.getElementById('seatList').innerHTML = seatList;


        }

        // remove specific element from array 

        function removeA(element) {

            var index = seatList.indexOf(element);
            if (index > -1) {

                seatList.splice(index, 1);
            }
        }
        
        
        
        
            
        

        function imgChange1() {

            if (imgV1 == 0) {
                document.getElementById('s1s').src = "images/click.PNG";
                imgV1 = 1;
                seatList.push("A1");

            } else {
                document.getElementById('s1s').src = "images/empty.PNG";

                imgV1 = 0;
                removeA('A1');
                
            }

            show();
        }

        function imgChange2() {

            if (imgV2 == 0) {
                document.getElementById('s2s').src = "images/click.PNG";
                imgV2 = 1;
                seatList.push("A2");

            } else {
                document.getElementById('s2s').src = "images/empty.PNG";

                imgV2 = 0;
                removeA('A2');

            }
            show();
        }

        function imgChange3() {


            if (imgV3 == 0) {

                document.getElementById('s3s').src = "images/click.PNG";



                imgV3 = 1;

                seatList.push('A3');




            } else {
                document.getElementById('s3s').src = "images/empty.PNG";

                imgV3 = 0;

                removeA('A3');


            }

            show();

        }



        function imgChange4() {


            if (imgV4 == 0) {
                document.getElementById('s4s').src = "images/click.PNG";
                imgV4 = 1;

                seatList.push("A4");





            } else {
                document.getElementById('s4s').src = "images/empty.PNG";

                imgV4 = 0;
                removeA('A4');


            }
            show();

        }


        function imgChange5() {


            if (imgV5 == 0) {
                document.getElementById('s5s').src = "images/click.PNG";
                imgV5 = 1;
                seatList.push("B1");


            } else {
                document.getElementById('s5s').src = "images/empty.PNG";

                imgV5 = 0;
                removeA('B1');

            }
            show();

        }



        function imgChange6() {


            if (imgV6 == 0) {
                document.getElementById('s6s').src = "images/click.PNG";
                imgV6 = 1;
                seatList.push("B2");


            } else {
                document.getElementById('s6s').src = "images/empty.PNG";

                imgV6 = 0;
                removeA('B2');

            }

            show();

        }


        function imgChange7() {


            if (imgV7 == 0) {
                document.getElementById('s7s').src = "images/click.PNG";
                imgV7 = 1;
                seatList.push("B3");


            } else {
                document.getElementById('s7s').src = "images/empty.PNG";

                imgV7 = 0;
                removeA('B3');
            }
            show();
        }



        function imgChange8() {


            if (imgV8 == 0) {
                document.getElementById('s8s').src = "images/click.PNG";
                imgV8 = 1;
                seatList.push("B4");


            } else {
                document.getElementById('s8s').src = "images/empty.PNG";

                imgV8 = 0;
                removeA('B4');
            }
            show();
        }

        function imgChange9() {


            if (imgV9 == 0) {
                document.getElementById('s9s').src = "images/click.PNG";
                imgV9 = 1;
                seatList.push("C1");


            } else {
                document.getElementById('s9s').src = "images/empty.PNG";

                imgV9 = 0;
                removeA('C1');
            }
            show();
        }

        function imgChange10() {


            if (imgV10 == 0) {
                document.getElementById('s10s').src = "images/click.PNG";
                imgV10 = 1;
                seatList.push("C2");

            } else {
                document.getElementById('s10s').src = "images/empty.PNG";

                imgV10 = 0;
                removeA('C2');


            }
            show();
        }


        function imgChange11() {


            if (imgV11 == 0) {
                document.getElementById('s11s').src = "images/click.PNG";
                imgV11 = 1;
                seatList.push("C3");

            } else {
                document.getElementById('s11s').src = "images/empty.PNG";

                imgV11 = 0;
                removeA('C3');
            }
            show();
        }

        function imgChange12() {


            if (imgV12 == 0) {
                document.getElementById('s12s').src = "images/click.PNG";
                imgV12 = 1;
                seatList.push("C4");

            } else {
                document.getElementById('s12s').src = "images/empty.PNG";

                imgV12 = 0;
                removeA('C4');
            }
            show();
        }


        function imgChange13() {


            if (imgV13 == 0) {
                document.getElementById('s13s').src = "images/click.PNG";
                imgV13 = 1;
                seatList.push("D1");

            } else {
                document.getElementById('s13s').src = "images/empty.PNG";

                imgV13 = 0;
                removeA('D1');
            }
            show();
        }


        function imgChange14() {


            if (imgV14 == 0) {
                document.getElementById('s14s').src = "images/click.PNG";
                imgV14 = 1;
                seatList.push("D2");

            } else {

                document.getElementById('s14s').src = "images/empty.PNG";

                imgV14 = 0;
                removeA('D2');
            }
            show();
        }

        function imgChange15() {


            if (imgV15 == 0) {
                document.getElementById('s15s').src = "images/click.PNG";
                imgV15 = 1;
                seatList.push("D3");

            } else {
                document.getElementById('s15s').src = "images/empty.PNG";

                imgV15 = 0;
                removeA('D3');
            }
            show();
        }


        function imgChange16() {


            if (imgV16 == 0) {
                document.getElementById('s16s').src = "images/click.PNG";
                imgV16 = 1;
                seatList.push("D4");

            } else {
                document.getElementById('s16s').src = "images/empty.PNG";

                imgV16 = 0;
                removeA('D4');
            }
            show();
        }


        function imgChange17() {


            if (imgV17 == 0) {
                document.getElementById('s17s').src = "images/click.PNG";
                imgV17 = 1;
                seatList.push("E1");

            } else {
                document.getElementById('s17s').src = "images/empty.PNG";

                imgV17 = 0;
                removeA('E1');
            }
            show();
        }


        function imgChange18() {


            if (imgV18 == 0) {
                document.getElementById('s18s').src = "images/click.PNG";
                imgV18 = 1;
                seatList.push("E2");

            } else {
                document.getElementById('s18s').src = "images/empty.PNG";

                imgV18 = 0;
                removeA('E2');
            }
            show();
        }


        function imgChange19() {


            if (imgV19 == 0) {
                document.getElementById('s19s').src = "images/click.PNG";
                imgV19 = 1;
                seatList.push("E3");

            } else {
                document.getElementById('s19s').src = "images/empty.PNG";

                imgV19 = 0;
                removeA('E3');
            }
            show();
        }


        function imgChange20() {


            if (imgV20 == 0) {
                document.getElementById('s20s').src = "images/click.PNG";
                imgV20 = 1;
                seatList.push("E4");

            } else {
                document.getElementById('s20s').src = "images/empty.PNG";

                imgV20 = 0;
                removeA('E4');
            }
            show();
        }


        function imgChange21() {


            if (imgV21 == 0) {
                document.getElementById('s21s').src = "images/click.PNG";
                imgV21 = 1;
                seatList.push("F1");

            } else {
                document.getElementById('s21s').src = "images/empty.PNG";

                imgV21 = 0;
                removeA('F1');
            }
            show();
        }


        function imgChange22() {


            if (imgV22 == 0) {
                document.getElementById('s22s').src = "images/click.PNG";
                imgV22 = 1;
                seatList.push("F2");

            } else {
                document.getElementById('s22s').src = "images/empty.PNG";

                imgV22 = 0;
                removeA('F2');
            }
            show();
        }

        function imgChange23() {


            if (imgV23 == 0) {
                document.getElementById('s23s').src = "images/click.PNG";
                imgV23 = 1;
                seatList.push("F3");

            } else {
                document.getElementById('s23s').src = "images/empty.PNG";

                imgV23 = 0;
                removeA('F3');
            }
            show();
        }


        function imgChange24() {


            if (imgV24 == 0) {
                document.getElementById('s24s').src = "images/click.PNG";
                imgV24 = 1;
                seatList.push("F4");

            } else {
                document.getElementById('s24s').src = "images/empty.PNG";

                imgV24 = 0;
                removeA('F4');
            }
            show();
        }

        function imgChange25() {


            if (imgV25 == 0) {
                document.getElementById('s25s').src = "images/click.PNG";
                imgV25 = 1;
                seatList.push("G1");

            } else {
                document.getElementById('s25s').src = "images/empty.PNG";

                imgV25 = 0;
                removeA('G1');
            }
            show();
        }


        function imgChange26() {


            if (imgV26 == 0) {
                document.getElementById('s26s').src = "images/click.PNG";
                imgV26 = 1;
                seatList.push("G2");

            } else {
                document.getElementById('s26s').src = "images/empty.PNG";

                imgV26 = 0;
                removeA('G2');
            }
            show();
        }

        function imgChange27() {


            if (imgV27 == 0) {
                document.getElementById('s27s').src = "images/click.PNG";
                imgV27 = 1;
                seatList.push("G3");

            } else {
                document.getElementById('s27s').src = "images/empty.PNG";

                imgV27 = 0;
                removeA('G3');
            }
            show();
        }


        function imgChange28() {


            if (imgV28 == 0) {
                document.getElementById('s28s').src = "images/click.PNG";
                imgV28 = 1;
                seatList.push("G4");

            } else {
                document.getElementById('s28s').src = "images/empty.PNG";

                imgV28 = 0;
                removeA('G4');
            }
            show();
        }


        function imgChange29() {


            if (imgV29 == 0) {
                document.getElementById('s29s').src = "images/click.PNG";
                imgV29 = 1;
                seatList.push("H1");

            } else {
                document.getElementById('s29s').src = "images/empty.PNG";

                imgV29 = 0;
                removeA('H1');
            }
            show();
        }


        function imgChange30() {


            if (imgV30 == 0) {
                document.getElementById('s30s').src = "images/click.PNG";
                imgV30 = 1;
                seatList.push("H2");

            } else {
                document.getElementById('s30s').src = "images/empty.PNG";

                imgV30 = 0;
                removeA('H2');
            }
            show();
        }

        function imgChange31() {


            if (imgV31 == 0) {
                document.getElementById('s31s').src = "images/click.PNG";
                imgV31 = 1;
                seatList.push("H3");

            } else {
                document.getElementById('s31s').src = "images/empty.PNG";

                imgV31 = 0;
                removeA('H3');
            }
            show();
        }


        function imgChange32() {


            if (imgV32 == 0) {
                document.getElementById('s32s').src = "images/click.PNG";
                imgV32 = 1;
                seatList.push("H4");

            } else {
                document.getElementById('s32s').src = "images/empty.PNG";

                imgV32 = 0;
                removeA('H4');
            }
            show();
        }


        function imgChange33() {


            if (imgV33 == 0) {
                document.getElementById('s33s').src = "images/click.PNG";
                imgV33 = 1;
                seatList.push("I1");

            } else {
                document.getElementById('s33s').src = "images/empty.PNG";

                imgV33 = 0;
                removeA('I1');
            }
            show();
        }


        function imgChange34() {


            if (imgV34 == 0) {
                document.getElementById('s34s').src = "images/click.PNG";
                imgV34 = 1;
                seatList.push("I2");

            } else {
                document.getElementById('s34s').src = "images/empty.PNG";

                imgV34 = 0;
                removeA('I2');
            }
            show();
        }


        function imgChange35() {


            if (imgV35 == 0) {
                document.getElementById('s35s').src = "images/click.PNG";
                imgV35 = 1;
                seatList.push("I3");

            } else {
                document.getElementById('s35s').src = "images/empty.PNG";

                imgV35 = 0;
                removeA('I3');
            }
            show();
        }


        function imgChange36() {


            if (imgV36 == 0) {
                document.getElementById('s36s').src = "images/click.PNG";
                imgV36 = 1;
                seatList.push("I4");

            } else {
                document.getElementById('s36s').src = "images/empty.PNG";

                imgV36 = 0;
                removeA('I4');
            }
            show();
        }


        function imgChange37() {


            if (imgV37 == 0) {
                document.getElementById('s37s').src = "images/click.PNG";
                imgV37 = 1;
                seatList.push("J1");

            } else {
                document.getElementById('s37s').src = "images/empty.PNG";

                imgV37 = 0;
                removeA('J1');
            }
            show();
        }


        function imgChange38() {


            if (imgV38 == 0) {
                document.getElementById('s38s').src = "images/click.PNG";
                imgV38 = 1;
                seatList.push("J2");

            } else {
                document.getElementById('s38s').src = "images/empty.PNG";

                imgV38 = 0;
                removeA('J2');
            }
            show();
        }


        function imgChange39() {


            if (imgV39 == 0) {
                document.getElementById('s39s').src = "images/click.PNG";
                imgV39 = 1;
                seatList.push("J3");


            } else {
                document.getElementById('s39s').src = "images/empty.PNG";

                imgV39 = 0;
                removeA('J3');

            }
            show();
        }

        function imgChange40() {


            if (imgV40 == 0) {
                document.getElementById('s40s').src = "images/click.PNG";
                imgV40 = 1;
                seatList.push("J4");

            } else {
                document.getElementById('s40s').src = "images/empty.PNG";

                imgV40 = 0;
                removeA('J4');
            }
            show();
        }
        
        

        function test() {
            if (s40.checked && imgV40 == 0) {

                document.getElementById("s40").checked = false;
                imgV = 1;

            }
        }
    </script>










    <script>
        function reload() {

            var e = document.getElementById("refreshed");
            if (e.value == "no") e.value = "yes";
            else {
                e.value = "no";
                location.reload();
            }

        }


        var perSeat = <?php echo $fare; ?>




        // run function with time

        var butto = document.getElementById('clicker');
        setInterval(function() {


            butto.click();
        }, 100)

        // calculate previous fare

        function previousCost() {


            reload();

            var Fare = 0;
            var sum = 0;
            var gn, elem;
            var two = [];

            for (i = 1; i < 41; i++) {
                gn = 's' + i;

                elem = document.getElementById(gn);

                if (elem.checked == true) {

                    two.push(gn);
                    sum = sum + 1;

                    var Fare = sum * perSeat;





                    // window.two = [];
                    two.toString();
                    // document.getElementById('par').innerHTML = " "+two;




                }


            }

            // set global the variable
            window.previousFare = Fare;


        }

        function UpdateCost() {

            var sum = 0;
            var gn, elem;
            var one = [];

            for (i = 1; i < 41; i++) {
                gn = 's' + i;

                elem = document.getElementById(gn);

                if (elem.checked == true) {

                    sum = sum + 1;

                    one.push(gn);

                    var totarlFare = (sum * perSeat) - previousFare;
                    
                    var sCount = sum;
                    window.sCount;


                }
            }





            if (totarlFare == undefined) {

                totarlFare = 0;
            }



            document.getElementById('para').innerHTML = "Your total fare is " + totarlFare;





        }
    </script>

</body>

</html>

<?php include 'footer.php'; ?>