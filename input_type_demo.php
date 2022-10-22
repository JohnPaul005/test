<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types Demo</title>
</head>
<body>
    <form>
        <label for="txtName">Firstname:</label>
        <input type="text" name="txtName" id="txtName"> <br>

        <label for="txtLastname">Lastname:</label>
        <input type="text" name="txtLastname" id="txtLastname"> <br>
        
        <label for="txtPassword">Password:</label>
        <input type="password" name="txtPassword" id="txtPassword"> <br>

         
         <input type="submit" name="btnSave" value="Send"><br>
         <button type="submit" name="btnSave1">Submit</button><br>
         <input type="reset" name=""><br>

         <input type="radio" name="radsex" id="radMale" value="Male">
         <label for="radMale">Male</label><br>
         <input type="radio" name="radsex" id="radFemale" value="Female">
         <label for="radFemale">Female</label><br>

         <input type="checkbox" name="chkBike" id="chkBike" value="Bike">
         <label for="chkBike">Bike</label><br>
         <input type="checkbox" name="chkCar" id="chkCar" value="Car">
         <label for="chkCar">Car</label><br>
         <input type="checkbox" name="chkBoat" id="chkBoat" value="Boat">
         <label for="chkBoat">Bike</label><br>

         <label for="clrTheme">Pick a Color</label>
         <input type="color" name="clrTheme" id="clrTheme"><br>

         <label for="dtpBirthday">Birthday</label>
         <input type="date" name="dtpBirthday" id="dtpBirthday"><br>
    
         <label for="txtEmail">Email Address:</label>
         <input type="email" name="txtEmail" id="txtEmail"><br>

    
         <label for="filPhoto">Selec a File</label>
         <input type="file" name="filPhoto" id="filPhoto"><br>
    
         <label for="txtNumber">Enter Quatity</label>
         <input type="number" name="txtNumber" id="txtNumber"><br>


         <label for="txtVolume">Select Volume</label>
         <input type="range" name="txtVolume" id="txtVolume"><br>
    
         <label for="txtTelephone">Enter Telephone</label>
         <input type="tel" name="txtTelephone" id="txtTelephone"><br>
    
    
         <label for="txtTime">Enter Time</label>
         <input type="time" name="txtTime" id="txtTime"><br>

         <label for="txtURL">ADD URL</label>
         <input type="url" name="txtURL" id="txtURL"><br>

    </form>
</body>
</html>