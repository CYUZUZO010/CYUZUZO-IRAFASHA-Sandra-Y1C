<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table {
            width: 1350px;
            height: 300px;
            background-image: linear-gradient(to right, rgb(212, 189, 126),rgb(194, 186, 126));
        }
    </style>




<?php
    if ($_SERVER['REQUEST_METHOD']== "POST"){
    $name = $_POST['names'];
    $date = $_POST['dates'];
    $email = $_POST['Emails'];
    $password = $_POST['psw'];
    $telephone =$_POST['telephones'];
    $studentid = $_POST['students'];
    $nationality = $_POST['nation'];
    $gender = $_POST['genders'];
    $subject = $_POST['subjects'];
    $range = $_POST['volume'];
    $color = $_POST['colors'];
    $time = $_POST['times'];
    $week = $_POST['weeks'];
    }
    ?>
         <table cellspacing= '0px' border='1px'>
            <tr>
                <th>NAMES</th>
                <th>DATE</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>TELEPHONE</th>
                <th>STUDENT ID</th>
                


            </tr>
            <tr>
                <td><?php echo $name;?></td>
                <td><?php echo $date;?> </td>
                <td><?php echo $email;?></td>
                <td><?php echo $password;?></td>
                <td><?php echo $telephone;?></td>
                <td><?php echo $studentid;?></td>
                
            </tr>
            
        </table><br>
        <table cellspacing='0px' border='1px'>
            <tr>
                
                <th>NATIONALITY</th>
                <th>GENDER</th>
                <th>SUBJECTS</th>
                <th>RANGE</th>
                <th>COLOR</th>
                <TH>TIME SET</TH>
                <th>WEEK SET</th>
                </tr>

                <tr>
                
                <td><?php echo $nationality;?></td>
                <td><?php echo $gender;?></td>
                <td><?php echo $subject;?></td>
                <td><?php echo $range;?></td>
                <td><?php echo $color;?></td>
                <td><?php echo $time;?></td>
                <td><?php echo $week;?></td>
                </tr>

        </table>
        </body>
</html>