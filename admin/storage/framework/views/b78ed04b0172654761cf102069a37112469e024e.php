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
                        <h2 class="main-content-title tx-24 mg-b-5">Edit Slider </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Slider </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Slider</li>
                        </ol>
                    </div>
                   
                </div>

                <!-- End Page Header -->
                <div class="row row-sm">
                    <div class="col-lg-10 col-md-10">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1"> Edit Slider </h6>
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
                                <form action="<?php echo e(url('update_slider_home')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="row row-sm">

                                        <div class="col-md-6 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="slider_name" value="<?php echo e($slider->title); ?>"
                                                    required class="form-control" id="floatingInput"
                                                    placeholder="Slider name">
                                                <input type="hidden" name="id" value="<?php echo e($slider->id); ?>" required
                                                    class="form-control" id="floatingInput" placeholder="Slider name">
                                                <label for="floatingInput">Slider Name</label>
                                                <?php $__errorArgs = ['slider_name'];
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
                                        <div class="col-md-6 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="file" name="image" class="form-control" id="floatingInput"
                                                    placeholder="Slider image">
                                                <input type="hidden" name="hidden_image"value="<?php echo e($slider->image); ?>"
                                                    class="form-control" id="floatingInput" placeholder="Slider image">
                                                <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
                                                <label for="floatingInput">Slider Image</label>
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
                                                <!--<input type="text"  name="description" value="<?php echo e(old('description')); ?>" required class="form-control" id="floatingInput" placeholder="Product description">-->
                                                <textarea name="description" class="form-control"  rows="3" style="height: 100px;"
                                                    placeholder="Enter Slider description"><?php echo e($slider->description); ?></textarea>

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


                                <a target="_blank" href="<?php echo e(url('public/slider_image_home/' . $slider->image)); ?>">
                                    <img src="<?php echo e(url('public/slider_image_home/' . $slider->image)); ?>"
                                        alt="Forest" style="width:150px">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1"> Button 1 </h6>
                                    <p class="text-muted card-sub-title"></p>
                                </div>
                                <div class="row row-sm">

                                    <div class="col-md-12 mb-2">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="btn1_caption" value="<?php echo e($slider->btn1_caption); ?>"
                                                required class="form-control" id="floatingInput" placeholder="Slider name">
                                            <label for="floatingInput">Button Caption</label>
                                            <?php $__errorArgs = ['btn1_caption'];
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
                                            <input type="text" name="btn1_link" value="<?php echo e($slider->btn1_link); ?>"
                                                required class="form-control" id="floatingInput" placeholder="Slider name">
                                            <label for="floatingInput">Button URL</label>
                                            <?php $__errorArgs = ['btn1_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error"><?php echo e("This should be a url"); ?></span>
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
                </div>

                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1"> Button 2 </h6>
                                    <p class="text-muted card-sub-title"></p>
                                </div>
                                <div class="row row-sm">

                                    <div class="col-md-12 mb-2">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="btn2_caption"
                                                value="<?php echo e($slider->btn2_caption); ?>" required class="form-control"
                                                id="floatingInput" placeholder="Slider name">
                                            <label for="floatingInput">Button Caption</label>
                                            <?php $__errorArgs = ['btn2_caption'];
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
                                            <input type="text" name="btn2_link" value="<?php echo e($slider->btn2_link); ?>"
                                                required class="form-control" id="floatingInput"
                                                placeholder="Slider name">
                                            <label for="floatingInput">Button URL</label>
                                            <?php $__errorArgs = ['btn2_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error"><?php echo e("This should be a url"); ?></span>
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
                </div>



            </div>
            <div class="row row-sm">
                <div class="col-md-6">
                    <button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/development/admin/resources/views/edit_slider_home.blade.php ENDPATH**/ ?>