
<?php $__env->startSection('css'); ?>
    <!-- Internal Nice-select css  -->
    <link href="<?php echo e(URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')); ?>" rel="stylesheet" />


    <!--Internal  Datetimepicker-slider css -->
    <link href="<?php echo e(URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')); ?>"
        rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/plugins/pickerjs/picker.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <?php echo e(__('dash.add')); ?> <?php echo e(__('dash.subscriptions')); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"><?php echo e(__('dash.subscriptions')); ?>

                </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    <?php echo e(__('dash.add')); ?>


                </span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- row -->
    <div class="row">


        <div class="col-lg-12 col-md-12">

            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
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

            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <a class="btn btn-primary btn-sm"
                                href="<?php echo e(route('subscriptions.index')); ?>"><?php echo e(__('dash.back')); ?></a>
                        </div>
                    </div><br>
                    <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                        action="<?php echo e(route('subscriptions.store')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>


                        <div class="">

                            <div class="row mg-b-20">


                                <div class="parsley-input col-md-3" id="fnWrapper">
                                    <label><?php echo e(__('dash.UID')); ?>

                                        : <span class="tx-danger">*</span></label>
                                    <input readonly value="XD-Englisg00<?php echo e(rand(2, 50)); ?>"
                                        class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                        name="UID" required="" type="text">
                                </div>
                                <div class="parsley-input col-md-3" id="fnWrapper">
                                    <label><?php echo e(__('dash.name')); ?>

                                        : <span class="tx-danger">*</span></label>
                                    <input placeholder="" class="form-control form-control-sm mg-b-20"
                                        data-parsley-class-handler="#lnWrapper" name="name" required=""
                                        type="text">
                                </div>


                                <div class="parsley-input col-md-3" id="fnWrapper">
                                    <label><?php echo e(__('dash.type')); ?>

                                        : <span class="tx-danger">*</span></label>
                                    <input placeholder="" class="form-control form-control-sm mg-b-20"
                                        data-parsley-class-handler="#lnWrapper" name="type" required=""
                                        type="text">
                                </div>
                                <div class="parsley-input col-md-3" id="fnWrapper">
                                    <label><?php echo e(__('dash.price')); ?>

                                        : <span class="tx-danger">*</span></label>
                                    <input placeholder="000" class="form-control form-control-sm mg-b-20"
                                        data-parsley-class-handler="#lnWrapper" name="price" required=""
                                        type="text">
                                </div>

                            </div>

                        </div>

                        <div class="row mg-b-20">


                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label> <?php echo e(__('dash.start')); ?>: <span class="tx-danger">*</span></label>
                                <input onchange="ChangeDate($(this).val());" id="datetimepickerstart"
                                    class="start form-control form-control-sm mg-b-20" name="start" required=""
                                    type="text">

                            </div>

                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label> <?php echo e(__('dash.end')); ?>: <span class="tx-danger">*</span></label>
                                <input id="datetimepickerend" class="end form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="end" required="" type="text">
                            </div>

                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label> <?php echo e(__('dash.students')); ?>: <span class="tx-danger">*</span></label>

                                <select name="student_id" class="select2 form-control  mg-b-20">
                                    <option label="Choose one">
                                    </option>
                                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($v->id); ?>"> <?php echo e($v->name); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0">
                                <label class="form-label"> <?php echo e(__('dash.status')); ?></label>
                                <select name="status" id="select-beast" class="form-control  nice-select  custom-select">
                                    <option value="active">Active</option>
                                    <option value="waiting">Waiting</option>
                                    <option value="processing">Processing</option>
                                    <option value="unacceptable">UNAcceptable</option>
                                    <option value="reference">Reference</option>
                                    <option value="notActive"> Not Active</option>
                                </select>
                            </div>

                            <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label> <?php echo e(__('dash.lessonDays')); ?>: <span class="tx-danger">*</span></label>

                                <select name="day_lesson[]" multiple class="select2 form-control  mg-b-20">
                                    <option label="Choose one">
                                    </option>
                                    <option value="monday">월요일</option>
                                    <option value="tuesday">화요일</option>
                                    <option value="wednesday">수요일</option>
                                    <option value="thursday">목요일</option>
                                    <option value="friday">금요일 </option>
                                    <option value="saturday">토요일</option>
                                    <option value="sunday">일요일</option>
                                </select>
                            </div>
                        </div>



                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button class="btn btn-main-primary pd-x-20" type="submit">
                                <?php echo e(__('dash.confirm')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>


    <!-- Internal Nice-select js-->
    <script src="<?php echo e(URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')); ?>"></script>

    <!--Internal  Parsley.min js -->
    <script src="<?php echo e(URL::asset('assets/plugins/parsleyjs/parsley.min.js')); ?>"></script>
    <!-- Internal Form-validation js -->
    <script src="<?php echo e(URL::asset('assets/js/form-validation.js')); ?>"></script>


    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')); ?>"></script>

    <!-- Ionicons js -->
    <script src="<?php echo e(URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')); ?>"></script>

    <!--Internal  pickerjs js -->
    <script src="<?php echo e(URL::asset('assets/plugins/pickerjs/picker.min.js')); ?>"></script>

    <script>
        $(function() {
            $('#datetimepickerstart').datetimepicker({
                format: 'yyyy-mm-dd hh:ii',
                autoclose: true
            });

            $('#datetimepickerend').datetimepicker({
                format: 'yyyy-mm-dd hh:ii',
                autoclose: true
            });

            $('.select22').select2({
                placeholder: 'Choose one',
                searchInputPlaceholder: 'Search'
            });

            $('.selectDays').select2({
                placeholder: 'Choose one',
                searchInputPlaceholder: 'Search'
            });


        });

        function ChangeDate(value) {
            // alert(value);
            var newDate = moment(value, "YYYY-MM-DD").add(1, 'months').format('YYYY-MM-DD h:m');
            $('.end').val(newDate);

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\am1\resources\views/dashboard/subscriptions/create.blade.php ENDPATH**/ ?>