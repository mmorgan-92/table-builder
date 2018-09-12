<?php
// the form that is present in the add new column modal


//connect to the server
require_once '../connectToServer.php';

// declare variables
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
<form class="form-horizontal" id="newColumnForm" action="submitFiles/submitNewColumn.php" method="post">
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-12">
          <!-- hide group name to pass to database -->
        <div class="form-group">
          <?php
          echo "<input type='hidden' class='form-control' name='groupName' value='".$groupName."'>";
          ?>
        </div>
        <!-- hide Category 1 to pass to database -->
      <div class="form-group">
        <?php
        echo "<input type='hidden' class='form-control' name='category1' value='".$category1."'>";
        ?>
      </div>
          <!-- display groupname though disabled input -->
        <div class="form-group">
          <label for="columnLabel">Group Name</label>
          <?php
          echo "<input type='text' disabled class='form-control' name='columnLabel' value='".$groupName."'>";
          ?>
        </div>
        <div class="form-group">
          <label for="columnLabel2">category 1</label>
          <?php
          echo "<input type='text' disabled class='form-control' name='columnLabel2' value='".$category1."'>";
          ?>
        </div>
      </div>
    </div>
    <!-- start of inputs -->
    <!-- if want to add multiple rows, convert to table and use addRow.js -->
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="columnName">Column Name:</label>
          <input type="text" class="form-control" name="columnName">
        </div>
      </div>
    </div>
  </div>
  <!-- start of modal footer -->
  <div class="modal-footer">
    <button type="submit" name="Submit" id="newColumnSubmit" data-target="#displayEditTable" data-gpName="<?php echo $groupName; ?>" class="btn btn-info">Submit</button>
  </div>
</form>
