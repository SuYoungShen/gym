$('.js-modal-buttons .btn').on('click', function () {
  var color = $(this).data('color');
  $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
  $('#mdModal').modal('show');
});

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


$('.member').on('click', function () {
  var color = $(this).data('color');
  $('#largeModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);

  var url = "../api_console/member";
  var id = $(this).data('id');
  get_member_ajax(url, id);// 取得會員資料

  $('#largeModal').modal('show');
  $('button[name=delete]').click(function(event) {
    de_data(url, id, 'member');
  });
});

var m_number = $('select[name=m_number]');
var m_categorys = $('select[name=m_categorys]');
var m_dp = $('input[name=m_discount_price]');

$(m_categorys).change(function(event) {
  $(m_number).find('option').remove();
  if(m_categorys.val() == "張"){

    $(m_number).selectpicker('hide'); // 隱藏選項
    $(".m_categorys").text("張"); //把會籍->張
    $(".m_count").removeClass('hidden'); // 移除張數hidden class
    $("input[name=m_count]").attr('type', 'number'); // 把張數原input hidden -> number
    $("input[name=m_start_contract], input[name=m_end_contract], input[name=m_next_pay]").val("").attr("disabled", "disabled");

    $(m_dp).val(''); // 變換月、年時，價位變空

  }else{

    $(m_number).selectpicker('show');
    $(".m_categorys").text("會籍");
    $(".m_count").addClass('hidden');
    $("input[name=m_count]").attr('type', 'hidden');
    $("input[name=m_start_contract], input[name=m_end_contract], input[name=m_next_pay]").removeAttr("disabled", "disabled");

    $(m_number).find('option').remove();
    $(m_dp).val(''); // 變換月、年時，價位變空
    member_categorys(m_number, m_categorys);// 用於會員裡的月、年
  }

});
// 更改會籍數字時，方案價位也隨著變換
$("select[name=m_number]").change(function(event) {
  dp($(this));
});

// 優惠方案價位
function dp(number){
  //方案的id
  var id = $(number).val();

  $.ajax({
    url: '../api_console/member_d_p',
    type: 'POST',
    dataType: 'JSON',
    data: {
      id: id
    }
  })
  .done(function(ResOk) {
    $('input[name=m_discount_price]').val(ResOk[0]['discount_price']);
  })
  .fail(function(ResError) {
    console.log("error");
  });
}
// 優惠方案價位

// 優惠方案分類
function member_categorys(number, categorys, m_dp_id){
  $('select[name=m_number]').find('option').remove();
  $.ajax({
    url: '../api_console/member_categorys',
    type: 'POST',
    dataType: 'json',
    data: {
      categorys: categorys.val()
    }
  })
  .done(function(ResOk) {
    // console.log(ResOk);
    $.each(ResOk, function(key, val) {
      $(number).append('<option value='+val.id+'>'+val.number+'</option>');
    });
    dp(number);
    $(number).selectpicker('val', m_dp_id); // 利用ID選擇會籍的數字
    $(number).selectpicker('refresh');

  })
  .fail(function(ResError) {
    console.log("error");
  });
}
// 優惠方案分類

// 用ajax傳資料並取得
function get_member_ajax(url, id){
  $.ajax({
    url: url,
    type: 'POST',
    data: {
      rule: 'select',
      id: id
    },
    dataType: "json",
    success: function(ResOk){
      var m_number = $('select[name=m_number]');
      var m_categorys = $('select[name=m_categorys]');
      $("input[name=m_card_id]").val(ResOk.card_id);
      $("input[name=m_name]").val(ResOk.name);
      $("input[name=m_identity_card]").val(ResOk.identity_card);
      $("input[name=m_birthday]").val(ResOk.birthday);
      $("input[name=m_phone]").val(ResOk.phone);
      $("input[name=m_email]").val(ResOk.email);
      $("input[name=m_address]").val(ResOk.address);
      $("input[name=m_start_contract]").val(ResOk.start_contract);
      $("input[name=m_end_contract]").val(ResOk.end_contract);
      $("input[name=m_next_pay]").val(ResOk.next_pay);
      $("input[name=m_emergency_contact]").val(ResOk.emergency_contact);
      $("input[name=m_emergency_phone]").val(ResOk.emergency_phone);

      $(m_categorys).selectpicker('val', ResOk.categorys);// 月、年、票卷
      if(ResOk.categorys == "張"){
        $(m_number).selectpicker('hide'); // 隱藏選項
        $(".m_categorys").text("張"); //把會籍->張
        $(".m_count").removeClass('hidden'); // 移除張數hidden class
        $("input[name=m_count").val(ResOk.number);
        $("input[name=m_count]").attr('type', 'number'); // 把張數原input hidden -> number
        $("input[name=m_start_contract], input[name=m_end_contract], input[name=m_next_pay]").attr("disabled", "disabled");
        $(m_dp).val(''); // 變換月、年時，價位變空
      }else{
        $(m_number).selectpicker('show');
        $(".m_categorys").text("會籍");
        $(".m_count").addClass('hidden');
        $("input[name=m_count]").attr('type', 'hidden');
        $("input[name=m_start_contract], input[name=m_end_contract], input[name=m_next_pay]").removeAttr("disabled", "disabled");
        $(m_number).find('option').remove();
      }
      m_dp_id = ResOk.dp_id;
      // alert(ResOk.dp_id);
      // console.log(ResOk);
      member_categorys(m_number, m_categorys, m_dp_id);

      // $("input[name=m_discount_price]").val(ResOk.price);

      if(ResOk.pics.search('.jpg') == -1 && ResOk.pics.search('.png') == -1 &&
      ResOk.pics.search('.jpeg') == -1){ // 等於-1表示沒照片
        ResOk.pics = '../assets/images/default.png';
      }else{
        ResOk.pics = '../assets/images/m_pics/'+ResOk.pics;
      }

      $('#m_blah').attr('src', ResOk.pics);
      $(m_categorys).selectpicker('refresh');
    },
    error: function(ResError){
      console.log('Error');
      console.log(ResError);
    }
  });
}

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
      $("input[name=m_name]").val(ResOk.staff_name);
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
      closeOnConfirm: true,
      closeOnCancel: true
  }, function (isConfirm) {
      if (isConfirm) {
        // test();
        ajax(url, id, urls);
      }
  });
}
function test(){
  alert('s');
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
      console.log(ResError);
    }
  });
}
