<?php $__env->startSection('title'); ?>
    <?php echo e(__('dash.register')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="<?php echo e(URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')); ?>"
        rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        Doctor.
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex">
                                        <h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Doctor.</h1>
                                    </div>
                                    <div class="main-signup-header">
                                        <h2 class="text-primary">Get Started</h2>


                                        <?php if(count($errors) > 0): ?>
                                            <div class="alert alert-danger">
                                                <button aria-label="Close" class="close" data-dismiss="alert"
                                                    type="button">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Error</strong>
                                                <ul>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>

                                        <form method="POST" action="<?php echo e(route('register')); ?>">
                                            <?php echo csrf_field(); ?>



                                            <div class="form-group">
                                                <label><?php echo e(__('dash.username')); ?> </label> <input class="form-control"
                                                    placeholder="Enter your username" value="<?php echo e(old('username')); ?>"
                                                    name="username" type="text">
                                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo e(__('dash.name')); ?> </label> <input class="form-control"
                                                    placeholder="Enter your Name" value="<?php echo e(old('name')); ?>" name="name"
                                                    type="text">
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo e(__('dash.email')); ?> </label>
                                                <input value="<?php echo e(old('email')); ?>" class="form-control"
                                                    placeholder="Enter your email" type="email" name="email">
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo e(__('dash.password')); ?> </label> <input class="form-control"
                                                    placeholder="Enter your password" type="password" name="password">
                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="form-group">
                                                <label>Confirm Password </label> <input class="form-control" type="password"
                                                    name="password_confirmation" />

                                            </div>

                                            <div class="form-group">
                                                <label> <?php echo e(__('dash.type')); ?> </label>
                                                <label class="rdiobox">
                                                    <input name="type" value="Doctor" type="radio"> <span>
                                                        Doctor</span></label>
                                                <label class="rdiobox">
                                                    <input name="type" value="Patiant" type="radio"> <span>
                                                        Patiant</span></label>


                                            </div>

                                            <button type="submit" class="btn btn-main-primary btn-block">
                                                <?php echo e(__('dash.register')); ?>

                                            </button>

                                        </form>
                                        <div class="main-signup-footer mt-5">
                                            <p>Already have an account? <a href="<?php echo e(route('login')); ?>">
                                                    <?php echo e(__('dash.login')); ?> </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\am1\resources\views/auth/register.blade.php ENDPATH**/ ?>