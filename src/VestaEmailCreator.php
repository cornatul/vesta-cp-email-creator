<?php

namespace LzoMedia\VestCPEmail;


class VestaEmailCreator {

	/**
     * @method createAccount
	 * @param string $vst_hostname
	 * @param string $vst_username
	 * @param string $vst_password
	 * @param string $domain
	 */
	public function createAccount($vst_hostname, $vst_username,$vst_password,$domain){

		$postvars = array(
			'user' => $vst_username,
			'password' => $vst_password,
			'returncode' => "yes",
			'cmd' => "v-add-mail-account",
			'arg1' => $vst_username,
			'arg2' => $domain,
			'arg3' => $_POST["username"],
			'arg4' => $_POST["password"]
		);

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'https://' . $vst_hostname . ':8083/api/');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postvars));
		$answer = curl_exec($curl);

		if ($answer == 0) {
			echo "User account has been successfully created\n";
		} else {
			echo "Query returned error code: " . $answer . "\n";
		}

	}

}
