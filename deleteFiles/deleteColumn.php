
  <form class="form-horizontal" id="deleteColumn" action="deleteFiles/submitDeleteColumn.php" method="post">


    <button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn' name="deleteColumn" class="btn btn-info" id="deleteColumnBtn"
     data-target="#displayEditTable" data-gpname="<?php echo $groupName; ?>" data-category1="<?php echo $row['category1']; ?>"
     data-category2row="<?php echo $category2Row['category2']; ?>" >Delete Column</button>

  </form>
