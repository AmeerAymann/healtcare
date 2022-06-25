<?php $__env->startSection('title'); ?>
    <?php echo e(__('dash.dash')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!--  Owl-carousel css-->
    <link href="<?php echo e(URL::asset('assets/plugins/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet" />
    <!-- Maps css -->
    <link href="<?php echo e(URL::asset('assets/plugins/jqvmap/jqvmap.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">
                    <?php echo e(__('dash.dash')); ?>

                    - Wellcom : <?php echo e(auth::user()->name); ?>

                </h2>
            </div>
        </div>

    </div>
    <!-- /breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
        <div class="row row-sm">
            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card bg-primary-gradient text-white ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fe fe-users tx-40"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-0 text-center">
                                    <span class="text-white">User</span>
                                    <h2 class="text-white mb-0"> <?php echo e(\App\User::count()); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card bg-danger-gradient text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fe fe-shopping-cart tx-40"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-0 text-center">
                                    <span class="text-white">Patiant</span>
                                    <h2 class="text-white mb-0">
                                        <?php echo e(\App\User::whereHas('roles', function ($q) {
                                            $q->where('name', 'Patiant');
                                        })->count()); ?>

                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card bg-success-gradient text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fe fe-bar-chart-2 tx-40"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-0 text-center">
                                    <span class="text-white">Doctor</span>
                                    <h2 class="text-white mb-0">
                                        <?php echo e(\App\User::whereHas('roles', function ($q) {
                                            $q->where('name', 'Doctor');
                                        })->count()); ?>

                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php endif; ?>




    </div>

    </div>
    </div>
    <!-- Container closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <!--Internal  Chart.bundle js -->
    <script src="<?php echo e(URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')); ?>"></script>
    <!-- Moment js -->
    <script src="<?php echo e(URL::asset('assets/plugins/raphael/raphael.min.js')); ?>"></script>
    <!--Internal  Flot js-->
    <script src="<?php echo e(URL::asset('assets/plugins/jquery.flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/dashboard.sampledata.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/chart.flot.sampledata.js')); ?>"></script>
    <!--Internal Apexchart js-->
    <script src="<?php echo e(URL::asset('assets/js/apexcharts.js')); ?>"></script>
    <!-- Internal Map -->
    <script src="<?php echo e(URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/modal-popup.js')); ?>"></script>
    <!--Internal  index js -->
    <script src="<?php echo e(URL::asset('assets/js/index.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/jquery.vmap.sampledata.js')); ?>"></script>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\am1\resources\views/home.blade.php ENDPATH**/ ?>