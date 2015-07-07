<?php snippet('header') ?>

<!-- BLOG ARTICLE -->
<section class="main blog-post" role="main">
    <article>
        <div class="blog-title">
            <h1><?php echo $page->title()->html() ?></h1>
        </div>
        <div class="contain">
            <div class="byline">
                Written by <a href="http://plus.google.com/+BenGroulx">Ben Groulx</a> on
                <time datetime="<?php echo $page->date('d F Y') ?>" pubdate="pubdate"><?php echo $page->date('d F Y') ?></time>
            </div>
            <?php foreach($page->audio() as $audio): ?>
            <div class="listen">
                <h5>You can listen to this article read by me, also. <span>It&rsquo;s about <?php echo $page->audioTime()->html() ?> minutes long</span>.</h5>
                <audio controls="controls" preload="none" width="100%">
                    <source src="<?php echo $audio->url() ?>" type="<?php echo $audio->mime() ?>">
                </audio>
                <a title="Listen to <?php echo html($page->title()) ?>" href="http://traffic.libsyn.com/responsivewebdesign/Responsive_Web_Design_41_-_OpenTable.mp3">Download MP3</a>
            </div>
            <?php endforeach ?>            
            <?php echo $page->text()->kirbytext() ?>
        </div>
    </article>
</section>

<!-- SOCIAL SHARING -->
<section class="share-icons">
    <div class="contain">
        <p>Spread the love by sharing this article&hellip;</p>
        <a class="icon-tw icon-twitter" href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @bengroulx')?>" target="blank" title="Tweet this">Twitter</a>
        <a class="icon-go icon-google-plus" href="https://plusone.google.com/_/+1/confirm?hl=en&url=<?php echo rawurlencode ($page->url()); ?>&title=<?php echo rawurlencode($page->title()); ?>" target="blank" title="Share on Google+">Google+</a>
        <a class="icon-li icon-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo rawurlencode ($page->url()); ?>&title=<?php echo rawurlencode($page->title()); ?>" target="_blank" title="Share on LinkedIn">LinkedIn</a>
        <a class="icon-fb icon-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook">Facebook</a>
    </div>
</section>

<!-- MORE ARTICLES -->
<section>
    <div class="contain">
        <a class="button" href="<? echo url('writings'); ?>">Read more articles &rarr;</a>
    </div>
</section>

<?php snippet('footer') ?>