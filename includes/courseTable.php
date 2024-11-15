<div class = "courses">
    <table>
        <tr>
            <th>Course Title</th>
            <th>Year of Entry</th>
            <th>Study Length</th>
        </tr>
        <?php
        while ($obj = $query -> fetch_object()){
            echo "<tr>";
            echo "<td class = 'course'><a href=\"courseDetails.php?course_id={$obj->course_id}\">{$obj->course_title}</a></td>";
            echo "<td>{$obj->year_of_entry}</td>";
            echo "<td>{$obj->study_length}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>