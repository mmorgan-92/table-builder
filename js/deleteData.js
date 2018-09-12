$(document).ready(function(){

  /////////////////////////////////////////
  //fuction to dynamically delete a row
  /////////////////////////////////////////
  $(document).on('click', '#deleteProductBtn', function(e){

    e.preventDefault();

    var form = $('#deleteProduct');
    var url = form.attr('action');
    var groupName = $(this).data('gpname'); // get groupname of clicked table
    var category1 = $(this).data('category1');
    var category1Data = $(this).data('category1data');
if ( confirm('are you sure you want to delete the row?') ){
      //initate ajax call and submit the form
      $.ajax({
        type: 'POST',
        url: url,
        data: {groupName: groupName, category1: category1, category1Data: category1Data},
        success: function(e)
        {
          $('.modal-backdrop').remove();
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
        } 
      });
    }
  });
  /////////////////////////////////////////
  //end of function
  /////////////////////////////////////////



    ////////////////////////////////////////////
  //fuction to dynamically delete a column
  //////////////////////////////////////////////
  $(document).on('click', '#deleteColumnBtn', function(e){

    e.preventDefault();

    var form = $('#deleteColumn');
    var url = form.attr('action');
    var groupName = $(this).data('gpname'); // get groupname of clicked table
    var category1 = $(this).data('category1');
    var category2 = $(this).data('category2row');
    if ( confirm('are you sure you want to delete the column?') ){
      //iniate ajax call
      $.ajax({
        type: 'POST',
        url: url,
        data: {groupName: groupName, category1: category1, category2: category2},
        success: function(e)
        {
          $('.modal-backdrop').remove();
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
        } 
      });
    }
  }); 
  /////////////////////////////////////////
  //end of function
  /////////////////////////////////////////


  ////////////////////////////////////////////
  //fuction to dynamically delete top button
  //////////////////////////////////////////////
  $(document).on('click', '#deleteTopButton', function(e){

    e.preventDefault();

    var form = $('#deleteButton');
    var url = form.attr('action');
    var groupName = $(this).data('gpname'); // get groupname of clicked table
    var category1 = $(this).data('category1');
    var topButtonName = $(this).data('topbuttonname');
    if ( confirm('are you sure you want to delete the button?') ){
    //iniate ajax call
      $.ajax({
        type: 'POST',
        url: url,
        data: {groupName: groupName, category1: category1, topButtonName: topButtonName},
        success: function(e)
        {
          $('.modal-backdrop').remove();
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
        } 
      });
    }
  }); 
  /////////////////////////////////////////
  //end of function
  /////////////////////////////////////////


  ////////////////////////////////////////////
  //fuction to dynamically delete table
  //////////////////////////////////////////////
  $(document).on('click', '#deleteTable', function(e){

    e.preventDefault();

    var form = $('#deleteDataForm');
    var url = form.attr('action');
    var groupName = $(this).data('gpname'); // get groupname of clicked table
    var category1 = $(this).data('category1');
    var category1Data = $(this).data('category1data');
    var category2 = $(this).data('category2');
    var category2Data = $(this).data('category2data');
    var category2LinkRow = $(this).data('category2datalinkrow');
    confirm('are you sure you want to delete the data?')
    {
      //iniate ajax call
      $.ajax({
        type: 'POST',
        url: url,
        data: {groupName: groupName, category1: category1, category1Data: category1Data, category2: category2, category2Data: category2Data},
        success: function(e)
        {
          $('.modal-backdrop').remove();
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
        } 
      });
    }
  }); 
  /////////////////////////////////////////
  //end of function
  /////////////////////////////////////////


  ////////////////////////////////////////////
  //fuction to dynamically delete data
  //////////////////////////////////////////////
  $(document).on('click', '#deleteDataNoLink', function(e){

    e.preventDefault();

    var form = $('#deleteDataNoLinkForm');
    var url = form.attr('action');
    var groupName = $(this).data('gpname'); // get groupname of clicked table
    var category1 = $(this).data('category1');
    var category1Data = $(this).data('category1data');
    var category2 = $(this).data('category2');
    var category2Data = $(this).data('category2data');
    if ( confirm('are you sure you want to delete the data?') ){
      //iniate ajax call
      $.ajax({
        type: 'POST',
        url: url,
        data: {groupName: groupName, category1: category1, category1Data: category1Data, category2: category2, category2Data: category2Data},
        success: function(e)
        {
          $('.modal-backdrop').remove();
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
        } 
      });
    }
  }); 
  /////////////////////////////////////////
  //end of function
  /////////////////////////////////////////

});