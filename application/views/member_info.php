<style media="screen">
  .login100-more::before {
    background: linear-gradient(to right, #000, #dadad6);
  }
</style>
<?php
 // var_dump($data);
 ?>
<div class="login100-more">
  <section>
    <h1>會員資訊</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>會員卡號</th>
            <th>會員照片</th>
            <th>身分證字號</th>
            <th>生日</th>
            <th>電話</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <tr>
            <td><?=$data->card_id;?></td>
            <td><img src="<?=$data->pics;?>" class="img-fluid pull-xs-left"></td>
            <td><?=$data->identity_card;?></td>
            <td><?=$data->birthday;?></td>
            <td><?=$data->phone;?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>信箱</th>
            <th>地址</th>
            <th>緊急聯絡人</th>
            <th>緊急聯絡人電話</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <tr>
            <td><?=$data->email;?></td>
            <td><?=$data->address;?></td>
            <td><?=$data->emergency_contact;?></td>
            <td><?=$data->emergency_phone;?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>合約開始日</th>
            <th>合約結束日</th>
            <th>會籍類別</th>
            <th>加入日期</th>
            <th>加入時間</th>
          </tr>
        </thead>
      </table>
    </div>

    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <tr>
            <td><?=$data->start_contract;?></td>
            <td><?=$data->end_contract;?></td>
            <td><?=$data->categorys;?></td>
            <td><?=$data->join_date;?></td>
            <td><?=$data->join_time;?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>進場日期</th>
            <th>進場時間</th>
            <th>出場日期</th>
            <th>出場時間</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <tr>
            <td><?=$data->in_date;?></td>
            <td><?=$data->in_time;?></td>
            <td><?=$data->out_date;?></td>
            <td><?=$data->out_time;?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</div>
