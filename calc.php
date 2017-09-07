   <?php 
   $num1 = false;
   $mun2 = false;
   $operator = false;

      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = (int) filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_INT);
        $num2 = (int) filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_INT);
        $operator = filter_input(INPUT_POST, 'operator', FILTER_SANITIZE_STRING);
      }
   ?>

    <?php 
    calc ($num1, $num2, $operator);
   ?> 
    <!-- Область основного контента -->
    <form action='<?php echo $_SERVER['REQUEST_URI']; ?>' method = 'POST'>
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
    <!-- Область основного контента -->
   

  