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
                        <h2 class="main-content-title tx-24 mg-b-5">View Contact Form </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Contact Form </a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Contact Form</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">

                            <a href="{{ url('/view_msg_home') }}" class="btn btn-primary my-2 btn-icon-text">
                                Contact Form List
                            </a>
                        </div>
                    </div>
                </div>

                <!-- End Page Header -->

             
                    <div class="row row-sm">
                        <div class="col-lg-10 col-md-10">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-1"> View Contact Form </h6>
                                        <p class="text-muted card-sub-title"></p>
                                    </div>
                                    <div class="remove_alert">
                                      
                                    </div>
                                    <script>
                                        setTimeout(function() {
                                            $('.remove_alert').fadeOut();;
                                        }, 3000);
                                    </script>

                                    <div class="row row-sm">








                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="title" value="{{ $form->name }}" required
                                                    class="form-control" id="floatingInput" placeholder="Slider name" readonly>
                                                <label for="floatingInput">Name</label>
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="title" value="{{ $form->email }}" required
                                                    class="form-control" id="floatingInput" placeholder="Slider name" readonly>
                                                <label for="floatingInput">Email</label>
                                               
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="title" value="{{ $form->phone_num }}" required
                                                    class="form-control" id="floatingInput" placeholder="Slider name" readonly>
                                                <label for="floatingInput">Phone Number</label>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="title" value="{{ $form->profession }}" required
                                                    class="form-control" id="floatingInput" placeholder="Slider name" readonly>
                                                <label for="floatingInput">Profession</label>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3">
                                            <label></label>
                                          <div style="color: #2851b4;font-size: 14px;" > Message</div> <br>  {{$form->msg}}
                                             
                                               
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
