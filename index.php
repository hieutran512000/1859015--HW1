<?php
include 'header.php';
?>

      <div class="container-fluid">
        <div class="banner banner1">
          <div class="quote">
            <!-- <h1>Hieu'WebSite</h1> -->
            <h3 class="style1">Welcome to my web site</h3>
            <h3 class="style1">Hope this website will bring you lots of useful information</h3>
          </div>
        </div>
      </div>
<!-- Khu login -->
      <div class="login">
        <div class="login-img"> <!-- ảnh kế chỗ login -->
          <img src="images/login.png" alt="Ảnh đăng nhập">
        </div>

        <div class="taikhoan">
          <form action="index.html" method="post">
            <label for="username">Username</label> <br>
            <input type="text" name="username"> <br>
            <label for="password">Password</label> <br>
            <input type="password" name="password"> <br>
            <input type="checkbox" name="subscribe" value="true"> Remember password
            <button type="sign">Sign in</button>
            <button type="submit">Create new account</button>
          </form>
        </div>
      </div>
<!-- 3 colum thogn tin -->
      <div class="container">
        <div class="front-three">
          <div class="col-3">
            <div class="col-img">
              <img src="images/about.png" alt="">
            </div>
            <h2 class="center">About</h2>
            <p class="center">Information for communication</p>
            <a class="linkstyle" href="about.html"><button type="button" name="button">Read More</button></a>
          </div>
          <div class="col-3">
            <div class="col-img">
              <img src="images/myphotos.jpg" alt="">
            </div>
            <h2 class="center">Gallery</h2>
            <p class="center">Gallery about the web owner</p>
            <a class="linkstyle" href="gallery.html"><button type="button" name="button">Read More</button></a>
          </div>
          <div class="col-3">
            <div class="col-img">
              <img src="images/resume.jpg" alt="">
            </div>
            <h2 class="center">Resume</h2>
            <p class="center">Information about web owner</p>
            <a class="linkstyle" href="resume.html"><button type="button" name="button">Read More</button></a>
          </div>
        </div>
      </div>

<?php 
include 'footer.php'; 
?>