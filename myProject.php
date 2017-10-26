<?php
$name = 'мишка';
$surname = 'мурзичкин';
$age = 2017;
$vk = 'https://vk.com/id288761619';
$sity = 'мурзук';
$about = 'школота';
$tank 

?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $surname . ' ' . $name; ?></title>
	<meta charset = "utf-8">
	<style type="text/css">
	    body {
	    	font-family: sans-serif;
	    }

	    dt {
	    	display: table-row;
	    }

	    dt, dd {
	    	display: table-cell;
	    	padding: 3px 8px;
	    }
    </style>
</head>


<body>
	<h1>Страница пользователя <?=$surname . ' ' . $name; ?></h1>
	    <dl>
	        <dt>Имя</dt>
	        <dd><?= $name; ?></dd>
	    </dl>
	<h2>Страница пользователя <?=$age; ?></h2>
	    <dl>
	    	<dt>Возраст</dt>
	    	<dd><?= $age; ?></dd>
	    </dl>
	<h3>Страница пользователя <?=$vk; ?></h3>
	    <dl>
	        <dt>Вк</dt>
	        <dd><?= $vk; ?></dd>
	    </dl>
	<h4>Страница пользователя <?=$sity; ?></h4>
	    <dl>
	        <dt>город</dt>
	        <dd><?= $sity; ?></dd>
	    </dl>
    <h5>Страница пользователя <?=$about; ?></h5>
	    <dl>
	        <dt>профессия</dt>
	        <dd><?= $about; ?></dd>
	    </dl>

</body>
</html>
