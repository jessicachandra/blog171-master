
<div class ="tulisan">
<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong>Berbagi cerita dalam bentuk Website</strong>
          </h1>
          <hr>
        </div>
        <div class="col-lg-8 mx-auto">
          <p class="text-faded mb-5">Start Your Story</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="/blog/post">let's Start</a>
        </div>
      </div>
    </div>
  </header>
</div>
<!-- <div class="background"> -->
<!-- <img src="/asset/img/background.jpg" alt="background"> -->

  <?php
           foreach( $blogs as $blog ){
             ?>

   <!-- <br> </br> -->
   <div class="bungkus">

 <!-- </div> -->
 <!-- </div> -->
  <section class="p-0" id="portfolio">

    <div class="container-fluid p-0">
      <div class="row no-gutters popup-gallery">

        <div class="tes">
            <?php
             echo "<img src=\"./asset/img/blog/".$blog['blog_ID'].".".$blog['foto']."\">";
              ?>
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">

                <div class="project-name">
                  <small><i>[ <?=$blog['tanggal'];?> ]</i></small></br>
                  <?php
                  echo "<a href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']."<a><br>";
                  ?>
                </div>
              </div>
            </div>
          </a>

        </div>
        </div>
        </div>
  </section>

  </div>
</div>
  <?php
  }
  ?>


</div>
