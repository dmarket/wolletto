<?php

namespace Platron\Connectum\services\order_authorize;

use Platron\Connectum\data_objects\CardData;
use Platron\Connectum\data_objects\ClientData;
use Platron\Connectum\data_objects\DynamicDescriptorData;
use Platron\Connectum\data_objects\LocationData;
use Platron\Connectum\data_objects\OptionsData;
use Platron\Connectum\services\BasePostRequest;

class OrderAuthorizeRequest extends BasePostRequest {
    
    /** @var string */
    protected $amount;
    /** @var string */
    protected $currency;
    /** @var string */
    protected $pan;
    /** @var CardData */
    protected $card;
    /** @var LocationData */
    protected $location;
    /** @var string */
    protected $merchant_order_id;
    /** @var int */
    protected $segment;
    /** @var string */
    protected $description;
    /** @var array */
    protected $custom_fields;
    /** @var ClientData */
    protected $client;
    /** @var OptionsData */
    protected $options;
    /** @var DynamicDescriptorData */
    protected $dynamic_descritor;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return $this->getBaseUrl().'/orders/authorize';
    }
    
    /**
     * @param float $amount
     * @param string $currency
     */
    public function __construct($amount, $currency, $pan) {
        $this->amount = (string)$amount;
        $this->currency = $currency;
        $this->pan = $pan;
    }
    
    /**
     * Set card | Required
     * @param CardData $card
     * @return $this
     */
    public function setCard(CardData $card){
        $this->card = $card;
        return $this;
    }
    
    /**
     * Set location | Required
     * @param LocationData $location
     * @return $this
     */
    public function setLocation(LocationData $location){
        $this->location = $location;
        return $this;
    }
    
    /**
     * Set merchant order id
     * @param string $id
     * @return self
     */
    public function setOrder($id){
        $this->merchant_order_id = $id;
        return $this;
    }
    
    /**
     * Set segment
     * @param int $segment
     * @return self
     */
    public function setSegment($segment){
        $this->segment = $segment;
        return $this;
    }
    
    /**
     * Set description
     * @param string $description
     * @return self
     */
    public function setDescription($description){
        $this->description = $description;
        return $this;
    }
    
    /**
     * Set custom fields
     * @param array $fields
     * @return self
     */
    public function setCustomFields($fields){
        $this->custom_fields = $fields;
        return $this;
    }
    
    /**
     * Set client
     * @param ClientData $client
     * @return self
     */
    public function setClient(ClientData $client){
        $this->client = $client;
        return $this;
    }

    /**
     * Set options
     * @param OptionsData $options
     * @return self
     */
    public function setOptions(OptionsData $options){
        $this->options = $options;
        return $this;
    }

    /**
     * Set Dynamic descriptor
     * @param DynamicDescriptorData $dynamicDescriptor
     * @return self
     */
    public function setDynamicDescriptor(DynamicDescriptorData $dynamicDescriptor){
        $this->dynamic_descritor = $dynamicDescriptor;
        return $this;
    }
}
