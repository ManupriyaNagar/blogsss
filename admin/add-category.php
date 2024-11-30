<?php
 include 'partials/header.php'
 ?>

<section class="form_section">
    <div class="container form_section_container">
        <h2>Add Category</h2>
        <div class="alert_message error">
            <p>This is an error message</p>
        </div>
        <form action="" encrypt="multipart/form-data">
            <input type="text" name="" id="" placeholder="Title">
            <textarea name="" id="" rows="4" placeholder="Description"></textarea>
            <button type="submit" class="btn">Add Category</button>
        </form>
    </div>
</section>



<?php 
include '../partials/footer.php';
?>