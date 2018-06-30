    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>
            <!-- Input Group -->
            <?php
            if($this->session->userdata('login_identity') == 0 ||
              $this->session->userdata('login_identity') == 99){ ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>新增員工基本資料</h2>
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
                          <form id="form_validation" method="POST">
                            <div class="demo-masked-input">
                              <div class="row clearfix">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">person</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="hidden" name="rule" value="insert">
                                        <input type="text" class="form-control" name="job_code" placeholder="請輸入職編" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">person</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="text" class="form-control" name="name" placeholder="請輸入姓名" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">fingerprint</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="password" class="form-control" name="passwd" placeholder="請輸入密碼" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row clearfix">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">cake</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="text" class="form-control date" name="birthday" placeholder="請輸入生日" >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">phone_iphone</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="text" class="form-control mobile-phone-number" name="phone" placeholder="Ex: (00)00-000-000" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">signal_cellular_4_bar</i>
                                      </span>
                                      <select class="form-control show-tick" name="identity">
                                        <option value="0">Boss</option>
                                        <option value="1" selected>員工</option>
                                        <option value="99">系統管理員</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row clearfix">
                                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">room</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="text" class="form-control" name="address" placeholder="請輸入地址" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row clearfix">
                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">person</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="text" class="form-control" name="emergency_contact" placeholder="請輸入緊急聯絡人">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">phone_iphone</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="text" class="form-control mobile-phone-number" name="emergency_phone" placeholder="請輸入緊急聯絡人電話">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row clearfix">
                              <div class="col-lg-6">
                                <button class="btn btn-block btn-lg btn-primary waves-effect" type="submit">送出</button>
                              </div>
                              <div class="col-lg-6">
                                <button class="btn btn-block btn-lg bg-red waves-effect" type="reset">重設</button>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
          <?php } ?>
            <!-- 彈跳視窗 -->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
               <div class="modal-dialog modal-lg" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h4 class="modal-title" id="defaultModalLabel">員工資料</h4>
                       </div>
                       <form id="form_validation" method="POST">
                         <div class="modal-body">
                           <div class="demo-masked-input">
                             <div class="row clearfix">
                               <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">person</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="hidden" name="rule" value="update">
                                       <input type="hidden" name="m_id" value="">
                                       <input type="text" class="form-control" name="m_job_code" placeholder="請輸入職編" required>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">person</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="text" class="form-control" name="m_name" placeholder="請輸入姓名" required>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">fingerprint</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="password" class="form-control" name="m_passwd" placeholder="請輸入密碼" required>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div>
                             <div class="row clearfix">
                               <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">cake</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="text" class="form-control date" name="m_birthday" placeholder="請輸入生日" >
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">phone_iphone</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="text" class="form-control mobile-phone-number" name="m_phone" placeholder="Ex: (00)00-000-000" required>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">signal_cellular_4_bar</i>
                                     </span>
                                     <select class="form-control show-tick" name="m_identity">
                                       <option value="0">老闆</option>
                                       <option value="1">員工</option>
                                       <option value="99">系統管理員</option>
                                     </select>
                                   </div>
                                 </div>
                               </div>
                             </div>
                             <div class="row clearfix">
                               <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">room</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="text" class="form-control" name="m_address" placeholder="請輸入地址" required>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div>

                             <div class="row clearfix">
                               <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">person</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="text" class="form-control" name="m_emergency_contact" placeholder="請輸入緊急聯絡人">
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">phone_iphone</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="text" class="form-control mobile-phone-number" name="m_emergency_phone" placeholder="請輸入緊急聯絡人電話">
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="modal-footer">
                           <div class="row clearfix">
                             <div class="col-lg-<?=$this->session->userdata('login_identity')==1?"12":"6";?>">
                               <button class="btn btn-block btn-lg btn-success waves-effect" type="submit">更新</button>
                             </div>
                             <?php if($this->session->userdata('login_identity') != 1){ ?>
                               <div class="col-lg-6">
                                 <button class="btn btn-block btn-lg bg-red waves-effect" type="button" name="delete">刪除</button>
                               </div>
                             <?php } ?>
                           </div>
                         </div>
                     </form>
                   </div>
               </div>
           </div>
           <!-- 彈跳視窗 -->

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><?=$title;?></h2>
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
                                            <th>職編</th>
                                            <th>姓名</th>
                                            <!-- <th>密碼</th> -->
                                            <th>生日</th>
                                            <th>手機</th>
                                            <th>身分</th>
                                            <th>緊急聯絡人</th>
                                            <th>聯絡人電話</th>
                                            <th>加入時間</th>
                                            <th>更新時間</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>職編</th>
                                          <th>姓名</th>
                                          <!-- <th>密碼</th> -->
                                          <th>生日</th>
                                          <th>手機</th>
                                          <th>身分</th>
                                          <th>緊急聯絡人</th>
                                          <th>聯絡人電話</th>
                                          <th>加入時間</th>
                                          <th>更新時間</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php foreach ($data as $key => $value) { ?>
                                        <tr class="staff" data-id="<?=$value['id'];?>">
                                          <td><?=$value['job_code'];?></td>
                                          <td><?=$value['name'];?></td>
                                          <td><?=$value['birthday'];?></td>
                                          <td><?=$value['phone'];?></td>
                                          <td>
                                            <?php
                                              if ($value['identity'] == 0) {
                                                echo "老闆";
                                              }else if ($value['identity'] == 1) {
                                                echo "員工";
                                              }else if ($value['identity'] == 99) {
                                                echo "系統管理員";
                                              }
                                            ?>
                                          </td>
                                          <td><?=$value['emergency_contact'];?></td>
                                          <td><?=$value['emergency_phone'];?></td>
                                          <td><?=$value['join_date'].' '.$value['join_time'];?></td>
                                          <td><?=$value['up_date'].' '.$value['up_time'];?></td>
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
