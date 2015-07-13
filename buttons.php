<?php
	include 'pull_functions.php';
	include 'post_functions.php';
	include 'database.php';
	
	if(isset($_GET['postTaggedProducts'])){
		$url_shopify = 'https://adaecommerce.myshopify.com/admin/products.json';
		$url_imonggo = 'https://sypilimon.c3.imonggo.com/api/products.xml';
		$product = pull_imonggo($url_imonggo);
		parse($product, $url_shopify);
	}else if(isset($_GET['postProducts'])){
		$url_shopify = 'https://adaecommerce.myshopify.com/admin/products.json';
		$url_imonggo = 'https://sypilimon.c3.imonggo.com/api/products.xml';
		$product = pull_imonggo($url_imonggo);
		post_product_shopify($product, $url_shopify);
	}else if(isset($_GET['postCustomers'])){
		$url_shopify = 'https://adaecommerce.myshopify.com/admin/customers.xml';
		$url_imonggo = 'https://sypilimon.c3.imonggo.com/api/customers.xml';
		$customer = pull_shopify($url_shopify);
		post_customer_imonggo($customer, $url_imonggo);
	}else if(isset($_GET['postInvoices'])){
		database_query();		
		$url_shopify = 'https://adaecommerce.myshopify.com/admin/orders.xml';
		$url_imonggo = 'https://sypilimon.c3.imonggo.com/api/invoices.xml';
		$invoices = pull_shopify($url_shopify);
		post_invoice_imonggo($invoices, $url_imonggo);
	}
?>