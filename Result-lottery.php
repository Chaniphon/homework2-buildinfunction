<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Lottery</title>
</head>
</html>

<?php
    $lucky = rand(0,99);
    $lottery = $_POST['lottery'];
    $money = $_POST['money'];
    $result = 0;

    if($lottery == $lucky){
        $result = 60 * $money;
        echo "<div style='border:1px solid black;padding:15px;display:inline-block;'>";
        echo "<p>ยินดีด้วยคุณถูกรางวัล</p>";
        echo "<p>คุณได้เงินรางวัล $result บาท";
        echo "<button onclick='history.back()'>Back</button>";
        echo "<p></p><p>รางวัล เลขที่ออก คือ : $lucky</p>";
        echo "</div>";
    }
    else {
        echo "<div style='border:1px solid black;padding:15px;display:inline-block;'>";
        echo "<p>เสียใจด้วยคุณไม่ถูกรางวัล</p>";
        echo "<button onclick='history.back()'>Back</button>";
        echo "<p></p><p>รางวัล เลขที่ออก คือ : $lucky</p>";
        echo "</div>";
    }
?>