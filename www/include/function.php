<?php

function doSend($dbconn, $input){

			#insert data
			$stmt = $dbconn->prepare("INSERT INTO enquiry(name, email, mobile_number, subject, message) VALUES(:n, :e, :m, :s, :me)");

			#bind params
			$data = [
					':n' => $input['name'],
					':e' => $input['email'],
					':m' => $input['number'],
					':s'=> $input['subject'],
					':me' => $input['message'],
					];

			$stmt->execute($data);

            $success = 'Thank you!'.'We will get back to you shortly.';

			header("Location:contact.php?success=$success");

	}


function displayError($err, $val){
		$result = "";

		if(isset($err[$val])){

		$result = $err[$val];

		}

		return $result;

	}



?>