<?php include 'header.php'; ?>

<style>
    table th{
        
        background-color: #65a7a7;
    }
table tr:nth-child(even){background-color: #f2f2f2;}


</style>



<div class="container">
  
  
   
    
    <?php 
            
            $sql = "SELECT cityF,cityT,fare FROM place";
            $result = mysqli_query($db, $sql);
        
        
        ?>
       
       
        
           
           
          <table class="table">
             <?php while($row = mysqli_fetch_assoc($result)): ?> 
              <tr>
                  <th>From</th>
                  <th>To</th>
                  <th>Cost</th>
              </tr>
              
              <tr>
                  <td><?php echo $row['cityF']; ?></td>
                  <td><?php echo $row['cityT']; ?></td>
                  <td><?php echo $row['fare']; ?></td>
                  <br>
                  
              </tr>
              
              
              <?php endwhile; ?>
              
          </table>
            
            
            
        
          
    
    
</div>


<?php include 'footer.php'; ?>