
        <form class="form-horizontal" action="submitFiles/submitNewTable.php" method="post">
         <div class="modal-body">
           <div class="row">
             <div class="col-sm-12">
               <div class="form-group">
                 <label for="tableName">Table Name</label>
                 <input type="text" required class="form-control" name="tableName">
               </div>
               <hr>
             </div>
           </div>
           <div class="row">
             <div class="col-sm-12">
               <div class="form-group">
                 <label for="mainColumnName">Main Column Name:</label>
                 <input required type="text" class="form-control" name="mainColumnName">
               </div>
             </div>
           </div>

           <table id="dataTable">
             <tbody>
               <tr>
                 <td>
                   <div class="row">
                     <div class="col-sm-12">
                       <div class="form-group">
                         <label for="columnName">Column Name:</label>
                         <input type="text" required class="form-control" name="columnName[]">
                       </div>
                     </div>
                   </div>
                 </td>
               </tr>
             </tbody>
           </table>

         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-info" id="addRow">Add Row</button>
           <button type="submit" name="Submit" class="btn btn-info">Submit</button>
         </div>
       </form>
