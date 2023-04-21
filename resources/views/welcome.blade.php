<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai1</title>
</head>
<body>
    <?php
    
        $students = array(
            array("MaSV" => "001", "HoTen" => "Nguyen Van A", "Tuoi" => 20, "Toan" => 8, "Tin" => 9, "TB" => 8.5),
            array("MaSV" => "002", "HoTen" => "Nguyen Van B", "Tuoi" => 21, "Toan" => 7, "Tin" => 8, "TB" => 7.5),
            array("MaSV" => "003", "HoTen" => "Nguyen Van C", "Tuoi" => 22, "Toan" => 9, "Tin" => 9, "TB" => 9),
            array("MaSV" => "004", "HoTen" => "Nguyen Van D", "Tuoi" => 23, "Toan" => 6, "Tin" => 7, "TB" => 6.5),
            array("MaSV" => "005", "HoTen" => "Nguyen Van E", "Tuoi" => 24, "Toan" => 8, "Tin" => 8, "TB" => 8)
        );
        
        echo "Danh sach sinh vien";
        echo "<table border='1'>";
        echo "<tr><th>Mã SV</th><th>Họ tên</th><th>Tuổi</th><th>Toán</th><th>Tin học</th><th>Điểm TB</th></tr>";
        foreach ($students as $student) {
            echo "<tr><td>" . $student["MaSV"] . "</td><td>" . $student["HoTen"] . "</td><td>" . $student["Tuoi"] . "</td><td>" . $student["Toan"] . "</td><td>" . $student["Tin"] . "</td><td>" . $student["TB"] . "</td></tr>";
        }
        echo "</table>";

        function sortStudentsByAverage($a, $b) {
            return $a["TB"] < $b["TB"];
        }

        usort($students, "sortStudentsByAverage");
    ?>
    <br>
    <br>
    <?php
        echo "Danh sach sau sap xep";
        echo "<table border='1'>";
        echo "<tr><th>Mã SV</th><th>Họ tên</th><th>Tuổi</th><th>Toán</th><th>Tin học</th><th>Điểm TB</th></tr>";
        foreach ($students as $student) {
            echo "<tr><td>" . $student["MaSV"] . "</td><td>" . $student["HoTen"] . "</td><td>" . $student["Tuoi"] . "</td><td>" . $student["Toan"] . "</td><td>" . $student["Tin"] . "</td><td>" . $student["TB"] . "</td></tr>";
        }
        echo "</table>";
    ?>

</body>
</html>