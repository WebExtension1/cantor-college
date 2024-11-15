<?php
require_once("includes/config.php");
$getCourseID = $_GET["course_id"];
$query = $mysqli->prepare("SELECT * FROM courses WHERE course_id = ?");
$query -> bind_param( 'i', $getCourseID);
$query -> execute();
$result = $query -> get_result();
$obj = $result -> fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $obj->course_title?> </title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width : 900px)"/>
</head>
<body>
    <?php include("includes/header.php") ?>
    <div class = "container">
        <div class = "details">
            <?php echo "<h1>{$obj->course_title} ({$obj->ucas_code})</h1>"; ?>
            <div class = "subLine">
                <?php echo "<p>{$obj->course_award_name}</p>"; ?>
                <?php echo "<p>{$obj->course_type}</p>"; ?>
            </div>
            <div class = "entryRequirements">
                <div>
                    <?php echo "<h2>{$obj->course_summary}</h2>"; ?>
                    <?php echo "<p>Entry Requirements: You need to have {$obj->ucas_points} UCAS points to be accepted. Lower grades may be accepted based on the number of applications to the course and Contextual Offers</p>"; ?>
                    <?php echo "<p>This is a {$obj->mode_of_attendance} course, starting in {$obj->year_of_entry} and lasting for {$obj->study_length}</p>"; ?>
                    <?php echo "<p>Course currently available for registration: {$obj->no_longer_recruiting}</p>"; ?>
                    <?php echo "<p>Course offers foundation year: {$obj->has_foundation_year}</p>"; ?>
                    <!-- I don't know what its called so I can't look up the proper format, but I know its something like this -->
                    <!-- <p>This course {$obj->has_foundation_year = 1 ? "does" : "doesn't"} offer a foundation year</p> -->
                </div>
                <div class = "ucasPoints">
                    <p>UCAS Tariff Calculator</p>
                    <table>
                        <tr>
                            <th>Grade</th>
                            <th>Points</th>
                        </tr>
                        <tr>
                            <td>A*</td>
                            <td>56</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>48</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>E</td>
                            <td>16</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php") ?>
</body>
</html>