<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <p class="titlee">Задание №1</p>
        <?php
            $students = ['Бемов', 'Пестов', 'Кадыева', 'Наумов', 'Низамов', 'Васильев'];

            echo "<div class='students-list'>Список студентов:<br>";
            foreach ($students as $student) {
                echo $student . "<br>";
            }
            echo "</div>";

            $student_count = count($students);
            echo "<div class='student-count'>Количество студентов: $student_count</div>";

            if (in_array('Сидоров', $students)) {
                echo "<div class='check'>Сидоров есть в списке.</div>";
            } else {
                echo "<div class='check'>Сидорова нет в списке.</div>";
            }

            $expelled = array_pop($students);

            echo "<div class='expelled'>Последний студент исключен: $expelled</div>";

            echo "<div class='students-list'>Список студентов после исключения:<br>";
            foreach ($students as $student) {
                echo $student . "<br>";
            }
            echo "</div>";
        ?>
        
        <p class="title">Задание №2</p>
        <?php
            $clubs = [
                "Спортивный" => "Сидоров",
                "Художественный" => "Емелина",
                "Музыкальный" => "Иванова",
                "Литературный" => "Петров",
                "Биологический" => "Антонова"
            ];

            asort($clubs);

            echo "<div class='clubs-list'>Список кружков и участников:<br>";
            foreach ($clubs as $club => $name) {
                echo "$club - $name<br>";
            }
            echo "</div>";
        ?>

        <p class="title">Задание №3</p>
        <?php
            $student = [
                'Имя' => 'Иван',
                'Фамилия' => 'Иванов',
                'Группа' => 'Группа 425',
                'Хобби' => 'Чтение',
                'Соцсети' => [
                    'ВКонтакте' => 'ivanov425',
                    'Instagram' => 'ivan_ivanov',
                    'Twitter' => 'ivanov_tw'
                ]
            ];

            echo "<div class='student-info'>Информация о студенте:<br>";
            echo "Имя: " . $student['Имя'] . "<br>";
            echo "Фамилия: " . $student['Фамилия'] . "<br>";
            echo "Группа: " . $student['Группа'] . "<br>";
            echo "Хобби: " . $student['Хобби'] . "<br>";

            echo "<br>Соцсети:<br>";
            foreach ($student['Соцсети'] as $social => $username) {
                echo "$social: $username<br>";
            }
            echo "</div>";
        ?>
    </div>
</body>
</html>

