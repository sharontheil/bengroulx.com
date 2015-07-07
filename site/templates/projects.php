<?php snippet('header') ?>

<section class="main">
    <div class="contain">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->textmain()->kirbytext() ?>
    </div>
</section>

<section class="diagonal reverse work">
    <?php foreach(page('projects')->children()->visible()->filterBy('tags', 'case study', ',') as $project): ?>
    <a href="<?php echo $project->url() ?>" class="product" style="background-color:<?php echo $project->colour()->html() ?>">
        <h3 class="diagonal-inner"><?php echo $project->title()->html() ?> <span><?php echo $project->type()->html() ?></span></h3>
        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" />
        <?php endif ?>
    </a>
    <?php endforeach ?>
</section>

<section>
    <div class="contain">
        <?php echo $page->textmore()->kirbytext() ?>
        <ul class="project-list">
            <?php foreach(page('projects')->children()->visible()->filterBy('tags', 'more', ',') as $project): ?>
            <li>
                <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
                <a class="project-image" href="<?php echo $project->url() ?>" style="background-image: url('<?php echo $image->url() ?>');"><?php echo $project->title()->html() ?></a>
                <?php endif ?>
                <a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a>
                <span class="title"><?php echo $project->type()->html() ?></span>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>

<section class="diagonal" style="background-color:#eee;padding-bottom:6% !important;">
    <div class="diagonal-inner contain">
        <?php echo $page->textnotshipped()->kirbytext() ?>
        <ul class="project-list">
            <?php foreach(page('projects')->children()->invisible() as $project): ?>
            <li>
                <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
                <a class="project-image" href="<?php echo $project->url() ?>" style="background-image: url('<?php echo $image->url() ?>');"><?php echo $project->title()->html() ?></a>
                <?php endif ?>
                <a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a>
                <span class="title"><?php echo $project->type()->html() ?></span>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>

<section class="diagonal">
    <div class="diagonal-inner contain">
        <?php echo $page->textarchived()->kirbytext() ?>
        <ul class="project-list">
            <?php foreach(page('projects')->children()->visible()->filterBy('tags', 'archived', ',') as $project): ?>
            <li>
                <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
                <a class="project-image" href="<?php echo $project->url() ?>" style="background-image: url('<?php echo $image->url() ?>');"><?php echo $project->title()->html() ?></a>
                <?php endif ?>
                <a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a>
                <span class="title"><?php echo $project->type()->html() ?></span>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>

<?php snippet('footer') ?>