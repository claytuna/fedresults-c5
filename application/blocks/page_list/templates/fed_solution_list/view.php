<?php
defined('C5_EXECUTE') or die("Access Denied.");
$th = Loader::helper('text');
$c = Page::getCurrentPage();
$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
?>

<?php if ( $c->isEditMode() && $controller->isBlockEmpty()) { ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty FedResults Page List Block.')?></div>
<?php } else { ?>

<div class="fed-solution-list-group">
  <div class="fed-solution-list-group__list">
    <?php if (isset($pageListTitle) && $pageListTitle): ?>
        <!--div class="fed-solution-list__title">
            <p><?php echo h($pageListTitle)?></p>
        </div-->
    <?php endif; ?>

    <?php if (isset($rssUrl) && $rssUrl): ?>
        <a href="<?php echo $rssUrl ?>" target="_blank" class="ccm-block-page-list-rss-feed"><i class="fa fa-rss"></i></a>
    <?php endif; ?>

  <div class="row">
    <?php
    $includeEntryText = false;
    if (
        (isset($includeName) && $includeName)
        ||
        (isset($includeDescription) && $includeDescription)
        ||
        (isset($useButtonForLink) && $useButtonForLink)
    ) {
        $includeEntryText = true;
    }

    foreach ($pages as $idx=>$page):

		// Prepare data for each page being listed...
        $entryClasses = 'fed-solution-list';
		$title = $th->entities($page->getCollectionName());
		$url = ($page->getCollectionPointerExternalLink() != '') ? $page->getCollectionPointerExternalLink() : $nh->getLinkToCollection($page);
		$target = ($page->getCollectionPointerExternalLink() != '' && $page->openCollectionPointerExternalLinkInNewWindow()) ? '_blank' : $page->getAttribute('nav_target');
		$target = empty($target) ? '_self' : $target;
		$description = $page->getCollectionDescription();
		$description = $controller->truncateSummaries ? $th->wordSafeShortText($description, $controller->truncateChars) : $description;
		$description = $th->entities($description);
        $thumbnail = false;
        if ($displayThumbnail) {
            $thumbnail = $page->getAttribute('thumbnail');
        }
        if (is_object($thumbnail) && $includeEntryText) {
            $entryClasses = 'fed-solution-list fed-solution-list--thumbnail';
        }

		//Other useful page data...


		//$last_edited_by = $page->getVersionObject()->getVersionAuthorUserName();

		//$original_author = Page::getByID($page->getCollectionID(), 1)->getVersionObject()->getVersionAuthorUserName();

		/* CUSTOM ATTRIBUTE EXAMPLES:
		 * $example_value = $page->getAttribute('example_attribute_handle');
		 *
		 * HOW TO USE IMAGE ATTRIBUTES:
		 * 1) Uncomment the "$ih = Loader::helper('image');" line up top.
		 * 2) Put in some code here like the following 2 lines:
		 *      $img = $page->getAttribute('example_image_attribute_handle');
		 *      $thumb = $ih->getThumbnail($img, 64, 9999, false);
		 *    (Replace "64" with max width, "9999" with max height. The "9999" effectively means "no maximum size" for that particular dimension.)
		 *    (Change the last argument from false to true if you want thumbnails cropped.)
		 * 3) Output the image tag below like this:
		 *		<img src="<?php echo $thumb->src ?>" width="<?php echo $thumb->width ?>" height="<?php echo $thumb->height ?>" alt="" />
		 *
		 * ~OR~ IF YOU DO NOT WANT IMAGES TO BE RESIZED:
		 * 1) Put in some code here like the following 2 lines:
		 * 	    $img_src = $img->getRelativePath();
		 *      $img_width = $img->getAttribute('width');
		 *      $img_height = $img->getAttribute('height');
		 * 2) Output the image tag below like this:
		 * 	    <img src="<?php echo $img_src ?>" width="<?php echo $img_width ?>" height="<?php echo $img_height ?>" alt="" />
		 */

		/* End data preparation. */

		/* The HTML from here through "endforeach" is repeated for every item in the list... */ ?>

    <?php if($idx !== 0 && $idx % 4 == 0) { echo '</div><div class="row">';}?>

      <div class="col-xs-12 col-sm-3">
        <div class="<?php echo $entryClasses?>">

        <?php if (is_object($thumbnail)): ?>
            <a href="<?php echo $url ?>" class="fed-solution-list__thumbnail" target="<?php echo $target ?>">
                <?php
                $img = Core::make('html/image', array($thumbnail));
                $tag = $img->getTag();
                $tag->addClass('img-responsive');
                print $tag;
                ?>
            </a>
        <?php endif; ?>

        <?php if ($includeEntryText): ?>
            <div class="fed-solution-list__text">
                <div class="fed-solution-list__content">
                <?php if (isset($includeName) && $includeName): ?>
                    <a class="fed-solution-list__title" href="<?php echo $url ?>" target="<?php echo $target ?>">
                      <?php echo $title ?>
                    </a>
                <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        </div>
      </div>

	<?php endforeach; ?>
    </div><!-- end .row -->

    <?php if (count($pages) == 0): ?>
        <div class="fed-solution-list__no-pages"><?php echo h($noResultsMessage)?></div>
    <?php endif;?>


    <?php if ($showPagination): ?>
        <?php echo $pagination;?>
    <?php endif; ?>
  </div><!-- end .fed-solution-list-group__list -->
</div><!-- end .fed-solution-list-group -->




<?php } ?>
