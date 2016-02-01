<?php

/**
 * Title: Sisow - iDEAL Basic integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Sisow_IDealBasic_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		$this->id            = 'sisow-ideal-basic';
		$this->name          = 'Sisow - iDEAL Basic';
		$this->url           = 'https://www.sisow.nl/';
		$this->dashboard_url = 'https://www.sisow.nl/Sisow/iDeal/Login.aspx';
		$this->provider      = 'sisow';
		$this->deprecated    = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Sisow_IDealBasic_ConfigFactory';
	}
}
