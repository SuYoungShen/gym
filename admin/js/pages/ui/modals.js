$(function () {
    $('.js-modal-buttons .btn').on('click', function () {
        var color = $(this).data('color');
        $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
        $('#mdModal').modal('show');
    });
});

$(function () {
  $('.offer').on('click', function () {
    var color = $(this).data('color');
    $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
    $('#mdModal').modal('show');
  });
});

$(function () {
  $('.member').on('click', function () {
    var color = $(this).data('color');
    $('#largeModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
    $('#largeModal').modal('show');
  });
});

$(function () {
  $('.staff').on('click', function () {
    var color = $(this).data('color');
    $('#largeModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
    $('#largeModal').modal('show');
  });
});
// 上傳圖片並顯示 in 20180617
function m_readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#m_blah').attr('src', e.target.result).addClass('img-responsive').css('width', '50%');
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#m_imgInp").change(function() {
  m_readURL(this);
});
