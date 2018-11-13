<?php

// Subpackage namespace
namespace LittleBizzy\SFTPDetails\Admin;

// Aliased namespaces
use \LittleBizzy\SFTPDetails\Helpers;

/**
 * Core class
 *
 * @package sFTP Details
 * @subpackage Admin
 */
class Dashboard extends Helpers\Singleton {



	/**
	 * Stored constants values
	 */
	private $values;



	/**
	 * Pseudo-constructor
	 */
	public function onConstruct() {

		// Check values
		$this->values = $this->plugin->factory->constants->values();
		if (empty($this->values)) {
			return;
		}

		// Dashboard widget hook
		wp_add_dashboard_widget($this->plugin->prefix.'_dashboard_widget', 'SFTP Details', [$this, 'widget']);
	}



	/**
	 * Display the widget
	 */
	public function widget() {

		// Prepare host
		$host = $_SERVER['HTTP_HOST'];
		if ('www.' == strtolower(substr($host, 0, 4))) {
			$host = substr($host, 4);
		}

		// Init
		$html = '';

		// Host info
		//// $html .= esc_html($host).'<br />'."\n";

		// Constants values
		foreach ($this->values as $name => $value) {
			$html .= '<strong>'.ucfirst(esc_html($name)).':</strong> '.esc_html($value).'<br />'."\n";
		}

		// Display sFTP info
		echo '<p>'.$html.'</p>';
	}



}
