<?php
require_once ('crudFunctions.php');

if(isset($_POST['task'])){
    if('seed' == $_POST['task']){
        seed();
        echo "Data seeding successful";
    } else if('view' == $_POST['task']){
        $data = view();
        $serial = 1;
        // echo $data[0]['firstName'];
        // print_r($data);
        echo
        "<thead>
            <th>#</th>
            <th>Full Name</th>
            <th>Roll No</th>
            <th>Action</th>
        </thead>
        <tbody>";
        foreach($data as $student){
            echo "<tr>";
            echo "<td>";
            echo $serial++;
            echo "</td>";
            echo "<td>";
            echo $student['firstName'].' '.$student['lastName'];
            echo "</td>";
            echo "<td>";
            echo $student['roll'];
            echo "</td>";
            echo "<td>";
            echo "<button id='edit' class='buttonReset' name='task' value='edit'>Edit</button> | <button id='edit' class='buttonReset' name='task' value='delete'>Edit</button>";
            echo "</td>";
            echo "</tr>";
        echo "</tbody>";
        }
    }
}