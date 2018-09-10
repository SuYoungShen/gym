$('.sort-exportable').DataTable({
  dom: 'Bfrtip',
  responsive: true,
  buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print'
  ],
  "order": [[
    2, 'asc'
  ]]
});
/*****************************
        當月繳費名單
*****************************/
$('.month_pay').on('click', function () {
  var color = $(this).data('color');
  $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);

  var url = "../api_console/month_pay";
  var id = $(this).data('id');

  get_month_pay_ajax(url, id);

  $('#mdModal').modal('show');
});

// 用ajax傳資料並取得
function get_month_pay_ajax(url, id){
  $.ajax({
    url: url,
    type: 'POST',
    data: {
      rule: 'select',
      id: id
    },
    dataType: "json",
    success: function(ResOk){

      $("input[name=m_id]").val(ResOk.card_id);
      $("input[name=m_name]").val(ResOk.name);
      $("input[name=m_phone]").val(ResOk.phone);
      $("input[name=m_next_pay").val(ResOk.next_pay);
    },
    error: function(ResError){
      console.log('Error');
      console.log(resError);
    }
  });
}
