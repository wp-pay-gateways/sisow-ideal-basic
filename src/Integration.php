<?php

class Pronamic_WP_Pay_Gateways_Sisow_IDealBasic_Integration {
	public function __construct() {
		$this->id            = 'sisow-ideal-basic';
		$this->name          = 'Sisow - iDEAL Basic';
		$this->url           = 'https://www.sisow.nl/';
		$this->dashboard_url = 'https://www.sisow.nl/Sisow/iDeal/Login.aspx';
		$this->provider      = 'sisow';
		$this->deprecated    = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_Gateway';
	}
}
