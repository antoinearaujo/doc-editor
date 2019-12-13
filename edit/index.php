<?php $content = file_get_contents(__DIR__ . '/../README.md'); ?>

<html>
 <head>
        <!-- <link rel="stylesheet" type="text/css" href="../dist/simplemde.min.css">
        <script src="../dist/simplemde.min.js"></script> -->
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>

<body>
    <div>
        <a target="_blank" href="../">Voir le résultat</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="MyID">Editer</label>
                    <textarea class="form-control" id="MyID" rows="23"><?php echo $content; ?></textarea>
                </div>
            </div>
            <div class="col-6">
                <label>Preview</label>
                <iframe id="test"
                        title="Inline Frame Example"
                        width="500"
                        height="550"
                        src="http://localhost/doc-editor/">
                </iframe>

            </div>
        </div>
    </div>

    <script>
        (function () {
            $('#MyID').on("change", function(){
                writeTextFile('README.md', $(this).val());
                console.log($(this).val());
				$('#test')[0].contentWindow.location.reload(true);
            });

            function writeTextFile(filename, output) {
                $.ajax({
                    method: "POST",
                    url: "../controllers/write.php",
                    data: { filename: filename, content: output }
                })
                .done(function( msg ) {
                    console.log( "Data Saved: " + msg );
                });
            }
        })();
    </script>
</body>

</html>
