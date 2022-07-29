<footer>
    <p class="text-center">All Rights Reserved Codeshore <?php echo date('Y') ?></p>
</footer>
</body>
<!-- ================================== -->

<!-- ///////////  JS  \\\\\\\\\\\ -->

<!-- ================================== -->
<script src="js/parallax.js"></script>
<script src="js/modules/jquery-ui/easing.js"></script>
<script src="js/functions.js"></script>
<div class="fb-customerchat" page_id="1885354328436619"
     theme_color="#67B868"
    greeting_dialog_delay="2">

</div>

<script>

    window.fbAsyncInit = function() {
        FB.init({
            appId            : '658709801163041',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.11'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/es_LA/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>

</html>