<?php  defined('C5_EXECUTE') or die('Access Denied.'); ?>

<style>
<?php 
if ($feedTheme == 'dark') {
    $feedTitleColor = '#000000';
    $nameTextColor = '#000000';
    $feedTextColor = '#000000';
    $feedLinkColor = '#868686';
    $feedLinkHoverColor = '#46a3d9';
    $timePostedColor = '#46a3d9';
    $tweetDividerColor = '#000000';
} elseif ($feedTheme == 'light') {
    $feedTitleColor = '#FFF';
    $nameTextColor = '#FFF';
    $feedTextColor = '#D5D5D5';
    $feedLinkColor = '#B1B1B1';
    $feedLinkHoverColor = '#73CBFF';
    $timePostedColor = '#73CBFF';
    $tweetDividerColor = '#FFF';
}
?>

#twitter-feed-container-<?php  if ($userName) { echo $userName; } ?> {
    max-width: <?php  if ($maxWidth) { echo $maxWidth . 'px'; } else { echo '520px'; } ?>;
    word-wrap: break-word;
    <?php  if ($feedBackgroundColor) { ?>
    background: <?php  echo $feedBackgroundColor; ?>;
    <?php  } ?>
    <?php  if ($feedPadding) { ?>
    padding: <?php  echo $feedPadding . 'px' ?>;
    <?php  } ?>
}
#twitter-feed-container-<?php  if ($userName) { echo $userName; } ?> a {
    text-decoration: none;
}
#twitter-feed-container-<?php  if ($userName) { echo $userName; } ?> h2 {
    margin: 0 0 15px 0;
    <?php  if ($feedTitle) { ?>
    font-size: <?php  if ($feedTitleTextSize) { echo $feedTitleTextSize . 'px'; } else { echo '18px'; } ?>;
    <?php  } ?>
    <?php  if ($feedTitleColor) { ?>
    color: <?php  echo $feedTitleColor; ?>;
    <?php  } ?>
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .user a img {
    margin-right: 20px;
    margin-bottom: 20px;
    float: left;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .user div[title="Verified Account"] {
    display: inline;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .media img {
    max-width: 100%;
    height: auto;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .media {
    margin-top: 0;
    <?php 
    if ($showUser && $tweetDivider) {
        echo 'margin-bottom: 20px;';
    } else {
        echo 'margin-bottom: 30px;';
    }
    ?>
    clear: both;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .user span:nth-child(2) {
    font-size: <?php  if ($nameTextSize) { echo $nameTextSize . 'px'; } else { echo '16px'; } ?>;
    <?php  if ($nameTextColor) { ?>
    color: <?php  echo $nameTextColor; ?>;
    <?php  } ?>
    font-weight: bold;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .user span:nth-child(3) {
    font-size: <?php  if ($atNameTextSize) { echo $atNameTextSize . 'px'; } else { echo '14px'; } ?>;
    <?php  if ($feedLinkColor) { ?>
    color: <?php  echo $feedLinkColor; ?>;
    <?php  } ?>
    font-weight: bold;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .user span:nth-child(3):hover {
    <?php  if ($feedLinkHoverColor) { ?>
    color: <?php  echo $feedLinkHoverColor; ?>;
    <?php  } ?>
    -webkit-transition: color 250ms;
    -o-transition: color 250ms;
    transition: color 250ms;
    font-weight: bold;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> ul {
    margin: 0;
    padding: 0;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> li {
    list-style: none;
    margin-bottom: 20px;
    <?php  if ($tweetDivider) { ?>
    border-top: 1px solid <?php  if ($tweetDividerColor) { echo $tweetDividerColor; } ?>;
    <?php  } ?>
    <?php  if (($showUser && $tweetDivider) || $tweetDivider) { ?>
    padding-top: 20px;
    <?php  } ?>
    clear: both;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> li:first-child {
    border-top: none;
    <?php  if (($showUser && $tweetDivider) || $tweetDivider) { ?>
    padding-top: 10px;
    <?php  } ?>
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> p {
    color: <?php  if ($feedTextColor) { echo $feedTextColor; } ?>;
    margin: 0 0 10px;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .tweet {
    <?php 
    if ($showUser) {
        echo 'margin-bottom: 8px;';
    } else {
        echo 'margin-bottom: 0px;';
    }
    ?>
    font-size: <?php  if ($feedTextSize) { echo $feedTextSize . 'px'; } else { echo '14px'; } ?>;
    line-height: 1.35;
}
#twitter-feed-container-<?php  if ($userName) { echo $userName; } ?> #twitter-feed-<?php  if ($userName) { echo $userName; } ?> a {
    <?php  if ($feedLinkColor) { ?>
    color: <?php  echo $feedLinkColor; ?>;
    <?php  } ?>
}
#twitter-feed-container-<?php  if ($userName) { echo $userName; } ?> #twitter-feed-<?php  if ($userName) { echo $userName; } ?> a:hover {
    <?php  if ($feedLinkHoverColor) { ?>
    color: <?php  echo $feedLinkHoverColor; ?>;
    <?php  } ?>
    -webkit-transition: color 250ms;
    -o-transition: color 250ms;
    transition: color 250ms;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .tweet img {
    display: none;
}
#twitter-feed-container-<?php  if ($userName) { echo $userName; } ?> #twitter-feed-<?php  if ($userName) { echo $userName; } ?> .timePosted a {
    font-size: <?php  if ($timePostedTextSize) { echo $timePostedTextSize . 'px'; } else { echo '12px'; } ?>;
    <?php  if ($timePostedColor) { ?>
    color: <?php  echo $timePostedColor; ?>;
    <?php  } ?>
    margin-top: 10px;
    margin-bottom: 7px;
}
#twitter-feed-container-<?php  if ($userName) { echo $userName; } ?> #twitter-feed-<?php  if ($userName) { echo $userName; } ?> .timePosted {
    <?php  if ($showUser) { ?>
    clear: both;
    <?php  } ?>
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .interact {
    font-size: <?php  if ($interactTextSize) { echo $interactTextSize . 'px'; } else { echo '12px'; } ?>;
    <?php  if ($showTime == 'false') { ?>
    margin-top: 10px;
    <?php  } ?>
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .interact a {
    margin-left: 10px;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .interact a:first-child {
    margin-left: 0px;
}
#twitter-feed-<?php  if ($userName) { echo $userName; } ?> .interact {
    <?php  if ($showUser && !$showTime) { ?>
    clear: both;
    <?php  } ?>
}
</style>

<div id="twitter-feed-container-<?php  if ($userName) { echo $userName; } ?>">
    <?php  if ($feedTitle) { ?>
    <h2><?php  echo $feedTitle; ?></h2>
    <?php  } ?>
    <div id="twitter-feed-<?php  if ($userName) { echo $userName; } ?>"></div>
</div>

<script>
(function() {
    var config_<?php  if ($userName) { echo $userName; } ?> = {
        "profile": {"screenName": '<?php  if ($userName) { echo $userName; } ?>'},
        "domId":'twitter-feed-<?php  if ($userName) { echo $userName; } ?>',
        "maxTweets":<?php  if ($maxTweets) { echo $maxTweets; } ?>,
        <?php  if ($showUser) { ?>
        "showUser": true,
        <?php  } else { ?>
        "showUser": false,
        <?php  } ?>
        <?php  if ($showTime) { ?>
        "showTime": true,
        <?php  } else { ?>
        "showTime": false,
        <?php  } ?>
        <?php  if ($showRetweet) { ?>
        "showRetweet": true,
        <?php  } else { ?>
        "showRetweet": false,
        <?php  } ?>
        <?php  if ($showInteraction) { ?>
        "showInteraction": true,
        <?php  } else { ?>
        "showInteraction": false,
        <?php  } ?>
        <?php  if ($showImages) { ?>
        "showImages": true,
        <?php  } else { ?>
        "showImages": false,
        <?php  } ?>
        <?php  if ($linksInNewWindow) { ?>
        "linksInNewWindow": true,
        <?php  } else { ?>
        "linksInNewWindow": false,
        <?php  } ?>
    };

    function defer() {
        if (typeof twitterFetcher === 'object') {
            twitterFetcher.fetch(config_<?php  if ($userName) { echo $userName; } ?>);
        } else {
            setTimeout(function() { defer(); }, 50);
        }
    }

    defer();
})();
</script>
