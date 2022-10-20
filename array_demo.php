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
        //Index Arrays
        //Three diffrent ways to declare and create an Array
        /*
        $color = array("Red", "Green", "Blue");
        
        $pet = ["Dog", "Cat", "Pig", "Hamster"];
        
        $country[0] = "Philippines";
        $country[1] = "Japan";
        $country[2] = "Korea";
        $country[3] = "Russia";
        $country[4] = "UAE";

        echo $country[1];
        */

        //Associative Arrays
        /*
        $ages = array("Peter"=> 22, "Clark"=> 32, "John"=> 28);
        
        $size = ["small" => 10, "md" => 14, "lg" => 20];
        
        $student['name'] = "John Paul";
        $student['grade'] = 99;
        $student['age'] = 12;
        echo $student['name'] . 'is' . $student['age']. ' years old.';
        */

        //Multidimensional Arrays
        /*
        $contacts = array(
            array(
                'name' => 'Peter Parker', 
                'email' => 'peterparker@email.com',
                'sex' => 'Male'
            ),

            array(
                'name' => 'Clark Kent', 
                'email' => 'Clarkkent@email.com',
                'sex' => 'Male'
            ),

            array(
                'name' => 'Harry Potter', 
                'email' => 'Harrypotter@email.com',
                'sex' => 'Male'
            ),
            
            array(
                'name' => 'Katnis Everdeen', 
                'email' => 'katniseverdeen@email.com',
                'sex' => 'Female'
            )
        );

        echo $contacts[1]['name'];
        */

        /*
        $ages = array("Peter"=> 22, "Clark"=> 32, "John"=> 28);
        print_r($ages);
        echo '<br><br>';
        var_dump($ages);
        echo '<br><br>';

        $student['name'] = "John Paul";
        $student['grade'] = 99;
        $student['age'] = 12;
        print_r($student);
        echo '<br><br>';
        var_dump($student);
        */

        // Processing Indexed Arrays using foreach
        /*
        $color = array("Red", "Green", "Blue", "Yellow", "pink");

        
        foreach($color as $key => $value){
            echo $value . '<br>';
        }
        */
        

        // for($i=0; $i < count($color); $i++)
        // echo $color[$i]. '<br>';
        // as much as possible please use forearch in arrays

        // Processing Indexed Arrays using foreach
        /*
        $ages = array("Peter"=> 22, "Clark"=> 32, "John"=> 28);
        foreach($ages as $key => $value){
            echo $value. '<br>';
        }
        */

        $contacts = array(
            array(
                'name' => 'Peter Parker', 
                'email' => 'peterparker@email.com',
                'sex' => 'Male'
            ),

            array(
                'name' => 'Clark Kent', 
                'email' => 'Clarkkent@email.com',
                'sex' => 'Male'
            ),

            array(
                'name' => 'Harry Potter', 
                'email' => 'Harrypotter@email.com',
                'sex' => 'Male'
            ),
            
            array(
                'name' => 'Katnis Everdeen', 
                'email' => 'katniseverdeen@email.com',
                'sex' => 'Female'
            )
        );

        foreach($contacts as $keyContact => $valueContact){
            foreach($valueContact as $key => $value){
                echo '<b>' . strtoupper($key) . '</b>: ' . $value . '<br>';
            }
            echo'<br>';
        }
    ?>
</body>
</html>