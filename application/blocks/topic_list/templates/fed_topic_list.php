<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="fed-topic-list">

    <div class="fed-topic-list__header">
        <p><?php echo h($title); ?></p>
    </div>

    <?php
    if ($mode == 'S' && is_object($tree)) {
        $node = $tree->getRootTreeNodeObject();
        $node->populateChildren();
        if (is_object($node)) {
            if (!isset($selectedTopicID)) {
                $selectedTopicID = null;
            }
            $walk = function ($node) use (&$walk, &$view, $selectedTopicID) {
                ?><ul class="fed-topic-list__list"><?php
                foreach ($node->getChildNodes() as $topic) { ?>
                    <li>
                    <?php
                    if ($topic instanceof \Concrete\Core\Tree\Node\Type\TopicCategory) {
                        ?><?php echo $topic->getTreeNodeDisplayName(); ?>
                    <?php
                    } else {
                        ?><a href="<?php echo $view->controller->getTopicLink($topic); ?>" <?php
                        if (isset($selectedTopicID) && $selectedTopicID == $topic->getTreeNodeID()) {
                            ?> class="fed-topic-list__topic--selected"<?php
                        }
                        ?>><?php echo $topic->getTreeNodeDisplayName(); ?></a><?php
                    }
                    if (count($topic->getChildNodes())) {
                        $walk($topic);
                    } ?>
                    </li>
                    <?php
                }
                ?></ul><?php
            };
            $walk($node);
        }
    }

    if ($mode == 'P') {
        if (count($topics)) {
            ?><ul class="ccm-block-topic-list-page-topics"><?php
            foreach ($topics as $topic) {
                ?><li><a href="<?php echo $view->controller->getTopicLink($topic); ?>"><?php echo $topic->getTreeNodeDisplayName(); ?></a></li><?php
            }
            ?></ul><?php
        } else {
            echo t('No topics.');
        }
    }
    ?>

</div>
