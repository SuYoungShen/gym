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
                                            <th>誰登入</th>
                                            <th>登入日期</th>
                                            <th>登入時間</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>誰登入</th>
                                          <th>登入日期</th>
                                          <th>登入時間</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php foreach ($data as $key => $value){ ?>
                                        <tr>
                                          <td><?=$value['name'];?></td>
                                          <td><?=$value['sign_in_date'];?></td>
                                          <td><?=$value['sign_in_time'];?></td>
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
