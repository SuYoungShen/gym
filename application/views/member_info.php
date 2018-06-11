<style media="screen">
  .login100-more::before {
    background: linear-gradient(to right, #000, #dadad6);
  }
</style>
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
            <th>會籍類別</th>
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
            <td><?=$data->types;?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</div>
