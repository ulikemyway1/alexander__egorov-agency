<?php
/**
 * Block Hero.
 *
 * @var array $block The block settings and attributes.
 * @var string $content The block inner HTML (empty).
 * @var bool $is_preview True during AJAX preview.
 * @var $post_id (int|string) The post ID this block is saved to.
 */

/**
 * Block preview image
 */
if (isset($block['data']['block_preview_images'])) {
	hm_get_template_part_with_params('fragments/block-preview-image', ['block' => $block]);
	return;
}

/**
 * Block Variables
 */
$categories = get_field('category');

?>


<section class="section section-offers">

	<div class="offers-tabs">
		<ul class="nav nav-tabs" id="myTab" role="tablist">

			<?php if (!empty($categories)): ?>

				<?php foreach ($categories as $index => $category): ?>
					<?php
					$title = !empty($category['category-title']) ? $category['category-title'] : '';
					$id_title = !empty($title) ? implode('-', explode(' ', strtolower($title))) : '';
					if ($index === 0) {
						$active_class = 'active';
					} else {
						$active_class = '';
					}
					?>

					<li class="nav-item" role="presentation">
						<button class="nav-link <?= $active_class ?>" id="<?= $id_title ?>-tab" data-bs-toggle="tab"
							data-bs-target="#<?= $id_title ?>" type="button" role="tab" aria-controls="<?= $id_title ?>"
							aria-selected="false"><?= $title ?></button>
					</li>
				<?php endforeach; ?>

			<?php endif ?>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<?php if (!empty($categories)): ?>

				<?php foreach ($categories as $index_item => $category): ?>
					<?php
					$title = !empty($category['category-title']) ? $category['category-title'] : '';
					$id_title = !empty($title) ? implode('-', explode(' ', strtolower($title))) : '';
					if ($index_item === 0) {
						$active_class = 'active show';
					} else {
						$active_class = '';
					}
					?>
					<div class="tab-pane offers <?= $active_class ?>" id="<?= $id_title ?>" role="tabpanel"
						aria-labelledby="<?= $id_title ?>-tab">
						<?php foreach ($category['category-items'] as $category_item): ?>
							<?php
							$item_title = !empty($category_item['category-item-title']) ? $category_item['category-item-title'] : '';
							$item_url = !empty($category_item['category-item-url']) ? $category_item['category-item-url'] : '';
							?>
							<a class="offers-item" href="<?= $item_url ?>">
								<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" />
								</svg>
								<span><?= $item_title ?></span>
							</a>
						<?php endforeach; ?>
					</div>

				<?php endforeach; ?>

			<?php endif ?>

		</div>
	</div>

</section>