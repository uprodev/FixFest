<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="faq">
		<div class="content-width">

			<?php if ($title): ?>
				<h3 class="title"><?= $title ?></h3>
			<?php endif ?>
			
			<ul class="accordion">

				<?php foreach ($items as $item): ?>
					<?php if ($item['title'] && $item['text']): ?>
						<li class="accordion-item">
							<div class="accordion-thumb"><p><?= $item['title'] ?></p></div>
							<div class="accordion-panel">
								<div class="wrap"><?= $item['text'] ?></div>
							</div>
						</li>
					<?php endif ?>
				<?php endforeach ?>
				
			</ul>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>