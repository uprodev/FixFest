<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="home-banner">

		<?php if ($image): ?>
			<div class="bg">
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			</div>
		<?php endif ?>

		<div class="content-width">
			<div class="content">

				<?php if ($subtitle): ?>
					<div class="wrap">
						<h3><?= $subtitle ?></h3>
					</div>
				<?php endif ?>

				<?php if (is_array($titles) && checkArrayForValues($titles)): ?>
				<h1>

					<?php foreach ($titles as $item): ?>
						<?php if ($item['title']): ?>
							<span><?= $item['title'] ?></span>
						<?php endif ?>
					<?php endforeach ?>

				</h1>
			<?php endif ?>

			<?= $text ?>

		</div>

		<?php if ($is_bottom): ?>
			<div class="bottom">

				<?php if (is_array($left) && checkArrayForValues($left)): ?>
				<div class="left">

					<?php if ($left['text']): ?>
						<p><?= $left['text'] ?></p>
					<?php endif ?>
					
					<?php if ($left['image']): ?>
						<div class="logo">
							<?php if (pathinfo($left['image']['url'])['extension'] == 'svg'): ?>
								<img src="<?= $left['image']['url'] ?>" alt="<?= $left['image']['alt'] ?>">
							<?php else: ?>
								<?= wp_get_attachment_image($left['image']['ID'], 'full') ?>
							<?php endif ?>
						</div>
					<?php endif ?>
					
				</div>
			<?php endif ?>

			<?php if (is_array($center) && checkArrayForValues($center)): ?>
			<div class="center">

				<?php if ($center['text']): ?>
					<p><?= $center['text'] ?></p>
				<?php endif ?>

			</div>
		<?php endif ?>

		<?php if (is_array($right) && checkArrayForValues($right)): ?>
		<div class="right">

			<?php if ($right['link']): ?>
				<a href="<?= $right['link']['url'] ?>" class="btn-default"<?php if($right['link']['target']) echo ' target="_blank"' ?>><span><?= $right['link']['title'] ?></span></a>
			<?php endif ?>

		</div>
	<?php endif ?>
	
</div>
<?php endif ?>

</div>
</section>

<?php endif; ?>