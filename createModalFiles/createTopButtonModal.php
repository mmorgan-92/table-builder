<?php
// Modal To Create a Top Button to the table

echo "<button class='btn btn-sm btn-circle tableBtn' data-toggle='modal' data-target='#buttonModal' data-id='".$groupName."' data-category1='".$row['category1']."' id='createButton'>Add Top Button</button>";
echo "<div id='buttonModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='ButtonLabel' aria-hidden='true' style='dispaly: none;'>";
?>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add a Top Button</h4>
       </div>
         <!-- msql data will be loaded here -->
         <div id="top-button-dynamic-content"></div>

   </div>
 </div>
</div>
</body>
