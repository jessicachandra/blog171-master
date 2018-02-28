<form action="/blog/subedit/<?=$blog_ID?>" method="post">
  Judul <input type="text" name="judul" value="<?=$judul?>">
  <br>
  Isi blog:<br>
  <textarea name="isi" rows="8" cols="80"><?=$isi?></textarea>
  <br>
  <input type="file" name="foto">
  <input type="submit" value="Simpan">


</form>
