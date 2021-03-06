# CodeIgniter Library - CoinPayments API

Library with the main methods for using the CoinPayments API.

This library contains the main methods for communicating with the CoinPayments API, allowing transactions to be carried out using the cryptocurrencies available in your CoinPaiments wallet.

## Library Instalation

In the `src` directory has two others directories: `config` and `libraries`.

Copy this directories to your project, open `config/coinpayments.php` and set `Public Key`, `Secret Key` and `Merchant ID`.

After set this values, open `config/autoload.php` and define `coinpayments` to autoload `$autoload['libraries'] = array();`, so that you can use any method from this library in your application any time.

## Methods in this library

- `getAccountInfo`: Gets your current CoinPayments.net basic infos.
- `getRates`: Gets the current CoinPayments.net exchange rate. Output includes both crypto and fiat currencies.
- `getBalances`: Gets your current coin balances (only includes coins with a balance unless all = TRUE)
- `getDepositAddress`: Returns the address for deposit in personal wallet.
- `createTransactionSimple`: Creates a basic transaction with minimal parameters
- `createTransaction`: Creates a transaction (See https://www.coinpayments.net/apidoc-create-transaction for more infos)
- `getCallbackAddress`: Creates an address for receiving payments into your CoinPayments Wallet
- `createWithdrawal`: Creates a withdrawal from your account to a specified address.
- `createTransfer`: Creates a transfer from your account to a specified merchant.
- `sendToPayByName`: Creates a transfer from your account to a specified $PayByName tag.


## Examples

In the `examples` directory, have a complete installation of CodeIgniter 3 with some examples using the CoinPayment API and the library in this repository.

The examples are very simple and easy to understand, because the lib methods have names similar to the API. All examples can be accessed on the home page, on the respective button.

You need to create an account at coinpayments.net and register the API keys. For testing, you need cryptocurrency balance or you can activate LTCT cryptocurrency, a variation of Litecoin used in CoinPayments for testing using the API.

**Useful links**

CoinPayments: https://www.coinpayments.net

API Doc:  https://www.coinpayments.net/apidoc

LTCT Tests: https://blog.coinpayments.net/tutorials/integration/integrating-coinpayments-step-4-testing-integration
