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
                        <h2 class="main-content-title tx-24 mg-b-5">Edit Video </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Video
                                </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Video</li>
                        </ol>
                    </div>

                </div>

                <form action="<?php echo e(url('update_video_home')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <!-- End Page Header -->
                    <div class="row row-sm">
                        <div class="col-lg-8 col-md-8">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-1"> Edit Video </h6>
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
                                                <input type="hidden" name="id" value="<?php echo e($video->id); ?>" required
                                                    class="form-control" id="floatingInput" placeholder="Slider name">

                                            </div>
                                        </div>

                                        <div class="form-floating mb-3">


                                            <input type="text" name="url" value="<?php echo e($video->url); ?>" class="form-control" id="floatingInput"
                                                placeholder="Video">

                                            <input type="hidden" name="hidden_url" value="<?php echo e($video->url); ?>"
                                                class="form-control" id="floatingInput" placeholder="Video">
                                            <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
                                            <label for="floatingInput">Youtube Video ID</label>
                                            <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error"><?php echo e("Youtube Video ID is required"); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>



                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="btn_caption" value="<?php echo e($video->btn_caption); ?>"
                                                    required class="form-control" id="floatingInput"
                                                    placeholder="Heading Name">
                                                <label for="floatingInput">Button Name</label>
                                                <?php $__errorArgs = ['btn_caption'];
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
                                                <input type="text" name="btn_link" value="<?php echo e($video->btn_link); ?>"
                                                    required class="form-control" id="floatingInput"
                                                    placeholder="Heading Name">
                                                <label for="floatingInput">Button Link</label>
                                                <?php $__errorArgs = ['btn_link'];
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



                           

                            <div class="row row-sm">
                                <div class="col-md-6">
                                    <button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Update
                                    </button>
                                    <button type="reset" class="btn ripple btn-outline-danger pd-x-30">Cancel</button>
                                </div>
                            </div>
                            </div>
                </form>
               

            </div>
            <div class="col-lg-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <div>
                            <h6 class="main-content-label mb-1"> Preview </h6>
                            <p class="text-muted card-sub-title"></p>
                        </div>

                        <iframe  src="https://www.youtube.com/embed/<?php echo e($video->url); ?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>


    </div>







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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/admin/resources/views/edit_video_home.blade.php ENDPATH**/ ?>