<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class MainBlock implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'mainBlock',
				'MainBlock',
				'MainBlock block',
				'templates/parts/mainBlock.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "MainBlock block",
					'description' => "MainBlock block"
				),
				'image',
				'custom'
			)
		);
	}
}