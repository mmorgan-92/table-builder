
  <form class="form-horizontal" action="deleteFiles/submitDeleteDataNoLink.php" method="post">

      <?php
      echo "<input type='hidden' class='form-control' name='groupName' value='".$row['groupname']."'>";
      ?>
      <?php
      echo "<input type='hidden' class='form-control' name='category1' value='".$row['category1']."'>";
      ?>
      <?php
      echo "<input type='hidden' class='form-control' name='category1Data' value='".$category1DataRow['category1data']."'>";
      ?>
      <?php
      echo "<input type='hidden' class='form-control' name='category2' value='".$category2RowB['category2']."'>";
      ?>
      <?php
      echo "<input type='hidden' class='form-control' name='data' value='".$category2DataRow['data']."'>";
      ?>

    <!--<button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn' name="deleteTable" class="btn btn-info" id="deleteDataBtn">-</button>-->
    <button type="submit" class="cleanBtn" name="deleteTable" id="deleteTable">
      <i class="icon-minus-squared"></i>
    </button>
  </form>
