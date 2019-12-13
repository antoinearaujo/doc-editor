<?php

if (
    isset($_POST['content']) &&
    isset($_POST['filename'])
) {

    $content  = $_POST['content'];
    $filename = $_POST['filename'];
    $path     = __DIR__ . '/../' . $filename;

    if (file_exists($path)) {
        $fp = fopen($path, 'w');
        fwrite($fp, $content);
        fclose($fp);
        renderAjax(true);
    }
}

renderAjax(false);


/**
 * @param bool $success
 */
function renderAjax(bool $success): void
{
    echo json_encode(['success' => $success]);
    exit;
}