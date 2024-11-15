<?php
require_once("includes/config.php");
$query = $mysqli->query("SELECT course_id, course_title, year_of_entry, study_length FROM courses WHERE course_subject = 'Computing'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computing Courses</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width : 900px)"/>
</head>
<body>
    <?php include("includes/header.php") ?>
    <div class = "container">
        <h1>About our Computing Courses</h1>
        <p>The College offers a range of courses to suit applicants with varying backgrounds and educational abilities. At undergraduate level, there are single BSc Honours Degree courses in Computing, Computer Networks, Software Engineering and Cyber Security with Forensics amongst others.</p>
        <p>The College teaches undergraduate and postgraduate courses in a wide range of specialisms, including computer science, software development, information systems, networking and software engineering. It is at the heart of a passionate computing community, including student societies devoted to games development, digital forensics and programming.</p>
        <p>The courses are British Computer Society accredited and are highly relevant to modern industry. They are designed to prepare students for professional occupations in Computing and related fields. Many graduates continue their studies to pursue a higher degree such as an MSc. or PhD.</p>
        <?php include("includes/courseTable.php") ?>
    </div>
    <?php include("includes/footer.php") ?>
</body>
</html>