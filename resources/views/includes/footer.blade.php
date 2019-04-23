<div id="footer" class="uk-background-secondary uk-text-center uk-padding uk-margin-large-top uk-light">
    <div class="uk-grid">
        <div class="uk-width-1-2">
            <h1>Coderdojo Coolest Projects 2019 submission</h1>
        </div>
        <div class="uk-width-1-2">
            <h1>Made By</h1>
            <ul>
                <li>Xavier Coppens</li>
                <li>Neal Joos</li>
                <li>Bart De Roy</li>
            </ul>
        </div>
    </div>
</div>

<script>

    window.onload = function() {
        if ($(window).height() > ($('nav').height() + $('.container').height() + $('#footer').height() ) ) {
            $('#footer').addClass('uk-position-bottom');
        }
    }

</script>