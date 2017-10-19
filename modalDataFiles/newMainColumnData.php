<?php
require_once '../connectToServer.php';

//declare variables
$groupName = "";
$category1 = "";

if (isset($_POST['groupName']) && !empty($_POST['groupName'])) {
      $groupName = $_POST['groupName'];
    }
    else{
      echo "groupName needs to be set";
    }
if (isset($_POST['category1']) && !empty($_POST['category1'])) {
          $category1 = $_POST['category1'];
  }
  else{
        echo "category1 needs to be set";
        }

?>
<!-- start of the form -->
<form class="form-horizontal" action="submitFiles/submitNewMainColumn.php" method="post">
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-12">
          <!-- hide group name to pass to database -->
        <div class="form-group">
          <?php
          echo "<input type='hidden' class='form-control' name='groupName' value='".$groupName."'>";
          ?>
        </div>
        <!-- hide category1 to pass to database -->
      <div class="form-group">
        <?php
        echo "<input type='hidden' class='form-control' name='category1' value='".$category1."'>";
        ?>
      </div>
          <!-- display groupname though disabled input -->
        <div class="form-group">
          <label for="label">Group Name</label>
          <?php
          echo "<input type='text' disabled class='form-control' value='".$groupName."'>";
          ?>
        </div>
      </div>
    </div>
    <!-- start of inputs -->
    <!-- if want to add multiple rows, convert to table and use addRow.js -->
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="mainColumnName">new <?php echo $category1;?> name:</label>
          <input type="text" required class="form-control" name="mainColumnName">
        </div>
      </div>
    </div>
  </div>
  <!-- start of modal footer -->
  <div class="modal-footer">
    <button type="submit" name="Submit" class="btn btn-info">Submit</button>
  </div>
</form>
