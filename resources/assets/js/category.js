$(document).ready(function() {
    $('.delete-category').on('click', function() {
        var categoryId = $(this).data('category-id');
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then(function() {
            $.ajax({
                type: 'GET',
                url: '/?controller=category&action=destroy',
                data: {
                    id: categoryId
                },
                success: function() {
                    swal("Successful!", "Your category was successfully canceled!", "success");
                    location.reload();
                }
            })
        })
    });
});