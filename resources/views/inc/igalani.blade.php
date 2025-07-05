    @php
     use App\Models\Iletisim;
     $iletisim=Iletisim::find(1);
    @endphp

    <div class="back-contact-box back-contact-box-two">
                    <div class="container-fluid">
                        <div class="back-sec-title text-center mb-50 md-mb-30">
                            <h5 class="back-subtitle primary-color">EGESİAD</h5>
                            <h2 class="back-title title-color mb-0">Bize Ulaşın</h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="contact-box">
                                    <span class="icon-part bg-phone">
                                        <a href="tel:+08807647866"><img src="{{asset('img/telefon.png')}}" alt="Phone Icon"></a>
                                    </span>
                                    <span class="text-part">
                                        <a href="tel:{{$iletisim->telefon}}">{{$iletisim->telefon}}</a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="contact-box">
                                    <span class="icon-part secondary-bg">
                                        <a href="mailto:support@kbiz.com"><img src="{{asset('img/mail.png')}}" alt="Mail Icon"></a>
                                    </span>
                                    <span class="text-part">
                                        <a href="mailto:{{$iletisim->eposta}}">{{$iletisim->eposta}}</a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="contact-box">
                                    <span class="icon-part secondary-bg">
                                        <a href="#" target="_blank"><img src="{{asset('img/adres.png')}}" alt="Location Icon"></a>
                                    </span>
                                    <span class="text-part">
                                        <strong href="#" target="_blank">{{$iletisim->adres}}</strong>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="contact-box-btn text-center mt-50 md-mt-30">
                            <a href="https://wa.me/{{$iletisim->wpbutton}}" style="background-color: #008000; border:none; color:white;" class="back-btn success contact-btn">Bize WhatsApp ile Ulaşın</a>
                        </div>
                    </div>
                </div>
