<?php
// the form that is present in the change product modal

require_once '../connectToServer.php';

//declare variables
$groupName = "";
$category1 = "";
$category1data = '';

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
if (isset($_POST['category1data']) && !empty($_POST['category1data'])) {
  $category1data = $_POST['category1data'];
}
else{
  echo "category1data needs to be set";
}

?>
<!-- start of the form -->
<form class="form-horizontal" id="changeForm" action="submitFiles/submitChangeForm.php" method="post">
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
      <!-- hide category1data to pass to database -->
      <div class="form-group">
        <?php
        echo "<input type='hidden' class='form-control' name='category1data' value='".$category1data."'>";
        ?>
      </div>
          <!-- display groupname though disabled input -->
        <div class="form-group">
          <label for="label">Group Name</label>
          <?php
          echo "<input type='text' disabled class='form-control' value='".$groupName."'>";
          ?>
        </div>
        <!-- display product name to be changed though disabled input -->
      <div class="form-group">
        <label for="label">Name to Be changed</label>
        <?php
        echo "<input type='text' disabled class='form-control' value='".$category1data."'>";
        ?>
      </div>
      </div>
    </div>
    <!-- start of inputs -->
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="mainColumnName"> new name:</label>
          <input type="text" required class="form-control" name="mainColumnName">
        </div>
      </div>
    </div>
  </div>
  <!-- start of modal footer -->
  <div class="modal-footer">
    <button type="submit" name="Submit" id="changeProdcutSubmit" data-target="#displayEditTable" data-gpName="<?php echo $groupName;  ?>" class="btn btn-info">Submit</button>
  </div>
</form>
