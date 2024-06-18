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
$cards_title = get_field('cards_title');
$cards_subtitle = get_field('cards_subtitle');
$cards = get_field('cards');
$bg_color = '#000000';
$main_bg = get_field('main_background_image');
$main_bg_style = !empty($main_bg) ? 'style="background-image: url(' . $main_bg . ');"' : '';
?>

<section class="section section-resources">
	<div class="container">
		<div class="resources-wrapper">
			<div class="resources__img" <?= $main_bg_style ?>></div>
			<div class="section-cards__wrapper">
				<div class="cards__title"><?= $cards_title ?></div>
				<div class="cards__subtitle"><?= $cards_subtitle ?></div>
				<div class="cards__wrapper">
					<?php if (!empty($cards)): ?>
						<?php foreach ($cards as $card): ?>
							<?php
							$card_title = $card['card-title'];
							$card_date = $card['card_date'];
							$card_url = !empty($card['card_link']) ? $card['card_link'] : '';
							$card_img_style = !empty($card['card_image']) ? 'style="background-image: url(' . $card['card_image'] . ');"' : 'style="background:' . $bg_color . ';"';
							?>
							<div class="resources-card">
								<div class="resources-card__image" <?= $card_img_style ?>>
								</div>
								<div class="resources-card__footer">
									<div class="resources-card__date"> <?= $card_date ?></div>
									<div class="resources-card__title"><?= $card_title ?></div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>