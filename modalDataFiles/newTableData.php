<?php
// the form that is present in the add new data modal

require_once '../connectToServer.php';
session_start();
//declare variables
$groupName = "";
$category1 = "";
$category1Data = "";
$category2 = "";

//test if post was successfull
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
if (isset($_POST['category1Data']) && !empty($_POST['category1Data'])) {
              $category1Data = $_POST['category1Data'];
}
else{
  echo "category1Data needs to be set";
}
if (isset($_POST['category2']) && !empty($_POST['category2'])) {
  $category2 = $_POST['category2'];
}
else{
  echo "category2 needs to be set";
}

?>


<!-- start of the form -->
<form class="form-horizontal" id="newTableDataForm" action="submitFiles/submitTableData.php" method="post">
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
    <div class="row">
      <div class="col-sm-6">
          <!-- hide category1 data to pass to database -->
        <div class="form-group">
          <?php
          echo "<input type='hidden' class='form-control' name='category1Data' value='".$category1Data."'>";
          ?>
        </div>
          <!-- display category1 data though disabled input -->
        <div class="form-group">
          <label for="label">Group Name</label>
          <?php
          echo "<input type='text' disabled class='form-control' value='".$category1Data."'>";
          ?>
        </div>
      </div>
      <div class="col-sm-6">
          <!-- hide category2 to pass to database -->
        <div class="form-group">
          <?php
          echo "<input type='hidden' class='form-control' name='category2' value='".$category2."'>";
          ?>
        </div>
          <!-- display category2 though disabled input -->
        <div class="form-group">
          <label for="label">category2</label>
          <?php
          echo "<input type='text' disabled class='form-control' value='".$category2."'>";
          ?>
        </div>
      </div>
    </div>

    <!-- start of inputs -->
    <!-- if want to add multiple rows, convert to table and use addRow.js -->
    <div class="row">
      <div class="col-md-8">
        <div class="form-group">
          <label for="newTableData">data name:</label>
          <input type="text" class="form-control" name="newTableData">
        </div>
      </div>
      <div class="col-md-4 showBtn">
        <br><button class='btn btn-info' id="addLinkBtn">Add Link</button>
      </div>
    </div>
    <!-- hide link class and disable it if button is clicked -->
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group" id='linkDiv' style="display:none;" >
          <Label for"newTableDataLink">Link:</label>
          <?php
          echo "<input type='text' class='form-control' name='newTableDataLink' value='none'>";
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- start of modal footer -->
  <div class="modal-footer">
    <button type="submit" id="newTableDataSubmit" name="Submit" data-target="#displayEditTable" data-gpName="<?php echo $groupName; ?>" class="btn btn-info">Submit</button>
  </div>
</form>
