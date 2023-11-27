@extends('layout')

@section('body')
<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

  <div class="main-content side-content pt-0">
    <div class="container-fluid">
      <div class="inner-body">
        <!-- Page Header -->
        <div class="page-header">
          
          <div class="d-flex">
            <div class="justify-content-center">
              <a href="{{ url('/coupons_list') }}" class="btn btn-primary my-2 btn-icon-text">
                Coupons List
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
                  <h6 class="main-content-label mb-1">Add Coupon</h6>
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
                <form action="{{ url('store_coupon') }}" method="get">
                  @csrf
                    <div class="row row-sm">
    											
                        <div class="col-md-4 mb-2">
                          <div class="form-floating mb-3">
                            <input type="text" name="coupon_code"  required class="form-control" id="coupon_code" placeholder="Coupon Code">
                            <label for="floatingInput">Coupon Code</label>
                           
                          </div>
                        </div>
                        
                        
                        
                        <div class="col-md-4 mb-2">
                          <div class="form-floating mb-3">
                            <input type="text" name="code_name"  required class="form-control" id="code_name" placeholder="Coupon Name">
                            <label for="floatingInput">Coupon Name</label>
                            
                          </div>
                        </div>
                        
                        
                        <div class="col-md-4 mb-2">
                          <div class="form-floating mb-3">
                            <input type="text" name="product_price" class="form-control" id="product_price" placeholder="Product Price">
                            <label for="floatingInput">Product Price</label>
                            
                          </div>
                        </div>
                    
    					@if(0)
        					<div class="col-md-6 mb-2">
    					        <div class="form-floating mb-3">
    						        <input type="file"  name="coupan_image"  class="form-control" id="coupan_image" placeholder="Coupon Image">
    						        <input type="hidden"  name="coupan_image_hidden"  value=""  class="form-control" id="coupan_image_hidden" placeholder="Coupon Image">
    					                <span class="text-danger">(accept-.png,.jpg,.jpeg)</span>
    					            <label for="floatingInput">Coupon Image</label>
    					             
    							</div>
    						</div>
						@endif
    					
    					
    					
    					<div class="form-group col-sm-12">
    						<label>Terms and conditions<span class="required">*</span></label>
    						<textarea type="text" rows="4" required  placeholder="Please enter terms and conditions here..." class="form-control" name="t_and_q" id="t_and_q"></textarea>
    					</div>
    					
                    </div>
                  
                  
                    <div class="row row-sm">
                        <div class="col-md-6">
                            <button type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5">Add</button>
                            <div class="justify-content-center">
                              <a href="{{ url('/coupons_list') }}" class="btn btn-primary my-2 btn-icon-text btn ripple     btn-outline-danger pd-x-30 ">
                                Cancel
                              </a>
                            </div>
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
@endsection
