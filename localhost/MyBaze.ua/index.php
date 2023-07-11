<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>База!</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <table>
        <tr>
            <td>№</td>
            <td>Имя</td>
            <td>Курс</td>

            <?php 
             $mysqli = new mysqli("localhost", "root", "", "Practika_bd");
             if($mysqli->connect_errno){
                echo "Возникла проблема";
                exit;
             }
             $query = "SELECT * FROM `Student`";
             $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
             for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
             $result = '';
             foreach ($data as $elem){
                $result .='<tr>';

                $result .='<td>' .$elem['Student_id'] . '</td>';
                $result .='<td>' .$elem['mode'] . '</td>';
                $result .='<td>' .$elem['course'] . '</td>';

                $result .='</tr>';
             }
             echo $result;
             ?>

             <?php 
             $mysqli = new mysqli("localhost", "root", "", "Practika_bd");
             if($mysqli->connect_errno){
                echo "Возникла проблема";
                exit;
             }
             $query = "SELECT * FROM `Student` limit 2 , 4";
             $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
             for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
             $result = '';
             foreach ($data as $elem){
                $result .='<tr>';

                $result .='<td>' .$elem['Student_id'] . '</td>';
                $result .='<td>' .$elem['mode'] . '</td>';
                $result .='<td>' .$elem['course'] . '</td>';

                $result .='</tr>';
             }
             echo $result;
             ?>
    </table>
</body>

</html>
