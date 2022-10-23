<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <form method="post" action="capturing_form_data.php">
        <labe for="txtFirstname">First Name</label>
        <input type="text" name="txtFirstname" id="txtFirstname"><br><br>

        <labe for="txtLastname">Last Name</label>
        <input type="text" name="txtLastname" id="txtLastname"><br><br>
        
        <input type="radio" name="radSex" id="radMale" value="Male">
        <label for="radMale">Male</label>
        <input type="radio" name="radSex" id="radFemae" value="Femae">
        <label for="radFemae">Female</label><br><br>

        <button type="submit" name="btnSend">Send</button>


    
    
    </form>
</body>
</html>