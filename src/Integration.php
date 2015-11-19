<?php

class Pronamic_WP_Pay_Gateways_Sisow_IDealBasic_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		$this->id            = 'sisow-ideal-basic';
		$this->name          = 'Sisow - iDEAL Basic';
		$this->url           = 'https://www.sisow.nl/';
		$this->dashboard_url = 'https://www.sisow.nl/Sisow/iDeal/Login.aspx';
		$this->provider      = 'sisow';
		$this->deprecated    = true;
	}
}
