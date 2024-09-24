<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Atelier 01</title>
</head>
<body>
    <ul>
        <?php
            $i = 0;
            while ($i < 15) {
                $numbers[] = rand(0, 300);
                $i++;
            }

            foreach ($numbers as $number) {
                echo '<li';
                if ($number > 200) {
                    echo ' class="high-number"';
                };
                echo '>' . $number . '</li>';
            }
        ?>
    </ul>
</body>
</html>