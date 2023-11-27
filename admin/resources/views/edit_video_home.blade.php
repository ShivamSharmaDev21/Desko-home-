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
                        <h2 class="main-content-title tx-24 mg-b-5">Edit Video </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Video
                                </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Video</li>
                        </ol>
                    </div>

                </div>

                <form action="{{ url('update_video_home') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                                <input type="hidden" name="id" value="{{ $video->id }}" required
                                                    class="form-control" id="floatingInput" placeholder="Slider name">

                                            </div>
                                        </div>

                                        <div class="form-floating mb-3">


                                            <input type="text" name="url" value="{{ $video->url }}" class="form-control" id="floatingInput"
                                                placeholder="Video">

                                            <input type="hidden" name="hidden_url" value="{{ $video->url }}"
                                                class="form-control" id="floatingInput" placeholder="Video">
                                            <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
                                            <label for="floatingInput">Youtube Video ID</label>
                                            @error('url')
                                                <span class="error">{{ "Youtube Video ID is required" }}</span>
                                            @enderror



                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="btn_caption" value="{{ $video->btn_caption }}"
                                                    required class="form-control" id="floatingInput"
                                                    placeholder="Heading Name">
                                                <label for="floatingInput">Button Name</label>
                                                @error('btn_caption')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="btn_link" value="{{ $video->btn_link }}"
                                                    required class="form-control" id="floatingInput"
                                                    placeholder="Heading Name">
                                                <label for="floatingInput">Button Link</label>
                                                @error('btn_link')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
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

                        <iframe  src="https://www.youtube.com/embed/{{ $video->url }}"
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
@endsection
