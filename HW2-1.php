<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW2-1 : Find Character</title>
</head>
<body>
<h1 align=center>HW2-1 : Find Character <br></h1>
<form action="#" method="post">
    <table align="center" border=0>
        <tr>
            <td>
                Your Text : 
            </td>
            <td>
                <input type="text" name="str">
            </td>
        </tr>
        <tr height="60px">
            <td colspan="2" align=center>
                <button name="submit" type="submit">Submit</button>
                <button type="reset">clear</button>
            </td>
        </tr>
    </table>
</form>

<?php
    function find_char($text)
    {
        for ($i = 0; $i < strlen($text); $i++) {
            $check = true;
            $char = substr($text, $i, 1);
            for ($r = $i - 1; $r > -1; $r--) {
                if ($char == substr($text, $r, 1)) {
                    $check = false;
                }
            }
            if ($check) {
                if($char == " ")$char = 'space';
                echo ''.$char . ': Ascii = ' . ord($char) . ' <br> ';
            }
            
        }
    }
    function show_form()
    {
        echo "<center><h1> HW2-2:Find Ascii</h1>";
        echo '<form method="get" action="FineWord.php">';
        echo 'Your Text : <input type="text" name="text" size="10" value=""/><br><br>';
        echo '<input type="submit" value=" submit " /><input type="reset" value=" Clear " />';
        echo '</form></center>';
    }
    if (isset($_GET['text'])) {
        $text = $_GET['text'];
        show_form();
        echo '<hr>';
        echo '<center><h3> Count Char in Sentence</h3><br><h4>';
        find_char($text);
        echo '</h4></center>';
    } else {
        show_form();
    }
    ?>
</body>
</html>