<?php 
    $base_url = $this->config->item('base_url');
    $assets = $this->config->item('assets');
?>




    <div class="footer">
        <div class="row">
            <div class="footer-left">
                <span>
                    Tahanang Walang Hagdanan, Inc.
                    <p>Copyright &copy; 2013 www.twh.org.ph</p>
                </span>
            </div>
            <ul class="footer-links">
                <li><a href="<?=$base_url;?>/">Home</a></li>
                <li><a href="<?=$base_url;?>/about">About</a></li>
                <li><a href="<?=$base_url;?>/contact">Contact</a></li>
            </ul>
        </div>
    </div>

    <script>
    document.write('<script src=' +
        ('__proto__' in {} ? "<?=$assets;?>javascripts/vendor/zepto" : "<?=$assets;?>javascripts/vendor/jquery") +
        '.js><\/script>')
    </script>

    <script src="<?=$assets;?>javascripts/foundation/foundation.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.orbit.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.joyride.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.clearing.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.tooltips.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.topbar.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.alerts.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.interchange.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.placeholder.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.forms.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.magellan.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.section.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.cookie.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.reveal.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.abide.js"></script>
    <script src="<?=$assets;?>javascripts/foundation/foundation.dropdown.js"></script>

    <script>
    $(document).foundation();
    </script>

    <link rel="stylesheet" href="<?=$assets;?>stylesheets/font-awesome.min.css">

</body>
</html>
