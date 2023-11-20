<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add some basic styles for better visualization */
        table {
            border-collapse: collapse;
        }

        td {
            width: 30px;
            height: 30px;
            border: 1px solid black;
        }

        .even {
            background-color: lightgray;
        }

        .odd {
            background-color: white;
        }
    </style>
</head>
<body>
    <table>
        <?php
            for ($row = 1; $row <= 8; $row++) {
                echo "<tr>";
                for ($col = 1; $col <= 8; $col++) {
                    $class = ($row + $col) % 2 == 0 ? 'even' : 'odd';
                    echo "<td class='$class'></td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>