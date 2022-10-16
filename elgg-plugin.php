<?php

return [
	'plugin' => [
		'name' => 'Tidypics Image Embed',
		'version' => '4.3.0',
		'dependencies' => [
			'tidypics' => [],
			'embed' => [],
		],
	],
	'hooks' => [
		'register' => [
			'menu:embed' => [
				"\TidypicsImageEmbedHooks::tidypicsimageembed_embed_menu_setup" => [],
			],
		],
	],
];
