<?php 
include 'partials/header.php';
?>

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
                <li><a href="manage-user-page.php"><i class="uil uil-users-alt">
                    <h5>Manage User Page</h5>
                </i></a></li>
                <li><a href="add-category.php"><i class="uil uil-edit">
                    <h5>Add Category</h5>
                </i></a></li>
                <li><a href="manage-category.php" class="active"><i class="uil uil-list-ul">
                    <h5>Manage Category</h5>
                </i></a></li>
            </ul>
        </aside>
        <main>
            <h2>Manage Categories</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Travel</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="edit-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Wild Life</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="edit-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Music</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="edit-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                </tbody>

            </table>
        </main>
    </div>
</section>


<?php
include 'partials/header.php';
?>