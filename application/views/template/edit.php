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
    
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

    <title>edit</title>
</head>
<body>
<?php foreach  ($query AS $rs):?>
<div class="container">
  <h2>edit form</h2>
  <form action="http://localhost/PHP_project/Welcome/update" method="post">

    <div class="form-group">
        <label>ID:</label>
        <input class="form-control" id="ID" placeholder="Enter title" name="ID" value="<?php  echo $rs->CAT_ID?>">
    </div>

    <div class="form-group">
        <label>Title(THA):</label>
        <input class="form-control" id="titleTHA" placeholder="Enter title" name="titleTHA" value="<?php  echo $rs->DESCR_THA?>">
    </div>

    <div class="form-group">
        <label>Title(ENG):</label>
        <input class="form-control" id="titleENG" placeholder="Enter title" name="titleENG" value="<?php  echo $rs->DESCR_ENG?>">
    </div>

    <div class="form-group">
        <div class="dropdown">
            <label>Type:</label>
            <select name="type">
                <option value="<?php  echo $rs->ANS_TYPE?>"><?php  echo $rs->ANS_TYPE?></option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="dropdown">
            <label>Parent:</label>
            <select name="parent">
                <option value="<?php  echo $rs->CATHEAD_ID?>"><?php  echo $rs->CATHEAD_ID?></option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Th:</label>
        <textarea name="th"><?php  echo $rs->ANS_THA?></textarea>
    </div>

    <div class="form-group">
        <label>Eng:</label>
        <textarea name="eng"><?php  echo $rs->ANS_ENG?></textarea>
    </div>
      
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>
</div>
</div>
<?php  endforeach ?>
</body>
</html>