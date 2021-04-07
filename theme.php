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
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">

		<?= $Wcms->css() ?>

	</head>

	<body class="page">
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>

		<nav class="navbar navbar-expand-lg navbar-light navbar-default">
			<div class="container">

				<input type="checkbox" id="navbarCheckbox" class="navbar-checkbox" aria-hidden="true" />
				<label for="navbarCheckbox" class="navbar-hamburger" title="Click to expand menu"> 
					<i class=burger-bar>-</i>
					<i class=burger-bar>-</i>
					<i class=burger-bar>-</i>
				</label>

				<a class="navbar-brand" href="<?= $Wcms->url() ?>">
					<?= $Wcms->siteTitle() ?>
				</a>

				<div class="navbar-collapse" id="menu-collapse">
					<ul class="mainnav">
						<?= $Wcms->menu() ?>
					</ul>
				</div>
			</div>
		</nav>

		<main class="page-content">
			<section class="core">
				<?= $Wcms->page('content') ?>
			</section>

			<section class="additional">
				<?= $Wcms->block('subside') ?>
			</section>
	</main>

		<footer class="page-footer">
			<div class="container">
				<?= $Wcms->footer() ?>
			</div>
		</footer>

		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>
		<?= $Wcms->js() ?>

	</body>
</html>
