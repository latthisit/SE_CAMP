<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    
    
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <table>
        <tbody>
          <?php
          for ($i = 1; $i <= 24; $i++) {
              $result = $multi_x * $i;
              echo "<tr>";
              echo "<td>{$multi_x} x {$i}</td>";
              echo "<td>{$result}</td>";
              echo "</tr>";
          }
          ?>
        </tbody>
    </table>
    <style>
        table {
            width: 150px;
            height: 265px;
        }
    </style>


  </body>
</html>