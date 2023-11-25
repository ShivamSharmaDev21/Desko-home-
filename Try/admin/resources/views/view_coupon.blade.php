@extends('layout')

@section('body')
  <!-- Internal DataTables css-->
  <link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
  <!-- end header -->
  <!-- Main Content-->
  <div class="main-content side-content pt-0">
    <div class="container-fluid">
      <div class="inner-body">
        <!-- Page Header -->
        <div class="page-header">
          <div>
            <h2 class="main-content-title tx-24 mg-b-5">Coupon List</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Coupon</a></li>
              <li class="breadcrumb-item active" aria-current="page">Coupon List</li>
            </ol>
          </div>
          <div class="d-flex">
            <div class="justify-content-center">
              <a href="{{ url('add_coupons') }}" class="btn btn-primary my-2 btn-icon-text">
                Add Coupon
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
                  <h6 class="main-content-label mb-1">Category List</h6>
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
                  setTimeout(function(){
                    $('.remove_alert').fadeOut();
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
                            <th class="">Coupon Code</th>
                            <th class="">Status</th>
                            <th class="">Coupon Name</th>
                            <th class="">Date Created</th>
                            <th class="">Date Updated</th>
                            <th class="" colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          @foreach($coupon as $cat)
                            <tr>
                              <td>{{ $i }}</td>
                              <td>{{ $cat->code }}</td>
                              <td>
                                <select onchange="change_status(<?php echo $cat->id ?>, this.value)">
                                  <option value="1" <?php echo($cat->status == 1) ? 'selected' : '' ?>>Active</option>
                                  <option value="0" <?php echo($cat->status == 0) ? 'selected' : '' ?>>In-active</option>
                                </select>
                              </td>
                              <td>{{ $cat->code_name }}</td>
                              <td>{{ date('d-m-Y', strtotime($cat->created_at)) }}</td>
                              <td>{{ date('d-m-Y', strtotime($cat->updated_at)) }}</td>
                              <td>
                                  <!--Edit coupon   url('edit_category/'.$cat->cat_id)  -->
                                <a href="{{url('edit_coupon/'.$cat->id)}}" class="btn btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{url('delete_coupon/'.$cat->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure ?')">Delete</button>
                                </form>
                              </td>
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
  <script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/datatable/fileexport/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/datatable/fileexport/jszip.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/datatable/fileexport/pdfmake.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/datatable/fileexport/vfs_fonts.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.print.min.js') }}"></script>
  <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.colVis.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/table-data.js') }}"></script>
  <script>
    function change_status(cat_id, str) {
      $.ajax({
        url: "{{ url('change_coupon_status') }}",
        type: 'post',
        data: {
          str: str,
          cat_id: cat_id,
          _token: "{{ csrf_token() }}"
        },
        dataType: 'json',
        success: function (res) {
          location.reload();
        }
      });
    }
  </script>
@endsection
