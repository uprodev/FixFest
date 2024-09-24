<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="form-block">
		<div class="content-width">
			<div class="content">

				<?php if ($title || $text): ?>
					<div class="text">

						<?php if ($title): ?>
							<h3 class="title"><?= $title ?></h3>
						<?php endif ?>
						
						<?= $text ?>

					</div>
				<?php endif ?>

				<?php if ($form): ?>
					<div class="form-wrap">
						<?= do_shortcode('[contact-form-7 id="' . $form . '" html_class="default-form"]') ?>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>