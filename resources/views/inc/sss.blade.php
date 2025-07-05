
@php
    use App\Models\Sss;
    $sss = Sss::all();
@endphp
<hr/>
<div class="back-faq">
                    <div class="container">
                        <div class="back-sec-title text-center mb-50 md-mb-30">

                            <h2 class="back-title mb-0">Sıkça Sorulan <br>Sorular</h2>
                        </div>
                        <div class="back-tab-gird grid-style">

                                <div class="col-lg-12">
                                    <div class="tab-content">
                                        <div id="four" class="single-tab-part tab-pane fade active show">
                                            <div id="back-accordion-1" class="back-accordion">
                                                    @foreach ($sss as $s )


                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading-5">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                             {{$s->soru}}
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#back-accordion-1">
                                                        <div class="accordion-body mb-0">
                                                            <span class="d-block">{{$s->cevap}}</span>
                                                        </div>
                                                    </div>
                                                </div>
 @endforeach

                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="offset-lg-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
