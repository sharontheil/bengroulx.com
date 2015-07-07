<?php snippet('header') ?>

<section>
    <div class="contain">
        <h1><?php echo $page->h1()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
    </div>
</section>

<?php snippet('footer') ?>