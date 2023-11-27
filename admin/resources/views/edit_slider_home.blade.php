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
                                <form action="{{ url('update_slider_home') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row row-sm">

                                        <div class="col-md-6 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="slider_name" value="{{ $slider->title }}"
                                                    required class="form-control" id="floatingInput"
                                                    placeholder="Slider name">
                                                <input type="hidden" name="id" value="{{ $slider->id }}" required
                                                    class="form-control" id="floatingInput" placeholder="Slider name">
                                                <label for="floatingInput">Slider Name</label>
                                                @error('slider_name')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="file" name="image" class="form-control" id="floatingInput"
                                                    placeholder="Slider image">
                                                <input type="hidden" name="hidden_image"value="{{ $slider->image }}"
                                                    class="form-control" id="floatingInput" placeholder="Slider image">
                                                <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
                                                <label for="floatingInput">Slider Image</label>
                                                @error('image')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <!--<input type="text"  name="description" value="{{ old('description') }}" required class="form-control" id="floatingInput" placeholder="Product description">-->
                                                <textarea name="description" class="form-control"  rows="3" style="height: 100px;"
                                                    placeholder="Enter Slider description">{{ $slider->description }}</textarea>

                                                <!--<label for="floatingInput">Product Description</label>-->
                                                @error('description')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
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


                                <a target="_blank" href="{{ url('public/slider_image_home/' . $slider->image) }}">
                                    <img src="{{ url('public/slider_image_home/' . $slider->image) }}"
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
                                            <input type="text" name="btn1_caption" value="{{ $slider->btn1_caption }}"
                                                required class="form-control" id="floatingInput" placeholder="Slider name">
                                            <label for="floatingInput">Button Caption</label>
                                            @error('btn1_caption')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="btn1_link" value="{{ $slider->btn1_link }}"
                                                required class="form-control" id="floatingInput" placeholder="Slider name">
                                            <label for="floatingInput">Button URL</label>
                                            @error('btn1_link')
                                                <span class="error">{{ "This should be a url" }}</span>
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
                                    <h6 class="main-content-label mb-1"> Button 2 </h6>
                                    <p class="text-muted card-sub-title"></p>
                                </div>
                                <div class="row row-sm">

                                    <div class="col-md-12 mb-2">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="btn2_caption"
                                                value="{{ $slider->btn2_caption }}" required class="form-control"
                                                id="floatingInput" placeholder="Slider name">
                                            <label for="floatingInput">Button Caption</label>
                                            @error('btn2_caption')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="btn2_link" value="{{ $slider->btn2_link }}"
                                                required class="form-control" id="floatingInput"
                                                placeholder="Slider name">
                                            <label for="floatingInput">Button URL</label>
                                            @error('btn2_link')
                                                <span class="error">{{ "This should be a url" }}</span>
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
@endsection
