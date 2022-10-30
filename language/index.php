<?php
$countries = [
    "Belgium" => [
       "French",
       "Dutch",
       "German" 
    ],
    "United Kingdom" => "English",
    "Switzerland" => [
       "German",
       "French",
       "Italian" 
    ],
    "Germany" => "German", 
    "Italy" => "Italian"
  ];

  echo "Сountries\n\n";
foreach ( $countries as $key => $value ) {
	if (!is_array ( $value ))
		echo "$key:\n\t$value\n";
	else {
		echo "$key: \n";
		foreach ( $value as $v )
			echo "\t$v\n";
	}
        echo "\n";
}
echo "\n\n";

$languages = array ();

foreach ( $countries as $country => $cl ) {
	if (!is_array ($cl)) {
		$languages[$cl][] = $country;
	} else {
		foreach ($cl as $l) {
			$languages [$l] [] = $country;
		}
	}
}

foreach ($languages as $key => $value) {
	if (!is_array ($value))
		echo "$key:\n\t$value";
	else {
		echo "$key: \n";
		foreach ( $value as $v )
			echo "\t$v\n";
	}
}
echo "\n\n";