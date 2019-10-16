<style>
    :root {
        --footer-background-color: #111;
        --footer-font: 'Oswald', sans-serif;
    }

    footer {
        overflow-x: hidden;
        width: 100%;
        background: var(--footer-background-color);
        color: #999;
        padding: 20px;
        box-sizing: border-box;
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
        margin-top: 18px;
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
        margin-top: 20px;
        font-family: Arial, Helvetica, sans-serif;
        padding: 12px;
        border-top: 1px solid rgba(255, 255, 255, .2);
        text-align: center;
    }

    @media only screen and (max-width: 1161px) {
        footer .col-md {
            padding: 0 1.5em;
        }

        footer .pc-only {
            display: none !important;
        }
        .mb-only {
            display: inherit !important;
        }
    }

</style>
<footer>
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 footer-content">
            <div class="row">
                <div class="col-md-6">
                    <h3>Links</h3>
                    <ul>
                        <li class="nowrap"><a href="https://www.facebook.com/groups/635078973250800/" target="_blank">Facebook-pagina</a></li>
                        <li class="nowrap"><a href="https://github.com/Reflex2468/CoolestProjects2019" target="_blank">GitHub-pagina</a></li>
                        <li class="nowrap"><a href="https://www.coolestprojects.be/" target="_blank">Coolest Projects</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>Gemaakt door</h3>
                    <ul>
                        <li>Neal&nbsp;Joos, Xavier&nbsp;Coppens & Bart&nbsp;De&nbsp;Roy</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 copyright">
            CoderDojo Eeklo, Coolest Projects 2019
        </div>
    </div>
</footer>
