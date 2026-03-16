<?php
$score = 85; 

echo "<h2>Student Grading System</h2>";

if ($score >= 90) {
    echo "Grade: <strong>A</strong>";
} elseif ($score >= 80) {
    echo "Grade: <strong>B</strong>";
} elseif ($score >= 70) {
    echo "Grade: <strong>C</strong>";
} else {
    echo "Grade: <strong>F</strong> (Fail)";
}
?>
