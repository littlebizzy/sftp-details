<?php

// Subpackage namespace
namespace LittleBizzy\SFTPDetails\Core;

// Aliased namespaces
use \LittleBizzy\SFTPDetails\Helpers;

/**
 * Core class
 *
 * @package WordPress Plugin
 * @subpackage Core
 */
final class Core extends Helpers\Singleton {



	/**
	 * Pseudo constructor
	 */
	protected function onConstruct() {

		// Factory object
		$this->plugin->factory = new Factory($this->plugin);

		// Attempt to run an object
		//$this->plugin->factory->myObject()
	}



}