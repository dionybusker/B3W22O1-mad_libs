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
                    Er zijn veel mensen die niet kunnen <?php print $question1 ?>. Neem nou <?php print $question2 ?>. Zelfs met de hulp van een <?php print $question4 ?> of zelf <?php print $question3 ?> kan <?php print $question2 ?> niet <?php print $question1 ?>. Dat heeft niet te maken met een gebrek aan <?php print $question5 ?>, maar met een teveel aan <?php print $question6 ?>. Te veel <?php print $question6 ?> leidt tot <?php print $question7 ?> en dat is niet goed als je wilt <?php print $question1 ?>. Helaas voor <?php print $question2 ?>.
                </p>
            </main>

            <footer>© 2020 Diony Busker</footer>
        </div>
    </body>
</html>