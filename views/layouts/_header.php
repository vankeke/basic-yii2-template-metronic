<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;
use app\helpers\NavHelper;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
    <!-- begin:: Header Menu -->
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
	<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
            <!-- Vazio de momento -->
        </div>
    </div>
    <!-- end:: Header Menu -->
    
    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">

        <!--begin: Search -->
        <!--<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24" />
                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg> </span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                <div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
                    <form method="get" class="kt-quick-search__form">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                            <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                                <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                        </div>
                    </form>
                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                    </div>
                </div>
            </div>
        </div>-->
        <!--end: Search -->
        <!--begin: Notifications -->
        <!--end: Notifications -->
        <!--begin: Quick Actions -->
        <!--end: Quick Actions -->
        <!--begin: My Cart -->
        <!--end: My Cart -->
        <!--begin: Quick panel toggler -->
        <!--end: Quick panel toggler -->
        <!--begin: Language bar -->
        <!--end: Language bar -->
        <!--begin: User Bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                <div class="kt-header__topbar-user">
                    <span class="kt-header__topbar-welcome kt-hidden-mobile"><?= Yii::t('backend', 'Hello') ?>,</span>
                    <span class="kt-header__topbar-username kt-hidden-mobile"><?= Html::encode(Yii::$app->user->identity->completeName) ?></span>
                    <img class="" alt="user image" src="<?= Yii::$app->user->identity->profile->getUserImage() ?>" />

                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden"><?= Html::encode(strtoupper(substr(Yii::$app->user->identity->completeName, 0, 1))) ?></span>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                <!--begin: Head -->
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?= Url::to(["/public_assets/media/misc/bg-1.jpg"])?>)">
                    <div class="kt-user-card__avatar">
                        <img class="" alt="user image" src="<?= Yii::$app->user->identity->profile->getUserImage() ?>" />

                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success kt-hidden"><?= Html::encode(strtoupper(substr(Yii::$app->user->identity->completeName, 0, 1))) ?></span>
                    </div>
                    <div class="kt-user-card__name">
                        <?= Html::encode(Yii::$app->user->identity->completeName) ?>
                    </div>
                    <!--<div class="kt-user-card__badge">
                        <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
                    </div>-->
                </div>

                <!--end: Head -->

                <!--begin: Navigation -->
                <div class="kt-notification">
                    <a href="<?= Url::to(['/user/settings/profile'])?>" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                <?= Yii::t('backend', 'My Profile') ?>
                            </div>
                            <div class="kt-notification__item-time">
                                <?= Yii::t('backend', 'Basic configurations of your account') ?>
                            </div>
                        </div>
                    </a>
                    <!--<a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-mail kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Messages
                            </div>
                            <div class="kt-notification__item-time">
                                Inbox and tasks
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-rocket-1 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Activities
                            </div>
                            <div class="kt-notification__item-time">
                                Logs and notifications
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-hourglass kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Tasks
                            </div>
                            <div class="kt-notification__item-time">
                                latest tasks and projects
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-cardiogram kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                Billing
                            </div>
                            <div class="kt-notification__item-time">
                                billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                            </div>
                        </div>
                    </a>-->
                    <div class="kt-notification__custom kt-space-between">
                        <?=
                        Html::beginForm(['/logout'], 'post')
                        . Html::submitButton(
                            Yii::t('backend', 'Logout'),
                            ['class' => 'btn btn-label btn-label-brand btn-sm btn-bold']
                        )
                        . Html::endForm() 
                        ?>
                        <!--<a href="demo1/custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>-->
                    </div>
                </div>

                <!--end: Navigation -->
            </div>
        </div>
        
        <!--end: User Bar -->
    </div>  
    <!-- begin:: Header Topbar -->

</div>
<!-- end:: Header -->