<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="width: 90%; height: 650px;background: #c6c5b7;text-align: center;">

<p style="text-align: right;background: #fff;height: 50px;padding: 5px;">
	با عرض سلام و خسته نباشید
</p>
<?php
foreach ($data as $rund) {
?>
<div style="width: 30%; height: 350px;float: right;border: 1px solid #fff;margin: 25px;padding:8px;">
<a style="width: 100%;height: 100%;text-decoration: none;color: #000;" href="<?= url ?>details/index?h=<?= $rund['id']?>">
        <img style="height: 200px;width: 200px;" src="<?= $rund['img']; ?>" alt="">

        <p>
		    <?= $rund['title_d']; ?>
        </p>
</a>
        <p>
		    <?= $rund['text_d']; ?>
        </p>

</div>
<?php
}
?>
</body>
</html>