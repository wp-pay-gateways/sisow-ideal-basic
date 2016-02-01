<?php

/**
 * Title: Sisow - iDEAL Basic config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Sisow_IDealBasic_TestConfig extends Pronamic_WP_Pay_Gateways_Sisow_IDealBasic_Config {
	public function get_payment_server_url() {
		return 'https://www.sisow.nl/Sisow/iDeal/IssuerHandler.ashx/test';
	}
}
