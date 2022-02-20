<?php 
session_start();
    define('DB_NAME','data/db.txt');
    //functin for seeding data
    function seed(){
        $data           = array(
            array(
                'id'    => 1,
                'fname' => 'Kamal',
                'lname' => 'Ahmed',
                'roll'  => '11'
            ),
            array(
                'id'    => 2,
                'fname' => 'Jamal',
                'lname' => 'Ahmed',
                'roll'  => '12'
            ),
            array(
                'id'    => 3,
                'fname' => 'Ripon',
                'lname' => 'Ahmed',
                'roll'  => '9'
            ),
            array(
                'id'    => 4,
                'fname' => 'Nikhil',
                'lname' => 'Chandra',
                'roll'  => '8'
            ),
            array(
                'id'    => 5,
                'fname' => 'John',
                'lname' => 'Rozario',
                'roll'  => '7'
            ),
        );
        $serializedData = serialize($data);
        file_put_contents(DB_NAME, $serializedData);
    }
    //Functiion for generating report
    function generateReport(){
        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);
    ?>
        <table class="table table-striped ">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <?php if(isAdmin() || isEditor()): ?>
                <th>Action</th>
                <?php endif;?>
            </tr>
            <?php 
                foreach($students as $student){
                    ?>
                        <tr>
                            <td class="25%"><?php printf("%s", $student['id']); ?></td>
                            <td class="25%"><?php printf("%s %s", $student['fname'], $student['lname']); ?></td>
                            <td class="25%"><?php printf("%s", $student['roll']) ?></td>
                            <?php if(isAdmin()): ?>
                            <td width="25%"><?php printf( '<a href="/authentication/index.php?task=edit&id=%s" class="btn btn-success">Edit</a>  <a href="/authentication/index.php?task=delete&id=%s" class="btn btn-danger permission">Delete</a>', $student['id'], $student['id'] ); ?></td>
                            <?php elseif(isEditor()):?>
                                <td width="25%"><?php printf( '<a href="/authentication/index.php?task=edit&id=%s" class="btn btn-success">Edit</a>', $student['id']); ?></td>
                            <?php endif; ?>
                        </tr>
                    <?php
                }
            ?>
        </table>
    <?php
    }
    //function for sanitize data
    function sanitizing($input){
        $input = trim($input);
        $input = htmlspecialchars($input);
        $input = stripslashes($input);
        return $input;
    }

    //function for add new student
    function addStudent($fname, $lname, $roll){
        $found = false;
        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);
        foreach($students as $_student){
            if($_student['roll'] == $roll){
                $found = true;
                break;
            }
        }
        if(!$found){
        $newId = getNewId($students);
        $student = array(
            'id' => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll' => $roll
        );
        array_push($students,$student);
        $serializedData = serialize($students);
        file_put_contents(DB_NAME, $serializedData,LOCK_EX);

        return true;
        }
        return false;
    }

    //function for new id generating
    function getNewId($students) {
        $maxId = max(array_column($students, 'id'));
        return $maxId+1;
    }
    
    //function for taking exiting student for editing
    function getStudent($id) {
        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);
        foreach($students as $student){
            if($student['id'] == $id){
                return $student;
            }
        } 
        return false;
    }

    //function for upadate editing student
    function upadateStudent($id, $fname, $lname, $roll) {
        $found = false;
        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);
        foreach($students as $_student){
            if($_student['roll'] == $roll && $_student['id'] != $id){
                $found = true;
                break;
            }
        }
        if(!$found){
        $students[$id-1]['fname'] = $fname;
        $students[$id-1]['lname'] = $lname;
        $students[$id-1]['roll'] = $roll;
        $serializedData = serialize($students);
        file_put_contents(DB_NAME, $serializedData, LOCK_EX);
        return true;
        }
        return false;
    }

    //function for delete a student
    function deleteStudent($id){
        $serializedData = file_get_contents(DB_NAME);
        $students = unserialize($serializedData);
        foreach($students as $offset => $student){
            if($student['id'] == $id){
                unset($students[$offset]);
            }
        }
        $serializedData = serialize($students);
        file_put_contents(DB_NAME, $serializedData, LOCK_EX);
    }

    function isAdmin(){
        return ('admin' == $_SESSION['role']);
    }

    function isEditor(){
        return ('editor' == $_SESSION['role']);
    }

    function hasPrivilege(){
        return (isAdmin() || isEditor());
    }

?>