@extends('home-layout')


@section('page')

  <div class="back-wrapper">
            <div class="back-wrapper-inner">

                <!-- Slider Start -->
               @include('inc.slider')
               @include('inc.kayan-duyurular')
                <!-- Slider End -->
               @include('inc.kayan-logolar')

                {{-- Blog Kartları Kayan Alanı --}}


                        {{-- Blog Kartları Alanı (Slider) --}}
                            @include('inc.haberler')
                {{-- Blog Kartları Kayan Alanı Sonu --}}



                <!-- Start Service here -->

                <!-- End Service here -->

                <!-- Start About here -->
                <hr>
                <h2 class="back-title text-center">Başkanımız  </h2>
                @include('inc.baskan')
                <!-- End About here -->

                <!-- Start Service here -->
              @include('inc.services')
                <!-- End Service here -->

                <!-- Start Tab here -->
                @include('inc.hizmet')
                <!-- End Tab here -->

                <!-- Start Team here -->
                @include('inc.uyeler')
                <!-- End Team here -->
@include('inc.sss')
                <!-- Start Faq here -->

                <!-- End Faq here -->

                <!-- Start awards here -->
            <!--- KURUMLAR BURAYA --->
                <!-- End awards here -->

                <!-- Start Clients here -->


                <!-- Start Design Tool here -->
                    <div style="height:150px;"></div>
            </div>
        </div>

        @endsection


