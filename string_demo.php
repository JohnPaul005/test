<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        // $myString = 'Hello \$World!\\';
        // $myString2 = "Hello \$World!\\";

        // //escape char.
        // // \n is replaced by the newline character
        // // \r is replaced by the carriage-return character
        // // \t is replaced by the tab character
        // // \$ is replaced by the dollar sign itself ($)
        // // \" is replaced by a single double-quote (")
        // // \\ is replaced by a single backslash

        // echo '<pre>';
        //     echo $myString . '<hr>';
        //     echo $myString2 . '<hr>';
        // echo '</pre>';

        // echo "<h1 align=\"center\">Hello World!</h1>";


        $myName = "John Paul Espinosa";
        // echo strlen($myName)
        // echo str_word_count($myName);
        // echo str_replace("Espinosa", "Pogi", $myName);
        echo strrev($myName);

    ?>

</body>
</html>