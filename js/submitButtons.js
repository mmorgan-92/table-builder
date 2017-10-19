$(document).ready(function(){

  //create new table
  $(document).on('click', '#createNewTable', function(e){
    e.preventDefault();

    $('#dynamic-table').html(''); // leave this div blank
    $.ajax({
      url: 'modalDataFiles/newTable.php',  //do not put relitive path
      type: 'POST',
      dataType: 'html'
     })
     .done(function(data){
       console.log(data);
       $('#dynamic-table').html(''); // blank before load.
       $('#dynamic-table').html(data); // load here
     })
     .fail(function(){
       $('#dynamic-table').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
     });
    });

  //create top row button
  $(document).on('click', '#createButton', function(e){
    e.preventDefault();
    var uid = $(this).data('id'); // get id of clicked row
    var category1 = $(this).data('category1');
    $('#top-button-dynamic-content').html(''); // leave this div blank
    $.ajax({
      url: 'modalDataFiles/topButtonModalData.php',  //do not put relitive path
      type: 'POST',
      data: {id: uid, category1: category1},
      dataType: 'html'
     })
     .done(function(data){
       console.log(data);
       $('#top-button-dynamic-content').html(''); // blank before load.
       $('#top-button-dynamic-content').html(data); // load here
     })
     .fail(function(){
       $('#top-button-dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
     });
    });


    // create new column
    $(document).on('click', '#createNewColumn', function(e){

      e.preventDefault();
      var groupName = $(this).data('group'); // get groupname of clicked row
      var category1 = $(this).data('category1'); // get category1 of clicked row

      $('#new-column-dynamic-content').html(''); // leave this div blank

      $.ajax({
        url: 'modalDataFiles/newColumnData.php',  //do not put relitive path
        type: 'POST',
        data: {groupName: groupName, category1: category1},
        dataType: 'html'
      })
      .done(function(data){
        console.log(data);
        $('#new-column-dynamic-content').html(''); // blank before load.
        $('#new-column-dynamic-content').html(data); // load here
      })
      .fail(function(){
        $('#new-column-dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
      });
    });

    //create new main column
    $(document).on('click', '#createNewMainColumn', function(e){

     e.preventDefault();
     var groupName = $(this).data('group'); // get groupname of clicked row
     var category1 = $(this).data('category1'); // get category1 of clicked row

     $('#new-main-column-dynamic-content').html(''); // leave this div blank

     $.ajax({
       url: 'modalDataFiles/newMainColumnData.php',  //do not put relitive path
       type: 'POST',
       data: {groupName: groupName, category1: category1},
       dataType: 'html'
     })
     .done(function(data){
       console.log(data);
       $('#new-main-column-dynamic-content').html(''); // blank before load.
       $('#new-main-column-dynamic-content').html(data); // load here

     })
     .fail(function(){
       $('#new-main-column-dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
     });
   });

   //create new table data
   $(document).on('click', '#createTableData', function(e){

    e.preventDefault();
    var groupName = $(this).data('group'); // get groupname of clicked row
    var category1 = $(this).data('category1'); // get category1 of clicked row
    var category1Data = $(this).data('info');
    var category2 = $(this).data('category2'); // get category2 of clicked row

    $('#new-data-dynamic-content').html(''); // leave this div blank

    $.ajax({
      url: 'modalDataFiles/newTableData.php',  //do not put relitive path
      type: 'POST',
      data: {groupName: groupName, category1: category1, category1Data: category1Data, category2: category2},
      dataType: 'html'
    })
    .done(function(data){
      console.log(data);
      $('#new-data-dynamic-content').html(''); // blank before load.
      $('#new-data-dynamic-content').html(data); // load here
    })
    .fail(function(){
      $('#new-data-dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
    });
  });

  //add link to data modal
  $(document).on('click', '#addLinkBtn', function(e){
    e.preventDefault();
    $('#linkDiv').show(2000);
  });


//add row to table
$(document).on('click', '#addRow', function(e){
  e.preventDefault();
  var markup = "<tr><td><div class='row'><div class='col-sm-12'><div class='form-group' id='groupName'><label for='columnName'>Column Name:</label><input type='text' required class='form-control' name='columnName[]'></div></div></div></td></tr>";
  $('#dataTable').append(markup);
});

});
