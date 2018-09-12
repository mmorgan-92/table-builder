$(document).ready(function(){

    setInterval(ajaxCall, 300000); //300000 MS == 5 minutes
});
    function ajaxCall() {
        $.ajax({
            url: 'checkSession.php',  //do not put relitive path
            type: 'GET'
           })
           .done(function(data){
               if(data == 'kill'){
                window.location.replace("logOut.php");
               }
           })
           .fail(function(){
             alert("someting went wrong");
           });
    };
