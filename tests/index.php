<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 3:33 PM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../vendor/autoload.php";

const LOGIN = 30017;
const PASS = "hdOxoOG7RLv4jB8vDUGJ";
const SERVICE = "MonsieurGourmand.com";
const MAIL = "remi@monsieurgourmand.com";

$fpro = new \FacturationPro\FacturationPro(LOGIN,PASS,SERVICE,MAIL);
// $account = $fpro->account->get();
// dump($account);
$fpro->setFirm(36588);
// $orders = $fpro->order->getAll();
// dump($orders);
// $fpro->customer->setSort(\FacturationPro\FacturationPro::SORT_DESC);
//$fpro->customer->setWithSepa(1);
//$customers = $fpro->customer->getAll();
//dump($customers);
//$customer = $fpro->customer->get(790184);
// dump($customer);
// $fpro->quote->setSort(\FacturationPro\FacturationPro::SORT_DESC);
// $fpro->quote->setCompany("test");
// $quotes = $fpro->quote->getAll();
// dump($quotes);
$invoices = $fpro->invoice->getAll();
dump($invoices);
/** @var \FacturationPro\Entity\Invoice $invoice */
$invoice = $fpro->invoice->get(2022672);
dump($invoice);
$invoice->setItems(null);
$invoice->setPaymentMode(new \FacturationPro\Entity\PaymentMode(\FacturationPro\Entity\PaymentMode::PAYMENT_MODE_PRELEVEMENT));
$invoice->setPaidOn(new \DateTime());
dump($invoice);
dump($fpro->invoice->patch($invoice));
$invoice = $fpro->invoice->get(2022672);
dump($invoice);
//$invoice = new \FacturationPro\Entity\Invoice();

//$item = new \FacturationPro\Entity\Item();
//$item->setTitle("Détail de la facture")
//    ->setQuantity(10)
//    ->setUnitPrice(200.30)
//    ->setVat(0.20);

//$invoice->setTitle("Tentative facture via client")
//        ->setItems(array($item))
//        ->setCustomer($customer);
//$fpro->invoice->post($invoice);
//$category = new \FacturationPro\Entity\Category();
//$category->setStatus(new \FacturationPro\Entity\CategoryStatus(\FacturationPro\Entity\CategoryStatus::CATEGORY_STATUS_ACHATS_UNIQUEMENT));
//$category->setTitle("Categorie Test 3");
//$fpro->category->post($category);
//$categories = $fpro->category->getAll();
//dump($categories);