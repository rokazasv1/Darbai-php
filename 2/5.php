<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$totalCorrect = 0;

if(isset($_POST['submit'])){

    if (isset($_POST['question-1-answers']) &&  isset($_POST['question-2-answers']) &&  isset($_POST['question-3-answers'])) {
        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];

        if ($answer1 == "B") {
            $totalCorrect++;
        }

        if ($answer2 == "A") {
            $totalCorrect++;
        }
        if ($answer3 == "C") {
            $totalCorrect++;
        }
$total = 3;
$percentage = ($totalCorrect*100)/$total;
    echo round($percentage,2)."%";

    }
}

echo "<div id='results'>$totalCorrect / 3 correct</div>";
?>
<form action="5.php" method="post">
    <li>
        <h3>SUO</h3>
        <div>
            <input type="radio" name="question-1-answers" value="A"/>
            <label for="question-1-answers-A">A) Kate</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers"  value="B"/>
            <label for="question-1-answers-B">B) SUO</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers"  value="C"/>
            <label for="question-1-answers-C">C) Elnias</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers"  value="D"/>
            <label for="question-1-answers-D">D) Gyvunas</label>
        </div>
    </li>
    <li>
        <h3> Kate</h3>
        <div>
            <input type="radio" name="question-2-answers" value="A"/>
            <label for="question-2-answers-A">A) Kate</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" value="B"/>
            <label for="question-2-answers-B">B) SUO</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers"  value="C"/>
            <label for="question-2-answers-C">C) Elnias</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers"  value="D"/>
            <label for="question-2-answers-D">D) Gyvunas</label>
        </div>
    </li>
    <li>
        <h3> Elnias</h3>
        <div>
            <input type="radio" name="question-3-answers" value="A"/>
            <label for="question-3-answers-A">A) Kate</label>
        </div>
        <div>
            <input type="radio" name="question-3-answers" value="B"/>
            <label for="question-3-answers-B">B) SUO</label>
        </div>
        <div>
            <input type="radio" name="question-3-answers"  value="C"/>
            <label for="question-3-answers-C">C) Elnias</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers"  value="D"/>
            <label for="question-3-answers-D">D) Gyvunas</label>
        </div>
    </li>
    <input type="submit" value="submit" name="submit"/>
</form>

</body>
</html>