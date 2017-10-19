<?php
echo "<button class='btn btn-info btn-sm btn-circle' data-toggle='modal' data-target='#newMainColumnModal' data-group='".$row['groupname']."' data-category1='".$row['category1']."' id='createNewMainColumn'>Add Element</button>";
echo "<div id='newMainColumnModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='mainColumnLabel' aria-hidden='true' style='dispaly: none;'>";
?>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add New Element</h4>
       </div>
         <!-- msql data will be loaded here -->
         <div id="new-main-column-dynamic-content"></div>

   </div>
 </div>
</div>
</body>
