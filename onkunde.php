<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>B3W22O1 - Mad libs</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lakki+Reddy&display=swap" rel="stylesheet">
    </head>
    <body>

        <div id="container">
        <h1>Mad Libs</h1>

            <nav>
                <ul id="menu">
                    <li><a href="paniek.php">Er heerst paniek...</a></li>
                    <li><a href="onkunde.php">Onkunde</a></li>
                </ul>
            </nav>

            <main>
                <form action="onkunderesult.php" method="post">
                    <div class="questions"><label for="question1">Wat zou je graag willen kunnen?</label></div>
                    <div class="questions-input"><input id="question1" name="question1" type="text"></div>
                    <br>

                    <div class="questions"><label for="question2">Met welke persoon kun je goed opschieten?</label></div>
                    <div class="questions-input"><input id="question2" name="question2" type="text"></div>
                    <br>

                    <div class="questions"><label for="question3">Wat is je favoriete getal?</label></div>
                    <div class="questions-input"><input id="question3" name="question3" type="text"></div>
                    <br>

                    <div class="questions"><label for="question4">Wat heb je altijd bij je als je op vakantie gaat?</label></div>
                    <div class="questions-input"><input id="question4" name="question4" type="text"></div>
                    <br>

                    <div class="questions"><label for="question5">Wat is je beste persoonlijke eigenschap?</label></div>
                    <div class="questions-input"><input id="question5" name="question5" type="text"></div>
                    <br>

                    <div class="questions"><label for="question6">Wat is je slechtste persoonlijke eigenschap?</label></div>
                    <div class="questions-input"><input id="question6" name="question6" type="text"></div>
                    <br>

                    <div class="questions"><label for="question7">Wat is het ergste dat je kan overkomen?</label></div>
                    <div class="questions-input"><input id="question7" name="question7" type="text"></div>

                    <input type="submit" name="submit">
                    

                </form>
            </main>

            <footer>© 2020 Diony Busker</footer>
        </div>
    </body>
</html>