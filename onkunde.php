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
                <form action="onkundevalidate.php" method="post">
                    <div class="questions"><label for="question1">Wat zou je graag willen kunnen?</label></div>
                    <div class="questions-input"><input id="question1" name="question1" type="text" value="<?php print $question1; ?>"></div>
                    <br>

                    <div class="questions"><label for="question2">Met welke persoon kun je goed opschieten?</label></div>
                    <div class="questions-input"><input id="question2" name="question2" type="text" value="<?php print $question2; ?>"></div>
                    <br>

                    <div class="questions"><label for="question3">Wat is je favoriete getal?</label></div>
                    <div class="questions-input"><input id="question3" name="question3" type="text" value="<?php print $question3; ?>"></div>
                    <br>

                    <div class="questions"><label for="question4">Wat heb je altijd bij je als je op vakantie gaat?</label></div>
                    <div class="questions-input"><input id="question4" name="question4" type="text" value="<?php print $question4; ?>"></div>
                    <br>

                    <div class="questions"><label for="question5">Wat is je beste persoonlijke eigenschap?</label></div>
                    <div class="questions-input"><input id="question5" name="question5" type="text" value="<?php print $question5; ?>"></div>
                    <br>

                    <div class="questions"><label for="question6">Wat is je slechtste persoonlijke eigenschap?</label></div>
                    <div class="questions-input"><input id="question6" name="question6" type="text" value="<?php print $question6; ?>"></div>
                    <br>

                    <div class="questions"><label for="question7">Wat is het ergste dat je kan overkomen?</label></div>
                    <div class="questions-input"><input id="question7" name="question7" type="text" value="<?php print $question7; ?>"></div>

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