<?php 
	include($_SERVER['DOCUMENT_ROOT']."/example/lib/WideImage.php"); //1° opção: link direto com diretorio do servidor
	//2° opção (mais simples) -> voltar 1 diretorio e chegar no arquivo manualmente
	$dirDestino = $_POST['dir'];
	$width = $_POST['width'];
	$height = $_POST['height'];
	$imagens = @$_FILES['imagens'];

	for ($i=0; $i < count($imagens['name']); $i++) { 
		$img['tmp_name'] = $imagens['tmp_name'][$i];
    $img['name'] = $imagens['name'][$i];
    $img['type'] = $imagens['type'][$i];
    $img['type'] = str_replace('image/', '', $img['type']) ;

    $image = WideImage::load($img['tmp_name']);

    if (isset($_POST['prop'])) {
    	$resized = $image->resize($width);
    }else{
    	$resized = $image->resize($width,$height,'fill');
    }
    $resized->saveToFile($dirDestino."/".uniqid().'.'.$img['type']);
	}
	$data['mensagem'] = 'Formatação concluída com sucesso';
 	die(json_encode($data));    
?>