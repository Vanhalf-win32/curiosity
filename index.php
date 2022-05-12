<?php
$var1 = 'Fedor';

?>
<html lang="en">
    <head>
        <title>Hello!</title>
        <style> 
        h2 {
            color: #f00;
        }
        </style>
    </head>
    <body>
        
        <h2 id="my-header"> hello <?= $var1?>  !</h2>
        <button id="my-button">button</button>
    <script src="myscript.js"></script>
    </body>
</html>