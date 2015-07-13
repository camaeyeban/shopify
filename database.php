<?php
	function database_query(){
		$query = "SELECT * FROM last_invoice_posting";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		
		$date_time = date('M d, Y h:i:s a', time());
		echo "Invoices posted from " . $row[1] . " to " . $date_time . "<br>";
		
		if(!$row){
			$insert_to_last_posting = mysql_query("INSERT INTO last_invoice_posting (id, date) VALUES(DEFAULT, '$date_time') ");
			$insert_to_invoices = mysql_query("INSERT INTO invoices (post_id, post_date) VALUES (DEFAULT, '$date_time')");
		}else{
			$update_last_posting = mysql_query("UPDATE last_invoice_posting SET date = '$date_time' WHERE id='$row[0]'");
			$insert_to_invoices = mysql_query("INSERT INTO invoices (post_id, post_date) VALUES (DEFAULT, '$date_time')");
		}
	}
?>