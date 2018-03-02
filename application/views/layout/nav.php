<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background:#f4429e;">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" >My blog</a>
      <button class="navbar-toggler navbar-toggler-right" type="button"
      data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <?php
          if(!isset($this->session->uid)){ ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/user/login">login</a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/user/signout">logout</a>
          </li>
          <?php
          if(!isset($this->session->uid)){ ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/user/reg">Register</a>
          </li>

          <?php } ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/blog/post">post</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/user/<?=$this->session->uid?>">profil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
