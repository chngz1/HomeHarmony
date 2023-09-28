<?php
namespace ElementPack\Modules\LogoGrid;

use ElementPack\Base\Element_Pack_Module_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Module extends Element_Pack_Module_Base {

	public function get_name() {
		return 'logo-grid';
	}

	public function get_widgets() {
		$widgets = [
			'Logo_Grid',
		];

		return $widgets;
	}
}
