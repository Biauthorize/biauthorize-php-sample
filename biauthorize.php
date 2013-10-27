<?php
// Initial Biauthorize PHP Library to verify authtokens

function Biauthorize_VerifyToken($user, $token) {

		$url = "http://biauthorize.com/api/verify_token/".$user."/".$token;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$ret = curl_exec($ch);
		curl_close($ch);
		echo $ret;

        if ($ret == "true") {
                return true;
        } else {
                return false;
        }
}

?>