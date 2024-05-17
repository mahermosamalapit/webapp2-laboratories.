<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SYNTAX</title>
</head>
<body>
    <p><?php 
        // TASK #1
        $name = 'Name: Ma.Hermosa C. Malapit '; 
        $age = 'Age: 19 years old';
        $address = 'Address: San Jose Del Monte, Bulacan, Muzon';
        $hobbies = 'Hobbies: Painting, Drawing, Movies, Singing';
        $pet_peeve = 'Pet Peeve: Indecisive people and Loud Chewer';

        echo $name, '<br>'; 
        echo $age, '<br>'; 
        echo $address, '<br>'; 
        echo $hobbies, '<br>'; 
        echo $pet_peeve, '<br>','<br>','<br>','<br>','<br>'; 


        // TASK #2
        // echo $hobbies, '<br>'; 
        // echo $pet_peeve, '<br>'; 


        // TASK #3
        define('NAME','Ma.Hermosa C. Malapit');
        define('AGE','19 years old');
        define('ADDRESS','San Jose Del Monte, Bulacan, Muzon');
        define('HOBBIES','Painting, Drawing, Movies, Singing');
        define('PET_PEEVE','Indecisive people and Loud Chewer');

        echo NAME, '<br>';
        echo AGE, '<br>';
        echo ADDRESS, '<br>';
        echo HOBBIES, '<br>';
        echo PET_PEEVE, '<br>','<br>','<br>','<br>','<br>';


        // TASK #4
        echo '<pre>';
        var_dump(NAME, AGE, ADDRESS, HOBBIES, PET_PEEVE);
        echo '</pre>';


        /* TASK #5
           Kasi ayokong saakin binibigay yung burden when it comes on deciding what to do, 
           as a silent chewer naiirita talaga ako kapag may maingay kumain sa harap ko, 
           nagmumukha kasing marumi kumain.
            */
        ?>
    </p>
</body>
</html>