<?php require_once ('functions/dataProcess.php')?>
<!DOCTYPE HTML>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>Files</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="crud/resources/js/scripts.js"></script>
    <link rel="stylesheet" href="crud/resources/css/styles.css">
</head>
<body style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="column column-100 column-offset-40">
                <h1>CRUD Operations</h1>
                <?php include_once('include/templates/nav.php')?>
            </div>
        </div>
        <?php print_r($data);?>
        <div class="row">
            <div id="tableView" style="display: none" class="column column-100 column-offset-40">
                <table id="displayTable">
                    <td>
                        <button id='edit' class='buttonReset' name='task' value='edit_0'>Edit</button> | <button id='delete' class='buttonReset' name='task' value='delete_0'>Delete</button>
                    </td>
                </table>
            </div>
        </div>
        <div class="row">
            <div style="display: none" id="addNewForm" class="column column-100 column-offset-40">
                <h3>Add Student</h3>
                <label for='fname'>First Name</label>
                <input id='fname' type='text'>
                <label for='lname'>Last Name</label>
                <input id='lname' type='text'>
                <label for='roll'>Roll</label>
                <input id='roll' type='text'>
                <button id='submit' class='' name='submit' value='submit'>Add Student</button>
            </div>
        </div>
    </div>
    <script src="crud/resources/js/scripts.js"></script>
</body>
</html>