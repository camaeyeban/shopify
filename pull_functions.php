 <?php
	function pull_imonggo($url){
		$username = 'e2a91021f232de8e4e58b76fd7cd945a7fc650d0';
		$password = 'x';
		
		$options = array(
			CURLOPT_HTTPAUTH  	   => CURLAUTH_BASIC,
			CURLOPT_USERPWD		   => $username . ":" . $password,
			CURLOPT_RETURNTRANSFER => true,   // return web page
			CURLOPT_HEADER         => false,  // don't return headers
			CURLOPT_FOLLOWLOCATION => true,   // follow redirects
			CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
			CURLOPT_ENCODING       => "",     // handle compressed
			CURLOPT_USERAGENT      => "test", // name of client
			CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
			CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
			CURLOPT_TIMEOUT        => 120,    // time-out on response
			CURLOPT_SSL_VERIFYPEER => false
		); 
		//initiate
		$ch = curl_init($url);
		curl_setopt_array($ch, $options);
		//execute
		$content = simplexml_load_string(curl_exec($ch));
		//close
		curl_close($ch);
		return $content;
	}
	function pull_shopify($url){
		$http_header = array(
			'Content-Type: application/xml;charset=UTF-8',
			'Accept: application/xml',
			'X-Shopify-Access-Token: 417d2af7950be894a3652ff3d7016e8e'
			);
		
		$options = array(
			CURLOPT_HTTPHEADER => $http_header,
			CURLOPT_RETURNTRANSFER => true,   // return web page
			CURLOPT_HEADER         => false,  // don't return headers
			CURLOPT_FOLLOWLOCATION => true,   // follow redirects
			CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
			CURLOPT_ENCODING       => "",     // handle compressed
			CURLOPT_USERAGENT      => "test", // name of client
			CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
			CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
			CURLOPT_TIMEOUT        => 120,    // time-out on response
			CURLOPT_SSL_VERIFYPEER => false
		); 
		$ch = curl_init($url);
		curl_setopt_array($ch, $options);
		$content = simplexml_load_string(curl_exec($ch));
		curl_close($ch);
		return $content;
	}
	function parse($product, $url_shopify){
		$len = strlen($i->tag_list);
		
		// foreach($product as $i){
			// echo "LENGTH: " . $len . "<br>";
			
		  // // if($i->tag_list == 'black'){
			// // $json = 
				// // '{
				  // // "product": {
					// // "title": "'.$i->name.'",
					// // "body_html": "'.$i->description.'",
					// // "price": "'.$i->retail_price.'",
					// // "sku": "'.$i->stock_no.'",
					// // "taxable": "'.$i->tax_exempt.'",
					// // "barcode": "'.$i->barcode_list.'"
				  // // }
				// // }'; 
			// // post_shopify($url_shopify, $json);
		  // // }
		// }
	}
?>