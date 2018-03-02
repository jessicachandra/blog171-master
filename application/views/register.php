<h1>Register User</h1>
<?php
if(isset($email_sudah_terdaftar)){
  if( $email_sudah_terdaftar ){ ?>
    <div class="alert alert-warning">
      <Strong>Email telah terdaftar!</strong> Silahkan login jika anda telah memiliki akun, atau gunakan email lain untuk mendaftar</div>
    </div>
  <?php
  }
}
?>

  <form action="/user/reg" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama" name="nama">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"> verifikasi Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"name="pass2">
  </div>


  </div>
  <button type="submit" class="btn btn-primary" value="Register">Submit</button>
</form>
