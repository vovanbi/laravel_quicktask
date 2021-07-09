
$(document).ready(function()
{
    $.ajaxSetup({
        headers :{
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.btn-del').on('click', function(e){
         e.preventDefault()
         var option = confirm('Do you want to delete this task?');
         if(!option) {
            return;
         }
         var id = $(this).data('id')
         $.ajax({
            type:'DELETE',
            url : '/task/'+id,
            success : function(data)
            {
               $('#task-' + id).remove()
            }
        })
    });
});

