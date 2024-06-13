<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kindle Highlights</title>
</head>
<body>

<button id="login" class="login">Login</button>

<div class="popupLogin" id="popupLogin">
    <div class="popup-box-login">
        <h2 style="color: #14f8f8;">Login</h2>
        <form class="form-container">
            <label class="form-label" for="email">Email:</label>
            <input class="form-input" type="email" name="email" placeholder="abc@gmail.com" required>
            <label class="form-label" for="password">Password:</label>
            <input class="form-input" type="password" name="password" placeholder="Password" required>
        </form>
    </div>
</div>

<form action="index.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>


<script src="script.js"></script>

</body>
</html>


<?php

if (isset($_FILES['fileToUpload']) && $_POST['submit']) {
    $success_upload = false;
//    print_r($_FILES);
    $file = basename($_FILES['fileToUpload']['name']);

    // Generate new file name
    $file_name = time() . '.' . pathinfo($file, PATHINFO_EXTENSION);

    // save the file with the new name
    $save = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], 'clipings/' . $file_name);

    if ($save) {
        echo 'File saved';
        $new_file = 'clipings/' . $file_name;
        $success_upload = true;
    } else {
        echo 'Error saving file';
    }

    if ($success_upload) {
        $highlights = getKindleHighlights($new_file);
        echo "<pre>";
        print_r($highlights);
        echo "</pre>";

    }
}


function getKindleHighlights($file)
{
    $file = file_get_contents($file);
    $file = explode('==========', $file);
    $highlights = [];

    foreach ($file as $key => $value) {
        $value = array_filter(array_map('trim', explode("\n", $value)));
        if (!empty($value)) {
            $highlights[] = $value;
        }
    }

    foreach ($highlights as &$cleaned_highlights) {
        $cleaned_highlights = array_values($cleaned_highlights);
    }

    $grouped_highlights = [];

    foreach ($highlights as $item) {
        $title = isset($item[0]) ? trim($item[0], "\xEF\xBB\xBF") : 'Unknown Author';
        $location = $item[1] ?? 'Unknown Location';
        $highlight = $item[2] ?? 'No Highlight Found';

        if (!isset($grouped_highlights[$title])) {
            $grouped_highlights[$title] = [];
        }
        $grouped_highlights[$title][] = [
            'location' => $location,
            'highlight' => $highlight
        ];
    }
    return $grouped_highlights;
}

?>
