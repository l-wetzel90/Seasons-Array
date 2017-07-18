<!DOCTYPE html>

<?php
// TASKS
// 1. Look at my version http://citatscc.org/~fs148523/Seasonal/
// 2. You'll use the $seasons array to make the appropriate parts of the page be dynamic to match my version.
// 3. Use php's date function to get current month's number without leading zeros http://php.net/manual/en/function.date.php
// 4. Write some logic to use the month number to create a month string to use as a key for the $seasons array 
// 5. Add the ability so that if the month is appended on the URL as a get parameter override the actual month
//      e.g. if this is entered in the address bar http://localhost/SeasonalWorkIt/index.php?month=12
//           the page would display the styling for Winter

$seasons = array(
    "Winter" => array('bg_color' => 'gray', "text_color" => "white", "saying" => ", happy holidays!"),
    "Spring" => array('bg_color' => 'green', "text_color" => "purple", "saying" => " the ides of march."),
    "Summer" => array('bg_color' => 'yellow', "text_color" => "pink", "saying" => " to wear sunscreen."),
    "Fall" => array('bg_color' => 'orange', "text_color" => "brown", "saying" => " oktoberfest, Prosit!")
);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <style>body {
                background-color: cornsilk; }

            h1, h2 {
                color: deeppink; }
        </style>

        <title>Seasons Greetings</title>
    </head>
    <body>
        <h1> Season's Greetings! </h1>
        <h2></h2>
        <p> I hope you're having a happy DAY </p>

        <p> and make sure to remember ...? </p>

        <br><br>
        <a href="index.php?month=12">Month override test link</a>
    </body>
</html>
