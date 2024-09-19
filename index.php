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
            $numbers = [3, 777, 64, 358, 17, 199, 300, 836, 2285, 26, 572, 94, 265, 195, 45];
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