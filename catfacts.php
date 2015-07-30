<?php

function speechOut($words) { 
	header('Content-type: application/json');

	$open = '{"version": "1.0","sessionAttributes":"","response":{"outputSpeech":{"type": "PlainText","text": "';
	$close = '"},"shouldEndSession": false}}';
	$end = '"},"shouldEndSession": false}}';

	echo $open;
	 echo ($words);
	echo $close;
}

function endSession($words) { 
	header('Content-type: application/json');

	$open = '{"version": "1.0","sessionAttributes":"","response":{"outputSpeech":{"type": "PlainText","text": "';
	$close = '"},"shouldEndSession": true}}';

	echo $open;
	 echo ($words);
	echo $close;
}


$data = json_decode(file_get_contents('http://catfacts-api.appspot.com/api/facts?number=1'), TRUE);
$text = print_r($data,true);
//$ver = $data['session'][sessionId];
$ver = $data['facts'][0];
//speechOut($ver);
endSession($ver);
//echo('test');
//echo($ver);
?>
