<?php 
    $filename = "/media/nayemishan/Web Design & Dev/Learn With Hasin Hayder/Files/dataprocess.txt";
    $students = array(
        array(
            'fname' => 'Nayem Hossain',
            'lname' => 'Ishan',
            'age' => 22,
            'class' => 'Diploma Last year',
            'roll' => 940191
        ),
        array(
            'fname' => 'Adom',
            'lname' => 'Grilcrist',
            'age' => 35,
            'class' => 'Masters',
            'roll' => 453566
        ),
        array(
            'fname' => 'Mou',
            'lname' => 'Chowdhury',
            'age' => 20,
            'class' => 'Honours 1st year',
            'roll' => 2930212343
        )
    );

    //print_r($students);

    /*
    I want to take data like that:
    Nayem Hossain, Ishan, 22, Diploma Last year, 940191;
    Adom, Grilcrist, 35, Masters, 453566;
    Mou, Chowdhury, 20, Honours 1st year, 2930212343;
    */

    
    
    // //This code for writing data
    // $fp = fopen($filename, 'w');
    // foreach ($students as $student){
    //     $data = sprintf("%s,%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
    //     fwrite($fp,$data);
    // }
    // fclose($fp);

    //You can also use this code for writing data
    $fp = fopen($filename, 'w');
    foreach($students as $student){
        fputcsv($fp,$student);
    }
    fclose($fp);

    /*
    I want to take data like that:

            fname = Nayem Hossain,
            lname = Ishan,
            age = 22,
            class = Diploma Last year,
            roll = 940191

            fname = Adom,
            lname = Grilcrist,
            age = 35,
            class = Masters,
            roll = 453566

            fname = Mou,
            lname = Chowdhury,
            age = 20,
            class = Honours 1st year,
            roll = 2930212343
    */


    //This code for reading data
    // $fp = fopen($filename, 'r');
    // while ($line = fgets($fp)){
    //     $student = explode (',', $line);
    //     //print_r($student);
    //     printf("\nFname = %s\nLname = %s\nAge = %s\nClass = %s\nRoll = %s\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
    // }
    // fclose($fp);

    //You can also use this code for reading data
    // $fp = fopen($filename, 'r');
    // while ($student = fgetcsv($fp)){
    //     printf("\nFname = %s\nLname = %s\nAge = %s\nClass = %s\nRoll = %s\n", $student[0], $student[1],$student[2],$student[3],$student[4]);
    // }
    // fclose($fp);


    //To add a new student in our file
    // $students = array(
    //     'fname' => 'Ishita',
    //     'lname' => 'Chowdhury',
    //     'age' => 20,
    //     'class' => 'Honours 1st year',
    //     'roll' => 2930212343
    // );
    // $fp = fopen($filename, 'a');
    // fputcsv($fp, $students);
    // fclose($fp);

    //This code is used to delete a student
    $data = file($filename);
    unset($data[1]);
    print_r($data);
    $fp = fopen($filename, 'w');
    foreach ($data as $line){
        fwrite($fp, $line);
    }
    fclose($fp);
?>