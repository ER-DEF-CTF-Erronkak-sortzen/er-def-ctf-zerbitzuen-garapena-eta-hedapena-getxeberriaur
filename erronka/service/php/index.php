<!DOCTYPE html>
<html>
<head>
    <title>Upload Service</title>
</head>
<body>
    <h1>Igo fitxategia</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="file">< Aukeratu fitxategia:</label>
        <input type="file" name="uploaded_file" id="file" required>
        <button type="submit">Upload</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["uploaded_file"]["name"]);

        if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $target_file)) {
            echo "<p>File uploaded successfully: <a href='$target_file'>$target_file</a></p>";
        } else {
            echo "<p>Error uploading file.</p>";
        }
    }
    ?>
</body>
</html>
