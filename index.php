<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
        echo 'Hello World<br>Hello PHP<br>';
    ?>
    </h1>
    <?php
        echo 'Hello World<br>Hello PHP<br>';

        $name = "Eriny";
        print "Hi" . " " . $name;

        $age = 25;
        $salary = 5000.5;
        $isEmployeed = true;
        $other = null;

        print("<br>");
        echo "My Age: {$age}<br>";

        print_r("<br>------------------------------------------<br>");

        echo "TYPE: " . gettype($name) . " & VALUE: ${name} -- 'name' <br>";
        echo "TYPE: " . gettype($age) . " & VALUE: ${age} -- 'age' <br>";
        echo "TYPE: " . gettype($salary) . " & VALUE: ${salary} -- 'salary' <br>";
        echo "TYPE: " . gettype($isEmployeed) . " & VALUE: ${isEmployeed} -- 'isEmployeed' <br>";
        echo "TYPE: " . gettype($other) . " & VALUE: ${other} -- 'other'";

        print_r("<br>------------------------------------------<br>");

        echo var_dump($name) . "<br>";
        echo var_dump($age) . "<br>";
        echo var_dump($salary) . "<br>";
        echo var_dump($isEmployeed) . "<br>";
        echo var_dump($other);

        print_r("<br>------------------------------------------<br>");

        echo is_string($name);
        echo "<br>";
        echo is_string($age);
        echo "<br>";
        echo is_double($salary);

        print("<br>------------------------------------------<br>");

        echo var_dump(is_string($name));
        echo "<br>";
        echo var_dump(is_string($age));
        echo "<br>";
        echo var_dump(is_double($salary));

        print("<br>------------------------------------------<br>");

        echo isset($baby) ? "baby variable is defined" : "baby variable is NOT defined";

        print("<br>------------------------------------------<br>");

        $indexedArr = ["A", "B", "C"];
        //echo $indexedArr;
        echo $indexedArr[0];
        $indexedArr[3] = 'Dd';
        echo "<br>".$indexedArr[3]."<br>";

        echo "<pre>";
        var_dump($indexedArr);
        echo "</pre>";
        //---------------------------------------

        $mixedTypeArr = [100, "B", true];
        //echo $mixedTypeArr;
        echo $mixedTypeArr[0];
        $mixedTypeArr[3] = 99.9;
        echo "<br>".$mixedTypeArr[3]."<br>";

        echo "<pre>";
        var_dump($mixedTypeArr);
        echo "</pre>";

        //---------------------------------------
        $associativeArr = [
            'Age' => 100, 
            "Name" => "Eriny",
            'Hobbies' => ["Coding", "Football"]
        ];
        //echo $associativeArr;
        echo $associativeArr['Name'] . '<br>';
        
        echo "<pre>";
        var_dump($associativeArr);
        echo "</pre>";

        print("<br>------------------------------------------<br>");

    ?>
</body>
</html>