<?php
/**
 * Tidypics image list item view
 *
 */

$image = elgg_extract('entity', $vars);

if (!($image instanceof TidypicsImage)) {
	return true;
}

$img = elgg_view_entity_icon($image, 'small', ['link_class' => 'embed-insert']);

$img_title = $image->getTitle();
if (strlen($img_title) > 20) {
	$img_title = mb_substr($img_title, 0, 29, "utf-8") . "...";
}

$header = elgg_view('output/url', [
	'text' => $img_title,
	'href' => $image->getURL(),
	'is_trusted' => true,
	'class' => 'tidypics-heading',
]);

$body = elgg_view('output/url', [
	'text' => $img,
	'href' => $image->getURL(),
	'encode_text' => false,
	'is_trusted' => true,
]);

echo elgg_view_module('tidypics-image', $header, $body);
