<?php

if(isset($_FILES['file']))
{
    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];

    if(move_uploaded_file($tempname, "uploads/" . $filename))
    {
        echo "File Uploaded Successfully!<br><br>";
        echo "<a href='dashboard.php'>Go Back to Dashboard</a>";
    }
    else
    {
        echo "Upload Failed!";
    }
}
else
{
    echo "No File Selected!";
}

?>