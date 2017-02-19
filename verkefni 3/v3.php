<form action="" method="post" enctype="multipart/form-data" id="uploadImage">
 <p>
 <label for="image">Upload image:</label>
 <input type="file" name="image" id="image">
 </p>
 <p>
 <input type="submit" name="upload" id="upload" value="Upload">
 </p>
</form>

</form>
 <pre>
 <?php
 if (isset($_POST['upload'])) {
 print_r($_FILES);
 }
 ?>
 </pre>
 </body>