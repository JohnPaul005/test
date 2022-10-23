<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Recieved</title>
</head>
<body>
    <?php
         /*
         ...use $_GET if you use get methon on your form
         $Firstname = $_GET['txtFirstname'];
         $Lastname = $_GET['txtLastname'];
         $sex = $_GET['radSex'];

         if($sex == 'Male')
            echo "Hello, Sir $Firstname $Lastname";
        else
            echo "Hello, Maam $Firstname $Lastname";
        */

        
         /*
         ...use $_POST if you use POST methon on your form
        $Firstname = $_POST['txtFirstname'];
        $Lastname = $_POST['txtLastname'];
        $sex = $_POST['radSex'];

        if($sex == 'Male')
            echo "Hello, Sir $Firstname $Lastname";
        else
            echo "Hello, Maam $Firstname $Lastname";
        */

        $Firstname = $_REQUEST['txtFirstname'];
        $Lastname = $_REQUEST['txtLastname'];
        $sex = $_REQUEST['radSex'];

        if($sex == 'Male')
            echo "Hello, Sir $Firstname $Lastname";
        else
            echo "Hello, Maam $Firstname $Lastname";






    ?>
</body>
</html>