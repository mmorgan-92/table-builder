
  <form class="form-horizontal" action="deleteFiles/submitDeleteDataNoLink.php" id="deleteDataForm" method="post">

 

    <button type="submit" class="cleanBtn" name="deleteTable" id="deleteTable" data-target="#displayEditTable"
     data-gpName="<?php echo $groupName; ?>"
     data-category1="<?php echo $row['category1']; ?>"
     data-category1Data="<?php echo $products[$x]; ?>"
     data-category2="<?php echo $category2RowB['category2']; ?>"
     data-category2Data="<?php echo $category2DataRow['data']; ?>"
     data-category2DataLinkRow="<?php echo $category2DataLinkRow['link']; ?>"
     >
      <i class="icon-minus-squared"></i>
    </button>
  </form>
