{{-- --------------------------------  section başı---------------------------------------- --}}
@extends('home-layout')
@section('page')

<style>

.card-img-top{
    border-radius: 50%;
    height: 250px !important;
    width: 250px !important;
    position: relative;
    left: 80px;
    top: -80px;
    object-fit: cover;
}
.card{
    border-radius: 0;
    cursor: pointer;
    margin-top: 100px !important;
}
.card:hover{
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;

}
.card-body{
    margin-top: -50px;
}

.sosyalikon{
    margin-left:40px;
}
.bi{
    font-size: 25px;
}
@media only screen and (max-width: 600px) {
    .card-img-top{

        left: 48px !important;

    }
  }

</style>

<div class="back-wrapper">
    <div class="back-wrapper-inner">
        <!-- Back Breadcrumbs Start Here -->
        <div class="back-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="assets/images/breadcrumbs/banner-inner.jpg" alt="Breadcrumbs Image">
                <img class="mobile" src="assets/images/breadcrumbs/banner-inner-mobile.jpg" alt="Breadcrumbs Image">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title">Üyelerimiz</h1>

                            <div class="back-nav">
                                <ul>
                                    <li><a href="/">Anasayfa</a></li>
                                    <li>Üyeler</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Breadcrumbs End Here -->

        <section class="uyeler-section py-5" style="background: #f8f9fa;">
            <div class="container-fluid">
                <div class="text-center mb-5">
                    <h2 class="back-title mb-2" style="font-weight:700;">Üyelerimiz</h2>

                    <p class="lead" style="color:#666;">Derneğimizin Aktif Üyeleri</p>
                    <hr style="margin-left:150px; margin-right:150px; background-color:rgba(4, 34, 202, 0.678);">
                </div>


            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

                {{-- üye kartı --}}
            <div class="col">
              <div class="card">
                <img src="./img/user1.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Leanne Graham</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, neque.</p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <i class="bi bi-facebook sosyalikon"></i>
                    <i class="bi bi-linkedin sosyalikon"></i>
                    <i class="bi bi-envelope-fill sosyalikon"></i>
                    <i class="bi bi-whatsapp sosyalikon"></i>
                </div>
              </div>
            </div>
             {{-- üye kartı --}}


                             {{-- üye kartı --}}
            <div class="col">
              <div class="card">
                <img src="./img/user1.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Leanne Graham</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, neque.</p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <i class="bi bi-facebook sosyalikon"></i>
                    <i class="bi bi-linkedin sosyalikon"></i>
                    <i class="bi bi-envelope-fill sosyalikon"></i>
                    <i class="bi bi-whatsapp sosyalikon"></i>
                </div>
              </div>
            </div>
             {{-- üye kartı --}}

                             {{-- üye kartı --}}
            <div class="col">
              <div class="card">
                <img src="./img/user1.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Leanne Graham</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, neque.</p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <i class="bi bi-facebook sosyalikon"></i>
                    <i class="bi bi-linkedin sosyalikon"></i>
                    <i class="bi bi-envelope-fill sosyalikon"></i>
                    <i class="bi bi-whatsapp sosyalikon"></i>
                </div>
              </div>
            </div>
             {{-- üye kartı --}}
                             {{-- üye kartı --}}
            <div class="col">
              <div class="card">
                <img src="./img/user1.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Leanne Graham</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, neque.</p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <i class="bi bi-facebook sosyalikon"></i>
                    <i class="bi bi-linkedin sosyalikon"></i>
                    <i class="bi bi-envelope-fill sosyalikon"></i>
                    <i class="bi bi-whatsapp sosyalikon"></i>
                </div>
              </div>
            </div>
             {{-- üye kartı --}}

                             {{-- üye kartı --}}
            <div class="col">
              <div class="card">
                <img src="./img/user1.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Leanne Graham</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, neque.</p>
                </div>
                <div class="d-flex justify-content-evenly p-4">
                    <i class="bi bi-facebook sosyalikon"></i>
                    <i class="bi bi-linkedin sosyalikon"></i>
                    <i class="bi bi-envelope-fill sosyalikon"></i>
                    <i class="bi bi-whatsapp sosyalikon"></i>
                </div>
              </div>
            </div>
             {{-- üye kartı --}}

          </div>

            </div>
        </section>
    <!-- Call to Action Start -->
    <section class="cta-section" style="background: url('assets/images/cta-bg.jpg') center center/cover no-repeat; width: 100%; padding: 80px 0; position: relative; margin-bottom:300px;">
        <div style="background: rgba(204, 204, 204, 0.73); position: absolute; top:0; left:0; width:100%; height:100%;"></div>
        <div class="container position-relative" style="z-index:2;">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white">
                    <h2 class="mb-4" style="font-weight:700; font-size:2.5rem;">EGESİAD Ailesine Katılmak İster misiniz?</h2>
                    <p class="mb-4" style="font-size:1.25rem;">Birlikte daha güçlü bir gelecek için aramıza katılın, iş dünyasında fark yaratın!</p>
                    <a href="/iletisim" class="btn btn-success btn-lg px-5 py-3" style="font-size:1.2rem; font-weight:600; border-radius: 30px; box-shadow: 0 4px 24px rgba(0,128,0,0.15);">Üye Olmak İstiyorum</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action End -->


    </div>
</div>

@endsection
