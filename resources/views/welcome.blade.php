@extends('layouts.master')

@section('title', 'Apex Tutor')

@section('header')
    <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-0">
        <div class="mbr-navbar__section mbr-section">
            <div class="mbr-section__container container">
                <div class="mbr-navbar__container">
                    <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                        <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                            <span class="mbr-brand__logo"><img src="images/apex2.png" class="mbr-navbar__brand-img mbr-brand__img"></span>
                            <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="#" style="color:#FFF">APEX Tutor</a></span>
                        </span>
                    </div>
                    <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                    <div class="mbr-navbar__column mbr-navbar__menu">
                        <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                            <div class="mbr-navbar__column">
                                <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                                    <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{ URL::to('/menu') }}" style="color:#FFF">MENU</a></li>
                                    <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#" style="color:#FFF">FORUM</a></li>
                                    <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#" style="color:#FFF">NEWS</a></li>
                                    <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#" style="color:#FFF">BLOG</a></li>
                                    <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="/user/signup" style="color:#FFF">LOGIN</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

@section('content')
    <section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-3" style="background-image: url(images/background.jpg);">
        <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
            <div class="mbr-box__container mbr-section__container container">
                <div class="mbr-box mbr-box--stretched">
                    <div class="mbr-box__magnet mbr-box__magnet--center-center">
                        <div class="row">
                            <div class="mbr-section__col col-xs-12 col-md-2 col-sm-4">
                                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                                    <figure class="mbr-figure"><img src="images/utme.png" class="mbr-figure__img"></figure>
                                </div>
                                <div class="mbr-section__container mbr-section__container--middle">
                                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                                        <a href="/test/utme"><h3 class="mbr-header__text" style="color:#FFF">UTME</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mbr-section__col col-xs-12 col-md-2 col-sm-4">
                                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                                    <figure class="mbr-figure"><img src="images/waec.png" class="mbr-figure__img"></figure>
                                </div>
                                <div class="mbr-section__container mbr-section__container--middle">
                                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                                        <a href="/test/waec"><h3 class="mbr-header__text" style="color:#FFF">WAEC</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mbr-section__col col-xs-12 col-md-2 col-sm-4">
                                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                                    <figure class="mbr-figure"><img src="images/neco.png" class="mbr-figure__img"></figure>
                                </div>
                                <div class="mbr-section__container mbr-section__container--middle">
                                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                                        <a href="/test/neco"><h3 class="mbr-header__text" style="color:#FFF">NECO</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="mbr-section__col col-xs-12 col-md-2 col-sm-4">
                                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                                    <figure class="mbr-figure"><img src="images/toefl.png" class="mbr-figure__img"></figure>
                                </div>
                                <div class="mbr-section__container mbr-section__container--middle">
                                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                                        <a href="/test/toefl"><h3 class="mbr-header__text" style="color:#FFF">TOEFL</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mbr-section__col col-xs-12 col-md-2 col-sm-4">
                                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                                    <figure class="mbr-figure"><img src="images/gre.png" class="mbr-figure__img"></figure>
                                </div>
                                <div class="mbr-section__container mbr-section__container--middle">
                                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                                        <a href="/test/gre"><h3 class="mbr-header__text" style="color:#FFF">GRE</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mbr-section__col col-xs-12 col-md-2 col-sm-4">
                                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                                    <figure class="mbr-figure"><img src="images/sat.png" class="mbr-figure__img"></figure>
                                </div>
                                <div class="mbr-section__container mbr-section__container--middle">
                                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                                        <a href="/test/sat"><h3 class="mbr-header__text" style="color:#FFF">SAT</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-10" style="background-color: rgb(255, 255, 255);">
        <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
            <div class="mbr-section__row row">
                <div class="mbr-section__col col-xs-12 col-md-4 col-sm-6">
                    <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                        <figure class="mbr-figure"><img src="images/gym.png" class="mbr-figure__img"></figure>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">PRACTISE</h3>
                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--wysiwyg">
                            <p>Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freely.</p>
                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                        <div class="mbr-buttons mbr-buttons--center">
                            <a href="/type/practise" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">LEARN MORE</a>
                        </div>
                    </div>
                </div>
                <div class="mbr-section__col col-xs-12 col-md-4 col-sm-6">
                    <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                        <figure class="mbr-figure"><img src="images/time.png" class="mbr-figure__img"></figure>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">TIME ATTACK</h3>
                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--wysiwyg">
                            <p>Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freely.</p>
                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                        <div class="mbr-buttons mbr-buttons--center">
                            <a href="/type/attack" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">LEARN MORE</a></div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="mbr-section__col col-xs-12 col-md-4 col-sm-12">
                    <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                        <figure class="mbr-figure"><img src="images/cup.png" class="mbr-figure__img"></figure>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">CHALLENGE</h3>
                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--wysiwyg">
                            <p>Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freely.</p>
                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                        <div class="mbr-buttons mbr-buttons--center">
                            <a href="/type/challenge" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="testimonials1-14" style="background-color: rgb(255, 255, 255);">
        <div>
            <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="mbr-section__header">WHAT OUR FANTASTIC USERS SAY</h2>
                        <ul class="mbr-reviews mbr-reviews--wysiwyg row">
                            <li class="mbr-reviews__item col-sm-6 col-md-4">
                                <div class="mbr-reviews__text"><p class="mbr-reviews__p">“At first view, looks like a nice innovative tool, i like the great focus and time that was given to the responsive design, i also like the simple and clear drag and drop features. Give me more control over the object's properties and ill be using this tool for more serious projects. Regards.”</p></div>
                                <div class="mbr-reviews__author mbr-reviews__author--short">
                                    <div class="mbr-reviews__author-name">EZEKIEL OLAJUWON</div>
                                    <div class="mbr-reviews__author-bio">User</div>
                                </div>
                            </li><li class="mbr-reviews__item col-sm-6 col-md-4">
                                <div class="mbr-reviews__text"><p class="mbr-reviews__p">“At first view, looks like a nice innovative tool, i like the great focus and time that was given to the responsive design, i also like the simple and clear drag and drop features. Give me more control over the object's properties and ill be using this tool for more serious projects. Regards.”</p></div>
                                <div class="mbr-reviews__author mbr-reviews__author--short">
                                    <div class="mbr-reviews__author-name">ATINUKE ADERIMI</div>
                                    <div class="mbr-reviews__author-bio">User</div>
                                </div>
                            </li><li class="mbr-reviews__item col-sm-6 col-md-4">
                                <div class="mbr-reviews__text"><p class="mbr-reviews__p">“At first view, looks like a nice innovative tool, i like the great focus and time that was given to the responsive design, i also like the simple and clear drag and drop features. Give me more control over the object's properties and ill be using this tool for more serious projects. Regards.”</p></div>
                                <div class="mbr-reviews__author mbr-reviews__author--short">
                                    <div class="mbr-reviews__author-name">PELUMI AKINYEMI</div>
                                    <div class="mbr-reviews__author-bio">User</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="pricing-table1-14" style="background-color: rgb(240, 240, 240);">
        <div class="mbr-section__container mbr-section__container--std-top-padding container" style="padding-top: 93px; margin-bottom: 0px;">
            <div class="row">
                <div class="mbr-plan col-xs-12 mbr-plan--first col-md-4 col-sm-6">
                    <div class="mbr-plan__box">
                        <div class="mbr-plan__header">
                            <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                                <h3 class="mbr-header__text">BASIC</h3>
                            </div>
                        </div>
                        <div class="mbr-plan__number">
                            <div class="mbr-number mbr-number--price">
                                <div class="mbr-number__num">
                                    <div class="mbr-number__group">
                                        <sup class="mbr-number__left">$</sup><span class="mbr-number__value">0</span>
                                    </div>
                                </div>
                                <div class="mbr-number__caption">per month</div>
                            </div>
                        </div>
                        <div class="mbr-plan__details">
                            <ul>
                                <li><strong>15</strong> Exam Questions &amp; Tips</li>
                                <li><strong>Book</strong> Recommendation</li>
                                <li><strong>Chat</strong> on Challenge</li>
                                <li><strong>Past</strong> Questions</li>
                            </ul>
                        </div>
                        <div class="mbr-plan__buttons">
                            <div class="mbr-buttons mbr-buttons--center">
                                <a href="/plan/basic" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mbr-plan col-xs-12 mbr-plan--danger mbr-plan--favorite col-md-4 col-sm-6">
                    <div class="mbr-plan__box">
                        <div class="mbr-plan__header">
                            <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                                <h3 class="mbr-header__text">PREMIUM</h3>
                            </div>
                        </div>
                        <div class="mbr-plan__number">
                            <div class="mbr-number mbr-number--price">
                                <div class="mbr-number__num">
                                    <div class="mbr-number__group">
                                        <sup class="mbr-number__left">$</sup><span class="mbr-number__value">50</span>
                                    </div>
                                </div>
                                <div class="mbr-number__caption">per month</div>
                            </div>
                        </div>
                        <div class="mbr-plan__details">
                            <ul>
                                <li><strong>30</strong> Exam Questions</li>
                                <li><strong>Time</strong> Table</li>
                                <li><strong>Access</strong> to Videos</li>
                                <li><strong>Summary</strong> Calendar</li>
                                <li><strong>Follow</strong> Up</li>
                            </ul>
                        </div>
                        <div class="mbr-plan__buttons">
                            <div class="mbr-buttons mbr-buttons--center">
                                <a href="/plan/premium" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mbr-plan col-xs-12 mbr-plan--warning mbr-plan--last col-md-4 col-sm-6">
                    <div class="mbr-plan__box">
                        <div class="mbr-plan__header">
                            <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                                <h3 class="mbr-header__text">DIAMOND</h3>
                            </div>
                        </div>
                        <div class="mbr-plan__number">
                            <div class="mbr-number mbr-number--price">
                                <div class="mbr-number__num">
                                    <div class="mbr-number__group">
                                        <sup class="mbr-number__left">$</sup><span class="mbr-number__value">100</span>
                                    </div>
                                </div>
                                <div class="mbr-number__caption">per month</div>
                            </div>
                        </div>
                        <div class="mbr-plan__details">
                            <ul>
                                <li><strong>Unlimited</strong> Questions</li>
                                <li><strong>Unlimited</strong> Acess to Videos</li>
                                <li><strong>Calendar</strong></li>
                                <li><strong>Unlimited</strong> Follow Up</li>
                                <li><strong>Virtual</strong> Campus</li>
                            </ul>
                        </div>
                        <div class="mbr-plan__buttons">
                            <div class="mbr-buttons mbr-buttons--center">
                                <a href="/plan/diamond" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons2-15" style="background-color: rgb(240, 240, 240);">
        <div class="mbr-section__container container">
            <div class="mbr-header mbr-header--inline row" style="padding-top: 40.8px; padding-bottom: 40.8px;">
                <div class="col-sm-4">
                    <h3 class="mbr-header__text">FOLLOW US</h3>
                </div>
                <div class="mbr-social-icons mbr-social-icons--style-1 col-sm-8">
                    <a class="mbr-social-icons__icon socicon-bg-twitter" title="Twitter" target="_blank" href="https://twitter.com/"
                    ><i class="socicon socicon-twitter"></i></a>
                    <a class="mbr-social-icons__icon socicon-bg-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/pages/">
                        <i class="socicon socicon-facebook"></i></a>
                    <!--<a class="mbr-social-icons__icon socicon-bg-googleplus" title="Google+" target="_blank" href="https://plus.google.com/u/0/+Mobirise/posts">
                      <i class="socicon socicon-googleplus"></i></a> -->
                    <a class="mbr-social-icons__icon socicon-bg-youtube" title="YouTube" target="_blank" href="http://www.youtube.com/channel/">
                        <i class="socicon socicon-youtube"></i></a>
                    <a class="mbr-social-icons__icon socicon-bg-instagram" title="Instagram" target="_blank" href="https://instagram.com/">
                        <i class="socicon socicon-instagram"></i></a>
                    <!--<a class="mbr-social-icons__icon socicon-bg-pinterest" title="Pinterest" target="_blank" href="https://www.pinterest.com/mobirise/"><i class="socicon socicon-pinterest"></i></a> <a class="mbr-social-icons__icon socicon-bg-github" title="GitHub" target="_blank" href="https://github.com/Mobirise"><i class="socicon socicon-github"></i></a> <a class="mbr-social-icons__icon socicon-bg-behance" title="Behance" target="_blank" href="https://www.behance.net/Mobirise"><i class="socicon socicon-behance"></i></a> <a class="mbr-social-icons__icon socicon-bg-tumblr" title="Tumblr" target="_blank" href="http://mobirise.tumblr.com/"><i class="socicon socicon-tumblr"></i></a>
                    <a class="mbr-social-icons__icon socicon-bg-linkedin" title="LinkedIn" target="_blank" href="https://www.linkedin.com/in/mobirise"><i class="socicon socicon-linkedin"></i></a>
                    <a class="mbr-social-icons__icon socicon-bg-android" title="Google Play" target="_blank" href="https://play.google.com/store/apps/details?id=com.mobirise.mobirise"><i class="socicon socicon-android"></i></a>-->
                </div>
            </div>
        </div>
    </section>

    <footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-2" style="background-color: rgb(68, 68, 68);">
        <div class="mbr-section__container container">
            <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.900000000000006px; padding-bottom: 36.900000000000006px;">
                <div class="col-sm-12">
                    <p class="mbr-footer__copyright">Copyright &copy 2016 Apex | Netwix.Inc. <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="https://mobirise.com/">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </footer>
@endsection