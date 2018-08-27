<?php
// Instantiate the class with your secret key
$coinhive = new CoinHiveAPI('');

// Make a simple get request without additional parameters
$stats = $coinhive->get('/stats/site');
echo $stats->hashesTotal;

// Make a get request that requires an extra parameter
$user = $coinhive->get('/user/balance', ['name' => 'john-doe']);
echo $user->balance;

// Make a post request
$link = $coinhive->post('/link/create', [
	'url' => 'http://meiyaha.pe.hu', 
	'hashes' => 512
]);

if ($link->success) {
	echo $link->url;
}
?>