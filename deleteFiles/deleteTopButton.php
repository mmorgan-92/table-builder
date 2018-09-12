
  <form class="form-horizontal" id="deleteButton" action="deleteFiles/submitDeleteButton.php" method="post" style="float: right;">
      <?php
      echo "<input type='hidden' class='form-control' name='groupName' value='".$groupName."'>";
      ?>
      <?php
      echo "<input type='hidden' class='form-control' name='category1' value='".$row['category1']."'>";
      ?>
    <?php
    echo "<input type='hidden' class='form-control' name='topButtonName' value='".$createTopButtonRow['top_button_name']."'>";
    ?>
    <!--<button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn' name="deleteTopButton" class="btn btn-info" id="deleteTopButton">-</button>-->
    <button type="submit" class="btn deleteBtn" name="deleteTopButton" id="deleteTopButton" data-target="#displayEditTable"
     data-gpName="<?php echo $groupName; ?>" data-category1="<?php echo $row['category1']; ?>" 
     data-topbuttonname="<?php echo $createTopButtonRow['top_button_name']; ?>" >
      <i class="icon-minus-squared icon-large"></i>
    </button>
  </form>
