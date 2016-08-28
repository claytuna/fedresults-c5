<?php

namespace Application\Block\FedSplash;

use Core;
use Database;
use File;
use Page;
use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 550;
    protected $btTable = 'btFedSplash';
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
        return t("Splash page title with a subtitle.");
    }

    public function getBlockTypeName()
    {
        return t("Splash Title - FedResults");
    }

    public function view()
    {
        $this->set('altText', $this->getAltText());
        $this->set('title', $this->getTitle());
    }


    public function getAltText()
    {
        return $this->altText;
    }

    public function getTitle()
    {
        return isset($this->title) ? $this->title : null;
    }

    public function save($args)
    {
        parent::save($args);
    }
}
