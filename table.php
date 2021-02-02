<?php
    $result = mysqli_query($mysqli, "
    SELECT * FROM countries
    ");

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($rows);
?>

<table>
    <thead>
        <tr>
            <td>Name</td>
            <td>Description</td>
            <td>Population</td>
        </tr>
    </thead>

    <tbody> 
        <?php
            foreach ($rows as $row){
                echo "<tr>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['description']}</td>";
                echo "<td>{$row['population']}</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>