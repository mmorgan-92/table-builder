
  <form class="form-horizontal" id="deleteDataNoLinkForm" action="deleteFiles/submitDeleteDataNoLink.php" method="post">

 

    <!--<button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn' name="deleteTable" class="btn btn-info" id="deleteDataBtn">-</button>-->
    <button type="submit" class="cleanBtn" name="deleteTable" id="deleteDataNoLink" data-target="#displayEditTable"
     data-gpName="<?php echo $groupName; ?>"
     data-category1="<?php echo $row['category1']; ?>"
     data-category1Data="<?php echo $products[$x]; ?>"
     data-category2="<?php echo $category2RowB['category2']; ?>"
     data-category2Data="<?php echo $category2DataRow['data']; ?>"
     >
      <i class="icon-minus-squared"></i>
    </button>
  </form>
