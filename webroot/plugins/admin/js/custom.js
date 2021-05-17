/**
 * Created by haidv on 07/09/2018.
 */
$("#frmSearch input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("#frmSearch").submit();
    }
});

function doSearch(event) {
    $("#frmSearch").submit();
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var file = input.files[0];
        var fileType = file["type"];
        var ValidImageTypes = ["image/jpeg", "image/png", "image/jpg"];
        if ($.inArray(fileType, ValidImageTypes) >= 0 ) {
            if (file['size'] <= 5048000){
                hasImgError('',$(input).parent().parent(), false);
                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = '<img height="100" src="'+e.target.result+'">';
                    $(input).parent().parent().append('<div class="img_pre"></div>');
                    $(input).parent().parent().find('.img_pre').html(img);
                    $(input).parent().parent().find('.old_img').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }else{
                hasImgError('Tải ảnh không quá 5Mb.',$(input).parent().parent(), true);
            }
        }else{
            hasImgError('Xin vui lòng nhập định dạng ảnh [.png, .jpeg, .jpg]', $(input).parent().parent(), true);
        }
    }
}

function imgUpload(elm){
    $(elm).parent().parent().find('.img_pre').remove();
    readURL(elm);
}

function hasImgError(message, parent ,isError) {

    parent.find('.error-message').hide();
    if (isError){
        parent.append('<div class="mess-error"></div>');
        parent.find('input').addClass('form-error');
        parent.find('.mess-error').html(message);
        $('.btn-submit').attr('disabled', true);
    }else{
        parent.find('input').removeClass('form-error');
        parent.find('.mess-error').html('');
        $('.btn-submit').attr('disabled', false);
    }
}