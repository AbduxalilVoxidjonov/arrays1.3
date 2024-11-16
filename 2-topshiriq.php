<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Converter: Cyrillic to Latin and Vice Versa</title>
</head>
<body>

<form method="post">
    <label for="text">Enter text:</label><br>
    <textarea name="text" id="text" rows="4" cols="50"><?php echo isset($_POST['text']) ? $_POST['text'] : ''; ?></textarea><br>
    <button type="submit" name="convertToLatin">Convert to Lotin</button>
    <button type="submit" name="convertTokiril">Convert to Kiril</button>
</form>

<?php
function toLatin($text) {
    $cyrToLat = [
        "А"=>"A", "Б"=>"B", "В"=>"V", "Г"=>"G", "Д"=>"D", "Е"=>"E", "Ё"=>"Yo", "Ж"=>"J", "З"=>"Z", 
        "И"=>"I", "Й"=>"Y", "К"=>"K", "Қ"=>"Q", "Л"=>"L", "М"=>"M", "Н"=>"N", "О"=>"O", "П"=>"P", 
        "Р"=>"R", "С"=>"S", "Т"=>"T", "У"=>"U", "Ў"=>"O'", "Ф"=>"F", "Х"=>"X", "Ц"=>"Ts", "Ч"=>"Ch", 
        "Ш"=>"Sh", "Щ"=>"Sh", "Ъ"=>"'", "Ы"=>"I", "Э"=>"E", "Ю"=>"Yu", "Я"=>"Ya",
        "а"=>"a", "б"=>"b", "в"=>"v", "г"=>"g", "д"=>"d", "е"=>"e", "ё"=>"yo", "ж"=>"j", "з"=>"z", 
        "и"=>"i", "й"=>"y", "к"=>"k", "қ"=>"q", "л"=>"l", "м"=>"m", "н"=>"n", "о"=>"o", "п"=>"p", 
        "р"=>"r", "с"=>"s", "т"=>"t", "у"=>"u", "ў"=>"o'", "ф"=>"f", "х"=>"x", "ц"=>"ts", "ч"=>"ch", 
        "ш"=>"sh", "щ"=>"sh", "ъ"=>"'", "ы"=>"i", "э"=>"e", "ю"=>"yu", "я"=>"ya"
    ];
    return strtr($text, $cyrToLat);
}

function toKiril($text) {
    $latToCyr = [
        "A"=>"А", "B"=>"Б", "V"=>"В", "G"=>"Г", "D"=>"Д", "E"=>"Е", "Yo"=>"Ё", "J"=>"Ж", "Z"=>"З", 
        "I"=>"И", "Y"=>"Й", "K"=>"К", "Q"=>"Қ", "L"=>"Л", "M"=>"М", "N"=>"Н", "O"=>"О", "P"=>"П", 
        "R"=>"Р", "S"=>"С", "T"=>"Т", "U"=>"У", "O'"=>"Ў", "F"=>"Ф", "X"=>"Х", "Ts"=>"Ц", "Ch"=>"Ч", 
        "Sh"=>"Ш", "'"=>"Ъ", "Yu"=>"Ю", "Ya"=>"Я",
        "a"=>"а", "b"=>"б", "v"=>"в", "g"=>"г", "d"=>"д", "e"=>"е", "yo"=>"ё", "j"=>"ж", "z"=>"з", 
        "i"=>"и", "y"=>"й", "k"=>"к", "q"=>"қ", "l"=>"л", "m"=>"м", "n"=>"н", "o"=>"о", "p"=>"п", 
        "r"=>"р", "s"=>"с", "t"=>"т", "u"=>"у", "o'"=>"ў", "f"=>"ф", "x"=>"х", "ts"=>"ц", "ch"=>"ч", 
        "sh"=>"ш", "'"=>"ъ", "yu"=>"ю", "ya"=>"я"
    ];
    return strtr($text, $latToCyr);
}

    $text = $_POST['text'];
    if (isset($_POST['convertToLatin'])) {
        echo "<h3>Convert Lotin:</h3><p>" . toLatin($text) . "</p>";
    } elseif (isset($_POST['convertTokiril'])) {
        echo "<h3>Convert Kiril:</h3><p>" . toKiril($text) . "</p>";
    }


?>

</body>
</html>
