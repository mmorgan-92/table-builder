
  <form class="form-horizontal" action="deleteFiles/submitDeleteData.php" method="post">
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
      <?php
      echo "<input type='hidden' class='form-control' name='dataLink' value='".$category2DataLinkRow['link']."'>";
      ?>
    <button type="submit" class='btn btn-danger btn-sm btn-circle deleteBtn' name="deleteTable" class="btn btn-info" id="deleteDataBtn">-</button>
  </form>
