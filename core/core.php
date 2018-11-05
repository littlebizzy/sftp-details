<?php

// Subpackage namespace
namespace LittleBizzy\SFTPDetails\Core;

// Aliased namespaces
use \LittleBizzy\SFTPDetails\Helpers;

/**
 * Core class
 *
 * @package sFTP Details
 * @subpackage Core
 */
final class Core extends Helpers\Singleton {



	/**
	 * Pseudo constructor
	 */
	protected function onConstruct() {

		// Factory object
		$this->plugin->factory = new Factory($this->plugin);

		// Check context to request the widget hook
		if (is_admin() && !(defined('ADMIN_AJAX') && ADMIN_AJAX)) {
			add_action('wp_dashboard_setup', [$this, 'dashboard']);
		}
	}



	/**
	 * Handle dashboard widget hook
	 */
	public function dashboard() {

		// Check if the plugin is disabled
		if (defined('SFTP_DETAILS') && !SFTP_DETAILS) {
			return;
		}

		// Run the dashboard
		$this->plugin->factory->dashboard();
	}



}