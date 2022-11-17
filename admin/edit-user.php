<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FusionTech blog</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Poppins:wght@100&display=swap" rel="stylesheet" />
</head>

<body>
  <nav>
    <div class="container nav__container">
      <a href="logo" class="nav__logo">FusionTech</a>
      <ul class="nav__items">
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        <!-- <li><a href="<?= ROOT_URL ?>signin.PHP">Sign In</a></li> -->
        <li class="nav__profile">
          <div class="avatar">
            <img src="./images/avatar1.jpg" />
          </div>
          <ul>
            <li><a href="dashboard">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>

      <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
      <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
    </div>
  </nav>

<section class="form__section">
  <div class="container form__section-container">
    <h2>Edit User</h2>

    <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="First Name" />
      <input type="text" placeholder="Last Name" />
      <select>
        <option value="0">Author</option>
        <option value="1">Admin</option>
      </select>

      <button type="submit" class="btn">Update User</button>
    </form>
  </div>
</section>

<footer>
  <div class="footer__socials">
    <a href="https://www.youtube.com/channel/UCRmfX_B58lPQAxlP0z_6AVg" target="_blank"><i class="uil uil-youtube"></i></a>
    <a href="https://www.facebook.com/den.ver.90038/" target="_blank"><i class="uil uil-facebook-f"></i></a>
    <a href="https://twitter.com/_fusionTech" target="_blank"><i class="uil uil-twitter"></i></a>
    <a href="https://www.linkedin.com/in/jesse-josiah-249399231/" target="_blank"><i class="uil uil-linkedin"></i></a>

    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
  </div>
  <div class="container footer__container">
    <article>
      <h4>Categories</h4>
      <ul>
        <li><a href="">Wild Life</a></li>
        <li><a href="">Art</a></li>
        <li><a href="">Music</a></li>
        <li><a href="">Science & Technology</a></li>
        <li><a href="">Travel</a></li>
        <li><a href="">Sports</a></li>
        <li><a href="">Agriculture</a></li>
        <li><a href="">Food</a></li>
        <li><a href="">Movies</a></li>
      </ul>
    </article>

    <article>
      <h4>Support</h4>
      <ul>
        <li><a href="">Online Support</a></li>
        <li><a href="">Call Numbers</a></li>
        <li><a href="">Emails</a></li>
        <li><a href="">Social Support</a></li>
        <li><a href="">Location</a></li>
        <li><a href="">Utilities</a></li>
      </ul>
    </article>

    <article>
      <h4>Blog</h4>
      <ul>
        <li><a href="">Popular</a></li>
        <li><a href="">Recent</a></li>
        <li><a href="">Featured</a></li>
        <li><a href="">Safety</a></li>
        <li><a href="">Categories</a></li>
      </ul>
    </article>

    <article>
      <h4>Permalinks</h4>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </article>
  </div>
  <div class="footer__copyright">
    <small>Copyright &copy; 2022 FusionTech</small>
  </div>
</footer>
<script src="js/main.js"></script>
</body>

</html>