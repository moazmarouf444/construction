<script>
    // // ADD IMAGE
    $(document).on("change", ".upload_imgone input[type='file']", function (event) {
        $(this).parents(".upload_imgone").append('<div class="uploaded-block"><img src="' + URL.createObjectURL(event.target.files[0]) + '"><span class="close">x</span></div>');
    });
    // REMOVE IMAGE
    $(document).on('click', '.upload_imgone .close', function () {
        $(this).parents('.upload_imgone').find("input[type='file']").val("");
        $(this).parents('.uploaded-block').remove();
    });
</script>
