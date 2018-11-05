<?php

// Subpackage namespace
namespace LittleBizzy\SFTPDetails\Core;

// Aliased namespaces
use \LittleBizzy\SFTPDetails\Helpers;
use \LittleBizzy\SFTPDetails\Admin;

/**
 * Object Factory class
 *
 * @package sFTP Details
 * @subpackage Core
 */
class Factory extends Helpers\Factory {



	/**
	 * Dashboard admin object instance
	 */
	protected function createDashboard() {
		return Admin\Dashboard::instance($this->plugin);
	}



	/**
	 * Create SFTP values object
	 */
	protected function createConstants() {
		return new Admin\Constants;
	}



}