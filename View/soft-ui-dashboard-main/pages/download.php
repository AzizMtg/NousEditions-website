<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    if (file_exists($file)) {
        // Set the appropriate MIME type
        $mime_type = mime_content_type($file);
        header('Content-Type: ' . $mime_type);
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        readfile($file);
        exit;
    } else {
        echo 'File not found.';
    }
} else {
    echo 'Invalid request.';
}
?>
