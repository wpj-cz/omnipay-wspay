<?php


namespace Omnipay\WsPay\Message;


use Omnipay\Common\Message\AbstractResponse;

class CompletePurchaseResponse extends AbstractResponse
{
    public function isSuccessful()
    {
        return isset($this->data['Success']) && $this->data['Success'] == '1';
    }

    public function getTransactionId()
    {
        return isset($this->data['WsPayOrderId']) ? $this->data['WsPayOrderId'] : null;
    }

    public function getTransactionReference()
    {
        return isset($this->data['ShoppingCartID']) ? $this->data['ShoppingCartID'] : null;
    }

    public function getMessage()
    {
        return isset($this->data['Success']) ? $this->data['Success'] : null;
    }

    public function getCreditCardNumber()
    {
        return isset($this->data['CreditCardNumber']) ? $this->data['CreditCardNumber'] : null;
    }
}
