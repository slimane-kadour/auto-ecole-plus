$(document).ready(fuction(){

      $('a').click(function(){

           var id = $(this).attr('id');
          
           $('#form'+id).show();

     });
        });