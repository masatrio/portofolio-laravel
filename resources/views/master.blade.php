<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    @yield('meta')
    <link rel="stylesheet" href="/css/master.css" media="screen">
    <script src="/js/jquery.min.js"></script>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  </head>
  <body>
    <header id="header">
      <div id="photo">
        <img src="/img/logo.jpg" alt="logo-masatrio">
        <div id="left">
          <p class="text-show">maulana aji satrio</p>
          <p class="text-show">born at surabaya</p>
          <p class="text-show">born in 9 dec 1996</p>
        </div>
        <div id="right">
          <p class="text-show">i love music</p>
          <p class="text-show">love code too</p>
          <p class="text-show">SEO enthusiast :)</p>
        </div>
        <div id="hover-me"></div>
      </div>
      <h1>masatrio @ blog</h1>
      <nav>
        <ul>
          <li><a href="{{ URL::to("/") }}"><div class="menu-item">Home</div></a></li>
          <li><a href="{{ URL::to("/#") }}"><div class="menu-item">Blog</div></a></li>
          <li><a href="{{ URL::to("/#") }}"><div class="menu-item">About</div></a></li>
          <li><a href="{{ URL::to("/contact/") }}"><div class="menu-item">Contact</div></a></li>
        </ul>
      </nav>
    </header>
    @yield('konten')
    <footer>
      <div class="footer">
        <p><strong>&copy;2017 @masatrioblog.</strong></p>
        <!-- <button type="button" id="scrollbutton">Go top</button> -->
      </div>
    </footer>

    <script type="text/javascript" src="/js/master.js"></script>
  </body>
</html>
