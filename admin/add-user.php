<?php 
include 'partials/header.php';
?>

<section class="form_section">
    <div class="container form_section_container">
        <h2>Add User</h2>
        <div class="alert_message error">
            <p>This is an error message</p>
        </div>
        <form action="">
            <input type="text" name="" id="" placeholder="First Name">
            <input type="text" name="" id="" placeholder="Last Name">
            <input type="text" name="" id="" placeholder="Username">
            <input type="email" name="" id="" placeholder="Email">
            <input type="password" name="" id="" placeholder="Create Password">
            <input type="password" name="" id="" placeholder="Confirm Password">
            <select name="" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="from_control">
                <label for="avatar">User Avatar</label>
                <input type="file" name="" id="avatar">
            </div>
            <button type="submit" class="btn">Add User</button>
    
        </form>
    </div>
</section>


<?php 
include '../partials/footer.php';
?>