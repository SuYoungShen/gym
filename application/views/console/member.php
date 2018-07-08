
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
            <h2>新增會員基本資料</h2>
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
                        <select class="form-control show-tick" data-size="5" name="card_id">
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
                  <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                          方案價位
                        </span>
                        <div class="form-line">
                          <input type="text" class="form-control" name="discount_price" placeholder="方案價位" readonly>
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
                          會籍開始日：
                        </span>
                        <div class="form-line">
                          <input type="date" class="form-control" name="start_contract" placeholder="合約開始日" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
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
                  <!-- 20180704 下次繳款日 -->
                  <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                          下次繳款日
                        </span>
                        <div class="form-line">
                          <input type="date" class="form-control" name="next_pay" placeholder="下次繳款日">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- 20180704 下次繳款日 -->
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
                          <label for="imgInp" class="text-danger">單檔請勿超過10M</label>
                          <input type='file' name="pics" id="imgInp" accept="image/gif, image/jpeg, image/png"/ placeholder="請勿超過10M">
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
    </div><!-- row -->
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
      function m_up_readURL(input) {

        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('#m_up_blah').attr('src', e.target.result).addClass('img-responsive').css('width', '50%');
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
        $("#m_up_imgInp").change(function() {
          m_up_readURL(this);
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
                  <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                          方案價位
                        </span>
                        <div class="form-line">
                          <input type="text" class="form-control" name="m_discount_price" placeholder="方案價位" readonly>
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
                          會籍開始日：
                        </span>
                        <div class="form-line">
                          <input type="date" class="form-control" name="m_start_contract" placeholder="合約開始日" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
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
                  <!-- 20180704 下次繳款日 -->
                  <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                          下次繳款日:
                        </span>
                        <div class="form-line">
                          <input type="date" class="form-control" name="m_next_pay" placeholder="下次繳款日">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- 20180704 下次繳款日 -->
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
                  <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                    <img id="m_blah" src="<?=$pics;?>" alt="會員個人照" style="width:50%;"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="row clearfix">
                <div class="col-lg-6">
                  <button class="btn btn-block btn-lg btn-success waves-effect" type="submit">更新</button>
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
                      <td><?=$value['staff_name'];?></td>
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
    </div><!-- row clearfix -->
    <!-- #END# Exportable Table -->

    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>會員照片更新</h2>
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
                  <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                        <input type="hidden" name="rule" value="m_up_pics"><!-- m_up_pics=會員照片更新 -->
                        <span class="input-group-addon">
                          <i class="material-icons">credit_card</i>
                        </span>
                        <select class="form-control show-tick selectpicker" data-size="5" name="m_up_card_id">
                          <?php foreach ($m_s_ci as $key => $value){ ?>
                            <option value="<?=$value['card_id'];?>"><?=$value['card_id'];?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                          <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                          <input type="text" class="form-control" name="name" placeholder="會員姓名">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="row clearfix"> -->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                      <div class="form-group">
                        <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                            <i class="material-icons">file_upload</i>
                          </span>
                          <div class="form-line" style="border-bottom:0px;">
                            <label for="m_up_imgInp" class="text-danger">單檔請勿超過10M</label>
                            <input type='file' name="m_up_pics" id="m_up_imgInp" accept="image/gif, image/jpeg, image/png"/ placeholder="請勿超過10M">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                      <img id="m_up_blah" src="<?=$pics;?>" alt="會員個人照" style="width:100%;"/>
                    </div>
                  <!-- </div> -->
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
          </div><!-- body -->
        </div><!-- card -->
      </div>
    </div><!-- row -->
  </div>
</section>
<script type="text/javascript">

  $(document).ready(function() {
    // 更新圖片用
    $("select[name=m_up_card_id]").change(function(event) {
      var card_id = $(this).val();
      up_pics_ajax(card_id);
    });

    function up_pics_ajax(card_id){
      $.ajax({
        url: '../api_console/member',
        type: 'POST',
        dataType: 'json',
        data: {
          rule: "m_s_ci",// m=member; s=select; ci=card_id
          card_id: card_id
        }
      })
      .done(function(ResOk) {
        $("input[name='name']").val(ResOk.data.name);
        if(ResOk.data.pics.search('.jpg') == -1 && ResOk.data.pics.search('.png') == -1 &&
        ResOk.data.pics.search('.jpeg') == -1){ // 等於-1表示沒照片
          ResOk.data.pics = '../assets/images/default.png';
        }else{
          ResOk.data.pics = '../assets/images/m_pics/'+ResOk.data.pics;
        }
        $("#m_up_blah").attr('src', ResOk.data.pics);
      })
      .fail(function(ResError) {
        console.log("error");
      });
    }
    // 更新圖片用

      var dt = new Date();
      // Display the month, day, and year. getMonth() returns a 0-based number.
      var month = dt.getMonth()+1;
      var day = dt.getDate();
      var year = dt.getFullYear();
      $('input[name=start_contract]').val(year+'-'+month+'-'+day);

      var number = $('select[name=number]');
      var categorys = $('select[name=categorys]');
      member_ajax(number, categorys);

       $(categorys).change(function(event) {
         var dp = $('input[name=discount_price]');
         $(number).find('option').remove();
         $(dp).val(''); // 變換月、年時，價位變空
         member_ajax(number, categorys);// 用於會員裡的月、年
       });

       $(number).change(function(event) {
         dp(number);
       });

       function dp(number){
         //方案的id
         var id = $(number).val();
         $.ajax({
           url: '../api_console/member_d_p',
           type: 'POST',
           dataType: 'JSON',
           data: {
             id: id
           }
         })
         .done(function(ResOk) {
           $('input[name=discount_price]').val(ResOk[0]['discount_price']);
         })
         .fail(function(ResError) {
           console.log("error");
         });
       }
       
       function member_ajax(number, categorys){
         $.ajax({
           url: '../api_console/member_categorys',
           type: 'POST',
           dataType: 'json',
           data: {
             categorys: categorys.val()
           }
         })
         .done(function(ResOk) {
           // console.log(ResOk);
           $.each(ResOk, function(key, val) {
             $(number).append('<option value='+val.id+'>'+val.number+'</option>');
           });
           $(number).selectpicker('refresh');
         })
         .fail(function(ResError) {
           console.log("error");
         });
       }

    // $('select[name=m_categorys]').change(function(event) {
    //   $('select[name=m_number]').find('option').remove();
    //   // $('select[name=m_number]').selectpicker('refresh');
    //   var m_number = $('select[name=m_number]');
    //   var m_categorys = $('select[name=m_categorys]');
    //
    //   member_ajax(m_number, m_categorys);
    // });

  });
</script>
