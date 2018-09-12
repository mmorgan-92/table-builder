
  <form class="form-horizontal" action="deleteFiles/submitDeleteTable.php" method="post">
      <?php
      echo "<input type='hidden' class='form-control' name='groupName' value='".$groupName."'>";
      ?>
    <button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn tableDelete' name="deleteTable" class="btn btn-info" id="deleteTableBtn" style="margin-bottom: 1em;" onclick="return confirm('are you sure you want to delete the table?')">Delete Table</button>
  </form>
