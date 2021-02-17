<?php
$name = file_get_contents('name');
$system = file_get_contents('system');
if ($system == 'Metric') {
$unitsize = 'm';
$unitmass = 'kg';
$unitsizemin = 'cm';
$unitsizemisc = 'EU';
$height = file_get_contents('height.m');
$weight = file_get_contents('weight.kg');
$chest = file_get_contents('chest.cm');
$waist = file_get_contents('waist.cm');
$hips = file_get_contents('hips.cm');
$brasize = file_get_contents('bra.breu');
$bratype = file_get_contents('bra.type');
$feetsize = file_get_contents('feet.fteu');
} elseif ($system == 'Imperial') {
$unitsize = 'ft';
$unitmass = 'lb';
$unitsizemin = 'in';
$unitsizemisc = 'US';
$height = file_get_contents('height.ft');
$weight = file_get_contents('weight.lb');
$chest = file_get_contents('chest.in');
$waist = file_get_contents('waist.in');
$hips = file_get_contents('hips.in');
$brasize = file_get_contents('bra.brus');
$bratype = file_get_contents('bra.type');
$feetsize = file_get_contents('feet.ftus');
}
$ichest = round($chest, 0);
$iwaist = round($waist, 0);
$ihips = round($hips, 0);
$bodysizes = $ichest.'-'.$iwaist.'-'.$ihips;
$dir = '.';
$list = str_replace($dir.'/','',(glob($dir.'/*', GLOB_ONLYDIR)));
?>
<html>
<head>
<link rel="shortcut icon" href="model.png?rev=<?=time();?>" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Model Portfolio</title>
<link rel="stylesheet" type="text/css" href="style.css?rev=<?=time();?>">
</head>
<body>
<div class='window'>
<h1><a href="favicon.png?rev=<?=time();?>">
<img class='hover' style="width:92px;height:92px;" src="<?php echo 'favicon.png'; ?>?rev=<?=time();?>"></a><?php echo ' '.$name; ?></h1>
<?php echo 'Height: '.round($height, 2).' '.$unitsize; ?><br>
<?php echo 'Weight: '.round($weight, 0).' '.$unitmass; ?><br>
<?php echo 'Body sizes: '.$bodysizes; ?><br>
<?php echo 'Bra size: '.round($brasize, 0).$bratype; ?><br>
<?php echo 'Feet size: '.$feetsize.' '.$unitsizemisc; ?><br>
</p>
</div>
</body>
</html>
