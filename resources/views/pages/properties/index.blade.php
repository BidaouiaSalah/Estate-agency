@extends('layouts.app')

@section('content')
   <!-- ======= Property Search Section ======= -->
   <div class="click-closed"></div>
   <!--/ Form Search Star /-->
   <div class="box-collapse">
      <div class="title-box-d">
         <h3 class="title-d">Search Property</h3>
      </div>
      <span class="close-box-collapse right-boxed bi bi-x"></span>
      <div class="box-collapse-wrap form">
         <form class="form-a">
            <div class="row">
               <div class="col-md-12 mb-2">
                  <div class="form-group">
                     <label class="pb-2"
                        for="Type">Keyword</label>
                     <input type="text"
                        class="form-control form-control-lg form-control-a"
                        placeholder="Keyword">
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="Type">Type</label>
                     <select class="form-control form-select form-control-a"
                        id="Type">
                        <option>All Type</option>
                        <option>For Rent</option>
                        <option>For Sale</option>
                        <option>Open House</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="city">City</label>
                     <select class="form-control form-select form-control-a"
                        id="city">
                        <option>All City</option>
                        <option>Alabama</option>
                        <option>Arizona</option>
                        <option>California</option>
                        <option>Colorado</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="bedrooms">Bedrooms</label>
                     <select class="form-control form-select form-control-a"
                        id="bedrooms">
                        <option>Any</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="garages">Garages</label>
                     <select class="form-control form-select form-control-a"
                        id="garages">
                        <option>Any</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="bathrooms">Bathrooms</label>
                     <select class="form-control form-select form-control-a"
                        id="bathrooms">
                        <option>Any</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="price">Min Price</label>
                     <select class="form-control form-select form-control-a"
                        id="price">
                        <option>Unlimite</option>
                        <option>$50,000</option>
                        <option>$100,000</option>
                        <option>$150,000</option>
                        <option>$200,000</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-12">
                  <button type="submit"
                     class="btn btn-b">Search Property</button>
               </div>
            </div>
         </form>
      </div>
   </div><!-- End Property Search Section -->>

   <main id="main">

      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-8">
                  <div class="title-single-box">
                     <h1 class="title-single">{{ __('Our Amazing Properties') }}</h1>
                     <span class="color-text-a">{{ __('Properties') }}</span>
                  </div>
               </div>
               <div class="col-md-12 col-lg-4">
                  <nav aria-label="breadcrumb"
                     class="breadcrumb-box d-flex justify-content-lg-end">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active"
                           aria-current="page">
                           {{ __('Properties') }}
                        </li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </section><!-- End Intro Single-->

      <!-- ======= Property Grid ======= -->
      <section class="property-grid grid">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="grid-option">
                     <form>
                        <select class="custom-select">
                           <option selected>All</option>
                           <option value="1">New to Old</option>
                           <option value="2">For Rent</option>
                           <option value="3">For Sale</option>
                        </select>
                     </form>
                  </div>
               </div>
               @foreach ($properties as $property)
                  <div class="col-md-4">
                     <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                           <img src="{{ $property->getFirstMediaUrl('images', 'grid') }}"
                              alt="{{ $property->title }}"
                              class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                           <div class="card-overlay-a-content">
                              <div class="card-header-a">
                                 <h2 class="card-title-a">
                                    <a href="property-single.html">{{ $property->price }} Mount
                                       <br /> {{ $property->title }}</a>
                                 </h2>
                              </div>
                              <div class="card-body-a">
                                 <div class="price-box d-flex">
                                    <span class="price-a">rent | $ 12.000</span>
                                 </div>
                                 <a href="{{ route('properties.show', $property) }}"
                                    class="link-a">Click here to view
                                    <span class="bi bi-chevron-right"></span>
                                 </a>
                              </div>
                              <div class="card-footer-a">
                                 <ul class="card-info d-flex justify-content-around">
                                    <li>
                                       <h4 class="card-info-title">Area</h4>
                                       <span>{{ $property->space }}m
                                          <sup>2</sup>
                                       </span>
                                    </li>
                                    <li>
                                       <h4 class="card-info-title">Beds</h4>
                                       <span>{{ $property->bedrooms }}</span>
                                    </li>
                                    <li>
                                       <h4 class="card-info-title">Baths</h4>
                                       <span>{{ $property->bathrooms }}</span>
                                    </li>
                                    <li>
                                       <h4 class="card-info-title">Garages</h4>
                                       <span>{{ $property->garages }}</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <nav class="pagination-a pagination justify-content-end">
                        {!! $properties->links() !!}
                  </nav>
               </div>
            </div>
         </div>
      </section><!-- End Property Grid Single-->

   </main><!-- End #main -->
@endsection
