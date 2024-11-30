<?php
 include 'partials/header.php'
 ?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Add Post</h2>
        <div class="alert_message error">
            <p>This is an error message</p>
        </div>
        <form action="" encrypt="multipart/form-data">
            <input type="text" name="" id="" placeholder="Title">
            <select name="" id="">
                <option value="1">Travel</option>
                <option value="1">Art</option>
                <option value="1">Science & Technology</option>
                <option value="1">Travel</option>
                <option value="1">Art</option>
            </select>
            <textarea name="" id="" placeholder="Body"></textarea>
            <div class="form_control inline">
                <input type="checkbox" id="is_featured">
                <label for="is_featured" >Featured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Add Thumbnail</label>
                <br>
                <input type="file" id="thumbnail">
            </div>
           <button type="submit" class="btn">Add Post</button>

        </form>
    </div>
</section>


<?php 
include '../partials/footer.php';
?>