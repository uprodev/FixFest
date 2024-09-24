<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="ticket-banner<?php if($is_fixed_height) echo ' faq-banner' ?>">

		<?php if ($image): ?>
			<div class="bg">
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			</div>
		<?php endif ?>
		
		<div class="content-width">

			<?php if ($label): ?>
				<h3 class="color"><?= $label ?></h3>
			<?php endif ?>

			<?php if ($title): ?>
				<h1><?= $title ?></h1>
			<?php endif ?>

			<?php if ($link): ?>
				<div class="link-wrap">
					<a href="<?= $link['url'] ?>"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
				</div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>