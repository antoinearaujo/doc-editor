<?php $content = file_get_contents(__DIR__ . '/../README.md'); ?>

<html>
 <head>
        <link rel="stylesheet" type="text/css" href="../dist/simplemde.min.css">
        <script src="../dist/simplemde.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    </head>

<body>
    <div><a target="_blank" href="../">Voir le résultat</a></div>
    <textarea id="MyID"><?php echo $content; ?></textarea>
    <script>
        (function () {
            var simplemde = new SimpleMDE({element: document.getElementById("MyID")});

            simplemde.codemirror.on("change", function(){
                writeTextFile('README.md', simplemde.value());
                console.log(simplemde.value());
            });

            function writeTextFile(filename, output) {
                $.ajax({
                    method: "POST",
                    url: "controllers/write.php",
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
