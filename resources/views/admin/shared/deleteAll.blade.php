<script>
    $('.delete_all_button').hide()
    $(document).on('change', '#todoAll', function () {
        if (this.checked) {
            // setTimeout(function (){
            $(".checkSingle").each(function (index, element) {
                this.checked = true;
                $('.delete_all_button').show()

            })
            // },500);
        } else {
            $(".checkSingle").each(function () {
                this.checked = false;
                $('.delete_all_button').hide()
            })
        }
    });
    $(document).on('click', '.checkSingle', function () {
        if ($(this).is(":checked")) {
            var isAllChecked = 0;
            $(".checkSingle").each(function () {
                if (!this.checked)
                    isAllChecked = 1;
            })
            if (isAllChecked == 0) {
                $("#todoAll").prop("checked", true);
            }
            $('.delete_all_button').show()
        } else {
            var count = 0;
            $(".checkSingle").each(function () {
                if (this.checked)
                    count++;
            })
            if (count > 0) {
                $('.delete_all_button').show()
            } else {
                $('.delete_all_button').hide()
            }
            $("#todoAll").prop("checked", false);
        }
    });
    $('.delete_all_button').on('click', function (e) {
        e.preventDefault()
        Swal.fire({
            title: "هل انت متاكد من عمليه حذف المحدد ؟",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'تأكيد',
            confirmButtonClass: 'btn btn-primary',
            cancelButtonText: 'الغاء',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then((result) => {
            if (result.value) {
                var usersIds = [];
                $('.checkSingle:checked').each(function () {
                    var id = $(this).attr('id');
                    usersIds.push(id);
                });
                console.log(usersIds);

                var requestData = JSON.stringify(usersIds);
                if (usersIds.length > 0) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: $(this).data('route'),
                        data: {
                            "_token": "{{ csrf_token() }}",
                            data: requestData
                        },

                        success: function (msg) {
                            usersIds.forEach((id) => {
                                console.log('id : ' + id);
                                $('#row-' + id).remove();
                            });
                            if (msg == 'success') {
                                $('.delete_all_button').hide()
                                Swal.fire(
                                    {
                                        position: 'top-start',
                                        type: 'success',
                                        title: 'تم حذف المحدد بنجاح',
                                        showConfirmButton: false,
                                        timer: 1500,
                                        confirmButtonClass: 'btn btn-primary',
                                        buttonsStyling: false,
                                    })
                                // $('.checkSingle:checked').each(function () {
                                //     $('.data-list-view').DataTable().row($(this).closest('td').parent('tr')).remove().draw();
                                // });
                            }
                        }
                    });
                }
            }
        })
    });

</script>
