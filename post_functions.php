<?php
	function post_shopify($url, $json){
		$http_header = array(
			'Content-Type: application/json;charset=UTF-8',
			'Accept: application/json',
			'X-Shopify-Access-Token: 417d2af7950be894a3652ff3d7016e8e'
			);

		$options = array(
			CURLOPT_HTTPHEADER	   => $http_header,
			CURLOPT_RETURNTRANSFER => true,   // Will return the response, if false it print the response
			CURLOPT_HEADER         => false,  // don't return headers			
			CURLOPT_FOLLOWLOCATION => true,   // follow redirects
			CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
			CURLOPT_ENCODING       => "",     // handle compressed
			CURLOPT_USERAGENT      => "test", // name of client
			CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
			CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
			CURLOPT_TIMEOUT        => 120,    // time-out on response
			CURLOPT_SSL_VERIFYPEER => false,	  // Disable SSL verification
			CURLOPT_POST		   => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS	   => $json
		);
		$ch = curl_init($url);
		curl_setopt_array($ch, $options);
		$result  = curl_exec($ch);
		curl_close($ch);
	}
	function post_imonggo($url_imonggo, $xml){
		$username = 'e2a91021f232de8e4e58b76fd7cd945a7fc650d0';
		$password = 'x';

			$options = array(
				CURLOPT_HTTPAUTH  	   => CURLAUTH_BASIC,
				CURLOPT_USERPWD		   => $username . ":" . $password,
				CURLOPT_RETURNTRANSFER => true,   // Will return the response, if false it print the response
				CURLOPT_FOLLOWLOCATION => true,   // follow redirects
				CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
				CURLOPT_ENCODING       => "",     // handle compressed
				CURLOPT_USERAGENT      => "test", // name of client
				CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
				CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
				CURLOPT_TIMEOUT        => 120,    // time-out on response
				CURLOPT_SSL_VERIFYPEER => false,	  // Disable SSL verification
				CURLOPT_POST		   => true,
				CURLOPT_HTTPHEADER	   => array('Content-Type:text/xml'),
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_POSTFIELDS	   => $xml
			);
			$ch = curl_init($url_imonggo);
			curl_setopt_array($ch, $options);
			$result  = curl_exec($ch);
			curl_close($ch);
	}
	function post_product_shopify($product, $url_shopify){
		foreach($product as $i){
			if($i->status != 'D'){
					echo "name: ".$i->name."<br>";
					echo "thumbnail_url: ".$i->thumbnail_url."<br>";
				$json = 
					'{
					  "product": {
						"title": "'.$i->name.'",
						"body_html": "'.$i->description.'",
						"price": "'.$i->retail_price.'",
						"sku": "'.$i->stock_no.'",
						"taxable": "'.$i->tax_exempt.'",
						"barcode": "'.$i->barcode_list.'",
						"image": {
							"src": "'.$i->thumbnail_url.'"
						  }
					  }
					}';
				post_shopify($url_shopify, $json);
			}
		}
	}
	function post_customer_imonggo($customers, $url_imonggo){
		foreach($customers as $i){
			//if(!(in_array($i->id,$customers))){
				$xml = 
				'<?xml version="1.0" encoding="UTF-8"?>
					<customer>
					  <name>'.$i->email.'</name>
					  <company_name>'.$i->company.'</company_name>
					  <country>'.$i->country.'</country>
					  <tax_exempt>'.$i->tax_exempt.'</tax_exempt>
					  <zipcode>'.$i->zip.'</zipcode>
					</customer>';
				post_imonggo($url_imonggo, $xml);
			//}
		}
	}
	function post_invoice_imonggo($invoices, $url_imonggo){
		foreach($invoices as $i){
			$xml = 
			'<?xml version="1.0" encoding="UTF-8"?>
				<invoice>
					<voided_reason></voided_reason>
				</invoice>';
			post_imonggo($url_imonggo, $xml);
		}
	}
	
?>