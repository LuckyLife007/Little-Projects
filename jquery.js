$(function(){

// What happens when the button to convert to Roman Numerals is clicked
    $("button.Int2Rom").on("click", function(){
        var int = $("#integer").val();
        $.post("IntegerToRoman.php", {"integer" : int}, function(data) {
            $("span.rom1").text(data);
        });
        $("span.int1").text(int);
    })

// What happens when the button to convert to Integers is clicked
    $("button.Rom2Int").on("click", function(){
        var rom = $("#roman").val();
        $.post("RomanToInteger.php", {"roman" : rom}, function(data) {
            $("span.int2").text(data);
        });
        $("span.rom2").text(rom);
    })
});