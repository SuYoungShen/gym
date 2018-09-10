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
                                <table class="table table-bordered table-striped table-hover dataTable sort-exportable">
                                    <thead>
                                        <tr>
                                            <th>會員名</th>
                                            <th>手機</th>
                                            <th>下次繳款日</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>會員名</th>
                                          <th>手機</th>
                                          <th>下次繳款日</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php foreach ($data as $key => $value){ ?>
                                        <tr data-id="<?=$value['card_id'];?>" class="month_pay">
                                          <td><?=$value['name'];?></td>
                                          <td><?=$value['phone'];?></td>
                                          <td><?=$value['next_pay'];?></td>
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
    <style media="screen">
    /* 彈跳視窗置中 */
    .modal {
      text-align: center;
      padding: 0!important;
    }

    .modal:before {
      content: '';
      display: inline-block;
      height: 100%;
      vertical-align: middle;
      margin-right: -4px;
    }

    .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }
    </style>
    <!-- 彈跳視窗 -->
    <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
       <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" id="defaultModalLabel">修改下次繳款日</h4>
               </div>
               <form id="form_validation" method="POST">
                 <div class="modal-body">
                   <div class="row clearfix">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                       <div class="form-group">
                         <div class="input-group input-group-lg">
                           <input type="hidden" name="rule" value="update">
                           <input type="hidden" name="m_id" value="">
                           <span class="input-group-addon">
                             <i class="material-icons">person</i>
                           </span>
                           <div class="form-line">
                             <input type="text" class="form-control mobile-phone-number" name="m_name" placeholder="請輸入姓名" readonly>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                       <div class="form-group">
                         <div class="input-group input-group-lg">
                           <span class="input-group-addon">
                             <i class="material-icons">smartphone</i>
                           </span>
                           <div class="form-line">
                             <input type="text" class="form-control mobile-phone-number" name="m_phone" placeholder="Ex: (00)00-000-000" readonly>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                       <div class="form-group">
                         <div class="input-group input-group-lg">
                           <span class="input-group-addon">
                             <i class="material-icons">date_range</i>
                           </span>
                           <div class="form-line">
                             <input type="date" class="form-control mobile-phone-number" name="m_next_pay" placeholder="請輸入下次繳款日" required>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="modal-footer">
                   <div class="row clearfix">
                     <div class="col-lg-12">
                       <button class="btn btn-block btn-lg btn-success waves-effect" type="submit">更新</button>
                     </div>
                   </div>
                 </div>
             </form>
           </div>
       </div>
   </div>
