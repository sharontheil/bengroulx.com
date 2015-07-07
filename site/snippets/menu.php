<!-- MAIN NAVIGATION -->
<a href="#nav" class="nav-trigger reverse">Menu 
    <span class="nav-icon"></span>
    <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
        <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
    </svg>
</a>

<div id="nav" class="nav reverse">
    <div class="navigation-wrapper row">
        <div class="half-block">
            <ul class="primary-nav">
                <?php foreach($pages->visible() as $page): ?>
                <li><a href="<?php echo $page->url() ?>"><?php echo $page->title()->html() ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="half-block">
            <ul class="contact-info">
                <li>
                    <h3 class="title">Social</h3>
                    <a class="icon-tw icon-twitter" href="https://twitter.com/bengroulx" title="Ben Groulx on Twitter">Twitter</a><br/>
                    <a class="icon-fb icon-instagram" href="https://instagram.com/bengroulx" title="Ben Groulx on Facebook">Instagram</a><br/>
                    <a class="icon-go icon-google-plus" href="https://plus.google.com/+BenGroulx/" title="Ben Groulx on Google+">Google+</a><br/>
                    <a class="icon-li icon-linkedin" href="https://linkedin.com/in/bengroulx" title="Ben Groulx on LinkedIn">LinkedIn</a><br/>
                </li>
                <li>
                    <h3 class="title">Email</h3>
                    <a href="mailto:&#098;&#101;&#110;&#064;&#098;&#101;&#110;&#103;&#114;&#111;&#117;&#108;&#120;&#046;&#099;&#111;&#109;">&#098;&#101;&#110;&#064;&#098;&#101;&#110;&#103;&#114;&#111;&#117;&#108;&#120;&#046;&#099;&#111;&#109;</a>
                </li>
                <li>
                    <h3 class="title">Crystal</h3>
                    <a href="https://crystalknows.com/profiles?id=1588904">Ben Groulx</a>
                </li>
                <li>
                    <h3 class="title">Skype</h3>
                    <a href="skype:iaresven?userinfo">iaresven</a>
                </li>
            </ul>
        </div>
    </div>
</div>