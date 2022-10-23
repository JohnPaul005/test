<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Contact</title>
</head>
<body>
   <h1>Basic Information</h1><hr>
    <form method="post">
        <label for="txtName">Name:<sup style="color:red">*</sup></label><br>
        <input type="text" name="txtName" id="txtName" autofocus required> <br>
    
        <label for="txtEmail">Email:<sup style="color:red">*</sup></label><br>
        <input type="email" name="txtEmail" id="txtEmail" required> <br>
    
        <label for="txtSubject">Subject:<sup style="color:red">*</sup></label><br>
        <input type="text" name="txtSubject" id="txtSubject" required> <br>

        <label for="txtMessage">Message:<sup style="color:red">*</sup></label><br>
        <textarea name="txtMessage" id="txtMessage" rows="5" cols="30" required> </textarea><br>

        <button type="submit" name="btnSend">Send</button>
    </form>

    <hr>
    <h1>Thank You!</h1>
    <p>Here is the information you have submitted: </p>
</body>
</html>