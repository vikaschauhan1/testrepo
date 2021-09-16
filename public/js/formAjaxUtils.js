function checkExists(GROUP_NAME, URL, msgDivId, TOKEN) {


    return $.ajax({
        url: URL,
        data: {GROUP_NAME: GROUP_NAME, _token: TOKEN},
        type: "POST",
        async: false,
        success: function (data) {
            $("#" + msgDivId).empty();
            if (data.success) {
                $("#" + msgDivId).removeClass('hide label-danger').addClass('label-success').html(data.success);
            } else if (data.errors) {
                $("#" + msgDivId).removeClass('hide label-success').addClass('label-danger').html(data.errors);
            }
        },
        error: function () {
            $("#" + msgDivId).removeClass('hide label-success').addClass('label-danger').html('Something went wrong');
        }

    });


}

function ChangeDateField(dateValue = '', hiddenFieldId) {
    $('#'+hiddenFieldId).val(dateValue)
}
