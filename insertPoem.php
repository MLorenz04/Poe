<!DOCTYPE html>
<html lang="en">
<?php
include_once("./components/head.php")
?>

<body>
    <form class="form" action="./transformators/poemToDatabase.php" method="GET">
        <div class="form__info">
            <h2> Informace </h1>
            <label for="heading"> Nadpis: </label>
            <input type="text" id="heading" name="heading"><br>

            <label for="author"> Autor: </label>
            <input type="text" id="author" name="author"><br>

            <label for="content"> Obsah: </label>
            <textarea name="content"></textarea> <br>
            <label for="year">Rok vzniku:</label>
            <input type="number" name="year"> <br>
            <label for="collection"> Sbírka:</label>
            <input type="text" name="collection"> <br>
        </div>
        <div class="form__style">
            <h2> Styl </h2>
            <label for="style"> Styl: </label> <br>

            <label for="romantic"> Romantická</label>
            <input type="checkbox" name="romantic" value="romantic"><br>

            <label for="life"> Životní</label>
            <input type="checkbox" name="life" value="life"><br>

            <label for="horror"> Horrorová</label>
            <input type="checkbox" name="horror" value="horror"><br>

            <label for="decadent"> Dekadentní</label>
            <input type="checkbox" name="decadent" value="decadent"><br>

            <label for="nature"> Přírodní</label>
            <input type="checkbox" name="nature" value="nature"><br>

            <label for="religion"> Náboženská </label>
            <input type="checkbox" name="religion" value="religion"><br>

            <label for="romantic"> Humoristická</label>
            <input type="checkbox" name="humor" value="humor"><br>

            <label for="proletarian"> Proletářská: </label>
            <input type="checkbox" name="proletarian" value="proletarian"><br>
        </div>
        <div class="form__submit">
        <input type="submit" value="Odeslat">
        </div>
    </form>
</body>

</html>