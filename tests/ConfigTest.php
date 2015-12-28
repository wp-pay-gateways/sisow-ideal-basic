<?php

/**
 * Title: Sisow - iDEAL Basic - Config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Sisow_IDealBasic_ConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_Sisow_IDealBasic_Config();

		$expected = 'https://www.sisow.nl/Sisow/iDeal/IssuerHandler.ashx';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
