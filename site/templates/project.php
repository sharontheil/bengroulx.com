<?php snippet('header') ?>

<section class="header-project" style="background-color:<?php echo $page->colour() ?>">
    <div class="header-project-image"
         <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
         style="background-image: url('<?php echo $image->url() ?>');"
         <?php endif ?>
    >
    </div>
        <h1><?php echo $page->title()->html() ?></h1>
</section>

<section class="">
    <div class="contain">
        <article>
            <ul class="project-meta">
                <li>
                    <h6>Completed</h6>
                    <strong><time datetime="<?php echo $page->year()->html() ?>"><?php echo $page->year()->html() ?></time></strong>
                </li>
                <li>
                    <h6>Type</h6>
                    <strong><?php echo $page->type()->html() ?></strong>
                </li>
                <li>
                    <h6>Role</h6>
                    <strong><?php echo $page->role()->html() ?></strong>
                </li>
            </ul>
            <aside class="responsibilities">
                <h6>Responsibilities</h6>
                <ul>
                    <?php foreach($page->categories()->split() as $category): ?>
                    <li><?php echo html($category) ?></li>
                    <?php endforeach ?>
                </ul>
            </aside>
            <?php echo $page->text()->kirbytext() ?>
        </article>
    </div>
</section>

<section class="share-icons">
    <div class="contain">
        <p>Spread the love by sharing this project&hellip;</p>
        <a class="icon-tw icon-twitter" href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('by @bengroulx')?>" target="blank" title="Tweet this">Twitter</a>
        <a class="icon-go icon-google-plus" href="https://plusone.google.com/_/+1/confirm?hl=en&url=<?php echo rawurlencode ($page->url()); ?>&title=<?php echo rawurlencode($page->title()); ?>" target="blank" title="Share on Google+">Google+</a>
        <a class="icon-li icon-linkedin" href="https://linkedin.com/shareArticle?mini=true&url=<?php echo rawurlencode ($page->url()); ?>&title=<?php echo rawurlencode($page->title()); ?>" target="_blank" title="Share on LinkedIn">LinkedIn</a>
        <a class="icon-fb icon-facebook" href="http://facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook">Facebook</a>
    </div>
</section>

<?php if($next = $page->next()): ?>
<section class="project-next">
    <div class="contain">
        <a class="button" style="margin: 0;" href="<?php echo $next->url() ?>">Next project: <?php echo $next->title()->html() ?> &rarr;</a>
    </div>
</section>
<?php else: ?>
<section class="project-next">
    <div class="contain">
        <a class="button" style="margin: 0;" href="<? echo url('projects'); ?>">View all projects &rarr;</a>
    </div>
</section>
<?php endif ?>

<?php snippet('footer') ?>