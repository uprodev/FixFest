<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="title-iframe">
		<div class="content-width">

			<?php if ($title || $text): ?>
				<div class="title-wrap">

					<?php if ($title): ?>
						<h3 class="title"><?= $title ?></h3>
					<?php endif ?>

					<?php if ($text): ?>
						<div class="text-wrap"><?= $text ?></div>
					<?php endif ?>
					
				</div>
			<?php endif ?>
			
			<?php if ($iframe): ?>
				<div class="content"><?= $iframe ?></div>
			<?php endif ?>
			
		</div>
	</section>

	<?php endif; ?>