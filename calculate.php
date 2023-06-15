
<!DOCTYPE html>
<html>
<head>
    <title>Calculate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .card {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 3px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    

    <div class="card">
        <h1>Result</h1>
        <div class="result">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $shape = $_POST["shape"];

            if ($shape == "rectangle") {
                $length = $_POST["length"];
                $width = $_POST["width"];

                $area = $length * $width;
                $perimeter = 2 * ($length + $width);

                echo "Area: " . $area . "<br>";
                echo "Perimeter: " . $perimeter;
            } elseif ($shape == "square") {
                $side = $_POST["side"];

                $area = pow($side, 2);
                $perimeter = 4 * $side;

                echo "Area: " . $area . "<br>";
                echo "Perimeter: " . $perimeter;
            } elseif ($shape == "circle") {
                $radius = $_POST["radius"];

                $area = pi() * pow($radius, 2);
                $circumference = 2 * pi() * $radius;

                echo "Area: " . $area . "<br>";
                echo "Circumference: " . $circumference;
            } elseif ($shape == "rhombus") {
                $diagonal1 = $_POST["diagonal1"];
                $diagonal2 = $_POST["diagonal2"];

                $area = ($diagonal1 * $diagonal2) / 2;
                $perimeter = 4 * sqrt(pow($diagonal1 / 2, 2) + pow($diagonal2 / 2, 2));

                echo "Area: " . $area . "<br>";
                echo "Perimeter: " . $perimeter;
            } elseif ($shape == "trapezium") {
                $base1 = $_POST["base1"];
                $base2 = $_POST["base2"];
                $height = $_POST["height"];

                $area = (($base1 + $base2) * $height) / 2;
                $perimeter = $base1 + $base2 + 2 * sqrt(pow(($base1 - $base2) / 2, 2) + pow($height, 2));

                echo "Area: " . $area . "<br>";
                echo "Perimeter: " . $perimeter;
            } elseif ($shape == "triangle") {
                $base = $_POST["base"];
                $height = $_POST["height"];

                $area = ($base * $height) / 2;
                $perimeter = $base + 2 * sqrt(pow($base / 2, 2) + pow($height, 2));

                echo "Area: " . $area . "<br>";
                echo "Perimeter: " . $perimeter;
            } elseif ($shape == "sphere") {
                $radius = $_POST["radius"];

                $volume = (4 / 3) * pi() * pow($radius, 3);
                $surfaceArea = 4 * pi() * pow($radius, 2);

                echo "Volume: " . $volume . "<br>";
                echo "Surface Area: " . $surfaceArea;
            } elseif ($shape == "cylinder") {
                $radius = $_POST["radius"];
                $height = $_POST["height"];

                $volume = pi() * pow($radius, 2) * $height;
                $surfaceArea = (2 * pi() * pow($radius, 2)) + (2 * pi() * $radius * $height);

                echo "Volume: " . $volume . "<br>";
                echo "Surface Area: " . $surfaceArea;
            } else {
                echo "Invalid shape selected.";
            }
            }
        ?>
        </div>
    </div>
</body>
</html>
