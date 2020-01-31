<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>CodeIgniter Library - CoinPayments API</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<nav class="col-12 col-md-4 pt-5">
				<h1 class="h4 mb-4">Functions available in this library</h1>
				<a href="<?= base_url('app/getAccountInfo') ?>" class="btn btn-primary btl-lg btn-block ">getAccountInfo</a>
				<div class="clearfix mt-3 mb-3"></div>
				<a href="<?= base_url('app/getRates') ?>" class="btn btn-primary btl-lg btn-block">getRates</a>
				<div class="clearfix mt-3 mb-3"></div>
				<a href="<?= base_url('app/getBalances') ?>" class="btn btn-primary btl-lg btn-block">getBalances</a>
				<div class="clearfix mt-3 mb-3"></div>
				<a href="<?= base_url('app/getDepositAddress') ?>" class="btn btn-primary btl-lg btn-block">getDepositAddress</a>
				<div class="clearfix mt-3 mb-3"></div>
				<a href="<?= base_url('app/createTransactionSimple') ?>" class="btn btn-primary btl-lg btn-block">createTransactionSimple</a>
				<div class="clearfix mt-3 mb-3"></div>
				<a href="<?= base_url('app/getCallbackAddress') ?>" class="btn btn-primary btl-lg btn-block">getCallbackAddress</a>
				<div class="clearfix mt-3 mb-3"></div>
				<a href="<?= base_url('app/createWithdrawal') ?>" class="btn btn-primary btl-lg btn-block">createWithdrawal</a>
				<div class="clearfix mt-3 mb-3"></div>
				<a href="<?= base_url('app/createTransfer') ?>" class="btn btn-primary btl-lg btn-block">createTransfer</a>
				<div class="clearfix mt-3 mb-3"></div>
				<a href="<?= base_url('app/sendToPayByName') ?>" class="btn btn-primary btl-lg btn-block">sendToPayByName</a>
			</nav>
			<div class="col-12 col-md-8 pt-5">
				<p>Click on the buttons on the side (or above if you are on a smartphone) and see the API return below.</p>
				<h2 class="h4"><?= $method_name ?>()</h2>
				<pre class="p-3 border pre-scrollable"><?= $api_return ?></pre>
				<p>Official API Documentation: <a href="<?= $api_doc ?>" target="_blank"><?= $api_doc ?></a></p>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>