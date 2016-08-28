<?php

namespace Application\Block\FedContactInfo;

use Core;
use Database;
use File;
use Page;
use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 650;
    protected $btTable = 'btFedContactInfo';
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btWrapperClass = 'fed-block';

    /**
     * Used for localization. If we want to localize the name/description we have to include this.
     */
    public function getBlockTypeDescription()
    {
        return t("Contact info module for phone numbers, email, and address");
    }

    public function getBlockTypeName()
    {
        return t("Contact Info - FedResults");
    }

    public function view()
    {
        $this->set('titlePhone', $this->getTitlePhone());
        $this->set('subtitlePhone', $this->getSubtitlePhone());
        $this->set('mainPhone', $this->getMainPhone());
        $this->set('fax', $this->getFax());
        $this->set('email', $this->getEmail());
        $this->set('addressTitle', $this->getAddressTitle());
        $this->set('address1', $this->getAddress1());
        $this->set('address2', $this->getAddress2());
        $this->set('address3', $this->getAddress3());
        $this->set('city', $this->getCity());
        $this->set('stateProvince', $this->getStateProvince());
        $this->set('postalCode', $this->getPostalCode());
    }

    public function getTitlePhone()
    {
        return isset($this->titlePhone) ? $this->titlePhone : null;
    }

    public function getSubtitlePhone()
    {
        return $this->subtitlePhone;
    }

    public function getMainPhone()
    {
        return isset($this->mainPhone) ? $this->mainPhone : null;
    }

    public function getFax()
    {
        return isset($this->fax) ? $this->fax : null;
    }

    public function getEmail()
    {
        return isset($this->email) ? $this->email : null;
    }

    public function getAddressTitle()
    {
        return isset($this->addressTitle) ? $this->addressTitle : null;
    }

    public function getAddress1()
    {
        return isset($this->address1) ? $this->address1 : null;
    }

    public function getAddress2()
    {
        return isset($this->address2) ? $this->address2 : null;
    }

    public function getAddress3()
    {
        return isset($this->address3) ? $this->address3 : null;
    }

    public function getCity()
    {
        return isset($this->city) ? $this->city : null;
    }

    public function getStateProvince()
    {
        return isset($this->stateProvince) ? $this->stateProvince : null;
    }

    public function getPostalCode()
    {
        return isset($this->postalCode) ? $this->postalCode : null;
    }
    

    public function save($args)
    {
        parent::save($args);
    }
}
