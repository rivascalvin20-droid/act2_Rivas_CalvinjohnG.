<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARAY KOPO</title>
    <link rel="shortcut icon" href="kupal.png"/>
</head>
<body>
    

    <?php


/*
Basic Information 
Nickname: CJ
Name: Calvin Rivas
Age: 19
Address: Bagna Malolos Bulacan
Hobbies: Play Basketball
Dream Job: Web developer
Course: Associate in Computer Technology
School: Bulacan Polytechnic College
*/

$me = array(

    "name" => "Calvin Rivas",
    "age" => 19,
    "address" => "Bagna Malolos Bulacan",
    "hobbies" => "Play Basketball",
    "dream_job" => "Web developer",
    "course" => "Associate in Computer Technology",
    "school" => "Bulacan Polytechnic College"
);

echo "<h1>My Personal Information\n</h1>";
echo "<br>";
echo "<h3>";
echo "Name:" . $me["name"] ."\n";
echo "<br>";
echo "Age: " . $me["age"] . "\n";
echo "<br>";
echo "Address: " . $me["address"] . "\n";
echo "<br>";
echo "Hobbies: " . $me["hobbies"] . "\n";
echo "<br>";
echo "Dream Job: " . $me["dream_job"] . "\n";
echo "<br>";
echo "Course: " . $me["course"] . "\n";
echo "<br>";
echo "School: " . $me["school"] . "\n\n";
echo "</h3>";
echo "<h2>";
print "I am " . $me["name"] . ", a " . $me["course"] . " student of " . $me["school"] . ".";
echo "</h2>";
?>
</body>
</html>