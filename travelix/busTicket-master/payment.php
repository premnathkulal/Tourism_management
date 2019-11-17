<?php include 'header.php'; ?>
   
   
   <link rel="stylesheet" href="css/style1.css">
    <!--   form part start-->
    <div class="wrapper">
        <div>
            <form action="paymentBusList.php" method="post">
                
             <?php 
            
            $sql = "SELECT DISTINCT cityF FROM place";
            $result = mysqli_query($db, $sql);
        
        
        ?>
       
       
        <label>FROM</label>
        <select name="from">
           <?php while($row = mysqli_fetch_assoc($result)): ?>
           
            <option value="<?php echo $row['cityF']; ?>" name="<?php echo $row['cityF']; ?>"><?php echo $row['cityF']; ?></option>
            
            <?php endwhile; ?>
        </select>

            <?php 
            
            $sql = "SELECT DISTINCT cityT FROM place";
            $results = mysqli_query($db, $sql);
        
        
         ?>
           <label style="padding-right:20px">TO</label>
        <select name="to">
            
           <?php while($rows = mysqli_fetch_assoc($results)): ?>
            <option value="<?php echo $rows['cityT']; ?>" name="<?php echo $rows['cityT']; ?>"><?php echo $rows['cityT']; ?></option>
            
            <?php endwhile; ?>

        </select>

       
                
                <label for="ldate" style="margin-top:20px;">SELECT DATE</label><br>
                <input type="date" id="ldate" name="bDate" required  style="margin-right: 30px;">
          
                
               

                <br><br>
   
                <input type="submit" name="payment-submit" value="SEARCH BUS">
            </form>
        </div>

    </div>
    
    <br><br>


   <?php include 'footer.php'; ?>