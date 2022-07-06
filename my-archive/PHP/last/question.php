<!DOCTYPE html>


<head>
    <meta charset="UTF-8" />

    <title>PHP QUIZ | Maverick</title>

    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<a href="logout.php">logout</a>

<body>


    <div id="page-wrap">

        <h1>Survey of Maverick</h1>
        <?php
        $numbers = array(
            "<strong>5</strong>" => "<strong>true of you 80 to 100% of the time (Almost Always)</strong>",
            "<strong>4</strong>" => "<strong>true of you 60 to 79% of the time (often)</strong>",
            "<strong>3</strong>" => "<strong>true of you 40 to 59% of the time (about half)</strong>",
            "<strong>2</strong>" => "<strong>true of you 20 to 39% of the time (sometimes)</strong>",
            "<strong>1</strong>" => "<strong>true of you 0 to 19% of the time (never or rarely)</strong>"

        );

        foreach ($numbers as $x => $val) {
            echo "$x = $val<br><br>";
        }


        ?>


        <form action="result.php" method="post" id="quiz">

            <ol>
                <ul>
                    <?php
                    $names = array();
                    foreach ($names as $name) {
                        echo "<li>" . $name . "</li>";
                    }
                    ?>
                </ul>
                <li>
                    <p>I look for opportunities to serve and help others.</p>
                    <div>
                        <input type="input" name="question-1-answers" id="question-1-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I embrace risk.</p>
                    <div>
                        <input type="input" name="question-2-answers" id="question-2-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I believe that it is important that rules are enforced.</p>
                    <div>
                        <input type="input" name="question-3-answers" id="question-3-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I highly value competence..</p>
                    <div>
                        <input type="input" name="question-4-answers" id="question-4-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I value predictability in my life.</p>
                    <div>
                        <input type="input" name="question-5-answers" id="question-5-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I make decisions based on good analysis and good data.</p>
                    <div>
                        <input type="input" name="question-6-answers" id="question-6-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I tend to be compassionate and tender to most people.</p>
                    <div>
                        <input type="input" name="question-7-answers" id="question-7-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I need to be the leader.</p>
                    <div>
                        <input type="input" name="question-8-answers" id="question-8-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I find joy in charitable giving.</p>
                    <div>
                        <input type="input" name="question-9-answers" id="question-9-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I prefer having a step-by-step system to follow.</p>
                    <div>
                        <input type="input" name="question-10-answers" id="question-10-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I place great value on expertise.</p>
                    <div>
                        <input type="input" name="question-11-answers" id="question-11-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I like to be center of attention.</p>
                    <div>
                        <input type="input" name="question-12-answers" id="question-12-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I crave stimulation and excitement.</p>
                    <div>
                        <input type="input" name="question-13-answers" id="question-13-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I highly value intelligence.</p>
                    <div>
                        <input type="input" name="question-14-answers" id="question-14-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I am passionate about supporting the causes that I believe in.</p>
                    <div>
                        <input type="input" name="question-15-answers" id="question-15-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I am disciplined and like to follow protocols,guidelines and timelines.</p>
                    <div>
                        <input type="input" name="question-16-answers" id="question-16-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I crave a lifestyle of fame and fortune.</p>
                    <div>
                        <input type="input" name="question-17-answers" id="question-17-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I value science and the scientific method.</p>
                    <div>
                        <input type="input" name="question-18-answers" id="question-18-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>I value stability over change.</p>
                    <div>
                        <input type="input" name="question-19-answers" id="question-19-answers-" value="" />
                    </div>
                </li>

                <li>
                    <p>It is important for me to make depp connections with other people.</p>
                    <div>
                        <input type="input" name="question-20-answers" id="question-20-answers-" value="" />
                    </div>
                </li>

            </ol>

            <input type="submit" value="Submit" class="submitbtn" />

        </form>

    </div>


</body>

</html>