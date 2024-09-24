<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="music">
		<div class="content-width">
			<div class="content">

				<?php if (is_array($first) && checkArrayForValues($first)): ?>
				<div class="item item-title">

					<?php if ($first['title']): ?>
						<h2><?= $first['title'] ?></h2>
					<?php endif ?>

					<?php if ($first['label']): ?>
						<h3 class="color"><?= $first['label'] ?></h3>
					<?php endif ?>

				</div>
			<?php endif ?>
			
			<?php foreach ($items as $item): ?>
				<div class="item">

					<?php if ($item['image']): ?>
						<figure>
							<?php require(get_template_directory() . '/inc/link.php'); ?>
							<?= wp_get_attachment_image($item['image']['ID'], 'full') ?></a>
						</figure>
					<?php endif ?>

					<div class="text">

						<?php if ($item['name']): ?>
							<h6>
								<?php require(get_template_directory() . '/inc/link.php'); ?>
								<?= $item['name'] ?></a>
							</h6>
						<?php endif ?>

						<?php if ($item['time'] || $item['stage']): ?>
							<ul>

								<?php if ($item['time']): ?>
									<li><?= $item['time'] ?></li>
								<?php endif ?>

								<?php if ($item['stage']): ?>
									<li><?= $item['stage'] ?></li>
								<?php endif ?>

							</ul>
						<?php endif ?>

					</div>
				</div>
			<?php endforeach ?>

			<?php if (is_array($last) && checkArrayForValues($last)): ?>
			<div class="item item-btn">

				<?php if ($last['title']): ?>
					<h5><?= $last['title'] ?></h5>
				<?php endif ?>

				<?php if ($last['text']): ?>
					<p><?= $last['text'] ?></p>
				<?php endif ?>

				<?php if ($last['link']): ?>
					<div class="btn-wrap">
						<a href="<?= $last['link']['url'] ?>" class="btn-border"<?php if($last['link']['target']) echo ' target="_blank"' ?>><?= $last['link']['title'] ?></a>
					</div>
				<?php endif ?>

			</div>
		<?php endif ?>

	</div>
</div>
</section>
<?php endif ?>

<?php endif; ?>