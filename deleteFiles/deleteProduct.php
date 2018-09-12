
<form class="form-horizontal" id="deleteProduct" action="deleteFiles/submitDeleteProduct.php" method="post">


  <button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn'  name="deleteTable" id="deleteProductBtn"
   data-target="#displayEditTable" data-gpName="<?php echo $groupName; ?>" data-category1="<?php echo $row['category1']; ?>"
   data-category1data="<?php echo $products[$x]; ?>" style="margin-bottom: 1em;">Delete Row</button>

</form>
