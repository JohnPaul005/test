<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMTL Form Elements</title>
</head>
<body>
    <form>
        <input type="" name=""> <!-- textbox -->
        <hr>
        
        <select name="drpCars"> <!-- dropdown list -->
            <option value="Volvo">Volvo</option>
            <option value="Saab">Saab</option>
            <option value="Fiat" selected>Fiat</option>
            <option value="Navigator">Navigator</option>
            <option value="Toyota">Toyota</option>
            <option value="Ford">Ford</option>
            <option value="Mitsubishi">Mitsubishi</option>
        </select>
        <hr>

        <!-- multi line textbox -->
        <textarea name="text" rows="20" cols="50"></textarea>
    
        <hr>
        
        <!-- button, submit, reset -->
        <button type="button"><b>Click Me!</b></button>
    
        <hr>

        <fieldset><!-- to group related data in a form -->
            <legend>Personal Information</legend>
            First Name<input type="" name=""> <br>
            Last Name<input type="" name=""> <br>
        </fieldset>

        <hr>

        <input type="text" name="dlstBrowsers" list="browsers">
        <datalist id="browsers">
            <option value="Firefox">
            <option value="Chrome">
            <option value="Opera">
            <option value="Safari">
            <option value="Microsoft Edge">
        </datalist>

    </form>
</body>
</html>