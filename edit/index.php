<?php

if (file_exists($path = __DIR__ . '/../README.md')) {
    $content = file_get_contents($path);
} else {
    print_r("Pas de fichier README.md à la racine");
    exit;
}
?>
<title>
    Documentation Editor
</title>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
</head>

<body>

<div class="container-fluid p-5 mt-5">
    <button id="big-edit-doc" class="btn btn-doc" data-state="0">Agrandir</button>
        <div class="row">
            <div class="col-6" id="edit-doc">
                <div class="form-group">
                    <h2 class="title-doc">Editer</h2>
                    <textarea class="form-control" id="textarea-doc" rows="23"><?php echo $content; ?></textarea>
                </div>
            </div>
            <div class="col-6" id="preview-doc">
                <h2 class="title-doc">Preview</h2>
                <iframe
                        class="w-100"
                        id="test"
                        title="Doc preview"
                        height="550"
                        src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/doc-editor/">
                </iframe>

            </div>
        </div>
        <div class="row">
            <div class="col-md mt-5 text-center">
                <a class="btn btn-doc" target="_blank" href="../">Voir la doc</a>
            </div>
        </div>
    </div>


</body>

<footer>
    <script src="../assets/js/editor.js"></script>
</footer>
