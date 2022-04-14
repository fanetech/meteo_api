<?php
	if(isset($_POST["dest"]) && isset($_POST["msg"])){
		$dst = $_POST["dest"];
		$msg = $_POST["msg"];
		$data = ["from" => "TAYATA", "text" => $msg, "to" => [$dest]];
		$dataJson = json_encode($data);
		//$ch = curl_init()
	}
