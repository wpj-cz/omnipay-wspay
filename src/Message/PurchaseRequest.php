<?php declare(strict_types = 1);

namespace Omnipay\WsPay\Message;

class PurchaseRequest extends AbstractRequest
{

	public function getData()
	{
		$data = array();
		$data['ShopID'] = $this->getShopId();
		$data['ShoppingCartID'] = $this->getShoppingCartId();
		$data['TotalAmount'] = $this->getTotalAmount();
		$data['Signature'] = $this->getSignature();
		$data['ReturnURL'] = $this->getReturnUrl();
		$data['ReturnErrorURL'] = $this->getReturnErrorURL();
		$data['CancelURL'] = $this->getCancelUrl();

		return $data;
	}

	public function sendData($data)
	{
		return $this->response = new PurchaseResponse($this, $data);
	}

}