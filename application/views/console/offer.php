    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>
            <?php
            if($this->session->userdata('login_identity') == 0 ||
              $this->session->userdata('login_identity') == 99){ ?>
            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>新增優惠方案</h2>
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
                            <div class="row clearfix">
                              <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                  <div class="input-group">
                                    <span class="input-group-addon">會籍：</span>
                                    <div class="form-line">
                                      <input type="hidden" class="form-control" name="rule" value="insert">
                                      <input type="number" class="form-control" name="number"
                                      placeholder="請輸入整數" min="1" max="11" required>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                <select class="form-control show-tick" name="categorys">
                                  <option value="月">月</option>
                                  <option value="年">年</option>
                                </select>
                              </div>
                            </div>
                            <div class="row clearfix">
                              <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                  <div class="input-group">
                                    <span class="input-group-addon">原價：$</span>
                                    <div class="form-line">
                                      <input type="number" class="form-control" name="original_price" required placeholder="請輸入價位">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                  <div class="input-group">
                                    <span class="input-group-addon">折扣：</span>
                                    <div class="form-line">
                                      <input type="number" class="form-control" name="discount"
                                      placeholder="請輸入整數"  min="0" max="9" required>
                                    </div>
                                    <span class="input-group-addon">%</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                  <div class="input-group">
                                    <span class="input-group-addon">折扣後：$</span>
                                    <div class="form-line">
                                      <input type="number" class="form-control" name="after_discount"
                                              placeholder="請輸入整數" readOnly="true" required>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row">
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
            <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
               <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h4 class="modal-title" id="defaultModalLabel">修改優惠方案</h4>
                       </div>
                       <form id="form_validation" method="POST">
                         <div class="modal-body">
                           <div class="row clearfix">
                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <span class="input-group-addon">會籍：</span>
                                   <div class="form-line">
                                     <input type="hidden" name="rule" value="update">
                                     <input type="hidden" name="m_id" value="">
                                     <input type="number" class="form-control" name="m_number" placeholder="請輸入整數"  min="1" max="11" required>
                                   </div>
                                 </div>
                               </div>
                             </div>
                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                               <select class="form-control show-tick" id="m_categorys" name="m_categorys">
                                 <option value="月">月</option>
                                 <option value="年">年</option>
                               </select>
                             </div>
                           </div>
                           <div class="row clearfix">
                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <span class="input-group-addon">原價：$</span>
                                   <div class="form-line">
                                     <input type="number" class="form-control" name="m_original_price" placeholder="請輸入價位" required>
                                   </div>
                                 </div>
                               </div>
                             </div>
                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <span class="input-group-addon">折扣：</span>
                                   <div class="form-line">
                                     <input type="number" class="form-control" name="m_discount" required placeholder="請輸入整數" required>
                                   </div>
                                   <span class="input-group-addon">%</span>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="row clearfix">
                             <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <span class="input-group-addon">折扣後：$</span>
                                   <div class="form-line">
                                     <input type="number" class="form-control" name="m_after_discount" placeholder="請輸入整數" readonly="true" required>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="modal-footer">
                           <div class="row clearfix">
                             <div class="col-lg-6">
                               <button class="btn btn-block btn-lg btn-primary waves-effect" type="submit">更新</button>
                             </div>
                             <div class="col-lg-6">
                               <button class="btn btn-block btn-lg bg-red waves-effect" type="button" name="delete">刪除</button>
                             </div>
                           </div>
                         </div>
                     </form>
                   </div>
               </div>
           </div>

           <!-- 彈跳視窗 -->
           <script type="text/javascript">
             $(document).ready(function() {
               $("input[name='original_price'], input[name='discount']").focusout(function(event) {
                 var original_price = $("input[name='original_price']");
                 var discount = $("input[name='discount']");
                 original_price = original_price.val();
                 discount = discount.val(); // 折扣數字
                 if(discount > 9){
                   discount = discount/10;
                 }else if(discount == 0){
                   after_discount = original_price; 
                 }else{
                   after_discount = Math.round(original_price*discount/10); //Math.round 四捨五入
                 }
                 $("input[name='after_discount']").val(after_discount).attr("readOnly", true);// 變唯獨不能修改
               });

               $("input[name='m_original_price'], input[name='m_discount']").focusout(function(event) {
                 var m_original_price = $("input[name='m_original_price']");
                 var m_discount = $("input[name='m_discount']");
                 m_original_price = m_original_price.val();
                 m_discount = m_discount.val();
                 if(m_discount > 9){
                   m_discount = m_discount/10;
                 }
                 m_after_discount = Math.round(m_original_price*m_discount/10);
                 $("input[name='m_after_discount']").val(m_after_discount).attr("readOnly", true);
               });

             });
           </script>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>優惠方案總表</h2>
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
                                            <th>會籍類型</th>
                                            <th>原價</th>
                                            <th>折扣</th>
                                            <th>折扣後</th>
                                            <th>新增時間</th>
                                            <th>更新時間</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>會籍類型</th>
                                          <th>原價</th>
                                          <th>折扣</th>
                                          <th>折扣後</th>
                                          <th>新增時間</th>
                                          <th>更新時間</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php foreach ($data as $key => $value){ ?>
                                        <tr class="offer" data-id="<?=$value['id'];?>">
                                          <td><?=$value["number"].$value["types"]?></td>
                                          <td>$<?=$value["price"]?></td>
                                          <td><?=$value["discount"]?>%</td>
                                          <td>$<?=$value["discount_price"]?></td>
                                          <td><?=$value["join_date"].' '.$value["join_time"]?></td>
                                          <td><?=$value["up_date"].' '.$value["up_time"]?></td>
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
