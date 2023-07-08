<script>

    $(document).on('click' , '.delete-row', function (e) {
        rowId = $(this).data('id');
        console.log(rowId, $(this).data('url'));

        e.preventDefault()
        Swal.fire({
            title: "هل انت متاكد من عمليه الحذف ؟",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'تأكيد',
            confirmButtonClass: 'btn btn-primary',
            cancelButtonText: 'الغاء',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: true,

            }).then( (result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: $(this).data('url'),
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    dataType: "json",
                    success:  (response) => {
                        $('#row-' + rowId).remove();

                        Swal.fire(
                        {
                            position: 'top-start',
                            type: 'success',
                            title: 'تم الحذف بنجاح',
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: 'btn btn-primary',
                            buttonsStyling: false,
                        })
                    }
                });
            }
        })
    });
</script>
