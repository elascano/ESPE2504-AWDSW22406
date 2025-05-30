<?php
include ("connection.php");
    $request = 'SELECT s.SINGER_ID AS "id", s.SINGER_NAME AS "name" , s.SINGER_NATIONALITY AS "nation", s.SINGER_BORN_DATE AS "born_date", s.SINGER_NUMBER_DISK AS "disk", s.SINGER_DISK_PRICE AS "price" FROM singer s';
    $result = mysqli_query($conn,$request);

    if($result){
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
    }else {
        echo json_encode(["[ERROR]" => "There is an error in the request for project list"]);
    }
?>
