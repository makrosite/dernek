@extends('home-layout')
@section('page')
    <!-- Back Breadcrumbs Start Here -->
                <div class="back-breadcrumbs back-blog-breadcrumbs">
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
                                    <h1 class="breadcrumbs-title">Bağış Yap</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                @php
                    use App\Models\Bagis;
                    use App\Models\Bankalar;

                    // Bagis tablosunun fillable alanlarını al
                    $bagis = new \App\Models\Bagis();
                    $fields = $bagis->getFillable();

                    // Banka listesini çek
                    $bankalar = \App\Models\Bankalar::where('durum', 1)->get();
                @endphp

                <div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card shadow-lg border-0">
                                <div class="card-body p-5">
                                    <h3 class="mb-4 text-center" style="font-weight:600;">Bağış Yap</h3>
                                    @if(session('success'))
                                        <div class="alert alert-success text-center">{{ session('success') }}</div>
                                    @endif
                                    @if(session('error'))
                                        <div class="alert alert-danger text-center">{{ session('error') }}</div>
                                    @endif
                                    <form method="POST" action="{{ route('bagis.store') }}">
                                        @csrf

                                        @foreach($fields as $field)
                                            @if($field == 'banka')
                                                <div class="mb-3">
                                                    <label for="banka" class="form-label">Banka Seçiniz</label>
                                                    <select class="form-control" id="banka" name="banka" required>
                                                        <option value="">Banka Seçiniz</option>
                                                        @foreach($bankalar as $banka)
                                                            <option value="{{ $banka->id }}">{{ $banka->bankaadi }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @elseif($field == 'tutar')
                                                <div class="mb-3">
                                                    <label for="tutar" class="form-label">Bağış Tutarı</label>
                                                    <input type="number" step="0.01" class="form-control" id="tutar" name="tutar" required>
                                                </div>
                                            @elseif($field == 'adsoyad')
                                                <div class="mb-3">
                                                    <label for="adsoyad" class="form-label">Ad Soyad</label>
                                                    <input type="text" class="form-control" id="adsoyad" name="adsoyad" required>
                                                </div>
                                            @elseif($field == 'telefon')
                                                <div class="mb-3">
                                                    <label for="telefon" class="form-label">Telefon</label>
                                                    <input type="text" class="form-control" id="telefon" name="telefon">
                                                </div>
                                            @elseif($field == 'eposta')
                                                <div class="mb-3">
                                                    <label for="eposta" class="form-label">E-Posta</label>
                                                    <input type="email" class="form-control" id="eposta" name="eposta">
                                                </div>
                                            @elseif($field == 'aciklama')
                                                <div class="mb-3">
                                                    <label for="aciklama" class="form-label">Açıklama</label>
                                                    <textarea class="form-control" id="aciklama" name="aciklama" rows="3"></textarea>
                                                </div>
                                            @endif
                                        @endforeach

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-lg">Bağış Yap</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                @endsection 