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
                <p>
                    Er heerst paniek in het koninkrijk <?php print $question3 ?>. Koning <?php print $question6 ?> is ten einde raad en als koning <?php print $question6 ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php print $question2 ?>.
                    <br>
                    “<?php print $question2 ?>! Het is een ramp! Het is een schande!”
                    <br>
                    ‘Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?”
                    <br>
                    “Mijn <?php print $question1 ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php print $question5 ?> voor hem gekocht!”
                    <br>
                    “Majesteit, uw <?php print $question1 ?> komt vast vanzelf weer terug?”
                    <br>
                    “Ja, da’s leuk en aardig, maar hoe moet ik in de tussentijd <?php print $question8 ?> leren?”
                    <br>
                    “Maar Sire, daar kunt u toch uw <?php print $question7 ?> voor gebruiken.”
                    <br>
                    “<?php print $question2 ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.”
                    <br>
                    “<?php print $question4 ?>, Sire.”

                </p>
            </main>

            <footer>© 2020 Diony Busker</footer>
        </div>
    </body>
</html>