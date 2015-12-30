<?php
$css = array(
    'css/screen.css',
    'https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css'
);

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Collab||8</title>

        <script data-main="js/init.js" src="js/require.js"></script>

        <?php foreach ($css as $href): ?>
            <link href="<?=$href;?>" rel="stylesheet">
        <?php endforeach; ?>
    </head>
    <body>
        <p>Note: <input data-bind="value: txtNote"></p>

    </body>
</html>