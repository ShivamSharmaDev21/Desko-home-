<?php $__env->startSection('body'); ?>
    <!-- Internal DataTables css-->
    <link href="<?php echo e(asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/datatable/responsivebootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <!--end header -->
    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">
                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">FAQs</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">FAQ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View FAQ </li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">

                            <a href="<?php echo e(url('add_faq_home')); ?>" class="btn btn-primary my-2 btn-icon-text">
                                Add FAQ
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->

                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Message List</h6>
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
                                    <div class="col-lg-12 col-md-12">
                                        <div class="table-responsive">
                                            <table id="exportexample"
                                                class="table text-center table-bordered border-t0 key-buttons text-nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th class="">S.no.</th>
                                                      
                                                        <th class="">Questions</th>
                                                      

                                                        <th class="" colspan="2">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>

                                                    <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($i); ?></td>
                                                            <td><?php echo e($s->question); ?></td>
                                                          
                                                        
                                                     

                                                           
                                                            <td><a href="<?php echo e(url('edit_faq_home/' . $s->id)); ?>"
                                                                    class="btn btn-primary">Edit</a></td>
                                                            <td>
                                                                <form action="<?php echo e(url('delete_faq_home/' . $s->id)); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="submit" class="btn btn-danger"
                                                                        onclick="return confirm('Are you sure ?')">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
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
    <!-- End Main Content-->


    <!-- End Page -->


    <!-- Internal Data Table js -->
    <script src="<?php echo e(asset('assets/plugins/datatable/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/fileexport/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/fileexport/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/fileexport/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/fileexport/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/fileexport/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/fileexport/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatable/fileexport/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/table-data.js')); ?>"></script>
    <script>
        function change_status(smart_id, str) {
            //alert(smart_id+'='+str);
            $.ajax({
                url: "<?php echo e(url('change_slider_status_home')); ?>",
                type: 'post',
                data: {
                    str: str,
                    smart_id: smart_id,
                    _token: "<?php echo e(csrf_token()); ?>"
                },
                dataType: 'json',
                success: function(res) {
                    location.reload();
                }
            });

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/desko2023/public_html/admin/resources/views/view_faq_home.blade.php ENDPATH**/ ?>