<?php
// recebendo a url da imagem
$filename = $_GET['img'];
$w = $_GET['w'];
$h = $_GET['h'];
// Cabe�alho que ira definir a saida da pagina
header('Content-type: image/jpeg');

// pegando as dimensoes reais da imagem, largura e altura
list($width, $height) = getimagesize($filename);

//setando a largura da miniatura
if ($w !=''){
	$new_width = $w;
} else{
	$new_width = 120;
}
//setando a altura da miniatura
if ($h !=''){
	$new_height = $h;
} else {
	$new_height = 90;
}

//gerando a a miniatura da imagem
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

//o 3� argumento � a qualidade da miniatura de 0 a 100
imagejpeg($image_p, null, 90);
imagedestroy($image_p);
?>
