<?php
    include "menu.php";
    include "class.php";
    include "db.php";
    $objData=new ClassData();
    $objData->setKey('Nome');
    $arr=$objData->sortData($arr);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Array</title>
</head>
<body><main>
  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Estado</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($arr as $db){ ?>
          <tr>
              <td><?php echo $db['Nome']; ?></td>
              <td><?php echo $db['Idade']; ?></td>
              <td><?php echo $db['Estado']; ?></td>
          </tr>
      <?php }?>
    </tbody>
  </table>
</main>
    
</body>
</html>