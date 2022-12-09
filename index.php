<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Силаев 211-362 Вариант 7</title>
</head>
<body>
    <header class = "header">
    <img class="logo" src="//online.mospolytech.ru/pluginfile.php/1/theme_opentechnology/settings_setpolytech_header_logoimage/1657031583/logo.svg" width=200>
    <div class="item">Силаев Андрей Николаевич 211-362 Лабароторная работа 9 Вариант 7</div>
    </header>
    <main class="body">
        <?php
        $x = -10;
        $encouting = 100;
        $step = 2;
        $type = 'D';
        $min_value = -40;
        $max_value = 2000;
        $min = 100000000000;
        $max = -1000000000000;
        $sum = 0;
        $count = 0;

        if ($type == 'A'){
            echo '<br>';
            echo '<br>';
            echo '<br>';
        }

        if ($type == 'B'){
            echo '<ul>';
        }
        if ($type == 'C'){
            echo '<ol>';
        }
        if ($type == 'D'){
            echo '<table class = "table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>№</th>';
            echo '<th>x</th>';
            echo '<th>f</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
        }

        if ($type == 'E'){
            echo '<br>';
            echo '<br>';
            echo '<br>';
        }

        for ($i = 0; $i < $encouting; $i++){
            $count += 1;

           if ($x <= 10){
                if ($x == 5){
                    $f='error';
                    switch ($type) {
                        case 'A':
                            echo 'f('.$x.')='.$f.'<br>';
                            break;
                        case "B":
                            echo '<li>f('.$x.')='.$f.'</li>';
                            break;
                        case "C":
                            echo '<li>f('.$x.')='.$f.'</li>';
                            break;
                        case "D":
                            echo '<tr>';
                            echo '<td>'.$count.'</td>';
                            echo '<td>'.$x.'</td>';
                            echo '<td>'.$f.'</td>';
                            echo '</tr>';
                            break;
                        case "E":
                            echo '<div class="E"><p>f('.$x.')='.$f.'</p></div>';
                            break;
                    }
                    $x += $step;
                    continue;        
                }else {
                    $f = round(((6/($x-5))*$x-5), 3);
                }
            } else if ($x > 10 && $x < 20) {
                $f = round(((($x**2)-1)*$x+7), 3);
            } else {
                 $f = round((4*$x+5), 3); 
            }

            $sum += $f;

            if ($f > $max){
                $max = $f;
            }

            if ($f < $min){
                $min = $f;
            }

            switch ($type) {
                case 'A':
                    echo 'f('.$x.')='.$f.'<br>';
                    break;
                case "B":
                    echo '<li>f('.$x.')='.$f.'</li>';
                    break;
                case "C":
                    echo '<li>f('.$x.')='.$f.'</li>';
                    break;
                case "D":
                    echo '<tr>';
                    echo '<td>'.$count.'</td>';
                    echo '<td>'.$x.'</td>';
                    echo '<td>'.$f.'</td>';
                    echo '</tr>';
                    break;
                case "E":
                    echo '<div class="E"><p>f('.$x.')='.$f.'</p></div>';
                    break;
            }

            $x += $step;

            if ($f >= $max_value || $f < $min_value){
                break;
            }
        }

        /*$i = 0; $f = 0;
        while ($i<$encouting && ($f <= $max_value && $f > $min_value || !$i)){
            $count += 1;

           if ($x <= 10){
                if ($x == 5){
                    continue;
                }else {
                    $f = round(((6/($x-5))*$x-5), 3);
                }
            } else if ($x > 10 && $x < 20) {
                $f = round(((($x**2)-1)*$x+7), 3);
            } else {
                 $f = round((4*$x+5), 3); 
            }

            $sum += $f;

            if ($f > $max){
                $max = $f;
            }

            if ($f < $min){
                $min = $f;
            }

            switch ($type) {
                case 'A':
                    echo 'f('.$x.')='.$f.'<br>';
                    break;
                case "B":
                    echo '<li>f('.$x.')='.$f.'</li>';
                    break;
                case "C":
                    echo '<li>f('.$x.')='.$f.'</li>';
                    break;
                case "D":
                    echo '<tr>';
                    echo '<td>'.$count.'</td>';
                    echo '<td>'.$x.'</td>';
                    echo '<td>'.$f.'</td>';
                    echo '</tr>';
                    break;
                case "E":
                    echo '<div class="E"><p>f('.$x.')='.$f.'</p></div>';
                    break;
            }

            $x += $step;
            $i++;
        }*/

        /*$i = 0;
        do{
            $count += 1;

            if ($x <= 10){
                if ($x == 5){
                    continue;
                }else {
                    $f = round(((6/($x-5))*$x-5), 3);
                }
            } else if ($x > 10 && $x < 20) {
                $f = round(((($x**2)-1)*$x+7), 3);
            } else {
                 $f = round((4*$x+5), 3); 
            }

            $sum += $f;

            if ($f > $max){
                $max = $f;
            }

            if ($f < $min){
                $min = $f;
            }

            switch ($type) {
                case 'A':
                    echo 'f('.$x.')='.$f.'<br>';
                    break;
                case "B":
                    echo '<li>f('.$x.')='.$f.'</li>';
                    break;
                case "C":
                    echo '<li>f('.$x.')='.$f.'</li>';
                    break;
                case "D":
                    echo '<tr>';
                    echo '<td>'.$count.'</td>';
                    echo '<td>'.$x.'</td>';
                    echo '<td>'.$f.'</td>';
                    echo '</tr>';
                    break;
                case "E":
                    echo '<div class="E"><p>f('.$x.')='.$f.'</p></div>';
                    break;
            }

            $x += $step;
            $i++;
        }while ($i < $encouting && ($f <= $max_value && $f > $min_value));*/

        if ($type == 'B'){
            echo '</ul>';
        }
        if ($type == 'C'){
            echo '</ol>';
        }
        if ($type == 'D'){
            echo '</tbody>';
            echo '</table>';
        }

        if ($count == 0){
            $sred = 0;
        }else{
            $sred = $sum/$count; 
        }

        echo '<p>Среднее арифметическое: '.$sred.'<p>';
        echo '<p>Сумма: '.$sum.'<p>';
        echo '<p>Минимальное значение: '.$min.'<p>';
        echo '<p>Максимальное значение: '.$max.'<p>';
        ?>
    </main>
    <footer class="footer">
        <div>
            <p>(С) 2022 А.Н.Силаев</p>
            <p>+79213219351</p>
            <p>Тип верстки: <?php echo $type?></p>
        </div>
    </footer>
</body>
</html>