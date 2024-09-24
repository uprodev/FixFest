<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="title-slider">
		<div class="content-width">

			<?php if ($title || $label): ?>
				<div class="title">
					<h2><?= $title ?></h2>
					<h3 class="color"><?= $label ?></h3>
				</div>
			<?php endif ?>

			<div class="slider-wrap">
				<div class="swiper festival-slider">
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

									<?= $item['text'] ?>

								</div>
							</div>
						<?php endforeach ?>

					</div>
				</div>
				<div class="nav-wrap">
					<div class="swiper-button-next festival-next"><i class="fa-regular fa-arrow-right"></i></div>
					<div class="swiper-button-prev festival-prev"><i class="fa-regular fa-arrow-right"></i></div>
				</div>
			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>