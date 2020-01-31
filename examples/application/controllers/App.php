<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{

	public function index($api_call = null)
	{
		$data['api_return'] = "";

		switch ($api_call) {
			case 'getAccountInfo':
				$result  = $this->coinpayments->getAccountInfo();
				$api_doc = 'https://www.coinpayments.net/apidoc-get-basic-info';
				break;
			case 'getRates':
				$result  = $this->coinpayments->getRates();
				$api_doc = 'https://www.coinpayments.net/apidoc-rates';
				break;
			case 'getBalances':
				$result  = $this->coinpayments->getBalances();
				$api_doc = 'https://www.coinpayments.net/apidoc-balances';
				break;
			case 'getDepositAddress':
				$result  = $this->coinpayments->getDepositAddress();
				$api_doc = 'https://www.coinpayments.net/apidoc-get-deposit-address';
				break;
			case 'createTransactionSimple':
				$result  = $this->coinpayments->CreateTransactionSimple(0.25, 'USD', 'LTCT', 'your_buyers_email@email.com');
				$api_doc = 'https://www.coinpayments.net/apidoc-create-transaction';
				break;
			case 'getCallbackAddress':
				$result  = $this->coinpayments->getCallbackAddress('LTCT');
				$api_doc = 'https://www.coinpayments.net/apidoc-get-callback-address';
				break;
			case 'createWithdrawal':
				$result  = $this->coinpayments->CreateWithdrawal(0.01, 'LTCT', 'the_address_to_send_the_coins_to', TRUE);
				$api_doc = 'https://www.coinpayments.net/apidoc-create-withdrawal';
				break;
			case 'createTransfer':
				$result  = $this->coinpayments->CreateTransfer(0.01, 'LTCT', 'receiving_merchant_id', TRUE);
				// to test this method, you can use my merchant ID: a751106bcc1f8fb71aecdb9dfc850a79
				$api_doc = 'https://www.coinpayments.net/apidoc-create-transfer';
				break;
			case 'sendToPayByName':
				$result  = $this->coinpayments->SendToPayByName(0.01, 'LTCT', '$CoinPayments', TRUE);
				$api_doc = 'https://www.coinpayments.net/apidoc-create-transfer';
				break;
			default:
				$result   = $this->coinpayments->getAccountInfo();
				$api_doc  = 'https://www.coinpayments.net/apidoc-get-basic-info';
				$api_call = 'getAccountInfo';
				break;
		}

		if ($result['error'] == 'ok') {
			$data['api_return'] = print_r($result['result'], true);
		} else {
			$data['api_return'] = 'Error: ' . $result['error'];;
		}

		$data['api_doc'] = $api_doc;
		$data['method_name'] = $api_call;

		$this->load->view('index', $data);
	}
}
