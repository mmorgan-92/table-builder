
  <form class="form-horizontal" action="deleteFiles/submitDeleteColumn.php" method="post">

      <?php
      echo "<input type='hidden' class='form-control' name='groupName' value='".$row['groupname']."'>";
      ?>
      <?php
      echo "<input type='hidden' class='form-control' name='category1' value='".$row['category1']."'>";
      ?>
      <?php
      echo "<input type='hidden' class='form-control' name='category2' value='".$category2Row['category2']."'>";
      ?>

    <button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn' name="deleteColumn" class="btn btn-info" id="deleteColumnBtn">Delete Column</button>
  </form>
