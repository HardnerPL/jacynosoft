<div class="navbar navbar-dark navbar-expand-sm fixed-top">
	<div class="container p-2">
		<a id="navbar-logo" class="navbar-brand border p-1" href="">
			JacynoSOFT
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbar">
			<ul class="navbar-nav text-right">
				<li class="nav-item active">
					<a class="mx-2 nav-link" href=""><?= get_property($lang,'home_nav') ?></a>
				</li>
				<li class="nav-item">
					<a class="mx-2 nav-link" href=""><?= get_property($lang,'about_nav') ?></a>
				</li>
				<li class="nav-item">
					<a class="mx-2 nav-link" href=""><?= get_property($lang,'projects_nav') ?></a>
				</li>
				<li class="nav-item">
					<a class="mx-2 nav-link" href=""><?= get_property($lang,'contact_nav') ?></a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div id="motto-container" class="row text-light">
	<h1 id="motto-text" class="text-center">
		<?= get_property($lang,'motto') ?>
	</h1>
</div>
<div class="row my-5">
	<div class="col-12 col-sm-10 col-md-8 col-xl-6 offset-sm-1 offset-md-2 offset-xl-3">
		<div class="row">
			<div class="col text-center">
				<h1><?= get_property($lang,'about_title') ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-6 offset-3 offset-sm-0 col-sm-4 col-md-3 p-2 mr-4 content-center my-auto">
				<img class="rounded-circle w-100" src="assets/img/profile.jpg">
			</div>
			<div class="col-12 px-4 px-sm-0 col-sm offset-sm-0 p-2 content-center">
				<p class="my-auto text-center text-sm-left">
					<?= get_property($lang,'about_content') ?>
				</p>
			</div>
		</div>
	</div>
</div>
<hr class="w-75">
<div class="row my-5">
	<div class="col-12 px-4 px-sm-0 col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 text-center">
		<h1><?= get_property($lang,'experience_title') ?></h1>
		<p>
			<?= get_property($lang,'experience_content') ?>
		</p>
	</div>
</div>
<hr class="w-25">
<div class="row my-5">
	<div class="col-12 px-4 px-sm-0 col-sm-8 offset-sm-2 col-md-4 offset-md-1 col-lg-3 offset-lg-2 text-center">
		<span class="experience-header px-2"><?= get_property($lang,'back_end_title') ?></span>
		<p class="mt-2">
			<?= get_property($lang,'back_end_content') ?>
		</p>
	</div>
	<div
		class="col-12 px-4 px-sm-0 col-sm-8 offset-sm-2 col-md-4 offset-md-2 col-lg-3 offset-lg-2 mt-5 mt-md-0 text-center">
		<span class="experience-header px-2"><?= get_property($lang,'front_end_title') ?></span>
		<p class="mt-2">
			<?= get_property($lang,'front_end_content') ?>
		</p>
	</div>
	<div class="col-12 px-4 px-sm-0 col-sm-8 offset-sm-2 col-md-4 offset-md-4 mt-5 text-center">
		<span class="experience-header px-2"><?= get_property($lang,'ui_ux_title') ?></span>
		<p class="mt-2">
			<?= get_property($lang,'ui_ux_content') ?>
		</p>
	</div>
</div>
<hr class="w-75">
<div class="row my-5">
	<div class="col-12 col-sm-10 col-md-8 col-xl-6 offset-sm-1 offset-md-2 offset-xl-3">
		<div class="row">
			<div class="col text-center">
				<h1><?= get_property($lang,'technologies_title') ?></h1>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-6 offset-3 offset-sm-0 col-sm-4 col-md-3 p-2 mr-4 content-center my-auto">
				<img class="rounded-circle w-100" src="assets/img/profile.jpg">
			</div>
			<div class="col-8 offset-2 col-sm offset-sm-0 p-2 text-center text-sm-left">
				<h3><?= get_property($lang,'technology_one_title') ?></h3>
				<p class="my-auto">
					<?= get_property($lang,'technology_one_content') ?>
				</p>
			</div>
		</div>
		<div class="row mt-4">
			<div class="order-1 order-sm-0 col-8 offset-2 col-sm offset-sm-0 p-2 text-center text-sm-left">
				<h3><?= get_property($lang,'technology_two_title') ?></h3>
				<p class="my-auto">
					<?= get_property($lang,'technology_two_content') ?>
				</p>
			</div>
			<div class="order-0 col-6 offset-3 offset-sm-0 col-sm-4 col-md-3 p-2 mr-4 content-center my-auto">
				<img class="rounded-circle w-100" src="assets/img/profile.jpg">
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-6 offset-3 offset-sm-0 col-sm-4 col-md-3 p-2 mr-4 content-center my-auto">
				<img class="rounded-circle w-100" src="assets/img/profile.jpg">
			</div>
			<div class="col-8 offset-2 col-sm offset-sm-0 p-2 text-center text-sm-left">
				<h3><?= get_property($lang,'technology_three_title') ?></h3>
				<p class="my-auto">
					<?= get_property($lang,'technology_three_content') ?>
				</p>
			</div>
		</div>
	</div>
</div>
<hr class="w-75">
<div class="row my-5">
	<div class="col-12 px-4 px-sm-0 col-sm-10 offset-sm-1">
		<div class="row">
			<div class="col">
				<h1 class="text-center mb-4"><?= get_property($lang,'offer_title') ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 my-2 my-lg-0 col-lg px-3 text-center py-3 offer-container">
				<span class="offer-header"><?= get_property($lang,'offer_one_title') ?></span>
				<p class="my-auto">
					<?= get_property($lang,'offer_one_content') ?>
				</p>
			</div>
			<div class="col-12 my-2 my-lg-0 col-lg px-3 text-center py-3 offer-container">
				<span class="offer-header"><?= get_property($lang,'offer_two_title') ?></span>
				<p class="my-auto">
					<?= get_property($lang,'offer_two_content') ?>
				</p>
			</div>
			<div class="col-12 my-2 my-lg-0 col-lg px-3 text-center py-3">
				<span class="offer-header"><?= get_property($lang,'offer_three_title') ?></span>
				<p class="my-auto">
					<?= get_property($lang,'offer_three_content') ?>
				</p>
			</div>
		</div>
	</div>
</div>
