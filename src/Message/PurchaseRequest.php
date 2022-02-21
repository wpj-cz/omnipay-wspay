<?php declare(strict_types = 1);

namespace Omnipay\WsPay\Message;

class PurchaseRequest extends AbstractRequest
{

    public function getData()
    {
        $data = array();

        $data['Version'] = $this->getVersion();
        $data['ShopID'] = $this->getShopId();
        $data['ShoppingCartID'] = $this->getShoppingCartId();
        $data['TotalAmount'] = $this->getTotalAmount();
        $data['Signature'] = $this->getSignature();
        $data['ReturnURL'] = $this->getReturnUrl();
        $data['ReturnErrorURL'] = $this->getReturnErrorURL();
        $data['CancelURL'] = $this->getCancelUrl();
        $data['IntAmount'] = $this->getIntAmount();
        $data['IntCurrency'] = $this->getIntCurrency();
        $data['Lang'] = $this->getLang();
        $data['CustomerFirstName'] = $this->getCustomerFirstName();
        $data['CustomerLastName'] = $this->getCustomerLastName();
        $data['CustomerEmail'] = $this->getCustomerEmail();
        $data['CustomerPhone'] = $this->getCustomerPhone();
        $data['CustomerCountry'] = $this->getCustomerCountry();
        $data['CustomerCity'] = $this->getCustomerCity();
        $data['CustomerAddress'] = $this->getCustomerAddress();
        $data['CustomerZIP'] = $this->getCustomerZIP();

        return $data;
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}
