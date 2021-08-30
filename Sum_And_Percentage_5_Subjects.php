<?php
$name = readline("Enter Student Name: ");
$marks1 = (int)readline("Enter Marks of English: ");
$marks2 = (int)readline("Enter Marks of Hindi: ");
$marks3 = (int)readline("Enter Marks of Science: ");
$marks4 = (int)readline("Enter Marks of Maths: ");
$marks5 = (int)readline("Enter Marks of Social Science: ");

echo "Result: \n", "Name: ",$name,"\n";
echo "Total Marks: ", $marks1+$marks2+$marks3+$marks4+$marks5,"\n";
echo "Percentage: ", (($marks1+$marks2+$marks3+$marks4+$marks5)/500)*100,"%","\n";
?>