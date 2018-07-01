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
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
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
                                      <?php foreach ($data as $key => $value){ ?>
                                        <tr>
                                          <td><?=$value['card_id'];?></td>
                                          <td><?=$value['name'];?></td>
                                          <td><?=$value['staff'];?></td>
                                          <td><?=$value['types']==0?"進場":"出場";?></td>
                                          <td><?=$value['in_date'].' '.$value['in_time'];?></td>
                                          <td><?=$value['out_date'].' '.$value['out_time'];?></td>
                                        </tr>
                                      <?php } ?>
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
