<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="jquery.js"></script>
        <title>Little Projects by Lucky Uche</title>
    </head>
    <body>
        <div id="Int2Rom">
            <h3>Convert Integers to Roman Numerals</h3>
            <p>Enter any integer value from 1 to 3,999</p>
            <input type="number" name="integer" id="integer" min="0" max="3999">
            <button class="Int2Rom" type="submit">Convert to Roman Numeral</button>
            <br>
            <p>The value of the integer <span class="int1"></span> in Roman Numerals is <span class="rom1"></span></p>
        </div>
        <br> <hr> <br>
        <div id="Rom2Int">
            <h3>Convert Roman Numerals to Integers</h3>
            <p>Enter any roman numeral with equivalent integer value ranging from from 1 to 3,999</p>
            <input type="text" name="roman" id="roman">
            <button class="Rom2Int" type="submit">Convert to Integer</button>
            <br>
            <p>The value of the Roman Numeral <span class="rom2"></span> as an Integer is <span class="int2"></span></p>
        </div>
        <br> <hr> <br>
    </body>
</html>