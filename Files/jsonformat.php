<?php 
    $filename = "/media/nayemishan/Web Design & Dev/Learn With Hasin Hayder/Files/json.txt";
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

    //to save data using jsonData
    // $data = json_encode($students);
    // file_put_contents($filename, $data);

    //to read data using jsonData
    $myData = file_get_contents($filename);
    $allStudents = json_decode($myData,true);
    print_r($allStudents);

    // //To delete data using jsonData
    // unset($allStudents[1]);
    // $data = json_encode($allStudents);
    // file_put_contents($filename,$data);

    //to add new data using jsonData
    $student = array(
                'fname' => 'Ishita',
                'lname' => 'Chowdhury',
                'age' => 20,
                'class' => 'Honours 1st year',
                'roll' => 2930212343
            );
    array_push($allStudents, $student);
    $data = json_encode($allStudents);
    file_put_contents($filename, $data);

?>