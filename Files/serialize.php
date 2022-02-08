<?php 
    $filename = "/media/nayemishan/Web Design & Dev/Learn With Hasin Hayder/Files/serialize.txt";
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

    // //To write data to local database using serialize
    // $data = serialize($students);
    // file_put_contents($filename, $data);



    //To read serialized data from local database
    $myData = file_get_contents($filename);
    $students = unserialize($myData);
    print_r($students);


    // //To add new students to local database
    // $student = array(
    //         'fname' => 'Ishita',
    //         'lname' => 'Chowdhury',
    //         'age' => 20,
    //         'class' => 'Honours 1st year',
    //         'roll' => 2930212343
    //     );
    // array_push($students, $student);
    // $data = serialize($students);
    // file_put_contents($filename, $data, LOCK_EX);


    // //to delete any line from local database
    // unset($students[1]);
    // $data = serialize($students);
    // file_put_contents($filename, $data);
    







?>