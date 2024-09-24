<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="item-3x">
		<div class="content-width">

			<?php if ($title || $label): ?>
				<div class="title-wrap">

					<?php if ($title): ?>
						<h3 class="title"><?= $title ?></h3>
					<?php endif ?>
					
					<?php if ($text): ?>
						<div class="text-wrap"><?= $text ?></div>
					<?php endif ?>
					
				</div>
			<?php endif ?>
			
			<div class="content">

				<?php foreach ($items as $item): ?>
					<div class="item">

						<?php if ($item['image']): ?>
							<figure>
								<?php require(get_template_directory() . '/inc/link.php'); ?>
								<?= wp_get_attachment_image($item['image']['ID'], 'full') ?></a>
							</figure>
						<?php endif ?>

						<div class="text">

							<?php if ($item['title']): ?>
								<h6>
									<?php require(get_template_directory() . '/inc/link.php'); ?>
									<?= $item['title'] ?></a>
								</h6>
							<?php endif ?>

							<?= $item['text'] ?>

						</div>
					</div>
				<?php endforeach ?>

			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>