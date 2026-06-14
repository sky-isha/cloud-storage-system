<!DOCTYPE html>
<html>
<head>
    <title>Cloud Storage Dashboard</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        h1{
            color: #007bff;
        }

        .btn{
            padding:10px;
            background:#007bff;
            color:white;
            border:none;
            cursor:pointer;
        }

        a{
            text-decoration:none;
        }
    </style>
</head>
<body>

<h1>☁ Cloud Storage Dashboard</h1>

<a href="logout.php">
    <button class="btn">Logout</button>
</a>

<br><br>

<form action="upload.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="file" required>

    <button type="submit" class="btn">
        Upload File
    </button>

</form>

<h2>Uploaded Files</h2>

<?php

$files = scandir("uploads");

foreach($files as $file)
{
    if($file != "." && $file != "..")
    {
        echo "<a href='uploads/$file'>$file</a><br>";
    }
}

?>

</body>
</html>