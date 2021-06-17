$(document).ready(function(){
          
          $('#sendMessage').on('click', function(){
             $.ajax({
                  url:'users_table.php',
                  method:'post',
                  data:$('#users').serialize(),
                  success:function(data){
                        //   Sucess Response
                                         
                  }, 
                  error: function(){
                        //Error Response
                  }
               })
           });

});
