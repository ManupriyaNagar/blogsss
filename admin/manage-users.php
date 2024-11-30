<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MySQL BLOG Application with admin panel</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monsterrat:wght@300;400;500;600;700;900&display=swap">
    
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.php" class="nav_logo">EGATOR</a>
            <ul class="nav_items">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li><a href="signin.html">Signin</a></li> -->
                <li class="nav_profile"> 
                    <div class="avatar">
                       <img src="./images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>



<section class="dashboard">
    <div class="container dashboard_container">
        <button id="show_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-left-b"></i></button>
        <aside>
            <ul>
                <li><a href="add-post.php"><i class="uil uil-pen">
                    <h5>Add Post</h5>
                </i></a></li>
                <li><a href="index.php"><i class="uil uil-postcard"><h5>Dashboard</h5></i></a></li>
                <li><a href="add-user.php"><i class="uil uil-user-plus">
                    <h5>Add User</h5>
                </i></a></li>
                <li><a href="manage-user-page.php" class="active"><i class="uil uil-users-alt">
                    <h5>Manage User Page</h5>
                </i></a></li>
                <li><a href="add-category.php"><i class="uil uil-edit">
                    <h5>Add Category</h5>
                </i></a></li>
                <li><a href="manage-category.php" ><i class="uil uil-list-ul">
                    <h5>Manage Category</h5>
                </i></a></li>
            </ul>
        </aside>
        <main>
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mishka</td>
                        <td>achiever</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="edit-category.php" class="btn sm danger">Delete</a></td>
                        <td>yes</td>
                    </tr>
                    <tr>
                        <td>Mishka</td>
                        <td>achiever</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="edit-user.php" class="btn sm danger">Delete</a></td>
                        <td>yes</td>
                    </tr>
                    <tr>
                        <td>Mishka</td>
                        <td>achiever</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="edit-user.php" class="btn sm danger">Delete</a></td>
                        <td>yes</td>
                    </tr>
                </tbody>

            </table>
        </main>
    </div>
</section>



<footer>
        <div class="footer_socials">
            <a href="https://youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="https://linkedin.com/" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="https://twiter.com/" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
        <div class="container footer_container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Wild Life</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Science & Technology</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Number</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>

                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Category</a></li>
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
        <div class="footer_copyright">
            <small>Copyright &copy; 2024 EGATOR TUTORIALS</small>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>