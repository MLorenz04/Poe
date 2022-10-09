<!--
Tento soubor umožňuje nahrát do databáze libovolnou e-knihu, respektive její textový převod (.txt). 
Postupně projede jednotlivá slova, která zkontroluje pomocí regulérního výrazu. 
Jakmile zjistí, že slovo není v databázi a splňuje podmínky vložení, vloží ho do ní.
Přiznám se, že vím, že se nejedná o nejrychlejší algoritmus, ale šlo mi spíše o to mít rychle 
hotovou databázi s co nejvíce českými slovy, takže než insert dat dojel, měl jsem připravenou další knihu. (Občas zabral pár desítek sekund :( )
-->
<?php
require "../database/database.php";
$wordsInDB = [];
require "../php/check.php";
//Vezme knízku, odebere čárky a rozloží slova od mezer.
$file = file_get_contents('../poems/poem.txt');
$file = str_replace(",", "", $file);
$words = explode(" ", $file);
$len = count($words);
//sql příkazy
$sql = "select word from words";
//Vezme všechny slova, které jsou v db a uloží je do pole, které se kontroluje.
while ($row = $result->fetch_assoc()) {
    array_push($wordsInDB, $row["word"]);
}
?>
<main>
    <?php
    //Cyklus, kontroluje každé nové slovo se slovy v DB a pokud nenajde a splňuje regex, tak ho dá do DB
    for ($i = 0; $i < $len; $i++) {
        if (in_array($words[$i], $wordsInDB)) {
            $sql_how_many_times_used = ""; //Tady bude update počtu, kolikrát se slovo použilo
            $sql_insert_into_word = "insert into words(word,length) values('$words[$i]'," . strlen($words[$i]) . ");";
            $result = $con->query($sql_insert_into_words);
        }
    }
    ?>
</main>