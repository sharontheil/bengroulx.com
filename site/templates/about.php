<?php snippet('header') ?>

<section class="diagonal header-about">
    <div class="diagonal-inner blog-title">
        <h1><?php echo html($page->h1()) ?></h1>
    </div>
</section>


<section class="diagonal">
    <div class="diagonal-inner contain">
        <?php echo $page->background1()->kirbytext() ?>
        <div style="text-align:center;">
            <a class="icon-tw icon-twitter" href="https://twitter.com/bengroulx" title="Ben Groulx on Twitter">Twitter</a>&emsp;
            <a class="icon-go icon-google-plus" href="https://plus.google.com/+BenGroulx/" title="Ben Groulx on Google+">Google+</a>&emsp;
            <a class="icon-li icon-linkedin" href="https://linkedin.com/in/bengroulx" title="Ben Groulx on LinkedIn">LinkedIn</a>&emsp;
            <a class="icon-fb icon-instagram" href="https://instagram.com/bengroulx" title="Ben Groulx on Facebook">Instagram</a>
        </div>
    </div>
</section>

<section class="diagonal reverse">
    <div class="diagonal-inner row">
        <div class="half-block">
            <div class="contain">
                <div class="tag-cloud">
                    <a class="tag" href="http://linkedin.com/skills/skill/Web_Design">Web Design</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Web_Development">Web Development</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Brand_Development">Brand Development</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Concept_Development">Concept Development</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Design_Strategy">Design Strategy</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/User_Interface_Design">User Interface</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/User_Experience_Design">User Experience Design</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/User_Flows">User Flows</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Prototyping">Prototyping</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Front-end_Coding">Front-End Coding</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Mobile_Web_Design">Mobile Web Design</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Responsive_Web_Design">Responsive Web Design</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Information_Architecture">Information Architecture</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Wireframing">Wireframing</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Content_Strategy">Content Strategy</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Copywriting">Content Writing</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Email_Marketing">Email Marketing</a>
                    <a class="tag" href="http://linkedin.com/skills/skill/Social_Media_Marketing">Social Media Marketing</a>
                </div>
            </div>
        </div>
        <div class="half-block">
            <div class="contain">
                <?php echo $page->background2()->kirbytext() ?>
            </div>
        </div>
    </div>
</section>

<section class="diagonal faq">
    <div class="diagonal-inner contain">
        <?php echo $page->faq()->kirbytext() ?>
    </div>
</section>

<section class="diagonal reverse">
    <div class="diagonal-inner contain">
        <?php echo $page->ethics()->kirbytext() ?>
    </div>
</section>

<section class="diagonal" id="colophon">
    <div class="diagonal-inner contain">
        <?php echo $page->colophon()->kirbytext() ?>
        <p>This site and its contents, unless otherwise stated, are <?php echo $site->copyright() ?> I value web standards, and if something looks wrong or broken, please <a href="<? echo url('contact'); ?>">connect with me</a>.</p>
    </div>
</section>

<?php snippet('footer') ?>