<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="presenters">
		<div class="content-width">

			<?php if ($title || $label): ?>
				<div class="title">

					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
					<?php if ($label): ?>
						<h3 class="color"><?= $label ?></h3>
					<?php endif ?>
					
				</div>
			<?php endif ?>
			
			<div class="slider-wrap">
				<div class="swiper presenters-slider">
					<div class="swiper-wrapper">

						<?php foreach ($items as $item): ?>
							<div class="swiper-slide">

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

									<?php if ($item['text']): ?>
										<p><?= $item['text'] ?></p>
									<?php endif ?>
									
								</div>
							</div>
						<?php endforeach ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>