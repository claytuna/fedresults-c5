<?php

namespace Application\Block\FedLearnMore;

use Core;
use Database;
use File;
use Page;
use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 550;
    protected $btTable = 'btFedLearnMore';
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btWrapperClass = 'fed-block';
    protected $btExportPageColumns = array('internalLinkCID');

    /**
     * Used for localization. If we want to localize the name/description we have to include this.
     */
    public function getBlockTypeDescription()
    {
        return t("Callout to learn more about FedResults.");
    }

    public function getBlockTypeName()
    {
        return t("Learn More - FedResults");
    }

    public function view()
    {
        $this->set('altText', $this->getAltText());
        $this->set('title', $this->getTitle());
        $this->set('btnText', $this->getBtnText());
        $this->set('linkURL', $this->getLinkURL());
    }


    public function getAltText()
    {
        return $this->altText;
    }

    public function getTitle()
    {
        return isset($this->title) ? $this->title : null;
    }

    public function getBtnText()
    {
        return $this->btnText;
    }

    public function getInternalLinkCID()
    {
        return $this->internalLinkCID;
    }

    public function getLinkURL()
    {
        if (!empty($this->externalLink)) {
            $sec = \Core::make('helper/security');

            return $sec->sanitizeURL($this->externalLink);
        } elseif (!empty($this->internalLinkCID)) {
            $linkToC = Page::getByID($this->internalLinkCID);

            return (empty($linkToC) || $linkToC->error) ? '' : Core::make('helper/navigation')->getLinkToCollection($linkToC);
        } else {
            return '';
        }
    }

    public function save($args)
    {
        $args = $args + array(
            'linkType' => 0,
            'externalLink' => '',
            'internalLinkCID' => 0,
        );
        switch (intval($args['linkType'])) {
            case 1:
                $args['externalLink'] = '';
                break;
            case 2:
                $args['internalLinkCID'] = 0;
                break;
            default:
                $args['externalLink'] = '';
                $args['internalLinkCID'] = 0;
                break;
        }
        unset($args['linkType']); //this doesn't get saved to the database (it's only for UI usage)
        parent::save($args);
    }
}
