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

    var url = "../api_console/offer";
    var id = $(this).data('id');
    get_offer_ajax(url, id);

    $('#mdModal').modal('show');
    $('button[name=delete]').click(function(event) {
      de_data(url, id, 'offer');
    });
  });
});

// 用ajax傳資料並取得
function get_offer_ajax(url, id){
  $.ajax({
    url: url,
    type: 'POST',
    data: {
      rule: 'select',
      id: id
    },
    dataType: "json",
    success: function(ResOk){

      $("input[name=m_id]").val(ResOk.id);
      $("input[name=m_number]").val(ResOk.number);
      $("input[name=m_original_price]").val(ResOk.price);
      $("input[name=m_discount]").val(ResOk.discount);
      $("input[name=m_after_discount]").val(ResOk.discount_price);
      $("select[name=m_categorys] option[value="+ResOk.types+"]").attr('selected', 'selected');
      $('#m_categorys').selectpicker('refresh');
    },
    error: function(ResError){
      console.log('Error');
      console.log(resError);
    }
  });
}

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

    var url = "../api_console/staff";
    var id = $(this).data('id');

    get_staff_ajax(url, id);
    $('#largeModal').modal('show');
    $('button[name=delete]').click(function(event) {
      de_data(url, id, 'staff');
    });
  });
});

// 用ajax傳資料並取得
function get_staff_ajax(url, id){
  $.ajax({
    url: url,
    type: 'POST',
    data: {
      rule: 'select',
      id: id
    },
    dataType: "json",
    success: function(ResOk){
      $("input[name=m_id]").val(ResOk.id);
      $("input[name=m_job_code]").val(ResOk.job_code);
      $("input[name=m_name]").val(ResOk.name);
      $("input[name=m_passwd]").val(ResOk.password);
      $("input[name=m_birthday]").val(ResOk.birthday);
      $("input[name=m_phone]").val(ResOk.phone);
      $("input[name=m_emergency_contact]").val(ResOk.emergency_contact);
      $("input[name=m_emergency_phone]").val(ResOk.emergency_phone);
      $("input[name=m_address]").val(ResOk.address);
      $("select[name=m_identity] option[value="+ResOk.identity+"]").attr('selected', 'selected');
      $('select[name=m_identity]').selectpicker('refresh');
    },
    error: function(ResError){
      console.log('Error');
      console.log(resError);
    }
  });
}

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



function de_data(url, id, urls){
  swal({
      title: "確定要刪除嗎?",
      text: "",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "是的!刪除!",
      cancelButtonText: "關閉",
      closeOnConfirm: false,
      closeOnCancel: false
  }, function (isConfirm) {
      if (isConfirm) {
        ajax(url, id, urls);
      }
  });
}

function ajax(url, id, urls){
  $.ajax({
    url: url,
    type: 'POST',
    data: {
      rule: 'delete',
      id: id
    },
    dataType: "json",
    success: function(ResOk){
      swal({
          title: ResOk.msg,
          text: "",
          type: "success",
          confirmButtonColor: "#1f91f3",
          confirmButtonText: "確認",
          closeOnConfirm: false,
          closeOnCancel: false
      }, function (isConfirm) {
          if (isConfirm) {
            document.location.href = "http://localhost/gym/console/"+urls;
          }
      });
    },
    error: function(ResError){
      console.log('Error');
      console.log(resError);
    }
  });
}
