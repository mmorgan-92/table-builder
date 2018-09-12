$(document).ready(function(){

  /////////////////////////////////////////
  //fuction to dynamically create a new row
  /////////////////////////////////////////
  $(document).on('click', '#newProductSubmit', function(e){

    e.preventDefault();

    var form = $('#newProductForm');
    var url = form.attr('action');
    var groupName = $(this).data('gpname'); // get groupname of clicked table

    //initate ajax call and submit the form
    $.ajax({
      type: 'POST',
      url: url,
      data: form.serialize(),
      success: function(e)
      {
        $('#newMainColumnModal').modal('toggle');
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
  });
  /////////////////////////////////////////
  //end of function
  /////////////////////////////////////////


  /////////////////////////////////////////
  //fuction to dynamically change row name
  /////////////////////////////////////////
  $(document).on('click', '#changeProdcutSubmit', function(e){

    e.preventDefault();

    var form = $('#changeForm');
    var url = form.attr('action');
    var groupName = $(this).data('gpname'); // get groupname of clicked table

    //initate ajax call and submit the form
    $.ajax({
      type: 'POST',
      url: url,
      data: form.serialize(),
      success: function(e)
      {
        $('#newMainColumnModal').modal('toggle');
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
  });
  /////////////////////////////////////////
  //end of function
  /////////////////////////////////////////

    ////////////////////////////////////////////
  //fuction to dynamically create a new column
  //////////////////////////////////////////////
  $(document).on('click', '#newColumnSubmit', function(e){

    e.preventDefault();

    var form = $('#newColumnForm');
    var url = form.attr('action');
    var groupName = $(this).data('gpName'); // get groupname of clicked table

    //iniate ajax call
    $.ajax({
      type: 'POST',
      url: url,
      data: form.serialize(),
      success: function(e)
      {
        $('#newColumnModal').modal('toggle');
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
  }); 
  /////////////////////////////////////////
  //end of function
  /////////////////////////////////////////


  ////////////////////////////////////////////
  //fuction to dynamically create top button
  //////////////////////////////////////////////
  $(document).on('click', '#submitTopButton', function(e){

    e.preventDefault();

    var form = $('#topButtonForm');
    var url = form.attr('action');
    var groupName = $(this).data('gpname'); // get groupname of clicked table

    //iniate ajax call
    $.ajax({
      type: 'POST',
      url: url,
      data: form.serialize(),
      success: function(e)
      {
        $('#newMainColumnModal').modal('toggle');
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
  }); 
  /////////////////////////////////////////
  //end of function
  /////////////////////////////////////////


  ////////////////////////////////////////////
  //fuction to dynamically create new data
  //////////////////////////////////////////////
  $(document).on('click', '#newTableDataSubmit', function(e){

    e.preventDefault();

    var form = $('#newTableDataForm');
    var url = form.attr('action');
    var groupName = $(this).data('gpname'); // get groupname of clicked table

    //iniate ajax call
    $.ajax({
      type: 'POST',
      url: url,
      data: form.serialize(),
      success: function(e)
      {
        $('#newMainColumnModal').modal('toggle');
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
  }); 
  /////////////////////////////////////////
  //end of function
  /////////////////////////////////////////

});

