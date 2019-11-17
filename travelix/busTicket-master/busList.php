<?php include 'header.php'; ?>
<?php

if(isset($_POST['submit'])){
    
    
    
    $busDesA = $_POST['from'];
    $busDesB = $_POST['to'];
    $c = $_POST['bDate'];
    
    
    $busDes = "";

    
       $_SESSION['busDesA'] = $busDesA;
    $_SESSION['busDesB'] = $busDesB;
        
         $_SESSION['busDate'] = $c;
        
        
       // header("Location: seat.php");
        
    
    
    
}  




?>

<?php 


    if(isset($_POST['buslist-submit'])){
        
        $idVal = $_POST['idVal'];
        //echo $idVal;
        
        //$idVal = $idVal - 1;
        $_SESSION['idVal'] = $idVal;
        
        
        $bTime = $_POST['bTime'];
        
        $_SESSION['busTime'] = $bTime;
        
        $busType = $_POST['busType'];
        $_SESSION['busType'] = $busType;
        
       
        
      header("Location: seat.php");

        
    }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/buslist.css">
    
    <title>List of Bus</title>
    <style>
    
    tr:nth-child(even) {background-color: #f2f2f2;
        font-size: 120%;
        }
    tr:nth-child(odd) {background-color: #747890;
        font-size: 120%;}
    
    
    </style>
    
    
</head>
<body>
   <div class="container">
      <?php 
       $email = $_SESSION['email'];
       
       
       $sql = "SELECT * FROM bus WHERE busDate='$c' AND busDesA='$busDesA' AND busDesB='$busDesB'";
       $result = mysqli_query($db, $sql);
       
       
       ?>
      
      
                           <?php  $noBus = "There is no bus available"; ?>
                           <?php while($row = mysqli_fetch_assoc($result)): ?> 
    <form action="" method="post">


            <table class="table">
             
                
                <tr>
                    
                    <th>Bus Name</th>
                    <th>Bus Type</th>
                    <th>Bus Date</th>
                    <th>Bus Time</th>
                    <th>Bus From</th>
                    <th>Bus To</th>
                    
                    <th></th>
                  
                </tr>
                
                <tr>
                   

                    <td><?php echo $row['busName']; ?></td>
                    <td><?php
                      if($row['busType'] == 'AC'){
                        echo "AC Bus";
                      }
                      
                      else {
                          echo "Non AC Bus";
                      } 
                    
                    ?></td>
                    <td><?php echo $row['busDate']; ?></td>
                    <td><?php echo $row['busTime']; ?></td>
                    <td><?php echo $row['busDesA']; ?></td>
                    <td><?php echo $row['busDesB']; ?></td>
                    <td><input type="text" style="display:none"; value="<?php echo $row['id']; ?>" name="idVal">
                    <input type="text" style="display:none"; value="<?php echo $row['busTime']; ?>" name="bTime">
                    <input type="hidden" value="<?php echo $row['busType']; ?>" name="busType">
                    <input type="submit"  class="btn btn-success" name="buslist-submit" value="View Seat"></td>
                    
                   <?php  $noBus = ""; ?>
                
                      

                
               
                
                
            </table>
            
            
            
    </form>
            
            
                            <?php endwhile; ?>

            
            <h3 style="color:#b70d0d";><?php echo $noBus; ?></h3>
            
         
         
    
        
    </div>
   
    
</body>
</html>


<?php include 'footer.php'; ?>