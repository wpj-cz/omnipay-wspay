<?php declare(strict_types=1);

namespace Omnipay\WsPay;

use Omnipay\Common\AbstractGateway;
use Omnipay\WsPay\Message\CompletePurchaseRequest;
use Omnipay\WsPay\Message\PurchaseRequest;

/**
 * @method \Omnipay\Common\Message\RequestInterface authorize(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface capture(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface refund(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface void(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface createCard(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface updateCard(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = array())
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'WsPay';
    }

    public function getDefaultParameters()
    {
        return array(
            'Version'    => '2.0',
            'ShopID'    => '',
            'SecretKey' => '',
            'testMode'  => true,
        );
    }

    public function setVersion(string $value): string
    {
        return $this->setParameter('Version', $value);
    }

    public function getVersion(): string
    {
        return $this->getParameter('Version');
    }

    public function getShopId()
    {
        return $this->getParameter('ShopID');
    }

    public function setShopId($value)
    {
        return $this->setParameter('ShopID', $value);
    }

    public function getSecretKey()
    {
        return $this->getParameter('SecretKey');
    }

    public function setSecretKey(string $value)
    {
        return $this->setParameter('SecretKey', $value);
    }

    public function getReturnUrl()
    {
        return $this->getParameter('ReturnURL');
    }

    public function setReturnUrl(string $value)
    {
        return $this->setParameter('ReturnURL', $value);
    }

    public function setReturnErrorURL(string $value)
    {
        return $this->setParameter('ReturnErrorURL', $value);
    }

    public function setCancelURL(string $value)
    {
        return $this->setParameter('CancelURL', $value);
    }

    public function getShoppingCartId()
    {
        return $this->getParameter('ShoppingCartID');
    }

    public function setShoppingCartId(string $value)
    {
        return $this->setParameter('ShoppingCartID', $value);
    }

    public function getSignature()
    {
        return $this->getParameter('Signature');
    }

    public function setSignature(string $shopId, string $secretKey, string $shoppingCartId, string $amount)
    {
        $formatedAmount = $this->getFormatedPrice($amount);
        $signature      = hash('sha512', $shopId.$secretKey.$shoppingCartId.$secretKey.$formatedAmount.$secretKey);

        return $this->setParameter('Signature', $signature);
    }

    public function getTotalAmount()
    {
        return $this->getParameter('TotalAmount');
    }

    public function setTotalAmount(string $value)
    {
        return $this->setParameter('TotalAmount', $value);
    }

    public function getLang()
    {
        return $this->getParameter('Lang');
    }

    public function setLang(string $value)
    {
        return $this->setParameter('Lang', $value);
    }

    public function getIntAmount()
    {
        return $this->getParameter('IntAmount');
    }

    public function setIntAmount(string $value)
    {
        return $this->setParameter('IntAmount', $value);
    }

    public function getIntCurrency()
    {
        return $this->getParameter('IntCurrency');
    }

    public function setIntCurrency(string $value)
    {
        return $this->setParameter('IntCurrency', $value);
    }

    public function setPaymentPlan(string $value)
    {
        return $this->setParameter('PaymentPlan', $value);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest(PurchaseRequest::class, $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        $parameters = count($parameters) < 1 ? $this->httpRequest->request->all() : $parameters;
        return $this->createRequest(CompletePurchaseRequest::class, $parameters);
    }

    private function getFormatedPrice(string $amount)
    {
        return str_replace(",", "", $amount);
    }

    public function getCustomerFirstName()
    {
        return $this->getParameter('CustomerFirstName');
    }

    public function setCustomerFirstName($value)
    {
        return $this->setParameter('CustomerFirstName', $value);
    }

    public function getCustomerLastName()
    {
        return $this->getParameter('CustomerLastName');
    }

    public function setCustomerLastName($value)
    {
        return $this->setParameter('CustomerLastName', $value);
    }

    public function getCustomerEmail()
    {
        return $this->getParameter('CustomerEmail');
    }

    public function setCustomerEmail($value)
    {
        return $this->setParameter('CustomerEmail', $value);
    }

    public function getCustomerPhone()
    {
        return $this->getParameter('CustomerPhone');
    }

    public function setCustomerPhone($value)
    {
        return $this->setParameter('CustomerPhone', $value);
    }

    public function getCustomerCountry()
    {
        return $this->getParameter('CustomerCountry');
    }

    public function setCustomerCountry($value)
    {
        return $this->setParameter('CustomerCountry', $value);
    }

    public function getCustomerCity()
    {
        return $this->getParameter('CustomerCity');
    }

    public function setCustomerCity($value)
    {
        return $this->setParameter('CustomerCity', $value);
    }

    public function getCustomerAddress()
    {
        return $this->getParameter('CustomerAddress');
    }

    public function setCustomerAddress($value)
    {
        return $this->setParameter('CustomerAddress', $value);
    }

    public function getCustomerZIP()
    {
        return $this->getParameter('CustomerZIP');
    }

    public function setCustomerZIP($value)
    {
        return $this->setParameter('CustomerZIP', $value);
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface authorize(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface capture(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface refund(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface void(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface createCard(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface updateCard(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = array())
    }
}
