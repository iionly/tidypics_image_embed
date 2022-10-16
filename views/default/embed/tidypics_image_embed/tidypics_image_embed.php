<?php
/**
 * Embed a Tidypics image through the embed interface
 */

$page_owner = elgg_get_page_owner_entity();
if ($page_owner instanceof ElggGroup && $page_owner->isMember()) {
	$base_url = 'embed/tidypics_image_embed?container_guid=' . $page_owner->guid;
} else {
	$base_url = 'embed/tidypics_image_embed';
}

// grab the html to display the most recent images
echo elgg_list_entities([
	'type' => 'object',
	'subtype' => TidypicsImage::SUBTYPE,
	'base_url' => $base_url,
	'limit' => 18,
	'full_view' => false,
	'preload_owners' => true,
	'preload_containers' => true,
	'distinct' => false,
	'list_type' => 'gallery',
	'list_type_toggle' => false,
	'gallery_class' => 'tidypics-gallery',
	'item_view' => 'tidypics_image_embed/item',
	'item_class' => 'embed-item',
	'no_results' => true,
]);
