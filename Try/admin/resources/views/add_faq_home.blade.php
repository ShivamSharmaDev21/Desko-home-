@extends('layout')

@section('body')
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
                        <h2 class="main-content-title tx-24 mg-b-5">Add FAQ </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">FAQ </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add FAQ</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">

                            <a href="{{ url('/view_faq_home') }}" class="btn btn-primary my-2 btn-icon-text">
                                FAQ List
                            </a>
                        </div>
                    </div>
                </div>
                <form action="{{ url('store_faq_home') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- End Page Header -->
                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-1"> Add FAQ </h6>
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

                                       




                                      
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="question"
                                                    value="{{ old('name') }}" required class="form-control"
                                                    id="floatingInput" placeholder="Slider name">
                                                <label for="floatingInput">Question</label>
                                                @error('question')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <!--<input type="text"  name="description" value="{{ old('description') }}" required class="form-control" id="floatingInput" placeholder="Product description">-->
                                               
                                              
                                                <textarea name="ans" class="form-control"  rows="3" style="height: 100px;" placeholder="Enter FAQ description"></textarea>

                                                <!--<label for="floatingInput">Product Description</label>-->
                                                @error('ans')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
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
@endsection
