$(window).ready(function() 
{
   if ($('.btn-delete').length) 
   {
      /* On delete button click */
      $('.btn-delete').click(function() 
      {
         /* include data from id, form, action and row*/
         var id = $(this).data('id');
         var form = $('#form-delete');
         var action = form.attr('action').replace('TASK_ID', id);
         var row =  $(this).parents('tr');

         /* remove row on page */
         row.fadeOut(300);

         /* use ajax to submit the form */
         $.post(action, form.serialize(), function(result) 
         {
            if (result.success) 
            {
               setTimeout (function () 
               {
                  /* remove row on db*/
                  row.delay(600).remove();
                  alert(result.msg);
               }, 600);            
            } 
            else 
            {
               row.show();
            }
         }, 'json');
      });
   }
});
