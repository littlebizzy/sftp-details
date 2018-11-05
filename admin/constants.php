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
		'public_dir' 	=> 'public dir',
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

			// Auto-compose root directory
			} elseif ('root_dir' == $suffix) {

			// Auto-compose public directory
			} elseif ('public_dir' == $suffix) {

			}
		}

		// Done
		return $values;
	}



}