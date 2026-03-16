<h2>Upload Profile Picture</h2>
<form action="profile_upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="profile_pic" required><br><br>
    <button type="submit" name="upload_btn">Upload Image</button>
</form>

<hr>

<?php
if (isset($_POST['upload_btn'])) {
    $target_dir = "uploads/";
    $file_name = basename($_FILES["profile_pic"]["name"]);
    $target_file = $target_dir . $file_name;

    if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
        echo "<p>The file ". htmlspecialchars($file_name) . " has been uploaded.</p>";
        echo "<img src='$target_file' width='200' alt='Profile Picture'>";
    } else {
        echo "<p>Sorry, an error uploading your file.</p>";
    }
}
?>  
