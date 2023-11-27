<?php $__env->startSection('body'); ?>
    <style>
        .form-floating>.form-control:not(:placeholder-shown)~label {


            background: white;

            padding: 5px 0px !important;
            height: 25px;


        }

        .ck.ck-editor__editable_inline[dir=ltr] {
            text-align: left;
            height: 150px;
        }
    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">
                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Edit Message </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Message </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Message</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">

                            <a href="<?php echo e(url('/view_msg_home')); ?>" class="btn btn-primary my-2 btn-icon-text">
                                Message List
                            </a>
                        </div>
                    </div>
                </div>

                <!-- End Page Header -->

                <form action="<?php echo e(url('update_msg_home')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row row-sm">
                        <div class="col-lg-10 col-md-10">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-1"> Edit Message </h6>
                                        <p class="text-muted card-sub-title"></p>
                                    </div>
                                    <div class="remove_alert">
                                        <?php if(Session::get('success')): ?>
                                            <h6 class="alert alert-success"><?php echo e(Session::get('success')); ?></h6>
                                        <?php endif; ?>
                                        <?php if(Session::get('fail')): ?>
                                            <h6 class="alert alert-success"><?php echo e(Session::get('fail')); ?></h6>
                                        <?php endif; ?>
                                    </div>
                                    <script>
                                        setTimeout(function() {
                                            $('.remove_alert').fadeOut();;
                                        }, 3000);
                                    </script>

                                    <div class="row row-sm">






                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="file" name="image" class="form-control" id="floatingInput"
                                                    placeholder="Message image">
                                                <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
                                                <label for="floatingInput">Message Image</label>
                                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="error"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="title"
                                                    value="<?php echo e($msg->title); ?>" required class="form-control"
                                                    id="floatingInput" placeholder="Slider name">
                                                <label for="floatingInput">Message Title</label>
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="error"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <input type="hidden" name="id" value="<?php echo e($msg->id); ?>" required
                                        class="form-control" id="floatingInput" placeholder="Slider name">

                                        <input type="hidden" name="hidden_image"value="<?php echo e($msg->image); ?>"
                                        class="form-control" id="floatingInput" placeholder="Slider image">
                                       


                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <!--<input type="text"  name="description" value="<?php echo e(old('description')); ?>" required class="form-control" id="floatingInput" placeholder="Product description">-->


                                                <textarea  class="form-control" rows="3" name="description"
                                                    style="height: 100px;"placeholder="Enter Message description"><?php echo e($msg->description); ?></textarea>

                                                <!--<label for="floatingInput">Product Description</label>-->
                                                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="error"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                          



                        </div>
                        <div class="col-lg-2">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-1"> Preview </h6>
                                        <p class="text-muted card-sub-title"></p>
                                    </div>


                                    <a target="_blank" href="<?php echo e(url('public/msg_image_home/' . $msg->image)); ?>">
                                        <img src="<?php echo e(url('public/msg_image_home/' . $msg->image)); ?>" alt="Forest"
                                            style="width:150px">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row row-sm">
                            <div class="col-md-6">
                                <button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Add
                                </button>
                                <button type="reset" class="btn ripple btn-outline-danger pd-x-30">Cancel</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    </div>
    </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <!----------------Jquery---------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/admin/resources/views/edit_msg_home.blade.php ENDPATH**/ ?>