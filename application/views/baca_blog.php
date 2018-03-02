<br>
<div class="atas">
  <br><br>
</div>

<div class="gambar">
  <?php
  echo "<img src=\"/asset/img/blog/".$blog['blog_ID'].".".$blog['foto']."\">";
  ?>
  <br>
</div>

<h1><?= $blog['judul']."<br>" ?></h1>

<h4>Cerita:</h4>
<p>
  <?php
      $isi = str_replace("\n","<br>",$blog['isi']);
      echo $isi;
   ?>
</p>

<h4>DiTulis Oleh:</h4>
<p>
  <?php
  echo "<a href='/user/" . $blog['user_ID'] ."'>" . $blog['nama']."<a><br><br><br><br><br>";
  ?>
</p>

<?php
//die(print_r($this->session->uid));
  if(($this->session->uid)==$blog['user_ID']){
 ?>
 <div class="col-md-1 text-center" id="edit">
   <a href="/blog/edit/<?= $blog['blog_ID']?>">Edit</a>
 </div>
 <div class="col-md-1 text-center" id="delete">
   <a href="/blog/delete/<?= $blog['blog_ID']?>">delete</a>
 </div>
 <?php } ?>
