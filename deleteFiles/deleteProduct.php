
<form class="form-horizontal" action="deleteFiles/submitDeleteProduct.php" method="post">

    <?php
    echo "<input type='hidden' class='form-control' name='groupName' value='".$row['groupname']."'>";
    ?>
    <?php
    echo "<input type='hidden' class='form-control' name='category1' value='".$row['category1']."'>";
    ?>
    <?php
    echo "<input type='hidden' class='form-control' name='category1Data' value='".$category1DataRow['category1data']."'>";
    ?>

  <button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn'  name="deleteTable" id="deleteProductBtn">Delete Row</button>
  <!--<button type="submit" class="cleanBtn float-right" name="deleteTable" id="deleteTable">
    <i class="icon-minus-squared"></i>
  </button>-->

</form>

