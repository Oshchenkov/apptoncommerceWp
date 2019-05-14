<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *
 */

?>

<footer class="mainFooter">
    <div class="mainFooter__container container">
        <div class="row mainFooter__row">
            <div class="col-lg-5">
                <div class="mainFooter-infoBlock">
                    <div class="mainFooter-infoBlock__logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="mainLogo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Logo/Logo.svg" alt="logo" class="mainLogo__icon ">
                            <div class="mainLogo__text">
                                Appton Commerce
                            </div><!-- /.mainLogo__text -->
                        </a><!-- /.navbar-brand -->
                    </div><!-- /.mainFooter-infoBlock__logo -->
                    <div class="mainFooter-infoBlock__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit 
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum.
                    </div><!-- /.mainFooter-infoBlock__desc -->
                </div><!-- /.mainFooter-infoBlock -->
            </div>
            <div class="offset-lg-1 col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mainFooter-navBlock">
                            <div class="mainFooter-navBlock__title">
                                Support
                            </div><!-- /.mainFooter-navBlock__title -->
                            <div class="mainFooter-navBlock__content">
                                <ul class="footerNav">
                                    <li class="footerNav__li">
                                        <a href="FAQ-page.html" class="footerNav__a">
                                            FAQ
                                        </a><!-- /.footerNav__a -->
                                    </li><!-- /.footerNav__li -->
                                    <li class="footerNav__li">
                                        <a href="help-page.html" class="footerNav__a">
                                            Help center
                                        </a><!-- /.footerNav__a -->
                                    </li><!-- /.footerNav__li -->
                                </ul><!-- /.footerNav -->
                            </div><!-- /.mainFooter-navBlock__content -->
                        </div><!-- /.mainFooter-navBlock -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="mainFooter-navBlock">
                            <div class="mainFooter-navBlock__title">
                                Company
                            </div><!-- /.mainFooter-navBlock__title -->
                            <div class="mainFooter-navBlock__content">
                                <ul class="footerNav">
                                    <li class="footerNav__li">
                                        <a href="about-page.html" class="footerNav__a">
                                            About
                                        </a><!-- /.footerNav__a -->
                                    </li><!-- /.footerNav__li -->
                                    <li class="footerNav__li">
                                        <a href="careers-page.html" class="footerNav__a">
                                            Careers
                                        </a><!-- /.footerNav__a -->
                                    </li><!-- /.footerNav__li -->
                                </ul><!-- /.footerNav -->
                            </div><!-- /.mainFooter-navBlock__content -->
                        </div><!-- /.mainFooter-navBlock -->
                    </div><!-- /.col-lg-6 -->
                    
                </div><!-- /.row -->
                <div class="row">
                    <div class="col mainFooterlink-col">
                        <a href="#" class="btnLink btnLink_color_pink">
                            Get in touch
                        </a><!-- /.btn btn_color_pink -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.row mainFooter__row -->
    </div><!-- /.mainFooter__container container -->
</footer><!-- /.mainFooter -->

<?php wp_footer(); ?>
</body>
</html>