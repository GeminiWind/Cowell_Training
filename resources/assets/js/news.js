$(document).ready(function() {
    $('.delete-new').on('click', function() {
        var newId = $(this).data('new-id');
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this new!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then(function() {
            $.ajax({
                type: 'GET',
                url: '/?controller=new&action=destroy',
                data: {
                    id: newId
                },
                success: function() {
                    swal("Successful!", "Your new was successfully canceled!", "success");
                    location.reload();
                }
            })
        })
    });
});