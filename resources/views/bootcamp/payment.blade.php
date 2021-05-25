@extends('layouts.app')

@section('content')
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-2" data-background="{{ asset('images/banner/4.jpg') }}">
  <div class="text-block">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 v-center">
          <div class="bread-inner">
            <div class="bread-menu">
              <ul>
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="#">Theme</a>
                </li>
                <li><a href="#">HTML Template</a>
                </li>
              </ul>
            </div>
            <div class="bread-title">
              <h2>Niwax - Creative Agency & Portfolio HTML Template</h2>
              <p class="mt10">Multipurpose Landing Page HTML Template</p>
              <div class="btn-grp mt40">
                <a href="#" class="btn-main bg-btn lnk">Live Preview <i class="fas fa-share"></i> <span
                    class="circle"></span></a>
                <a href="#" class="btn-main bg-btn3 lnk">Buy Now <i class="fas fa-shopping-cart"></i> <span
                    class="circle"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--end Breadcrumb Area-->
<!--shop products-->
<section class="shop-products-prvw pt20 pb60">
  <div class="container shop-container">
    <div class="row">

      <div class="col-lg-8">

        <div class="rpb-shop-prevw">
          <img src="{{ asset('images/shop/item-perview.jpg') }}" class="w-100" alt="img">
        </div>

      </div>

      <div class="col-lg-4">

        <div class="rpb-item-infodv">
          <ul>
            <li class="price">
              <strong>Price</strong>
              <div class="nx-rt">
                <div class="rpb-itm-pric"> <span class="offer-prz"> $17 </span> <span class="regular-prz">$25</span>
                </div>
              </div>
            </li>
            <li>
              <strong>Last Update</strong>
              <div class="nx-rt">Jan 18, 2021</div>
            </li>
            <li>
              <strong>Created</strong>
              <div class="nx-rt">Jan 10, 2021</div>
            </li>
            <li>
              <strong>High Resolution</strong>
              <div class="nx-rt">Yes</div>
            </li>

            <li>
              <strong>Columns</strong>
              <div class="nx-rt">4+</div>
            </li>

            <li>
              <strong>Layout</strong>
              <div class="nx-rt">Responsive</div>
            </li>

            <li>
              <a href="#" class="btn-main bg-btn lnk w-100">Add to Cart <i class="fas fa-shopping-cart"></i> <span
                  class="circle"></span> </a>
              <a href="#" class="btn-main bg-btn3 lnk w-100 mt10">Buy Now <span class="circle"></span> </a>
            </li>

          </ul>
        </div>


      </div>
    </div>
  </div>
</section>
@endsection

@push('css')
<style>
  
</style>
@endpush