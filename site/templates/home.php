<?php snippet('header') ?>

<section>
    <div class="blog-title">
        <h1>Happy <?php date_default_timezone_set('America/Vancouver'); echo date("l"); ?>! <?php echo html($page->h1()) ?></h1>
    </div>
</section>

<section class="diagonal reverse">
    <div class="diagonal-inner contain">
        <article class="blog-recent">
            <?php foreach($pages->find('writings')->children()->visible()->flip()->paginate(1) as $article): ?>
                <span class="title">Latest Article: <time datetime="<?php echo $article->date('d F Y') ?>" pubdate="pubdate"><?php echo $article->date('d F Y') ?></time></span>
                <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
                <?php echo excerpt($article->text(), 400) ?> <a href="<?php echo $article->url() ?>">Keep&nbsp;reading&nbsp;&rarr;</a>
            <?php endforeach ?>
            <a style="border-color:#fff;" class="button" href="<? echo url('writings'); ?>">Read more articles &rarr;</a>
        </article>
    </div>
</section>

<section class="diagonal">
    <div class="diagonal-inner contain">
        <img class="profile" src="<?php echo url('assets/images/ben-groulx-portrait.v2.png') ?>" alt="Ben Groulx" title="Ben Groulx" />
        <?php echo $page->introduction()->kirbytext() ?>
      </div>
</section>

<section class="diagonal reverse work">
    <?php foreach(page('projects')->children()->visible()->limit(12) as $project): ?>
    <a href="<?php echo $project->url() ?>" class="product" style="background-color:<?php echo $project->colour()->html() ?>">
        <h3 class="diagonal-inner"><?php echo $project->title()->html() ?> <span><?php echo $project->type()->html() ?></span></h3>
        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
        <?php endif ?>
    </a>
    <?php endforeach ?>
</section>

<section>
    <div class="contain">
        <?php echo $page->ethics()->kirbytext() ?>
        <a class="button" href="<? echo url('about'); ?>">Learn about how I work &rarr;</a>
        <a class="sidenote" href="<? echo url('about'); ?>">I take a firm stand when it comes to making  business decisions. You should read my ethical statement to see if we can be a right fit together.</a>
    </div>
</section>

<?php snippet('footer') ?>