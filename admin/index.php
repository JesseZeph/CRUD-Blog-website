<?php 
include 'partials/header.php';
?>

    <section class="dashboard">
      <div class="container dashboard__container">
        <button id="show__sidebar-btn" class="sidebar__toggle">
          <i class="uil uil-angle-right-b"></i>
        </button>
        <button id="hide__sidebar-btn" class="sidebar__toggle">
          <i class="uil uil-angle-left-b"></i>
        </button>
        <aside>
          <ul>
            <li>
              <a href="add-post.php"
                ><i class="uil uil-pen"></i>
                <h5>Add Post</h5>
              </a>
            </li>

            <li>
              <a href="index.php" class="active"
                ><i class="uil uil-postcard"></i>
                <h5>Manage Posts</h5>
              </a>
            </li>

            <li>
              <a href="add-user.php"
                ><i class="uil uil-user-plus"></i>
                <h5>Add User</h5>
              </a>
            </li>

            <li>
              <a href="manage-users.php"
                ><i class="uil uil-users-alt"></i>
                <h5>Manage User</h5>
              </a>
            </li>

            <li>
              <a href="add-category.php"
                ><i class="uil uil-edit"></i>
                <h5>Add Category</h5>
              </a>
            </li>

            <li>
              <a href="manage-categories.php"
                ><i class="uil uil-list-ul"></i>
                <h5>Manage Categories</h5>
              </a>
            </li>
          </ul>
        </aside>
        <main>
          <h2>Manage Users</h2>
          <table>
            <thead>
              <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </td>
                <td>Wild Life</td>
                <td>
                  <a href="edit-post.php" class="btn sm"> Edit</a>
                </td>

                <td>
                  <a href="delete-category.php" class="btn sm danger">
                    Delete</a
                  >
                </td>
              </tr>

              <tr>
                <td>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </td>
                <td>Wild Life</td>
                <td>
                  <a href="edit-post.php" class="btn sm"> Edit</a>
                </td>

                <td>
                  <a href="delete-category.php" class="btn sm danger">
                    Delete</a
                  >
                </td>
              </tr>

              <tr>
                <td>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </td>
                <td>Wild Life</td>
                <td>
                  <a href="edit-post.php" class="btn sm"> Edit</a>
                </td>

                <td>
                  <a href="delete-category.php" class="btn sm danger">
                    Delete</a
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </main>
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
