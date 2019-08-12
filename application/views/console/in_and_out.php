<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    <!-- JQUERY DATATABLES -->
                    <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                </h2>
            </div>

          <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><?=$title?></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-sort4table">
                                    <thead>
                                        <tr>
                                            <th>卡號</th>
                                            <th>會員姓名</th>
                                            <th>員工刷入</th>
                                            <th>狀態</th>
                                            <th>進場時間</th>
                                            <th>出場時間</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>卡號</th>
                                          <th>會員姓名</th>
                                          <th>員工刷入</th>
                                          <th>狀態</th>
                                          <th>進場時間</th>
                                          <th>出場時間</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
    <script type="text/javascript">

        showData(<?=json_encode($data); ?>);
        var options = "";

        var today=new Date();
        var tYear = today.getFullYear();

        for (var i = tYear; i >= 2017; i--) {
          options += "<option value="+i+">"+i+"</option>";
        }

        $(
          '<div class="">選擇' +
          '<select class="form-control" id="year">'+
          options+
          '</select>'+
          '年份</div>'
        ).appendTo("#DataTables_Table_0_wrapper .row .col-sm-6:first");


        $("#year").change(function(){
          reload();
        });

        // 重新載入資料
        function reload(){

          $('.js-sort4table').DataTable().clear().draw(); // clear =  清除當前資料
          $('.js-sort4table').DataTable( {
            destroy: true, // 重新初始化表格
            ajax: {
              url: "../api_console/in_and_out",
              type: "POST",
              data: {
                "year": $("#year").val()
              },
              dataSrc: ""
            },
            lengthChange: false, // 關閉每頁顯示幾筆夏拉
            responsive: true,
            order: [[ 4, "desc" ]]
          });
        }

    function showData(getData, year=""){

      var data = [];
      $.each(getData, function(key, value) {
        data.push([
          value.card_id,
          value.name,
          value.staff,
          value.types==0?"進場":"出場",
          value.in_date!=null?value.in_date:" "+" "+value.in_time!=null?value.in_time:" ",
          value.out_date!=null?value.out_date:" "+" "+value.out_time!=null?value.out_time:" "
        ]);
      });

      var tables = $('.js-sort4table').DataTable({
        retrieve: true,
        // destroy:true,
        data: data,
        lengthChange: false,
        responsive: true,
        order: [[ 4, "desc" ]]
      });
    }
    </script>
