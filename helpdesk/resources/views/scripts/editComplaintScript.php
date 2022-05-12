<script type="text/javascript">
    $('#school_id').select2();

    $(function () {
        $("select[name='asset_model']").each(function () {
            var selectedVal = $(this).prev("input[type='hidden']").val();
            if (selectedVal != "") {
                $(this).val(selectedVal);
            }
        })
    })

    $(function () {
        $("select[name='status']").each(function () {
            var selectedVal = $(this).prev("input[type='hidden']").val();
            if (selectedVal != "") {
                $(this).val(selectedVal);
            }
        })
    })
</script>
