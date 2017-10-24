<?php
echo "<button class='cleanBtn' data-toggle='modal' data-target='#newTableDataModal' data-group='".$row['groupname']."' data-category1='".$row['category1']."' data-info='".$category1DataRow['category1data']."' data-category2='".$category2RowB['category2']."' id='createTableData'><i class='icon-plus-squared'></i></button><span class='add-data'>Add data...</span>";
echo "<div id='newTableDataModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='tableDataLabel' aria-hidden='true' style='dispaly: none;'>";
?>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add New Table Data</h4>
       </div>
         <!-- msql data will be loaded here -->
         <div id="new-data-dynamic-content"></div>

   </div>
 </div>
</div>
</body>
