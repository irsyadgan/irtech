<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylequiz.css" type="text/css">
    <title>Quiz</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="pull=left">Course Arduino</div>
            <div class="pull-right">teschool.com</div>
        </header>
        <main>
            <form class="questionForm" id="q1" data-question="1">
                <h3>1.	Bahasa dari Arduino adalah serapan dari bahasa?</h3>
                <ul>
                    <li><input type="radio" name="q1" value="a"/>C++ </li>
                    <li><input type="radio" name="q1" value="b"/>Java</li>
                    <li><input type="radio" name="q1" value="c"/>C#</li>
                    <li><input type="radio" name="q1" value="d"/>Pascal</li>
                    <li><input type="radio" name="q1" value="d"/>Python</li>
                </ul>
                <button id="submit">Submit</button>
            </form>

            <form class="questionForm" id="q2" data-question="2">
                    <h3>2.	Berapa jumlah pin Digital pada Arduino UNO?</h3>
                    <ul>
                        <li><input type="radio" name="q2" value="a"/>11</li>
                        <li><input type="radio" name="q2" value="b"/>12</li>
                        <li><input type="radio" name="q2" value="c"/>13</li>
                        <li><input type="radio" name="q2" value="d"/>14</li>
                        <li><input type="radio" name="q2" value="d"/>15</li>
                    </ul>
                    <button id="submit">Submit</button>
            </form>

            <form class="questionForm" id="q3" data-question="3">
                    <h3>3.	Apa fungsi pin Analog?</h3>
                    <ul>
                        <li><input type="radio" name="q3" value="a"/>Membaca data 0 atau 5V</li>
                        <li><input type="radio" name="q3" value="b"/>Membaca data Serial</li>
                        <li><input type="radio" name="q3" value="c"/>Membaca data Komunikasi</li>
                        <li><input type="radio" name="q3" value="d"/>Membaca jarak</li>
                        <li><input type="radio" name="q3" value="d"/>Membaca data 0 sampai 5V </li>
                    </ul>
                    <button id="submit">Submit</button>
            </form>

            <form class="questionForm" id="q4" data-question="4">
                    <h3>4.	Yang mana dari pilihan dibawah yang merupakan protokol komunikasi serial pada Arduino</h3>
                    <ul>
                        <li><input type="radio" name="q4" value="a"/>Digital</li>
                        <li><input type="radio" name="q4" value="b"/>I2C</li>
                        <li><input type="radio" name="q4" value="c"/>Analog</li>
                        <li><input type="radio" name="q4" value="d"/>RS232</li>
                        <li><input type="radio" name="q4" value="d"/>IIS</li>
                    </ul>
                    <button id="submit">Submit</button>
            </form>

            <form class="questionForm" id="q5" data-question="5">
                    <h3>5.	Berapa jumlah pin komunikasi UART pada Arduino Mega</h3>
                    <ul>
                        <li><input type="radio" name="q5" value="a"/>2</li>
                        <li><input type="radio" name="q5" value="b"/>3</li>
                        <li><input type="radio" name="q5" value="c"/>4</li>
                        <li><input type="radio" name="q5" value="d"/>5</li>
                        <li><input type="radio" name="q5" value="d"/>6</li>
                    </ul>
                    <button id="submit">Submit</button>
            </form>

            <div id="results"></div>
            <br>
        </main>
        <footer>
            <div class="pull-left">Total 5 Question</div>
            <div class="pull-right">jamnya</div>
        </footer>
    </div><!-- container -->
    <script src="functional_js/jquery.js"></script>
    <script src="functional_js/quiz.js"></script>
    
</body>
</html>