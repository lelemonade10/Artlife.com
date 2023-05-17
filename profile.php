<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./stylesheets/main-page.css" />
    <link rel="stylesheet" href="./stylesheets/profile.css" />
    <title>Document</title>
  </head>
  <body>
    <main>
      <div class="page-content">
        <div class="container-1">
          <nav class="nav-list">
            <div>
              <img src="./imgRes/main_logo.png" alt="logo" id="logo" />
            </div>
            <div id="side-nav">
              <a href="./main-page.html"
                ><button class="side-list">
                  <i class="fa-solid fa-house side-icon"></i> Home
                </button></a
              >
              <a href="#"
                ><button class="side-list">
                  <i class="fa-solid fa-magnifying-glass side-icon"></i> Search
                </button></a
              >
              <a href="#"
                ><button class="side-list">
                  <i class="fa-solid fa-film side-icon"></i> Reels
                </button></a
              >
              <a href="#"
                ><button class="side-list">
                  <i class="fa-solid fa-palette side-icon"></i> Artists
                </button></a
              >
              <a href="./gallery.html"
                ><button class="side-list">
                  <i class="fa-solid fa-palette side-icon"></i> Gallery
                </button></a
              >
              <a href="#"
                ><button class="side-list">
                  <i class="fa-solid fa-plus side-icon"></i> Create
                </button></a
              >
              <a href="#"
                ><button class="side-list">
                  <i class="fa-solid fa-message side-icon"></i> Messages
                </button></a
              >
              <a href="#"
                ><button class="side-list">
                  <i class="fa-solid fa-heart side-icon"></i> Notification
                </button></a
              >
              <a href="./profile.php"
                ><button class="side-list">
                  <i class="fa-solid fa-user side-icon"></i><b> Profile</b>
                </button></a
              >
            </div>
          </nav>
        </div>

        <!-- from 800px to mobile responsive -->
        <div class="cont-1">
          <nav class="top-nav-list">
            <div>
              <img src="./imgRes/main_logo.png" alt="logo" id="logo" />
            </div>
            <ul id="side-nav-icon">
              <li>
                <a href="./main-page.html" class="top-icon"
                  ><button type="button" class="side-icon">
                    <i class="fa-solid fa-house"></i></button
                ></a>
              </li>
              <li>
                <a href="#" class="top-icon"
                  ><button type="button" class="side-icon">
                    <i class="fa-solid fa-magnifying-glass"></i></button
                ></a>
              </li>
              <li>
                <a href="#" class="top-icon"
                  ><button type="button" class="side-icon">
                    <i class="fa-solid fa-film"></i></button
                ></a>
              </li>
              <li>
                <a href="./gallery.html" class="top-icon"
                  ><button type="button" class="side-icon">
                    <i class="fa-solid fa-palette"></i></button
                ></a>
              </li>
              <li>
                <a href="#" class="top-icon"
                  ><button type="button" class="side-icon">
                    <i class="fa-solid fa-plus"></i></button
                ></a>
              </li>
              <li>
                <a href="#" class="top-icon"
                  ><button type="button" class="side-icon">
                    <i class="fa-solid fa-message"></i></button
                ></a>
              </li>
              <li>
                <a href="#" class="top-icon"
                  ><button type="button" class="side-icon">
                    <i class="fa-solid fa-heart"></i></button
                ></a>
              </li>
              <li>
                <a href="./profile.php" class="top-icon"
                  ><button type="button" class="side-icon">
                    <i class="fa-solid fa-user"></i></button
                ></a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="container-2">
          <div id="container-profile-set">
            <div class="image-border">
            <?php

if (isset($_POST ['saveimage']))
{
    $target_dir = "imgUpload/";
    $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    move_uploaded_file(($_FILES["fileToUpload"])["tmp_name"], $target_file);

    echo '<img src="'.$target_file.'" id="profile-img"/>'; 
    } ?>
            </div>

            <i class="fa-solid fa-ellipsis-vertical toggle-btn"></i>
          
            <div class="drop-down-menu">
              <form action="./profile.php" method="post" class="form-btn" enctype="multipart/form-data">
               <input type="file" name="fileToUpload" class="file-upload" />
               <input type="submit" value="submit" name="saveimage" class="file-upload"/>
              </form>
            </div>

          </div>
          <script src="./javascript/profile.js"></script>
          <h2>Mavis Scott</h2>
          <p>0 Following</p>
          <p>0 Followers</p>
          <form action="./logout.php" class="form-btn">
            <a href="./premium-in.html" class="btn-set"
              ><button class="btn-set" type="button">Premium</button></a
            >
            <a href="./login.php" class="btn-set"
              ><button type="submit" class="btn-set">Log Out</button></a
            >
          </form>
          <hr />
          <p class="body-cont">C r e a t e d</p>
          <p>Nothing to show...yet! Pins you create will live here.</p>
          <div class="create-layer">
            <a href="#"
              ><button type="button" class="create-btn">
                Create Gallery
              </button></a
            >
          </div>
        </div>

        <div class="container-3">
          <div class="col1">
            <p class="suggest">Artist you may know</p>
            <ul class="footer-list">
              <li>
                <a href="#">About</a>
              </li>
              <li>
                <a href="#">Developers</a>
              </li>
              <li>
                <a href="#">Settings</a>
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
                <a href="./premium-in.html">Premiums</a>
              </li>
            </ul>
            <!-- responsive list -->
            <ul class="footer-list-res">
              <li>
                <a href="#">About</a>
              </li>
              <li>
                <a href="#">Developers</a>
              </li>
              <li>
                <a href="#">Settings</a>
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
                <a href="./premium-in.html">Premiums</a>
              </li>
            </ul>
            <p class="copyright">
              &copy; 2023, <cite>Artlife Legend Artists, Inc.</cite>
            </p>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
<!-- <?php

if (isset($_POST ['saveimage']))
{
    $target_dir = "imgUpload/";
    $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    move_uploaded_file(($_FILES["fileToUpload"])["tmp_name"], $target_file);

    echo '<img src="'.$target_file.'" id="profile-img"/>'; 
    } ?> -->