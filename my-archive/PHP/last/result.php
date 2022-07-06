<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />

    <title>PHP Quiz</title>

    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
    <a href="index.php">logout</a>
    <div id="page-wrap">

        <h1>Result | Maverick Survey</h1>

        <?php

        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];
        $answer6 = $_POST['question-6-answers'];
        $answer7 = $_POST['question-7-answers'];
        $answer8 = $_POST['question-8-answers'];
        $answer9 = $_POST['question-9-answers'];
        $answer10 = $_POST['question-10-answers'];
        $answer11 = $_POST['question-11-answers'];
        $answer12 = $_POST['question-12-answers'];
        $answer13 = $_POST['question-13-answers'];
        $answer14 = $_POST['question-14-answers'];
        $answer15 = $_POST['question-15-answers'];
        $answer16 = $_POST['question-16-answers'];
        $answer17 = $_POST['question-17-answers'];
        $answer18 = $_POST['question-18-answers'];
        $answer19 = $_POST['question-19-answers'];
        $answer20 = $_POST['question-20-answers'];

        $total1 = ($answer3 + $answer5 + $answer10 + $answer16 + $answer19);
        $total2 = ($answer2 + $answer8 + $answer12 + $answer13 + $answer17);
        $total3 = ($answer1 + $answer7 + $answer9 + $answer15 + $answer20);
        $total4 =  ($answer4 + $answer6 + $answer11 + $answer14 + $answer18);

        $numbers = array("C" => "$total1", "O" => "$total2", "D" => "$total3", "E" => "$total4");

        arsort($numbers);
        foreach ($numbers as $key => $val) {
            echo "$key = $val\n";
            echo "<br>";
        }

        ?>

    </div>

</body>

</html>