@extends('layouts.master')

@section('title', 'Apex Tutor Menu')

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
    <section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-3" style="background-image: url({{ URL::to('images/background.jpg') }})">
        <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
            <div class="mbr-box__container mbr-section__container container">
                <div class="mbr-box mbr-box--stretched">
                    <div class="mbr-box__magnet mbr-box__magnet--center-center">
                        <div class="container grid" style="width:71%; padding:0px; margin:0px; margin-top:-60px; margin-left:auto; margin-right:auto;">
                            <div class="grid" style="width:80%; margin-left:auto; margin-right:auto">
                                    <div class="row no_pad no_mag" style="margin-left:auto; margin-right:auto">
                                        <div class="cell align-center no_pag no_mag" style="color:#FFF">
                                        <img src="{{ URL::to('images/APEX_Learning_PRACTISE_HEADER.png') }}"  style="height:110px">
                                    </div>
                                    <div class="row no_pad no_mag" style="margin-left:auto; margin-right:auto">
                                        <div class="cell wite align-center" style="padding:0px; margin:0px;">
                                            <b><p class="no_pad" style="margin-top:0px; margin-bottom:5px">ANSWER THE QUESTIONS AT YOUR OWN PACE.</p>
                                            <p class="no_pad" style="margin-top:0px; margin-bottom:5px">PERFECT YOURSELF HERE, THEN HEAD TO 'TIME ATTACK' AND </p>
                                            <p class="no_pad no_mag" >'CHALLENGE THE WORLD' TO BE THE BEST...</p></b>
                                        </div>
                                    </div>
                                    <div class="row no_pad no_mag" style="margin-left:auto; margin-right:auto">
                                        <div class="cell wite " style="padding-left:70px; ">
                                        <?php
                                            $c = array('ENGLISH','MATHS','BIOLOGY','CHEMISTRY','PHYSICS','GEOGRAPHY');
                                            for($i = 0; $i < count($c); $i++){ ?>
                                                <b><a href="{{ URL::to('menu/practise') }}/<?= $c[$i]; ?>">
                                                <div class=" align-center uppercase" title="Click here to practise <?= $c[$i] ?>" style="background-color:#FFF; color:#008694; padding:35px; margin-right:30px; height:85px; float:left; width:155px">
                                                <span style="color:#008694"><?= $c[$i]; ?></span></div>
                                                </a></b>
                                                <?php
                                                if($i%2 == 0 and $i != 0 and $i != 4){ ?>
                                                    <br clear="all">
                                                    <br>
                                                <?php }
                                            }
                                        ?>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection



