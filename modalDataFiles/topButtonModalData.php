<?php

require_once '../connectToServer.php';

//declare variables
$gpName = "";
$category1= "";

if (isset($_POST['id']) && !empty($_POST['id'])) {
$gpName = $_POST['id'];
}
if (isset($_POST['category1']) && !empty($_POST['category1'])) {
$category1 = $_POST['category1'];
}
?>
<!-- start of the form -->
<form class="form-horizontal" action="submitFiles/submitTopButton.php" method="post">
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-12">
        <!-- hide group name to pass to database -->
        <div class="form-group">
          <?php
          echo "<input type='hidden' class='form-control' name='groupName' value='".$gpName."'>";
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
          echo "<input type='text' disabled class='form-control' name='label' value='".$gpName."'>";
          ?>
        </div>
      </div>
    </div>
    <!-- start of inputs -->
    <!-- if want to add multiple rows, convert to table and use addRow.js -->
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="buttonName">Button Name:</label>
          <input type="text" class="form-control" name="buttonName">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="buttonLink">Button Link:</label>
          <input type="text" class="form-control" name="buttonLink">
        </div>
      </div>
    </div>
  </div>
  <!-- start of modal footer -->
  <div class="modal-footer">
    <button type="submit" name="Submit" class="btn btn-info" id="submitTopButton">Submit</button>
  </div>
</form>
