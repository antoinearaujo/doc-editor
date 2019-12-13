<?php $content = file_get_contents(__DIR__ . '/../README.md'); ?>

<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="../assets/css/bootstrap.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
</head>

<body>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <h2>Editer</h2>
                <textarea class="form-control" id="textarea-doc" rows="23"><?php echo $content; ?></textarea>
            </div>
        </div>
        <div class="col-6">
            <h2>Preview</h2>
            <iframe
                    class="w-100"
                    id="test"
                    title="Doc preview"
                    height="550"
                    src="https://<?php echo $_SERVER['SERVER_NAME'];?>/doc-editor/">
            </iframe>

        </div>
    </div>
    <div class="row">
        <div class="col-md mt-5 text-center">
            <a class="btn btn-primary" target="_blank" href="../">Voir le résultat</a>
        </div>
    </div>
</div>


<script src="../assets/js/editor.js"></script>
</body>

</html>
