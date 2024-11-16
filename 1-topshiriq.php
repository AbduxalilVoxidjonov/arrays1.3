<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Format Converter</title>
</head>
<body>

<form method="post">
"2019-12-03" sanasini quyidagi formatlarga o'tkazish uchun kerakli formatni tanlang:<br>
    <label for="format">Select date format:</label>
    <select name="format" id="format">
        <option value="format1">3-dekabr, 2019 yil</option>
        <option value="format2">3/12/2019</option>
        <option value="format3">dekabr 3, 2019</option>
        <option value="format4">03.12.2019</option>
        <option value="format5">2019/03/12</option>
        <option value="format6">20190312</option>
        <option value="format7">3-dekabr</option>
    </select>
    <button type="submit">Convert</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = "2019-12-03";
    $timestamp = strtotime($date);
    $format = $_POST['format'];
    
    switch ($format) {
        case 'format1':
            echo date("j-F, Y", $timestamp) . " yil"; // 3-dekabr, 2019 yil
            break;
        case 'format2':
            echo date("j/n/Y", $timestamp); // 3/12/2019
            break;
        case 'format3':
            echo date("F j, Y", $timestamp); // dekabr 3, 2019
            break;
        case 'format4':
            echo date("d.m.Y", $timestamp); // 03.12.2019
            break;
        case 'format5':
            echo date("Y/m/d", $timestamp); // 2019/03/12
            break;
        case 'format6':
            echo date("Ymd", $timestamp); // 20190312
            break;
        case 'format7':
            echo date("j-F", $timestamp); // 3-dekabr
            break;
        default:
            echo "Invalid format selected.";
    }
}
?>

</body>
</html>
