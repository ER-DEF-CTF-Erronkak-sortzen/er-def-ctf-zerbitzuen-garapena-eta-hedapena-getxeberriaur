<!DOCTYPE html>
<html>
<head>
    <title>Upload Service</title>
</head>
<body>
    <h1>Upload</h1>
    <p>sdbdvkdbkjsdv dvbkdjbvkjsdbvjkd dv kdjbvkdjbvkjdbv bvkjdbvkjsdvldv dvbdjbvjdbvjbvj bxvjbkv xnvbkjbvkjbkvjbdkjvbkjdbvkjdbvkjbdjvbdjkvb  vkjbvkjbdkvjbdjkvbdjkbvkjdbvjkdbv</p>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="file">Aukeratu igo nahi duzun fitxategia:</label>
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
