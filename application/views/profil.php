<br><br><br>
    <h1><?= $profil1['nama'] ?></h1>
    <h5><?=$profil1['email']?></h5>
<br><br><br><br>
    <h4>Blog :</h4>
      <?php
      foreach( $profil2 as $users ){
        ?>
      <h5><?php
      echo "<a href=\"/blog/$users[blog_ID]\">$users[judul]</a><br>";
      ?></h5>
      <?php
      }
      ?>
