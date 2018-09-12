$(document).ready(function(){

  //get data to create edit table
  $(document).on('click', '.sidebarTables', function(e){
    e.preventDefault();
    var groupName = $(this).data('group'); // get groupname of clicked table
   // alert(groupName);

    $('#dynamicEditTable').html(''); // leave this div blank
    $.ajax({
      url: 'BuildEditTable.php',  //do not put relitive path
      data: {"groupName":groupName},
      type: 'POST'
     })
     .done(function(data){
       console.log(data);
       $('#dynamicEditTable').html(''); // blank before load.
       $('#dynamicEditTable').html(data); // load here
     })
     .fail(function(){
       $('#dynamicEditTable').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
     });
    });
});


