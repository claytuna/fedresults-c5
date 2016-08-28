<?php

namespace Application\Block\FedTitleUnderline;

use Core;
use Database;
use File;
use Page;
use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 550;
    protected $btTable = 'btFedTitleUnderline';
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
        return t("Title with an underline");
    }

    public function getBlockTypeName()
    {
        return t("Title Underline - FedResults");
    }

    public function view()
    {
        $this->set('title', $this->getTitle());
        $this->set('alignmentType', $this->getAlignmentType());
    }

    public function getTitle()
    {
        return isset($this->title) ? $this->title : null;
    }

    public function getAlignmentType()
    {
        return isset($this->alignmentType) ? $this->alignmentType : 0;
    }

    public function save($args)
    {        
        parent::save($args);
    }
}
