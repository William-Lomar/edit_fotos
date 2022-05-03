<?php
define('INCLUDE_PATH', 'https://example/origem_do_projeto/');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Formatando imagens</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH?>css/bootstrap.min.css">
</head>
<body>

  <div class="container" style="padding: 20px 0;">
    <h1 style="text-align: center;">Formatando tamanho de imagens</h1>
    <form method="post" action="<?php echo INCLUDE_PATH?>forms/forms.php">
      <div class="form-group">
        <label>Onde deseja salvar as imagens?</label>
        <input name="dir" type="text" class="form-control" placeholder="Diretório">
      </div>
      <label>Qual será o tamanho da imagem?</label>

      <div class="row form-group">
        <div class="col">
          <input name="width" type="number" class="form-control" placeholder="Width">
        </div>
        <div class="col">
          <input name="height" type="number" class="form-control" placeholder="Height">
        </div>
      </div>
      <div class="form-check form-group">
        <input type="checkbox" name="prop" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Manter proporções (Somente será considerado o width da imagem)</label>
      </div>
      <div class="form-group">
        <label>Example file input</label>
        <input type="file" name="imagens[]" multiple="multiple" class="form-control-file">
      </div>
      <button style="float: right" type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
 
<script type="text/javascript" src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>  
<script type="text/javascript" src="<?php echo INCLUDE_PATH?>js/jquery-ajaxform.js"></script>
<script type="text/javascript" src="<?php echo INCLUDE_PATH?>js/bootstrap.min.js"></script>  
<script type="text/javascript" src="<?php echo INCLUDE_PATH?>js/scripts.js"></script> 
</body>
</html>
