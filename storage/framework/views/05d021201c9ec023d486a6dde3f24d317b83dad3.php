
<?php $__env->startSection('css'); ?>
    <!-- Internal Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
<?php $__env->startSection('title'); ?>
    <?php echo e(__('dash.editprof')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto"> <?php echo e(__('dash.dash')); ?> </h4><span
                class="text-muted mt-1 tx-13 mr-2 mb-0">
                <?php echo e(__('dash.editprof')); ?>

            </span>
        </div>

    </div>


</div>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="">
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">
                                    <?php echo e(__('dash.editprof')); ?>

                                </h4>

                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="<?php echo e(route('update.profile')); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <input type="hidden" name="id" value="<?php echo e($admin->id); ?>">

                                        <div class="form-body">
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> <?php echo e(__('dash.name')); ?></label>
                                                        <input type="text" value="<?php echo e($admin->name); ?>"
                                                            id="value" class="form-control" placeholder="  "
                                                            name="name">
                                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">
                                                            <?php echo e(__('dash.email')); ?> </label>
                                                        <input type="text" value="<?php echo e($admin->email); ?>"
                                                            id="value" class="form-control" placeholder="  "
                                                            name="email">
                                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">
                                                            <?php echo e(__('dash.password')); ?>

                                                        </label>
                                                        <input type="password" class="form-control" name="password">
                                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">
                                                            <?php echo e(__('dash.confrimPass')); ?> </label>
                                                        <input type="password" class="form-control" placeholder="  "
                                                            name="password_confirmation">

                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> <?php echo e(__('dash.edit')); ?>

                                                </button>
                                            </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                
            </section>
            <!-- // Basic form layout section end -->

            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">
                                    <?php echo e(__('dash.moreinof')); ?>

                                </h4>

                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="<?php echo e(route('update.profile')); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <input type="hidden" name="id1" value="<?php echo e($admin1->id); ?>">
                                        <input type="hidden" name="type" value="2">

                                        <div class="form-body">
                                            <div class="row">


                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <img width="70" height="70"
                                                            src="<?php echo e(url('/')); ?>/uploads/<?php echo e(Auth()->user()->profile->photo); ?>" />

                                                        <div class="custom-file">
                                                            <label for="projectinput1">
                                                                <?php echo e(__('dash.photo')); ?></label>

                                                            <input class="custom-file-input" name="photo"
                                                                id="customFile" type="file"> <label
                                                                class="custom-file-label" for="customFile">Choose
                                                                photo</label>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">
                                                            <?php echo e(__('dash.name_en')); ?> </label>
                                                        <input type="text" value="<?php echo e($admin1->name_en); ?>"
                                                            id="value" class="form-control" placeholder="  "
                                                            name="name_en">
                                                        <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">
                                                            <?php echo e(__('dash.skype_id')); ?> </label>
                                                        <input type="text" value="<?php echo e($admin1->skype_id); ?>"
                                                            id="value" class="form-control" placeholder="  "
                                                            name="skype_id">
                                                        <?php $__errorArgs = ['skype_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>



                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">
                                                            <?php echo e(__('dash.zoom_url')); ?>

                                                        </label>
                                                        <input value="<?php echo e($admin1->skype_id); ?>" type="text"
                                                            class="form-control" name="zoom_url">
                                                        <?php $__errorArgs = ['zoom_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">
                                                            <?php echo e(__('dash.phone')); ?> </label>
                                                        <input value="<?php echo e($admin1->phone); ?>" type="text"
                                                            class="form-control" placeholder="  " name="phone">

                                                    </div>
                                                </div>

                                            </div>



                                            <?php if(auth()->user()->hasRole('Teacher')): ?>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1">
                                                                <?php echo e(__('dash.major')); ?>

                                                            </label>
                                                            <input value="<?php echo e($admin1->major); ?>" type="text"
                                                                class="form-control" name="major">
                                                            <?php $__errorArgs = ['major'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1">
                                                                <?php echo e(__('dash.country')); ?> </label>
                                                            <input value="<?php echo e($admin1->country); ?>" type="text"
                                                                class="form-control" placeholder="  " name="country">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1">
                                                                <?php echo e(__('dash.youtube_link')); ?> </label>
                                                            <input value="<?php echo e($admin1->youtube_link); ?>"
                                                                type="text" class="form-control" placeholder="  "
                                                                name="youtube_link">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1">
                                                                <?php echo e(__('dash.tags')); ?> </label>
                                                            <input value="<?php echo e($admin1->tags); ?>" type="text"
                                                                class="form-control" placeholder="  " name="tags">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1">
                                                                <?php echo e(__('dash.introduction')); ?> </label>
                                                            <textarea class="form-control" name="introduction">
                                                                <?php echo e($admin1->introduction ?? ''); ?>

                                                            </textarea>

                                                        </div>
                                                    </div>

                                                </div>
                                            <?php endif; ?>

                                            <div class="form-actions">

                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> <?php echo e(__('dash.edit')); ?>

                                                </button>
                                            </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                
            </section>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\am1\resources\views/dashboard/profile/edit.blade.php ENDPATH**/ ?>