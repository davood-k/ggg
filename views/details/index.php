
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="width: 850px;height: auto;background:#e2e0dd;text-align: center;margin: 15px auto;border: 2px solid #400f0a;border-radius:6px;padding: 10px;">
<style>
    .text {
        font-size: 14pt;
        color: #61605f;
    }

    .text_m {
        font-size: 11pt;
        color: #6c1710;
    }

</style>
<section id="main">

    <?php
    foreach ($data as $row) {
	    ?>


        <img style="width: 550px" src="<?=url?><?= $row['img']; ?>" alt="">

        <h3 class="title">
		    <?=
		    $row['title_d'];
		    ?>
        </h3>

        <p class="text">
		    <?=
		    $row['pishnevis'];
		    ?>
        </p>
        <p class="text_m">
		    <?=
            $row['txtA'];
		    ?>
        </p>

	    <?php
    }
    ?>
</section>
</body>
</html>