<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="link-logo-block">
		<div class="content-width">

			<?php if (is_array($links) && checkArrayForValues($links)): ?>
			<div class="link-wrap">

				<?php foreach ($links as $item): ?>
					<?php if ($item['link']): ?>
						<div class="item">
							<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

								<?php if ($item['image']): ?>
									<div class="bg">
										<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
									</div>
								<?php endif ?>

								<h3><?= $item['link']['title'] ?></h3>
							</a>
						</div>
					<?php endif ?>
				<?php endforeach ?>
				
			</div>
		<?php endif ?>

		<?php if($logos): ?>

			<div class="logo-wrap">

				<?php foreach($logos as $image): ?>

					<div class="logo">
						<a href="#">
							<?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
								<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
							<?php else: ?>
								<?= wp_get_attachment_image($image['ID'], 'full') ?>
							<?php endif ?>
						</a>
					</div>

				<?php endforeach; ?>

			</div>

		<?php endif; ?>
		
	</div>
</section>

<?php endif; ?>