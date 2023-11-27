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
                        <h2 class="main-content-title tx-24 mg-b-5">Add Feature Image </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feature Image </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Feature Image</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">

                            <a href="<?php echo e(url('/view_slider')); ?>" class="btn btn-primary my-2 btn-icon-text">
                                Feature Image List
                            </a>
                        </div>
                    </div>
                </div>

                <!-- End Page Header -->
                <form action="<?php echo e(url('store_feature_image')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-1"> Add Feature Image </h6>
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
                                                    placeholder="Feature image">
                                                <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
                                                <label for="floatingInput">Feature Image</label>
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
                                    </div>
                                </div>
                            </div>

                            <div class="row row-sm">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div>
                                                <h6 class="main-content-label mb-1"> Heading 1 </h6>
                                                <p class="text-muted card-sub-title"></p>
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="heading_name1"
                                                        value="<?php echo e(old('heading_name1')); ?>" required class="form-control"
                                                        id="floatingInput" placeholder="Heading Name">
                                                    <label for="floatingInput">Heading Name</label>
                                                    <?php $__errorArgs = ['heading_name1'];
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
                                                    <textarea name="description1" class="form-control" placeholder="Enter Heading Description"></textarea>

                                                    <!--<label for="floatingInput">Product Description</label>-->
                                                    <?php $__errorArgs = ['description1'];
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
                        </div>
                    </div>


                                <div class="row row-sm">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="main-content-label mb-1"> Heading 2 </h6>
                                                    <p class="text-muted card-sub-title"></p>
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="heading_name2"
                                                            value="<?php echo e(old('heading_name2')); ?>" required class="form-control"
                                                            id="floatingInput" placeholder="Heading Name">
                                                        <label for="floatingInput">Heading Name</label>
                                                        <?php $__errorArgs = ['heading_name2'];
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
                                                        <textarea name="description2" class="form-control" rows="3" style="height: 100px;"
                                                            placeholder="Enter Heading Description"></textarea>

                                                        <!--<label for="floatingInput">Product Description</label>-->
                                                        <?php $__errorArgs = ['description2'];
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
                            </div>
                        


                                    <div class="row row-sm">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <div>
                                                        <h6 class="main-content-label mb-1"> Heading 3 </h6>
                                                        <p class="text-muted card-sub-title"></p>
                                                    </div>

                                                    <div class="col-md-12 mb-2">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" name="heading_name3"
                                                                value="<?php echo e(old('heading_name3')); ?>" required
                                                                class="form-control" id="floatingInput"
                                                                placeholder="Heading Name">
                                                            <label for="floatingInput">Heading Name</label>
                                                            <?php $__errorArgs = ['heading_name3'];
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
                                                            <textarea name="description3" class="form-control" rows="3" style="height: 100px;"
                                                                placeholder="Enter Heading Description"></textarea>

                                                            <!--<label for="floatingInput">Product Description</label>-->
                                                            <?php $__errorArgs = ['description3'];
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
                               
                          
                        


                                        <div class="row row-sm">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div>
                                                            <h6 class="main-content-label mb-1"> Heading 4 </h6>
                                                            <p class="text-muted card-sub-title"></p>
                                                        </div>

                                                        <div class="col-md-12 mb-2">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" name="heading_name4"
                                                                    value="<?php echo e(old('heading_name4')); ?>" required
                                                                    class="form-control" id="floatingInput"
                                                                    placeholder="Heading Name">
                                                                <label for="floatingInput">Heading Name</label>
                                                                <?php $__errorArgs = ['heading_name4'];
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
                                                                <textarea name="description4" class="form-control" rows="3" style="height: 100px;"
                                                                    placeholder="Enter Heading Description"></textarea>

                                                                <!--<label for="floatingInput">Product Description</label>-->
                                                                <?php $__errorArgs = ['description4'];
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


                                            <div class="row row-sm">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="card custom-card">
                                                        <div class="card-body">
                                                            <div>
                                                                <h6 class="main-content-label mb-1"> Heading 5 </h6>
                                                                <p class="text-muted card-sub-title"></p>
                                                            </div>

                                                            <div class="col-md-12 mb-2">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" name="heading_name5"
                                                                        value="<?php echo e(old('heading_name5')); ?>" required
                                                                        class="form-control" id="floatingInput"
                                                                        placeholder="Heading Name">
                                                                    <label for="floatingInput">Heading Name</label>
                                                                    <?php $__errorArgs = ['heading_name5'];
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
                                                                    <textarea name="description5" class="form-control" rows="3" style="height: 100px;"
                                                                        placeholder="Enter Heading Description"></textarea>

                                                                    <!--<label for="floatingInput">Product Description</label>-->
                                                                    <?php $__errorArgs = ['description5'];
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
        

                                                <div class="row row-sm">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="card custom-card">
                                                            <div class="card-body">
                                                                <div>
                                                                    <h6 class="main-content-label mb-1"> Heading 6 </h6>
                                                                    <p class="text-muted card-sub-title"></p>
                                                                </div>

                                                                <div class="col-md-12 mb-2">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" name="heading_name6"
                                                                            value="<?php echo e(old('heading_name6')); ?>" required
                                                                            class="form-control" id="floatingInput"
                                                                            placeholder="Heading Name">
                                                                        <label for="floatingInput">Heading Name</label>
                                                                        <?php $__errorArgs = ['heading_name6'];
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
                                                                        <textarea name="description6" class="form-control" rows="3" style="height: 100px;"
                                                                            placeholder="Enter Heading Description"></textarea>

                                                                        <!--<label for="floatingInput">Product Description</label>-->
                                                                        <?php $__errorArgs = ['description6'];
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
                                                    <div class="row row-sm">
                                                        <div class="col-md-6">
                                                            <button type="submit"
                                                                class="btn ripple btn-primary pd-x-30 mg-r-5">Add
                                                            </button>
                                                            <button type="reset"
                                                                class="btn ripple btn-outline-danger pd-x-30">Cancel</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                </form>

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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/admin/resources/views/add_feature_image.blade.php ENDPATH**/ ?>