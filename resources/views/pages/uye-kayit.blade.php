@extends('home-layout')
@section('page')


     <div class="back-wrapper">
            <div class="back-wrapper-inner">
                <!-- Back Breadcrumbs Start Here -->
                <div class="back-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                         @php
    use App\Models\Ayarlar;
    $resim = Ayarlar::find(1);
    $bc = $resim->bc;
@endphp
                <img class="desktop" src="{{ asset('logo/' . $bc) }}" alt="Breadcrumbs Image" style="width:100%; height:430px; object-fit:cover; object-position:center;">
                <img class="mobile" src="{{ asset('logo/' . $bc) }}" alt="Breadcrumbs Image" style="width:100%; height:230px; object-fit:cover; object-position:center;">

                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <h1 class="breadcrumbs-title">Üye Kayıt</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


 <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div id="uyeKayitFormWrapper">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h3 class="mb-4 text-center" style="font-weight:600;">Üye Kayıt Formu</h3>
                        <form id="uyeKayitForm" method="POST" action="{{ route('uye.kayit.post') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="adi" class="form-label">Adınız</label>
                                    <input type="text" class="form-control" id="adi" name="adi">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="soyadi" class="form-label">Soyadınız</label>
                                    <input type="text" class="form-control" id="soyadi" name="soyadi">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="baba_adi" class="form-label">Baba Adı</label>
                                    <input type="text" class="form-control" id="baba_adi" name="baba_adi">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="anne_adi" class="form-label">Anne Adı</label>
                                    <input type="text" class="form-control" id="anne_adi" name="anne_adi">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="dogum_yeri" class="form-label">Doğum Yeri</label>
                                    <input type="text" class="form-control" id="dogum_yeri" name="dogum_yeri">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="dogum_tarihi" class="form-label">Doğum Tarihi</label>
                                    <input type="date" class="form-control" id="dogum_tarihi" name="dogum_tarihi">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tc_kimlik_no" class="form-label">T.C. Kimlik No</label>
                                <input type="text" class="form-control" id="tc_kimlik_no" name="tc_kimlik_no">
                            </div>
                            <div class="mb-3">
                                <label for="meslegi" class="form-label">Meslek</label>
                                <input type="text" class="form-control" id="meslegi" name="meslegi">
                            </div>
                            <div class="mb-3">
                                <label for="kan_grubu" class="form-label">Kan Grubu</label>
                                <input type="text" class="form-control" id="kan_grubu" name="kan_grubu">
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="is_telefonu" class="form-label">İş Telefonu</label>
                                    <input type="text" class="form-control" id="is_telefonu" name="is_telefonu">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ev_telefonu" class="form-label">Ev Telefonu</label>
                                    <input type="text" class="form-control" id="ev_telefonu" name="ev_telefonu">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="cep_telefonu" class="form-label">Cep Telefonu</label>
                                <input type="text" class="form-control" id="cep_telefonu" name="cep_telefonu">
                            </div>
                            <div class="mb-3">
                                <label for="eposta" class="form-label">E-Posta</label>
                                <input type="email" class="form-control" id="eposta" name="eposta">
                            </div>
                            <div class="mb-3">
                                <label for="nufusa_kayit_il_ilce_mahalle" class="form-label">Nüfusa Kayıtlı Olduğu Yer</label>
                                <input type="text" class="form-control" id="nufusa_kayit_il_ilce_mahalle" name="nufusa_kayit_il_ilce_mahalle">
                            </div>
                            <div class="mb-3">
                                <label for="ikamet_adresi" class="form-label">İkamet Adresi</label>
                                <input type="text" class="form-control" id="ikamet_adresi" name="ikamet_adresi">
                            </div>
                            <div class="mb-3">
                                <label for="is_adresi" class="form-label">İş Adresi</label>
                                <input type="text" class="form-control" id="is_adresi" name="is_adresi">
                            </div>
                            <div class="mb-3">
                                <label for="ogrenim_durumu" class="form-label">Öğrenim Durumu</label>
                                <input type="text" class="form-control" id="ogrenim_durumu" name="ogrenim_durumu">
                            </div>
                            <div class="mb-3">
                                <label for="firmaunvanı" class="form-label">Firma Ünvanı</label>
                                <input type="text" class="form-control" id="firmaunvanı" name="firmaunvanı">
                            </div>
                            <div class="mb-3">
                                <label for="resim" class="form-label">Üye Fotoğrafı</label>
                                <input type="file" class="form-control" id="resim" name="resim" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary w-100" style="font-weight:600; font-size:1.1rem;">Başvuruyu Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="basvuruBasarili" class="alert alert-success text-center mt-4 d-none" style="font-size:1.2rem; font-weight:500;">
                Başvurunuz alınmıştır. En kısa sürede sizinle iletişime geçeceğiz.
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('uyeKayitForm');
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Zorunlu alan yok, sadece AJAX ile gönder
        let formData = new FormData(form);
        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(async response => {
            if (response.ok) {
                document.getElementById('uyeKayitFormWrapper').style.display = 'none';
                document.getElementById('basvuruBasarili').classList.remove('d-none');
            } else {
                let data = await response.json();
                if (data.errors) {
                    Object.keys(data.errors).forEach(function(key) {
                        let input = form.querySelector(`[name="${key}"]`);
                        if (input) {
                            input.classList.add('is-invalid');
                            let feedback = input.nextElementSibling;
                            if (feedback && feedback.classList.contains('invalid-feedback')) {
                                feedback.textContent = data.errors[key][0];
                            }
                        }
                    });
                }
            }
        })
        .catch(error => {
            alert('Bir hata oluştu. Lütfen tekrar deneyiniz.');
        });
    });

    // Alanlara yazınca hata mesajı kalksın
    form.querySelectorAll('input, textarea, select').forEach(function(input) {
        input.addEventListener('input', function() {
            input.classList.remove('is-invalid');
        });
    });
});
</script>


                
 @include('inc.igalani')
@endsection
