@extends('layouts.master')

@section('title', 'Apex Tutor - Menu')

@section('header')
    <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-0">
            <div class="mbr-navbar__section mbr-section">
                <div class="mbr-section__container container">
                    <div class="mbr-navbar__container">
                        <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                            <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                                <span class="mbr-brand__logo"><img src="{{ URL::to('images/apex2.png') }}" class="mbr-navbar__brand-img mbr-brand__img"></span>
                                <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="#" style="color:#FFF">APEX Tutor</a></span>
                            </span>
                        </div>
                        <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                        <div class="mbr-navbar__column mbr-navbar__menu">
                            <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                                <div class="mbr-navbar__column">
                                    <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#" style="color:#FFF">
                                            <img src="{{ URL::to('images/APEX_Learning_USER_ICON2.png') }}" style="height:30px; padding-bottom:10px;"> 
                                            <font style="font-size:20px;">
                                                Username </font><font size="+3" style="font-weight:bold"> 50
                                            </font>
                                        </a></li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#" style="color:#FFF">
                                        <img src="{{ URL::to('images/GOLD_MEDAL.png') }}" style="height:30px; padding-bottom:5px; padding-left:1.12%">7</a></li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#" style="color:#FFF">
                                        <img src="{{ URL::to('images/SILVER_MEDAL.png') }}" style="height:30px; padding-bottom:5px; padding-left:1.12%">10</a></li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#" style="color:#FFF">
                                        <img src="{{ URL::to('images/BRONZE_MEDAL.png') }}" style="height:30px; padding-bottom:5px; padding-left:1.12%;">3</a></li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#"on  style="color:#FFF">
                                        <img src="{{ URL::to('images/LOGOUT_ICON.png') }}" style="height:30px; padding-bottom:10px padding-left:30px"></a></li>  
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
                            <div class="container no_pad no_mag" style="width:71%; padding-top:-90px">
                                    <div class="grid condensed">
                                        <div class="row cells">
                                            <img src="images/APEX_Learning_CLICK_THROUGH.png" style="max-height:120px">
                                        </div>
                                        <div class="row cells">
                                            <div class="cell" style="padding-left:19%">
                                                <p class="wite" style="font-size:25px; margin-top:10px; font-weight:700">
                                                    <img src="images/LIGHT_BULB.png" style="max-height:40px;">
                                                    <span style="padding-right:2%">T R A I N</span> 
                                                    <span style="padding-right:2%">Y O U R</span>  
                                                    <span style="padding-right:2%">M E M O R Y</span>  
                                                    <span style="padding-right:2%">F I R S T</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row cells">
                                            <div class="cell" style="padding-left:27%; width:100%; height:100%">
                                                <a href="{{ URL::to('menu/practise') }}" style="float:left; width:170px;">
                                                    <div class="no_mag" title="Click here to practise " style="background-color:#FFF; height:100px; width:150px;
                                                    padding-left:35px; padding-top:15px;">
                                                        <img src="images/GYM.png" style="height:70px; width:70px; ">
                                                    </div>
                                                    <div class="align-center" style="background-color:#FFF; color:#008694;  margin-top:2px; width:150px; height:40px; padding-top:10px;">
                                                            <b>P R A C T I S E</b>
                                                    </div>
                                                </a>


                                                <a href="menu/time" style="color:#FFF; ">
                                                    <div class="no_mag" title="Click here to TIME ATTACK" style="background-color:#FFF; margin-left:200px; width:150px; height:100px; padding-left:35px; padding-top:12px; ">   
                                                        <img src="images/TIME.png" style="height:70px; width:70px; ">

                                                    </div>
                                                    <div class="align-center" style=" padding-top:10px; margin-left:200px; background-color:#FFF; color:#008694;  margin-top:2px; width:150px; height:40px; ">
                                                            <b>T I M E - A T T A C K</b>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row cells">
                                            <div class="cell" style="padding-left:35%; padding-top:10px" >
                                                <a href="menu/challenge" style="float:left; width:170px;">
                                                    <div class="no_mag" title="Click here to practise " style="background-color:#FFF; height:100px; width:220px;
                                                    padding-left:70px; padding-top:15px;">

                                                        <img src="images/CUP.png" style="height:70px; width:70px; ">
                                                        
                                                    </div>
                                                    <div class="align-center" style="background-color:#FFF; color:#008694;  margin-top:2px; width:220px; height:40px; padding-top:10px;">
                                                            <b>C H A L L E N G E </b>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



