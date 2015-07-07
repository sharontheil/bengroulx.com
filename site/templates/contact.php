<?php snippet('header') ?>

<section class="connect">
    <div class="contain">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
        <br/>
        <p class="bigtext">
            <a href="mailto:&#098;&#101;&#110;&#064;&#098;&#101;&#110;&#103;&#114;&#111;&#117;&#108;&#120;&#046;&#099;&#111;&#109;">&#098;&#101;&#110;&#064;&#098;&#101;&#110;&#103;&#114;&#111;&#117;&#108;&#120;&#046;&#099;&#111;&#109;</a>
            <span>Expect a reply within 1&ndash;3 days</span>
        </p>
    </div>
    <div class="map">
        <a class="map-pemberton" href="http://pemberton.ca">Pemberton</a>
        <a class="map-vancouver" href="http://vancouver.ca">Vancouver</a>
    </div>
</section>

<?php snippet('footer') ?>