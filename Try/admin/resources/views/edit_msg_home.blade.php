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
                        <h2 class="main-content-title tx-24 mg-b-5">Edit Message </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Message </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Message</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">

                            <a href="{{ url('/view_msg_home') }}" class="btn btn-primary my-2 btn-icon-text">
                                Message List
                            </a>
                        </div>
                    </div>
                </div>

                <!-- End Page Header -->

                <form action="{{ url('update_msg_home') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row row-sm">
                        <div class="col-lg-10 col-md-10">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-1"> Edit Message </h6>
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
                                                    placeholder="Message image">
                                                <!--<span class="text-danger">(accept-.png,.jpg,.jpeg)</span>-->
                                                <label for="floatingInput">Message Image</label>
                                                @error('image')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="title"
                                                    value="{{ $msg->title }}" required class="form-control"
                                                    id="floatingInput" placeholder="Slider name">
                                                <label for="floatingInput">Message Title</label>
                                                @error('name')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <input type="hidden" name="id" value="{{ $msg->id }}" required
                                        class="form-control" id="floatingInput" placeholder="Slider name">

                                        <input type="hidden" name="hidden_image"value="{{ $msg->image }}"
                                        class="form-control" id="floatingInput" placeholder="Slider image">
                                       


                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <!--<input type="text"  name="description" value="{{ old('description') }}" required class="form-control" id="floatingInput" placeholder="Product description">-->


                                                <textarea  class="form-control" rows="3" name="description"
                                                    style="height: 100px;"placeholder="Enter Message description">{{ $msg->description }}</textarea>

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


                                    <a target="_blank" href="{{ url('public/msg_image_home/' . $msg->image) }}">
                                        <img src="{{ url('public/msg_image_home/' . $msg->image) }}" alt="Forest"
                                            style="width:150px">
                                    </a>
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
