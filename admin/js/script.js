$(document).ready(function() {
  var dt = new Date();
  // Display the month, day, and year. getMonth() returns a 0-based number.
  var month = dt.getMonth()+1;
  var day = dt.getDate();
  var year = dt.getFullYear();
  $('input[name=start_contract]').val(year+'-'+month+'-'+day);

  var number = parseInt($('select[name=number]').val());
  var categorys = $('select[name=categorys]').val();

  member_ajax();

   $('select[name=categorys]').change(function(event) {
     $('select[name=number]').find('option').remove();
     member_ajax();// 用於會員裡的月、年
   });

   // $('select[name=m_categorys]').change(function(event) {
   //   $('select[name=m_number]').find('option').remove();
   //   member_ajax();// 用於會員裡的月、年
   // });
   //
   // $('select[name=number]').change(function(event) {
   //   var number = parseInt($('select[name=number]').val());
   //   var categorys = $('select[name=categorys]').val();
   //   if(categorys == "月"){
   //     $('input[name=end_contract]').val(year+'-'+(month+number)+'-'+day);
   //   }else if(categorys == "年"){
   //     $('input[name=end_contract]').val((year+number)+'-'+month+'-'+day);
   //   }
   //
   // });
   //
   // $('select[name=m_number]').change(function(event) {
   //   var number = parseInt($('select[name=m_number]').val());
   //   var categorys = $('select[name=m_categorys]').val();
   //   if(categorys == "月"){
   //     $('input[name=m_end_contract]').val(year+'-'+(month+number)+'-'+day);
   //   }else if(categorys == "年"){
   //     $('input[name=m_end_contract]').val((year+number)+'-'+month+'-'+day);
   //   }
   //
   // });

function member_ajax(){
  $.ajax({
    url: '../api_console/member_categorys',
    type: 'POST',
    dataType: 'json',
    data: {
      categorys: $('select[name=categorys]').val()
    }
  })
  .done(function(ResOk) {
    // console.log(ResOk);
    $.each(ResOk, function(key, val) {
      $('select[name=number]').append('<option>'+val.number+'</option>');
      $('select[name=m_number]').append('<option>'+val.number+'</option>');
    });

    $('select[name=number]').selectpicker('refresh');
    $('select[name=m_number]').selectpicker('refresh');

  })
  .fail(function(ResError) {
    console.log("error");
  });

}

});
﻿
