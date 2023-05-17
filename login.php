<!-- DO NOT EDIT THIS CODE! -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./stylesheets/login.css" />
  <link rel="stylesheet" href="./stylesheets/main-style.css" />
  <title>Artlife.com</title>
</head>

<body>
  <header>
    <div class="navbar">
      <div><img src="./ImgRes/main_logo.png" alt="" id="logo" /></div>
      <ul id="head-nav-lists">
        <li><a href="./shop.html">Shop</a></li>
        <li><a href="#">Learning</a></li>
        <li><a href="./sign-in.html">Join</a></li>
        <li><a href="./login.php">Log In</a></li>
      </ul>
      <div class="toggle-btn">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>
    <div class="drop-down-menu open">
      <ul>
        <li><a href="./shop.html">Shop</a></li>
        <li><a href="#">Learning</a></li>
        <li><a href="./sign-in.html">Join</a></li>
        <li><a href="./login.php">Log In</a></li>
      </ul>
    </div>
  </header>
  <script src="./javascript/index.js"></script>
  <main>
    <section class="container-form">
      <div class="form-login">
        <h1 id="log-in-header">Login</h1>
        <div class="form-content">
          <form action="./index.php" method="POST" id="logInForm">
            <div class="field input-field">
              <input type="email" placeholder="Username" class="email" id="username" name="username" />
            </div>

            <div class="field input-field">
              <input type="password" placeholder="Password" class="password" id="password" name="password" />
            </div>

            <div class="field form-link">
              <a href="#" class="forgot-pass" id="password">Forgot Password?</a>
            </div>

            <div class="field button-field">
              <a href="./main-page.html"><button type="submit" id="login-btn" onclick="logInButton();">
                  Login
                </button></a>
            </div>
            <!-- <script src="/javascript/login.js"></script> -->

            <div class="field form-link">
              <span>Already have an Account?
                <a href="/sign-in.html" class="sign-up-link">Sign Up</a></span>
            </div>
          </form>
        </div>
        <div class="line"></div>
        <div class="media-option">
          <a href="#" class="field facebook"><i class="fa-brands fa-facebook facebook-icon"></i><span>Login with Facebook</span></a>
          <a href="#" class="field google"><i class="fa-brands fa-google google-icon"></i><span>Login with Google</span></a>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer-nav">
    <div class="footer-container">
      <div class="col1">
        <ul class="footer-list">
          <li>
            <a href="./about.html">About</a>
          </li>
          <li>
            <a href="./developers.html">Developers</a>
          </li>
          <li>
            <a href="#">Privacy Policy</a>
          </li>
          <li>
            <a href="#">Blog</a>
          </li>
          <li>
            <a href="#">Services</a>
          </li>
          <li>
            <a href="./premium-out.html">Premiums</a>
          </li>
        </ul>
      </div>
      <div class="col2">
        <ul class="media-icons">
          <li>
            <a href="" title="facebook"><i class="fa-brands fa-facebook footer-icon"></i></a>
          </li>
          <li>
            <a href="" title="instagram"><i class="fa-brands fa-square-instagram footer-icon"></i></a>
          </li>
          <li>
            <a href="" title="twitter"><i class="fa-brands fa-twitter footer-icon"></i></a>
          </li>
          <li>
            <a href="" title="youtube"><i class="fa-brands fa-youtube footer-icon"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <p class="copyright">
      &copy; 2023, <cite>Artlife Legend Artists, Inc.</cite>
    </p>
  </footer>
</body>

</html>