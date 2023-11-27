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
                        <h2 class="main-content-title tx-24 mg-b-5">Add Feature Image </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feature Image </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Feature Image</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">

                            <a href="{{ url('/view_slider') }}" class="btn btn-primary my-2 btn-icon-text">
                                Feature Image List
                            </a>
                        </div>
                    </div>
                </div>

                <!-- End Page Header -->
                <form action="{{ url('store_feature_image_home') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-1"> Add Feature Image </h6>
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
                                                <input type="file" name="image" class="form-control" id="floatingInput"
                                                    placeholder="Feature image">
                                                <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
                                                <label for="floatingInput">Feature Image</label>
                                                @error('image')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
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
                                                    <input type="text" name="heading1"
                                                        value="{{ old('heading1') }}" required class="form-control"
                                                        id="floatingInput" placeholder="Heading Name">
                                                    <label for="floatingInput">Heading Name</label>
                                                    @error('heading1')
                                                        <span class="error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <div class="form-floating mb-3">
                                                    <!--<input type="text"  name="description" value="{{ old('description') }}" required class="form-control" id="floatingInput" placeholder="Product description">-->
                                                    <textarea name="description1" class="form-control" placeholder="Enter Heading Description"></textarea>

                                                    <!--<label for="floatingInput">Product Description</label>-->
                                                    @error('description1')
                                                        <span class="error">{{ $message }}</span>
                                                    @enderror
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
                                                        <input type="text" name="heading2"
                                                            value="{{ old('heading2') }}" required class="form-control"
                                                            id="floatingInput" placeholder="Heading Name">
                                                        <label for="floatingInput">Heading Name</label>
                                                        @error('heading2')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <div class="form-floating mb-3">
                                                        <!--<input type="text"  name="description" value="{{ old('description') }}" required class="form-control" id="floatingInput" placeholder="Product description">-->
                                                        <textarea name="description2" class="form-control" rows="3" style="height: 100px;"
                                                            placeholder="Enter Heading Description"></textarea>

                                                        <!--<label for="floatingInput">Product Description</label>-->
                                                        @error('description2')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
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
                                                            <input type="text" name="heading3"
                                                                value="{{ old('heading3') }}" required
                                                                class="form-control" id="floatingInput"
                                                                placeholder="Heading Name">
                                                            <label for="floatingInput">Heading Name</label>
                                                            @error('heading3')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mb-2">
                                                        <div class="form-floating mb-3">
                                                            <!--<input type="text"  name="description" value="{{ old('description') }}" required class="form-control" id="floatingInput" placeholder="Product description">-->
                                                            <textarea name="description3" class="form-control" rows="3" style="height: 100px;"
                                                                placeholder="Enter Heading Description"></textarea>

                                                            <!--<label for="floatingInput">Product Description</label>-->
                                                            @error('description3')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
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
                                                                <input type="text" name="heading4"
                                                                    value="{{ old('heading4') }}" required
                                                                    class="form-control" id="floatingInput"
                                                                    placeholder="Heading Name">
                                                                <label for="floatingInput">Heading Name</label>
                                                                @error('heading4')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 mb-2">
                                                            <div class="form-floating mb-3">
                                                                <!--<input type="text"  name="description" value="{{ old('description') }}" required class="form-control" id="floatingInput" placeholder="Product description">-->
                                                                <textarea name="description4" class="form-control" rows="3" style="height: 100px;"
                                                                    placeholder="Enter Heading Description"></textarea>

                                                                <!--<label for="floatingInput">Product Description</label>-->
                                                                @error('description4')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
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
                                                                    <input type="text" name="heading5"
                                                                        value="{{ old('heading5') }}" required
                                                                        class="form-control" id="floatingInput"
                                                                        placeholder="Heading Name">
                                                                    <label for="floatingInput">Heading Name</label>
                                                                    @error('heading5')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 mb-2">
                                                                <div class="form-floating mb-3">
                                                                    <!--<input type="text"  name="description" value="{{ old('description') }}" required class="form-control" id="floatingInput" placeholder="Product description">-->
                                                                    <textarea name="description5" class="form-control" rows="3" style="height: 100px;"
                                                                        placeholder="Enter Heading Description"></textarea>

                                                                    <!--<label for="floatingInput">Product Description</label>-->
                                                                    @error('description5')
                                                                        <span class="error">{{ $message }}</span>
                                                                    @enderror
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
                                                                        <input type="text" name="heading6"
                                                                            value="{{ old('heading6') }}" required
                                                                            class="form-control" id="floatingInput"
                                                                            placeholder="Heading Name">
                                                                        <label for="floatingInput">Heading Name</label>
                                                                        @error('heading6')
                                                                            <span class="error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12 mb-2">
                                                                    <div class="form-floating mb-3">
                                                                        <!--<input type="text"  name="description" value="{{ old('description') }}" required class="form-control" id="floatingInput" placeholder="Product description">-->
                                                                        <textarea name="description6" class="form-control" rows="3" style="height: 100px;"
                                                                            placeholder="Enter Heading Description"></textarea>

                                                                        <!--<label for="floatingInput">Product Description</label>-->
                                                                        @error('description6')
                                                                            <span class="error">{{ $message }}</span>
                                                                        @enderror
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
@endsection
