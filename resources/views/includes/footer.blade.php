<style>
    :root {
        --footer-background-color: #111;
        --footer-font: 'Oswald', sans-serif;
    }

    footer {
        overflow-x: hidden;
        position: relative;
        float: left;
        width: 100%;
        min-height: 40vh;
        background: var(--footer-background-color);
        color: #999;
        padding: 32px 12px;
        box-sizing: border-box;
    }
    footer .logo {
        height: 100%;
    }
    footer .logo img {
        width:100%;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        margin: 0 auto;
        min-width: 128px;
    }
    footer h3 {
        color: #fff;
        font-size: 19px;
        text-align: left;
        position: relative;
        font-family: var(--footer-font);
        letter-spacing: 3px;
        text-transform: uppercase;
        font-weight: 500;
    }
    footer h3:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -8px;
        width: 64px;
        height: 2px;
        background: white;
    }
    footer ul {
        margin-top: 24px;
        list-style: none;
        padding: 0;
    }
    footer ul li {
        text-align: left;
        margin: 2px 0 6px 0;
    }
    footer ul a {
        position: relative;
        color: rgba(255, 255, 255, .8);
        text-decoration: none;
    }
    footer ul a:hover {
        color: white;
        text-decoration: none;
    }
    footer ul a:after {
        content: '';
        display: block;
        width: 25px;
        height: 2px;
        position: absolute;
        left: 0;
        bottom: -4px;
        background: rgba(255, 255, 255, .8);
        transition: width 300ms ease;
    }
    footer ul a:hover:after {
        width: 80%;
    }
    footer .copyright {
        margin-top: 32px;
        font-family: Arial, Helvetica, sans-serif;
        padding: 24px 12px;
        border-top: 1px solid rgba(255, 255, 255, .2);
        text-align: center;
    }



    @media only screen and (max-width: 1161px) {
        footer .col-md {
            padding: 0 1.5em;
            width: 50% !important;
            flex-basis: unset;
        }

        footer .logo img {
            width: 50%;
            min-width: 128px;
        }

        footer .pc-only {
            display: none !important;
        }
        .mb-only {
            display: inherit !important;
        }
    }

</style>
<footer class="uk-margin-large-top">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 footer-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo" style="width: 50%; margin: 0 auto;">
                        <img src="{{asset('images/coderdojo_logo_white.png')}}" alt="Coderdojo">
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Informatie</h3>
                    <ul>
                        <li class="nowrap"><a href="https://www.facebook.com/groups/635078973250800/">facebook-pagina</a></li>
                        <li class="nowrap"><a href="https://github.com/Reflex2468/CoolestProjects2019">github-pagina</a></li>
                        <li class="nowrap"><a href="https://www.coolestprojects.be/">Coolest Projects</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Made by</h3>
                    <ul>
                        <li>Deze site is gemaakt door Coderdojo Eeklo <br>Neal&nbsp;Joos, Xavier&nbsp;Coppens & Bart&nbsp;De&nbsp;Roy</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 copyright">
            CoderDojo Eeklo, Coolest Projects 2019
        </div>
    </div>
</footer>

<script>

    window.onload = function() {
        if ($(window).height() > ($('nav').height() + $('.container').height() + $('#footer').height() ) ) {
            $('#footer').addClass('uk-position-bottom');
        }
    }

</script>