<form method="post">
    Enter USN:<br><input type="text" name="usn" required pattern="^4[pP][aA]1[0-9][a-zA-Z]{2}[0-9]{3}$"><br>
    Enter Name: <br><input type="text" name="name" required pattern="[a-zA-Z][a-zA-Z ]+"><br>
    <input type="submit" value="Insert">
</form>
<hr>

<?php
$con = mysqli_connect("localhost", "root", "", "department");

if(isset($_POST['usn']))
{
    $usn = strtoupper($_POST['usn']);   $name = $_POST['name'];
    mysqli_query($con, "INSERT INTO student VALUES('$usn', '$name')");
}   

$result = mysqli_query($con, "SELECT usn, name FROM student");
$rows   = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($con);

echo "Before Sorting<br>";
foreach ($rows as $student)
    printf("USN: %s, Name: %s<br>", $student['usn'], $student['name']);

$rowCount = mysqli_num_rows($result);
for($i = 0; $i < $rowCount; $i++)   //Selection Sort
{
    $min = $i;
    for($j = $i + 1; $j < $rowCount; $j++)
        if($rows[$j]["usn"] < $rows[$min]["usn"])
            $min = $j;
    $tmp        = $rows[$i];
    $rows[$i]   = $rows[$min];
    $rows[$min] = $tmp;
}

echo "<br>After Sorting<br>";
foreach ($rows as $student) 
    printf("USN: %s, Name: %s<br>", $student['usn'], $student['name']);
?>