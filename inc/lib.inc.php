<?php
//error_reporting(0);
 function drawTable($cols, $rows, $color) {
    echo "<table  border='2px' , bgcolor='red'>";
        for ($i=1; $i <= $cols; $i++) { 
          echo "<tr>";
            for ($j=1; $j <= $rows ; $j++) { 
              if($i == 1 or $j == 1){
                echo "<th style = 'background:$color'>";
                $pv = $i * $j;
                echo "$pv";
                echo "</th>";
              } else {
                echo "<td>";
                $pv = $i * $j;
                echo "$pv";
                echo "</td>";
              }       
            }
           echo "</tr>"; 
          }    
        echo "</table>";
  }

  // Меню

$leftMenu = array(
        array('link' => 'Домой', 'href' => 'index.php'),
        array('link' => 'О нас', 'href' => 'index.php?id=about'),
        array('link' => 'Контакты', 'href' => 'index.php?id=contact'),
        array('link' => 'Таблица умножения', 'href' => 'index.php?id=table'),
        array('link' => 'Калькулятор', 'href' => 'index.php?id=calc'),
        array('link' => 'Тест - онлайн', 'href' => 'index.php?id=test-online'),
        array('link' => 'Журнал посещений', 'href' => 'index.php?id=log'),
        array('link' => 'Гостевая книга', 'href' => 'index.php?id=sbook')
      );

//Отрисовка меню

function drawMenu($menu, $vertical = true) {
  if(!is_array($menu))
    return false;
  $style = "";
  if (!$vertical) {
    $style = " style='display:inline; margin-right: 15px;'";
  }
  echo "<ul>";
      foreach ($menu as $item) {
        echo "<li$style>";
        echo "<a href={$item['href']}>{$item['link']}</a>";
        echo "</li>";
      }
    echo "</ul>";
    return true;
}

function calc($num1, $num2, $operator) {
  
if(($num1 || $num1 === 0) && ($num2 || $num2 ===0 ) && $operator) {
  if($num2 === 0 && $operator === '/') {
    echo("<p style='color: red;'> На ноль делить нельзя!</p>");
    return;
  }

  $rezult = false;
  switch ($operator) {
    case '+':
       $rezult = $num1 + $num2;
       break;
    case '-':
       $rezult = $num1 - $num2;
       break;
    case '*':
       $rezult = $num1 * $num2;
       break;
    case '/':
       $rezult = $num1 / $num2;
       break;

    default: 
      print 'Такой оператор не найден!';
   }; 

   if ($rezult !== false){
      echo "Результат: {$num1} {$operator} {$num2} = {$rezult}";
    }
 }
}
?>