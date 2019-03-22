<?php

namespace DigiTickets\Cardlink\Messages;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Common\Message\ResponseInterface;

class PurchaseRequest extends AbstractRequest
{
    public function getMerchantId()
    {
        return $this->getParameter('mid');
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('mid', $value);
    }

    public function getSharedSecret()
    {
        return $this->getParameter('sharedSecret');
    }

    public function setSharedSecret($value)
    {
        return $this->setParameter('sharedSecret', $value);
    }

    public function getLanguage()
    {
        return $this->getParameter('language');
    }

    public function setLanguage($value)
    {
        return $this->setParameter('language', $value);
    }

    public function getData()
    {
        // @TODO: Implement getData() method.
    }

    public function sendData($data)
    {
        // @TODO: Implement sendData() method.
        $responseTBC = null;
        return $this->response = new PurchaseResponse($this, $responseTBC);
    }
}