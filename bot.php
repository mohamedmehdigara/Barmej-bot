<?php
echo "Welcome to the student registration system\n";

$majors=[
    1 => "Information Systems",
    2 => "Computer Science",
    3 => "Physics"
];

$semesterString = [
"First Semester",
"Second Semester",
"Third Semester"
];
$coursesString = [
    "First course",
    "Second course",
    "Third course",
    "Fourth course"
];

$courses = [];
echo "In which major you want to register\n";

foreach($majors as $key => $value){
    echo $key . "." . $value . "\n";
}

$major = (int) readline();

echo $major;

if ($major == 1) {
    $coursePrice = 100;
}elseif($major == 2){
$coursePrice = 200;
}elseif($major == 3){
    $coursePrice = 300;
}else{
    echo "Wrong choice";
    exit();
}

echo  "\nYour major is ".$majors[$major]. "\n";
echo "How many semesters you want to register?";
echo "The maximum number of semesters is 3\n";
$numberOfsemesters = (int) readline();
if($numberOfsemesters <= 3){
for($i = 0; $i<$numberOfsemesters; $i++){
    echo "How many courses you want to register in " . $semesterString[$i] . "\n";
    $numberOfCourses = readline();

    if($numberOfCourses<=4){
for ($j=0; $j < $numberOfCourses; $j++) { 
    # code...
    echo "Enter the name of the " . $coursesString[$j]. " of "  .$semesterString[$i] . "\n";
    $courses[] = readline();
    echo "\n";
}
    }else{
echo "You exceed the maximum number of allowed courses!!";
exit();
    }
}
}
else{
echo "You exceed the maximum number of allowed semesters";
}

print_r($courses);
$totalPrice = count($courses) * $coursePrice;
echo "You have to pay ". $totalPrice;