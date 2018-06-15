<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>

<div class="container">
  <a href="http://localhost/PHP_project/Welcome/add" class="btn btn-light" role="button">Add answer</a>
  <table class="table table-hover">
    <thead  class="thead-dark">
      <tr>
        <th>Answer</th>
        <th style="width: 7%">Status</th>
        <th style="width: 7%">Keyword</th>
        <th style="width: 7%">edit</th>
        <th style="width: 7%">delete</th>
      </tr>
    </thead>

    <?php  #codephp วนloop show ?>
    <tbody>
    <?php foreach  ($query AS $rs):?>
        <?php  echo 
        "<tr>
        <td >".$rs->ANS_THA."</td>
        <td style='width: 7%'>:)</td>
        <td style='width: 7%'><a href='http://localhost/PHP_project/Welcome/key/".$rs->CAT_ID."' class='btn btn-light' role='button'>+</a></td>
        <td style='width: 7%'><a href='http://localhost/PHP_project/Welcome/edit/".$rs->CAT_ID."' class='btn btn-light' role='button'>Y</a></td>
        <td style='width: 7%'>X</td>
        </tr>";
      ?>
      <?php  endforeach ?>
    </tbody>
  </table>
</div>
</body>
</html>