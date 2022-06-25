<!-- main-header opened -->
<div class="main-header sticky side-header nav nav-item">
    <div class="container-fluid">
        <div class="main-header-left ">
            <div class="responsive-logo">
                <a href="<?php echo e(url('/' . ($page = 'index'))); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/logo.png')); ?>"
                        class="logo-1" alt="logo"></a>
                <a href="<?php echo e(url('/' . ($page = 'index'))); ?>"><img
                        src="<?php echo e(URL::asset('assets/img/brand/logo-white.png')); ?>" class="dark-logo-1"
                        alt="logo"></a>
                <a href="<?php echo e(url('/' . ($page = 'index'))); ?>"><img
                        src="<?php echo e(URL::asset('assets/img/brand/favicon.png')); ?>" class="logo-2" alt="logo"></a>
                <a href="<?php echo e(url('/' . ($page = 'index'))); ?>"><img
                        src="<?php echo e(URL::asset('assets/img/brand/favicon.png')); ?>" class="dark-logo-2" alt="logo"></a>
            </div>
            <div class="app-sidebar__toggle" data-toggle="sidebar">
                <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
            </div>

        </div>
        <div class="main-header-right">

            <div class="nav nav-item  navbar-nav-right ml-auto">
                <div class="nav-link" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button type="reset" class="btn btn-default">
                                    <i class="fas fa-times"></i>
                                </button>
                                <button type="submit" class="btn btn-default nav-link resp-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>



                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
                        data-toggle="dropdown" type="button">
                        language <i class="fas fa-solid fa-language"></i>
                    </button>
                    <div class="dropdown-menu tx-13">
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a hreflang="<?php echo e($localeCode); ?>" class="dropdown-item"
                                href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                <?php echo e($properties['native']); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>


                <div class="dropdown nav-item main-header-notification">
                    <a class="new nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg><span class=" pulse"></span></a>
                    <div class="dropdown-menu">
                        <div class="menu-header-content bg-primary text-right">
                            <div class="d-flex">
                                <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Notifications
                                </h6>
                                <span class="badge badge-pill badge-warning mr-auto my-auto float-left"><a
                                        href="<?php echo e(route('mark')); ?>">Mark all as read</a> </span>
                            </div>
                            <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have
                                <?php echo e(auth()->user()->unreadNotifications->count()); ?> Unread Notifications </p>
                        </div>
                        <div class="main-notification-list Notification-scroll">

                            <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-pink">
                                        <i class="la la-file-alt text-white"></i>
                                    </div>
                                    <div class="mr-3">
                                        <h5 class="notification-label mb-1"> <?php echo e($notification->data['title']); ?>

                                            <?php echo e($notification->data['user_id']); ?> </h5>
                                        <div class="notification-subtext"> <?php echo e($notification->created_at); ?></div>
                                    </div>
                                    <div class="mr-auto">
                                        <i class="las la-angle-left text-left text-muted"></i>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <div class="dropdown-footer">
                            <a href="">Show All </a>
                        </div>
                    </div>
                </div>
                <div class="nav-item full-screen fullscreen-button">
                    <a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-maximize">
                            <path
                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                            </path>
                        </svg></a>
                </div>
                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href=""><img alt=""
                            src="<?php echo e(url('/')); ?>/uploads/<?php echo e(Auth()->user()->profile->photo ?? 'defalut.png'); ?>"></a>
                    <div class="dropdown-menu">
                        <div class="main-header-profile bg-primary p-3">
                            <div class="d-flex wd-100p">
                                <div class="main-img-user"><img alt=""
                                        src="<?php echo e(url('/')); ?>/uploads/<?php echo e(Auth()->user()->profile->photo ?? 'defalut.png'); ?>"
                                        class="">
                                </div>
                                <div class="mr-3 my-auto">
                                    <h6><?php echo e(Auth::user()->name); ?></h6>
                                    <span><?php echo e(Auth::user()->email); ?></span>
                                </div>
                            </div>
                        </div>
                        <a class="dropdown-item" href="<?php echo e(route('profile.show')); ?>"><i
                                class="bx bx-user-circle"></i><?php echo e(__('dash.Profile')); ?></a>
                        <a class="dropdown-item" href="<?php echo e(route('edit.profile')); ?>"><i class="bx bx-cog"></i>
                            <?php echo e(__('dash.editprof')); ?></a>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                class="bx bx-log-out"></i> <?php echo e(__('dash.logout')); ?></a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                            style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- /main-header -->
<?php /**PATH D:\laragon\www\xd\resources\views/layouts/main-header.blade.php ENDPATH**/ ?>