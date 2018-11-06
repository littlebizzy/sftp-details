<?php

// Subpackage namespace
namespace LittleBizzy\SFTPDetails\Admin;

/**
 * Core class
 *
 * @package sFTP Details
 * @subpackage Admin
 */
class Constants {



	/**
	 * Supported constant names
	 */
	private $names = [
		'server' 		=> 'server',
		'user' 			=> 'user',
		'password' 		=> 'password',
		'port' 			=> 'port',
		'root_dir' 		=> 'root dir',
		'public_dir'		=> 'public dir',
	];



	/**
	 * Compose array of constant values
	 */
	public function values() {

		// Initialize
		$values = [];

		// Enum names and suffixes
		foreach ($this->names as $suffix => $title) {

			// Constant name
			$constant = 'SFTP_DETAILS_'.strtoupper($suffix);

			// Check constant value
			$value = defined($constant)? constant($constant) : null;
			if (!empty($value)) {
				$values[$title] = $value;

			// Check if allow value composition
			} elseif (false !== $value) {

				// Auto-compose root directory
				if ('root_dir' == $suffix) {
					$values[$title] = $this->path(true);

				// Auto-compose public directory
				} elseif ('public_dir' == $suffix) {
					$values[$title] = $this->path();
				}
			}
		}

		// Done
		return $values;
	}



	/**
	 * Retrieves root or public directory
	 */
	private function path($root = false) {

		// Current path
		static $path;
		if (!isset($path)) {
			$path = explode('/wp-content/', __FILE__);
			$path = rtrim($path[0], '/');
		}

		// Check root
		$dir = $root? dirname($path) : $path;

		// Done
		return $dir;
	}



}
