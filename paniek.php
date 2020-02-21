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
            <h1 id="header">Mad Libs</h1>

            <nav>
                <ul id="menu">
                    <li><a href="paniek.php">Er heerst paniek...</a></li>
                    <li><a href="onkunde.php">Onkunde</a></li>
                </ul>
            </nav>

            <main>
                <h1>Er heerst paniek...</h1>
                <form action="paniekvalidate.php" method="post">
                    <div class="questions"><label for="question1">Welk dier zou je nooit als huisdier willen hebben?</label></div>
                    <div class="questions-input"><input id="question1" name="question1" type="text" value="<?php print $question1; ?>"></div>
                    <br>

                    <div class="questions"><label for="question2">Wie is de belangrijkste persoon in je leven?</label></div>
                    <div class="questions-input"><input id="question2" name="question2" type="text" value="<?php print $question2; ?>"></div>
                    <br>

                    <div class="questions"><label for="question3">In welk land zou je graag willen wonen?</label></div>
                    <div class="questions-input"><input id="question3" name="question3" type="text" value="<?php print $question3; ?>"></div>
                    <br>

                    <div class="questions"><label for="question4">Wat doe je als je je verveelt?</label></div>
                    <div class="questions-input"><input id="question4" name="question4" type="text" value="<?php print $question4; ?>"></div>
                    <br>

                    <div class="questions"><label for="question5">Met welk speelgoed speelde je als kind het meest?</label></div>
                    <div class="questions-input"><input id="question5" name="question5" type="text" value="<?php print $question5; ?>"></div>
                    <br>

                    <div class="questions"><label for="question6">Bij welke docent spijbel je het liefst?</label></div>
                    <div class="questions-input"><input id="question6" name="question6" type="text" value="<?php print $question6; ?>"></div>
                    <br>

                    <div class="questions"><label for="question7">Als je € 100.000,- had, wat zou je dan kopen?</label></div>
                    <div class="questions-input"><input id="question7" name="question7" type="text" value="<?php print $question7; ?>"></div>
                    <br>

                    <div class="questions"><label for="question8">Wat is je favoriete bezigheid?</label></div>
                    <div class="questions-input"><input id="question8" name="question8" type="text" value="<?php print $question8; ?>"></div>

                    <div class="error">
                        <?php if(isset($error)) { ?>
                            <p><?php print $error; ?></p>
                        <?php } ?>
                    </div>

                    <input type="submit" name="submit">
                    

                </form>
            </main>

            <footer>© 2020 Diony Busker</footer>
        </div>
    </body>
</html>