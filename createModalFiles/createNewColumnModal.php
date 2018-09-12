<?php
//Modal to create a new column

echo "<button class='btn tableBtn btn-sm btn-circle' data-toggle='modal' data-target='#newColumnModal' data-group='".$groupName."' data-category1='".$row['category1']."' id='createNewColumn'>New Column</button>";
echo "<div id='newColumnModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='ColumnLabel' aria-hidden='true' style='dispaly: none;'>";
?>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add New Column</h4>
       </div>
         <!-- msql data will be loaded here -->
         <div id="new-column-dynamic-content"></div>

   </div>
 </div>
</div>
</body>
