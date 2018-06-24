    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>

            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?=$title;?>
                            </h2>
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
                          <form id="form_validation" method="POST" enctype="multipart/form-data">
                            <div class="demo-masked-input">
                              <div class="row clearfix">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">credit_card</i>
                                      </span>
                                      <select class="form-control show-tick" name="card_id">
                                        <?php foreach ($card_id as $key => $value){ ?>
                                        <option value="<?=$value['card_id'];?>"><?=$value['card_id'];?></option>
                                      <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">person</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="hidden" name="rule" value="insert">
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
                                        <input type="text" class="form-control" name="identity_card" placeholder="請輸入身分證字號" required>
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
                                        <input type="date" class="form-control date" name="birthday" placeholder="請輸入生日" >
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
                                        <i class="material-icons">email</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="text" class="form-control email" name="email" placeholder="Ex: example@example.com">
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
                                        <i class="material-icons">room</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="text" class="form-control" name="address" placeholder="請輸入地址" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon">會籍</span>
                                      <select class="form-control show-tick" name="number">

                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                  <select class="form-control show-tick" name="categorys">
                                    <option value="月">月</option>
                                    <option value="年">年</option>
                                  </select>
                                </div>
                              </div>

                              <div class="row clearfix">
                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        會籍開始日：
                                      </span>
                                      <div class="form-line">
                                        <input type="date" class="form-control" name="start_contract" placeholder="合約開始日" >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        會籍截止日：
                                      </span>
                                      <div class="form-line">
                                        <input type="date" class="form-control" name="end_contract" placeholder="合約結束日">
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
                                        <input type="text" class="form-control" name="emergency_contact" placeholder="請輸入緊急聯絡人" required>
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
                                        <input type="text" class="form-control mobile-phone-number" name="emergency_phone" placeholder="請輸入緊急聯絡人電話" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row clearfix">
                                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group">
                                    <div class="input-group input-group-lg">
                                      <span class="input-group-addon">
                                        <i class="material-icons">note</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="text" class="form-control" name="note" placeholder="備註">
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
                                        <i class="material-icons">file_upload</i>
                                      </span>
                                      <div class="form-line" style="border-bottom:0px;">
                                        <input type='file' name="pics" id="imgInp" accept="image/gif, image/jpeg, image/png"/>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                  <img id="blah" src="<?=$pics;?>" alt="會員個人照" style="width:50%;"/>
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
            <script type="text/javascript">
            // 上傳圖片並顯示 in 20180617
            function readURL(input) {

              if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                  $('#blah').attr('src', e.target.result).addClass('img-responsive').css('width', '50%');
                }

                reader.readAsDataURL(input.files[0]);
              }
            }
            function m_readURL(input) {

              if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                  $('#m_blah').attr('src', e.target.result).addClass('img-responsive').css('width', '50%');
                }

                reader.readAsDataURL(input.files[0]);
              }
            }
            $(document).ready(function() {
              $("#imgInp").change(function() {
                readURL(this);
              });
              $("#m_imgInp").change(function() {
                m_readURL(this);
              });
            });
            </script>

            <!-- 彈跳視窗 -->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
               <div class="modal-dialog modal-lg" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h4 class="modal-title" id="defaultModalLabel">會員基本資料</h4>
                       </div>
                       <form id="form_validation" method="POST" enctype="multipart/form-data">
                         <div class="modal-body">
                           <div class="demo-masked-input">
                             <div class="row clearfix">
                               <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">credit_card</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="hidden" name="rule" value="update">
                                       <input type="text" class="form-control" name="m_card_id" readonly>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
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
                                       <input type="text" class="form-control" name="m_identity_card" placeholder="請輸入身分證字號" required>
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
                                       <input type="date" class="form-control date" name="m_birthday" placeholder="請輸入生日" >
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
                                       <i class="material-icons">email</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="text" class="form-control email" name="m_email" placeholder="Ex: example@example.com">
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
                                       <i class="material-icons">room</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="text" class="form-control" name="m_address" placeholder="請輸入地址" required>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group">
                                     <span class="input-group-addon">會籍</span>
                                     <select class="form-control show-tick" name="m_number">

                                     </select>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                 <select class="form-control show-tick" name="m_categorys">
                                   <option value="月">月</option>
                                   <option value="年">年</option>
                                 </select>
                               </div>
                             </div>

                             <div class="row clearfix">
                               <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       會籍開始日：
                                     </span>
                                     <div class="form-line">
                                       <input type="date" class="form-control" name="m_start_contract" placeholder="合約開始日" >
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       會籍截止日：
                                     </span>
                                     <div class="form-line">
                                       <input type="date" class="form-control" name="m_end_contract" placeholder="合約結束日">
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
                                       <input type="text" class="form-control" name="m_emergency_contact" placeholder="請輸入緊急聯絡人" required>
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
                                       <input type="text" class="form-control mobile-phone-number" name="m_emergency_phone" placeholder="請輸入緊急聯絡人電話" required>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div>
                             <div class="row clearfix">
                               <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                 <div class="form-group">
                                   <div class="input-group input-group-lg">
                                     <span class="input-group-addon">
                                       <i class="material-icons">note</i>
                                     </span>
                                     <div class="form-line">
                                       <input type="text" class="form-control" name="m_note" placeholder="備註">
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
                                       <i class="material-icons">file_upload</i>
                                     </span>
                                     <div class="form-line" style="border-bottom:0px;">
                                       <input type='file' name="m_pics" id="m_imgInp" accept="image/gif, image/jpeg, image/png"/>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                 <img id="m_blah" src="<?=$pics;?>" alt="會員個人照" style="width:50%;"/>
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="modal-footer">
                           <div class="row clearfix">
                             <div class="col-lg-6">
                               <button class="btn btn-block btn-lg btn-primary waves-effect" type="submit">送出</button>
                             </div>
                             <div class="col-lg-6">
                               <button class="btn btn-block btn-lg bg-red waves-effect" type="reset">重設</button>
                             </div>
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
                                            <th>卡號</th>
                                            <th>姓名</th>
                                            <th>身分證</th>
                                            <th>生日</th>
                                            <th>手機</th>
                                            <th>合約起指日</th>
                                            <th>會籍類型</th>
                                            <th>緊急聯絡人</th>
                                            <th>緊急聯絡人電話</th>
                                            <th>員工更新</th>
                                            <th>加入時間</th>
                                            <th>更新時間</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>卡號</th>
                                          <th>姓名</th>
                                          <th>身分證</th>
                                          <th>生日</th>
                                          <th>手機</th>
                                          <th>合約起止日</th>
                                          <th>會籍類型</th>
                                          <th>緊急聯絡人</th>
                                          <th>緊急聯絡人電話</th>
                                          <th>員工更新</th>
                                          <th>加入時間</th>
                                          <th>更新時間</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php foreach ($data as $key => $value){ ?>
                                        <tr class="member" data-id="<?=$value['card_id'];?>">
                                          <td><?=$value['card_id'];?></td>
                                          <td><?=$value['name'];?></td>
                                          <td><?=$value['identity_card'];?></td>
                                          <td><?=$value['birthday'];?></td>
                                          <td><?=$value['phone'];?></td>
                                          <td><?=$value['start_contract'].'~'.$value['end_contract'];?></td>
                                          <td><?=$value['number'].$value['categorys'];?></td>
                                          <td><?=$value['emergency_contact'];?></td>
                                          <td><?=$value['emergency_phone'];?></td>
                                          <td>who</td>
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
