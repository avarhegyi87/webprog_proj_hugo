<header>
    <h1 class="entry-title">Gallery</h1>
</header>
<?php
include('./includes/config.inc.php');
$pics = array();
$pics = array();
$picreader = opendir($PICFOLDER);
while (($file = readdir($picreader)) !== false) {
    if (is_file($PICFOLDER.$file)) {
        if (in_array(pathinfo($file, PATHINFO_EXTENSION), $FORMATS)) {
            $pics[$file] = filemtime($PICFOLDER.$file);
        }
    }
}
closedir($picreader);
$msg = array();

if (isset($_POST['imgsend'])) {
    $files = array_filter($_FILES['images']['name']);
    $imgcount = count($files);
    $file = $_FILES['images'];

    for ($i = 0; $i < $imgcount; $i++) {
        if ($file['error'][$i] == 4) {
            # no file has been uploaded
        } elseif (!in_array($file['type'][$i], $ALLOWED_PICTYPES)) {
            $msg[] = " Unsupported format: " . $file['name'][$i];
        } elseif ($file['error'][$i] == 1 or $file['error'][$i] == 2 or $file['size'][$i] > $MAXPICSIZE) {
            $msg[] = " Image size too large: " . $file['name'][$i];
        } else {
            $finalloc = $PICFOLDER . strtolower($file['name'][$i]);
            if (file_exists($finalloc)) {
                $msg[] = " File already exists: " . $file['name'][$i];
            } else {
                move_uploaded_file($file['tmp_name'][$i], $finalloc);
                $msg[] = " Image successfully uploaded: " . $file['name'][$i];
            }
        }
    }
}
?>
<?php
if (!empty($msg)) {
    echo '<ul>';
    foreach ($msg as $u) {
        echo "<li>$u</li>";
    }
    echo '</ul>';
}
?>
<h2>Upload images to the Gallery</h2>
<form action="?page=gallery" method="post" enctype="multipart/form-data">
    <label>Select Images: <input type="file" name="images[]" multiple required></label>
    <input type="submit" name="imgsend" value="Upload">
</form>

<div class="entry-content">
    <h2>Uploaded Pictures</h2>
    <?php
    arsort($pics);

    foreach ($pics as $file => $imgdate) { ?>
        <div class="image">
            <a href="<?php echo $PICFOLDER . $file ?>">
                <img src="<?php echo $PICFOLDER . $file ?>">
            </a>
            <p class="pic-info">File name: <?php echo $file ?></p>
            <p class="pic-info">Date: <?php echo date($DATEFORMAT, $imgdate) ?></p>
        </div>
    <?php } ?>
</div>