<?php
require_once("includes/config.php");
$query = $mysqli->query("SELECT course_id, course_title, year_of_entry, study_length FROM courses WHERE course_subject = 'Art and design'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Courses</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width : 900px)"/>
</head>
<body>
    <?php include("includes/header.php") ?>
    <div class = "container">
        <h1>About our Design Courses</h1>
        <p>The College is an internationally connected creative community of diverse disciplines housed under one roof. We shape our students' futures, preparing them to shape the world through applied knowledge and creativity.</p>
        <p>The College's art and design courses don't just train you, they promote alternative ways of thinking, making and communicating; they provide you with space, tools and inspiration to develop your creative practice and a clear career path. You'll get expert teaching from active practitioners and researchers who will encourage you to adopt innovative and resourceful approaches that both perceive and create opportunities for better lives.</p>
        <p>You’ll develop your creative practice whilst interacting with your peers in well-equipped studios, making and digital workshops. At the same time, you'll learn professional skills by working on applied briefs facilitated through our links with commercial clients, cultural institutions, businesses and organisations.</p>
        <?php include("includes/courseTable.php") ?>
    </div>
    <?php include("includes/footer.php") ?>
</body>
</html>