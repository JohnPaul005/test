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

        //Simple if
        // $grade = 70;
        // if($grade > 74.4){
        //     echo 'Passed!';
        // }
        // else {
        //     echo 'Failed';
        // }


        /*
        Laderrize if
        $grade = 74.4;

        if($grade > 100){
            echo 'Out of Range!';
        }
        elseif($grade > 74.4){
            echo 'Passed!';
        }
        elseif($grade > 64.4){
            echo 'Failed!';
        }
        else{
            echo 'Out of Range!';
        }
        */

         /*
         nested if
        $sex = 'male';
         $age = 21;

         if($sex == 'female'){
            if($age == 18)
                echo 'Debutant';
            else
                echo 'Not Debutant';
         }
         elseif($sex == 'male'){
                if($age == 21)
                    echo 'Debutant';
                else
                    echo 'Not Debutant';
         }
         else{
            echo 'Invalid Sex!';
         }
         */

        /*
        Laderrize if with Logical Operator
         $sex = 'male';
        $age = 18;

        if($sex == 'female' && $age == 18)
            echo 'Debutant';
        elseif($sex == 'male' && $age == 21)
            echo 'Debutant';
        else
            echo 'Not Debutant';
        */

        /*
        R - Red
        G - Green
        B - Blue
        Y - Yellow
        */

        $colorCode = 'r';
        switch(strtoupper($colorCode)){
            case 'R';
                echo 'Red';
                break;
            case 'G';
                echo 'Green';
                break;
            case 'B';
                echo 'Blue';
                break;
            case 'Y';
                echo 'Yellow';
                break;
            default:
                echo 'Unknown Color';
        }



    ?>
</body>
</html>