<?php snippet('header') ?>

<section class="reverse">
    <div class="blog-recent">
        <article class="contain">
            <?php foreach($page->children()->visible()->flip()->paginate(1) as $article): ?>
            <span class="title">Latest Article: <time datetime="<?php echo $article->date('d F Y') ?>" pubdate="pubdate"><?php echo $article->date('d F Y') ?></time></span>
                <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
                <?php echo excerpt($article->text(), 320) ?> <a href="<?php echo $article->url() ?>">Keep&nbsp;reading&nbsp;&rarr;</a>
            <?php endforeach ?>
        </article>
    </div>
</section>

<section style="padding-top:0;">
    <div class="row">
        <div class="blog-list blog-intro half-block">
            <div class="contain">
                <h2>Most Popular</h2>
                <ul>
                    <li>&#127775;
                        <a href="http://bengroulx.com/writings/privacy-and-objectification">On the Topic of Privacy and Objectification</a>
                        <span><time datetime="01 September 2014" pubdate="pubdate">01 September 2014</time></span>
                    </li>
                    <li>&#127775;
                        <a href="http://bengroulx.com/writings/victory">Victory Is More Than Winning </a>
                        <span><time datetime="24 June 2013" pubdate="pubdate">24 June 2013</time></span>
                    </li>
                    <li>&#127775;
                        <a href="http://bengroulx.com/writings/twelve-productivity-tools-designers">12 Productivity Tools &amp; Services for Web Designers</a>
                        <span><time datetime="28 April 2015" pubdate="pubdate">28 April 2015</time></span>
                    </li>
                    <li>&#127775;
                        <a href="http://bengroulx.com/writings/css-unicode-characters">Using Unicode Characters In Your Stylesheets</a>
                        <span><time datetime="03 January 2014" pubdate="pubdate">03 January 2014</time></span>
                    </li>
                    <li>&#127775;
                        <a href="http://bengroulx.com/writings/how-to-work-better-remotely">How to Work Better Remotely</a>
                        <span><time datetime="12 November 2014" pubdate="pubdate">12 November 2014</time></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="blog-list blog-intro half-block">
            <div class="contain">
                <h2>Thoughts On Design</h2>
                <ul>
                    <li>&#128640;
                        <a href="http://bengroulx.com/writings/giving-and-receiving-better-feedback-in-the-design-process">Giving and Receiving Better Feedback In the Design Process</a>
                        <span><time datetime="17 October 2014" pubdate="pubdate">17 October 2014</time></span>
                    </li>
                    <li>&#128640;
                        <a href="http://bengroulx.com/writings/death-by-committee">Death By Committee</a>
                        <span><time datetime="30 August 2013" pubdate="pubdate">30 August 2013</time></span>
                    </li>
                    <li>&#128640;
                        <a href="http://bengroulx.com/writings/wireframing-process-for-designers-and-clients">Wireframing: A Process for Designers &amp; Clients</a>
                        <span><time datetime="21 March 2014" pubdate="pubdate">21 March 2014</time></span>
                    </li>
                    <li>&#128640;
                        <a href="http://bengroulx.com/writings/i-dont-know-anything-about-design">“I Don’t Know Anything About Design”</a>
                        <span><time datetime="24 June 2015" pubdate="pubdate">24 June 2015</time></span>
                    </li>
                    <li>&#128640;
                        <a href="http://bengroulx.com/writings/value-and-importance-of-typography-on-the-web">The Value and Importance of Typography On the Web</a>
                        <span><time datetime="26 November 2014" pubdate="pubdate">26 November 2014</time></span>
                    </li>
                </ul>
            </div>
        </div>    
    </div>
    <div class="blog-list blog-all">
        <div class="contain">
            <h2>All Articles</h2>
            <ul>
                <?php foreach($page->children()->visible()->flip() as $article): ?>
                <li>
                    <a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a>
                    <span><time datetime="<?php echo $article->date('d F Y') ?>" pubdate="pubdate"><?php echo $article->date('d F Y') ?></time></span>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</section>

<?php snippet('footer') ?>