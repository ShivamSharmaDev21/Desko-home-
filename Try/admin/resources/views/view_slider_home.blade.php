@extends('layout')

@section('body')
    <!-- Internal DataTables css-->
    <link href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
    <!--end header -->
    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">
                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Sliders</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Slider</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Slider </li>
                        </ol>
                    </div>
                   
                </div>
                <!-- End Page Header -->

                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Slider List</h6>
                                    <p class="text-muted card-sub-title"></p>
                                </div>
                                <div class="remove_alert">
                                    @if (Session::get('success'))
                                        <h6 class="alert alert-success">{{ Session::get('success') }}</h6>
                                    @endif
                                    @if (Session::get('fail'))
                                        <h6 class="alert alert-success">{{ Session::get('fail') }}</h6>
                                    @endif
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
                                                        <th class="">Slider Name</th>
                                                        <th class="">Image</th>
                                          

                                                        <th class="" colspan="2">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>

                                                    @foreach ($slider as $s)
                                                        <tr>
                                                            <td>{{ $i }}</td>
                                                            <td>{{ $s->title }}</td>
                                                            <td><img src="{{ url('public/slider_image_home/' . $s->image) }}"
                                                                    width="50" height="50"></td>

                                                           
                                                            <td><a href="{{ url('edit_slider_home/' . $s->id) }}"
                                                                    class="btn btn-primary">Edit</a></td>
                                                         
                                                        </tr>
                                                        <?php $i++; ?>
                                                    @endforeach
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
    <script src="{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/table-data.js') }}"></script>
    <script>
        function change_status(smart_id, str) {
            //alert(smart_id+'='+str);
            $.ajax({
                url: "{{ url('change_slider_status_home') }}",
                type: 'post',
                data: {
                    str: str,
                    smart_id: smart_id,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(res) {
                    location.reload();
                }
            });

        }
    </script>
@endsection
