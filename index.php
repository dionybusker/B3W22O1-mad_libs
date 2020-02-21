<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>B3W22O1 - Mad libs</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Fontdiner+Swanky|Lakki+Reddy|Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <body>
        <header><h1>Mad Libs</h1></header>

        <div id="container">

            <nav>
                <ul id="menu">
                    <li><a href="#">Er heerst paniek...</a></li>
                    <li><a href="#">Onkunde</a></li>
                </ul>
            </nav>

            <main>
                <form action="paniekresult.php" method="post">
                    <div class="questions"><label for="question1">Welk dier zou je nooit als huisdier willen hebben?</label></div>
                    <div class="questions-input"><input id="question1" name="question1" type="text"></div>
                    <br>

                    <div class="questions"><label for="question2">Wie is de belangrijkste persoon in je leven?</label></div>
                    <div class="questions-input"><input id="question2" name="question2" type="text"></div>
                    <br>

                    <div class="questions"><label for="question3">In welk land zou je graag willen wonen?</label></div>
                    <div class="questions-input"><input id="question3" name="question3" type="text"></div>
                    <br>

                    <div class="questions"><label for="question4">Wat doe je als je je verveelt?</label></div>
                    <div class="questions-input"><input id="question4" name="question4" type="text"></div>
                    <br>

                    <div class="questions"><label for="question5">Met welk speelgoed speelde je als kind het meest?</label></div>
                    <div class="questions-input"><input id="question5" name="question5" type="text"></div>
                    <br>

                    <div class="questions"><label for="question6">Bij welke docent spijbel je het liefst?</label></div>
                    <div class="questions-input"><input id="question6" name="question6" type="text"></div>
                    <br>

                    <div class="questions"><label for="question7">Als je € 100.000,- had, wat zou je dan kopen?</label></div>
                    <div class="questions-input"><input id="question7" name="question7" type="text"></div>
                    <br>

                    <div class="questions"><label for="question8">Wat is je favoriete bezigheid?</label></div>
                    <div class="questions-input"><input id="question8" name="question8" type="text"></div>

                    <input type="submit" name="submit">
                    

                </form>
            </main>
        </div>
    </body>
</html>