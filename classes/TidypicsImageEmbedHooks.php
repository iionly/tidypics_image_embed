<?php
/**
 * Hooks for Tidypics Image Embed
 */

class TidypicsImageEmbedHooks {

	/**
	* Add a menu item to the embed menu (of bundled Embed plugin)
	*/
	public static function tidypicsimageembed_embed_menu_setup(\Elgg\Hook $hook) {
		$menu = $hook->getValue();

		$menu[] = \ElggMenuItem::factory([
			'name' => 'tidypics_image_embed',
			'text' => elgg_echo('collection:object:image'),
			'priority' => 20,
			'data' => [
				'view' => 'embed/tidypics_image_embed/tidypics_image_embed',
			],
		]);

		return $menu;
	}

}
