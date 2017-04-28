<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Vplusapi{

	private $iterations = 1000;
	private $salt = "8omuj86IdHi^h;jk.8i";
	private $iv_sub = ".shF]dgikl;pgsvt";

	public function __construct(){}

    public function get_iterations(){

    	return $this->iterations;
    }

    public function get_salt(){

    	return $this->salt;
    }

    public function get_iv_sub(){

    	return $this->iv_sub;
    }

    public function test_lib(){

    	echo "test ok";
    }

    public function apiconnect($data_array){


    	/*header('Content-type: text/html; charset=utf-8');*/
		/*$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));*/

		$allval = null;
		
		foreach ($data_array as $key => $val){ 

			$allval .= $val; 

		}

		$hash = hash('md5',$allval);
		$data_array = array_merge($data_array, array("key"=>"$hash"));
		$data = json_encode($data_array);
		$url = "http://27.100.7.17/api/api_resp.php";

		$respdata = $this->sendPost($url,$data);

		// echo "sent = ".$data."<br>";
		// echo "resp = ".$respdata."<br>";

		if(isset($respdata)){

			$key = $this->key_cnd($hash);	
			return $data_resp = $this->decrypt_cdn($key,$respdata);
		      
		}else{

			 echo "Error Connect";

		}

		// Decode message and extract IV, Salt, and Encrypted Message

		

    }

    protected function sendPost($url, $post_data, $ssl=true, $certpath = "/usr/local/www/apache22/data/cpg/cer.crt" , $timeout = 600){

		    
		    $ch = curl_init ();
		    curl_setopt($ch, CURLOPT_URL,  $url);

		    if ($ssl) {
		        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		        curl_setopt($ch, CURLOPT_CAINFO, $certpath);
		    }
		    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout );
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		    $postResult =  curl_exec ($ch);

		    curl_close ($ch);

		    return $postResult;
		    //fclose ($fp);

	}

	protected function pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output = false){

		    $algorithm = strtolower($algorithm);

		    if(!in_array($algorithm, hash_algos(), true)){

		        trigger_error('PBKDF2 ERROR: Invalid hash algorithm.', E_USER_ERROR);
		    }

		    if($count <= 0 || $key_length <= 0){

		        trigger_error('PBKDF2 ERROR: Invalid parameters.', E_USER_ERROR);
		    }

		    if (function_exists("hash_pbkdf2")) {
		        // The output length is in NIBBLES (4-bits) if $raw_output is false!
		        if(!$raw_output){

		            $key_length = $key_length * 2;

		        }

		        return hash_pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output);
		    }

		    $hash_length = strlen(hash($algorithm, "", true));
		    $block_count = ceil($key_length / $hash_length);
		    $output = "";

		    for($i = 1; $i <= $block_count; $i++) {

		        // $i encoded as 4 bytes, big endian.		        
		        $last = $salt . pack("N", $i);
		        // first iteration
		        $last = $xorsum = hash_hmac($algorithm, $last, $password, true);
		        // perform the other $count - 1 iterations
		        for ($j = 1; $j < $count; $j++) {
		            $xorsum ^= ($last = hash_hmac($algorithm, $last, $password, true));
		        }
		        $output .= $xorsum;
		    }

		    if($raw_output){

		        return substr($output, 0, $key_length);

		    }else{

		        return bin2hex(substr($output, 0, $key_length));
		    }
	}

	protected function key_cnd($hash){

    		return $this->pbkdf2("sha1",$hash, $this->salt , $this->iterations , 32, true);

	}

	protected function decrypt_cdn($key,$data){

    	$iv =  substr($data,0,16);
    	$data_encrypt = substr($data,16);
    	return mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $data_encrypt, MCRYPT_MODE_CBC, $iv);
	}


}

/* End of file Someclass.php */