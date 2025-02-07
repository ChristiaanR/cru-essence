<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

 		<link rel="stylesheet" rel="preload" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&family=Red+Hat+Text:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">

		<?= $Wcms->css() ?>

		<script src="https://kit.fontawesome.com/81030039bd.js" crossorigin="anonymous"></script>

	</head>

	<body class="page <?= $Wcms->page('slug') //adding unique class per page for styling// ?>">
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>

		<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-custom-primary">

				<a class="navbar-brand" href="<?= $Wcms->url() ?>"><?= $Wcms->siteTitle() ?></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="mainMenu">
					<ul class="navbar-nav ml-auto">
						<?= $Wcms->menu() ?>
					</ul>
				</div>
		</nav>

		<div class="optional-header"></div>

		<div class="page-content container">
			<div class="row">

				<main class="main-content col-md-8">
					<section class="core">
						<?= $Wcms->page('content') ?>
					</section>
					<div class="duality"><h1>Ficaria verna <br> Ook gekend als: Ranunculus ficaria, Ranunculus ficaria <span>subsp. bulbilifer</span></h1>	</div>
				</main>
				<section class="additional col-md-4">
					<?= $Wcms->block('subside') ?>
				</section>
			</div>
		
		</div>
			
		<footer class="page-footer">
			<div class="container">
				<div class="row">

					<?= $Wcms->footer() ?>
				</div>
			</div>
		</footer>

		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>
		<?= $Wcms->js() ?>

	</body>
</html>
