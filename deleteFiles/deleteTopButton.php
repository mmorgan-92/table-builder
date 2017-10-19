
  <form class="form-horizontal" action="deleteFiles/submitDeleteButton.php" method="post" style="float: right;">
      <?php
      echo "<input type='hidden' class='form-control' name='groupName' value='".$row['groupname']."'>";
      ?>
      <?php
      echo "<input type='hidden' class='form-control' name='category1' value='".$row['category1']."'>";
      ?>
    <?php
    echo "<input type='hidden' class='form-control' name='topButtonName' value='".$createTopButtonRow['top_button_name']."'>";
    ?>
    <button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn' name="deleteTopButton" class="btn btn-info" id="deleteTopButton">-</button>
  </form>
