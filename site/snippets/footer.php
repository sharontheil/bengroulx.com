<!-- FOOTER -->
<footer class="diagonal reverse">
    <div class="diagonal-inner">
        <p>
            <a href="<? echo url('terms-conditions'); ?>">Terms&nbsp;of&nbsp;Use</a>&emsp;<a href="<? echo url('terms-conditions'); ?>">Privacy&nbsp;Policy</a>&emsp;<a href="<? echo url('about/#colophon'); ?>">Site&nbsp;Colophon</a>
            <br/>
            <br/>
            <?php echo $site->copyright() ?>
            <br/>
            Made with &hearts; in Vancouver, BC.
        </p>
    </div>
</footer>

<a href="#top" class="end">&#8593;&emsp;Return to top</a>

<!-- CLOSE AROUND CONTENT -->
</main>

<!-- LOAD UP THE BAD BOYS -->
<script>$(document).ready(function(){$("section").fitVids();});</script>
<script>$(document).ready(function(){$("h1,h2,p").widowFix();});</script>

<!-- GOOGLE ANALYTICS -->
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-41575530-1', 'auto'); ga('send', 'pageview');</script>

</body>
</html>