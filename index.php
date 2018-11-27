<!DOCTYPE html PUBLIC>
<html lang="fr" >
<head>
  <title>Formulaires</title>
  <meta "charset=utf-8" />
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$dep = array( 80 =>'Somme', 60=>'Oise', 62 =>'Pas de Calais', '02' =>'Aisne', 59 =>'Nord',);
?>
<table>
	<?php  foreach($dep as $key => $value): ?>
	        <tr>
                    <td>département</td>
	        
	            <td><?=$value;?></td>
	        </tr>
	  <?php endforeach;?>
</table>
</body>
</html>
