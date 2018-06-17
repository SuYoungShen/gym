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
                          <form id="form_validation" method="POST">
                            <div class="row clearfix">
                              <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                  <div class="input-group">
                                    <span class="input-group-addon">會籍：</span>
                                    <div class="form-line">
                                      <input type="number" class="form-control" name="number" required placeholder="請輸入整數">
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
                                      <input type="number" class="form-control" name="discount" required placeholder="請輸入整數">
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
                                      <input type="number" disabled class="form-control" name="after_discount" required placeholder="請輸入整數">
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
            <!-- 彈跳視窗 -->
            <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
               <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                       </div>
                       <form id="form_validation" method="POST">
                         <div class="modal-body">
                           <div class="row clearfix">
                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <span class="input-group-addon">會籍：</span>
                                   <div class="form-line">
                                     <input type="number" class="form-control" name="sss" required placeholder="請輸入整數">
                                   </div>
                                 </div>
                               </div>
                             </div>
                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                               <select class="form-control show-tick">
                                 <option>月</option>
                                 <option>年</option>
                               </select>
                             </div>
                           </div>
                           <div class="row clearfix">
                             <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <span class="input-group-addon">原價：$</span>
                                   <div class="form-line">
                                     <input type="number" class="form-control" name="m_original_price" required placeholder="請輸入價位">
                                   </div>
                                 </div>
                               </div>
                             </div>
                             <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <span class="input-group-addon">折扣：</span>
                                   <div class="form-line">
                                     <input type="number" class="form-control" name="m_discount" required placeholder="請輸入整數">
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
                                     <input type="number" disabled class="form-control" name="m_after_discount" required placeholder="請輸入整數">
                                   </div>
                                 </div>
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
           <script type="text/javascript">
             $(document).ready(function() {
               $("input[name='m_original_price'], input[name='m_discount']").focusout(function(event) {
                 var original_price = $("input[name='m_original_price']");
                 var discount = $("input[name='m_discount']");
                 original_price = original_price.val();
                 discount = discount.val();
                 if(discount > 9){
                   discount = discount/10;
                 }
                 after_discount = original_price*discount/10;
                 $("input[name='m_after_discount']").val(after_discount);
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
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr class="offer">
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
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
