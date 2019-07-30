<?php
	$name['recsech'] = array(
		'description' => 'Recsech is a tool for doing Footprinting and Reconnaissance on the target web. Recsech collects information such as DNS Information, Sub Domains, HoneySpot Detected, Subdomain takeovers, Reconnaissance On Github and much more you can see in Features in tools .',
		'repo'	=> 'https://github.com/radenvodka/Recsech', 
	);
	$name['sqlmap'] = array(
		'description' => 'Automatic SQL injection and database takeover tool.',
		'repo'	=> 'https://github.com/sqlmapproject/sqlmap', 
	);
	$name['autosploit'] = array(
		'description' => 'Automated Mass Exploite.',
		'repo'	=> 'https://github.com/NullArray/AutoSploit', 
	);
	$name['scapy'] = array(
		'description' => 'the Python-based interactive packet manipulation program & library. ',
		'repo'	=> 'https://github.com/NullArray/AutoSploit', 
	);
	function search($array , $name){
		$name = strtolower($name);
		foreach ($array as $key => $value) {
			if(preg_match("/".$name."/", strtolower($key)) || preg_match("/".$name."/", strtolower( $value['description']) ) ) {
				$showMe[] 	=  "- ".$key." : ".substr($value['description'], 0,100)." ...\r\n";
				$arrayKey[] = $key;
			}
		}
		if(empty($arrayKey)){
			echo "[!] error\r\n";
		}else{
			echo "-------------------------------------------------\r\n\n";
			foreach ($showMe as $key => $x) {
				echo $x;
			}
			echo "\n\n-------------------------------------------------\r\n";
			echo "> Found ".count($arrayKey)." in database\r\n";
			echo "-------------------------------------------------\r\n";
		}
	}
	print_r( search($name , $argv[1]));
?>


