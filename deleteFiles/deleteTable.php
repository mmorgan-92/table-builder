
  <form class="form-horizontal" action="deleteFiles/submitDeleteTable.php" method="post">
      <?php
      echo "<input type='hidden' class='form-control' name='groupName' value='".$row['groupname']."'>";
      ?>
    <button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn' name="deleteTable" class="btn btn-info" id="deleteTableBtn">Delete Table</button>
  </form>
