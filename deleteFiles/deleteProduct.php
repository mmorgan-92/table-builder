<div>
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

    <button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn'  name="deleteTable" id="deleteProductBtn">-</button>
  </form>
</div>
