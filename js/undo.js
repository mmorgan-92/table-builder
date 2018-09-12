$(document).ready(function(){

    $(document).on('click', '#undo', function(e){

        e.preventDefault();
        $ajax({
            type: 'GET',
            url: 'undo.php'
        })
        .done(function(){

        })
        .fail(function(){
            alert("failed to undo");
        });
    });
    
    $(document).on('click', '#rollback', function(e){

        e.preventDefault();
        $ajax({
            type: 'GET',
            url: 'rollback.php'
        })
        .done(function(){

        })
        .fail(function(){
            alert("failed to undo");
        });
    });
});


