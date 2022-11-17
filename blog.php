<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FusionTech blog</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Poppins:wght@100&display=swap"
      rel="stylesheet"
    />
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
    <!-- ==================================NAV ENDS===================================== -->

    <section class="search__bar">
      <form class="container search__bar-container" action="">
        <div>
          <i class="uil uil-search"></i>
          <input type="search" name="" placeholder="Search" />
        </div>
        <button type="submit" class="btn">Go</button>
      </form>
    </section>

    <!-- =========END OF SEARCH============ -->

    <section class="posts">
      <div class="container posts__container">
        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog3.jpg" alt="blog-picture" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.php"
                >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Iure.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos
              fugiat cumque laboriosam vero esse sapiente sequi, harum
              consectetur!
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar3.jpg" alt="author" />
              </div>
              <div class="post__author-info">
                <h5>By: Debby Bill</h5>
                <small>June 15, 2022 - 06:15 PM</small>
              </div>
            </div>
          </div>
        </article>

        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog4.jpg" alt="blog-picture" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.php"
                >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Iure.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos
              fugiat cumque laboriosam vero esse sapiente sequi, harum
              consectetur!
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar4.jpg" alt="author" />
              </div>
              <div class="post__author-info">
                <h5>By: Debby Bill</h5>
                <small>June 15, 2022 - 06:15 PM</small>
              </div>
            </div>
          </div>
        </article>
        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog5.jpg" alt="blog-picture" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.php"
                >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Iure.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos
              fugiat cumque laboriosam vero esse sapiente sequi, harum
              consectetur!
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar6.jpg" alt="author" />
              </div>
              <div class="post__author-info">
                <h5>By: Debby Bill</h5>
                <small>June 15, 2022 - 06:15 PM</small>
              </div>
            </div>
          </div>
        </article>

        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog7.jpg" alt="blog-picture" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.php"
                >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Iure.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos
              fugiat cumque laboriosam vero esse sapiente sequi, harum
              consectetur!
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar8.jpg" alt="author" />
              </div>
              <div class="post__author-info">
                <h5>By: Debby Bill</h5>
                <small>June 15, 2022 - 06:15 PM</small>
              </div>
            </div>
          </div>
        </article>

        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog8.jpg" alt="blog-picture" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.php"
                >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Iure.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos
              fugiat cumque laboriosam vero esse sapiente sequi, harum
              consectetur!
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar9.jpg" alt="author" />
              </div>
              <div class="post__author-info">
                <h5>By: Debby Bill</h5>
                <small>June 15, 2022 - 06:15 PM</small>
              </div>
            </div>
          </div>
        </article>

        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog9.jpg" alt="blog-picture" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.php"
                >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Iure.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos
              fugiat cumque laboriosam vero esse sapiente sequi, harum
              consectetur!
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar10.jpg" alt="author" />
              </div>
              <div class="post__author-info">
                <h5>By: Debby Bill</h5>
                <small>June 15, 2022 - 06:15 PM</small>
              </div>
            </div>
          </div>
        </article>

        <article class="post">
          <div class="post__thumbnail">
            <img src="./images/blog10.jpg" alt="blog-picture" />
          </div>
          <div class="post__info">
            <a href="" class="category__button">Wild Life</a>
            <h3 class="post__title">
              <a href="post.php"
                >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Iure.</a
              >
            </h3>
            <p class="post__body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos
              fugiat cumque laboriosam vero esse sapiente sequi, harum
              consectetur!
            </p>
            <div class="post__author">
              <div class="post__author-avatar">
                <img src="./images/avatar11.jpg" alt="author" />
              </div>
              <div class="post__author-info">
                <h5>By: Debby Bill</h5>
                <small>June 15, 2022 - 06:15 PM</small>
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>

    <section class="category__buttons">
      <div class="container category__buttons-container">
        <a href="" class="category__button">Wild Life</a>
        <a href="" class="category__button">Art</a>
        <a href="" class="category__button">Music</a>
        <a href="" class="category__button">Science & Technology</a>
        <a href="" class="category__button">Travel</a>
        <a href="" class="category__button">Sports</a>
        <a href="" class="category__button">Agriculture</a>
        <a href="" class="category__button">Food</a>
        <a href="" class="category__button">Movies</a>
      </div>
    </section>

    <!-- ==================================CATEGORY ENDS========================================= -->

    <footer>
      <div class="footer__socials">
        <a
          href="https://www.youtube.com/channel/UCRmfX_B58lPQAxlP0z_6AVg"
          target="_blank"
          ><i class="uil uil-youtube"></i
        ></a>
        <a href="https://www.facebook.com/den.ver.90038/" target="_blank"
          ><i class="uil uil-facebook-f"></i
        ></a>
        <a href="https://twitter.com/_fusionTech" target="_blank"
          ><i class="uil uil-twitter"></i
        ></a>
        <a
          href="https://www.linkedin.com/in/jesse-josiah-249399231/"
          target="_blank"
          ><i class="uil uil-linkedin"></i
        ></a>

        <a href="https://instagram.com" target="_blank"
          ><i class="uil uil-instagram"></i
        ></a>
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

