<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php 
    $conn = mysqli_connect("localhost", "root", "", "crud");
    $student_id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE sId = '{$student_id}' ";
    $result = mysqli_query($conn, $sql) or die('query unsuccessful');

    if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);   
     ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sId'] ?>"/>
          <input type="text" name="sname" value="<?php echo $row['sName'] ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['sAddress'] ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass">
              <option value="" selected disabled>Select Class</option>
              <?php
                $sql1 = "SELECT * FROM studentclass";
                $result1 = mysqli_query($conn, $sql1);
                while($row1 = mysqli_fetch_assoc($result1)){
                    if($row['sClass'] == $row1['cId']){
                        $select = "selected";
                    }else{
                        $select = "";
                    }
                   echo "<option {$select} value='{$row1['cId']}'>{$row1['cName']}</option>";
                }
              ?>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sPhone'] ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php }  ?>
</div>
</div>
</body>
</html>
