<?php
// Modal to edit a main column entry

echo "<button class='btn tableBtn btn-sm btn-circle' data-toggle='modal' data-target='#changeProductModal' data-group='".$groupName."' data-category1='".$row['category1']."' data-category1data='".$products[$x]."' id='changeProduct'>Edit</button>";
echo "<div id='changeProductModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='changeLabel' aria-hidden='true' style='dispaly: none;'>";
?>
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Create New Row</h4>
       </div>
         <!-- msql data will be loaded here -->
         <div id="change-product-dynamic-content"></div>

   </div>
 </div>
</div>
</body>
