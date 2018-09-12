<?php
// Modal to create a new row

echo "<button class='btn tableBtn btn-sm btn-circle' data-toggle='modal' data-target='#newMainColumnModal' data-group='".$groupName."' data-category1='".$row['category1']."' id='createNewMainColumn'>New Row</button>";
echo "<div id='newMainColumnModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='mainColumnLabel' aria-hidden='true' style='dispaly: none;'>";
?>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Create New Row</h4>
       </div>
         <!-- msql data will be loaded here -->
         <div id="new-main-column-dynamic-content"></div>

   </div>
 </div>
</div>
</body>
