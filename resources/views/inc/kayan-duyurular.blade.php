<div style="background-color: #f0f0f0; padding: 10px 0; border-bottom: 1px solid #e0e0e0; margin-bottom: 0px;">
                    <div class="container-fluid" style="padding-left:120px; padding-right:120px;">
                        @php
                             use App\Models\Duyuru;
                          $duyurular = Duyuru::all();
                            // Yazı rengi ve hız için yeni değişkenler
                            $marqueeTextColor = '#333'; // Varsayılan renk
                            $marqueeScrollAmount = 15;    // Varsayılan hız
                        @endphp
                        <marquee behavior="scroll" direction="left" scrollamount="{{ $marqueeScrollAmount }}" style="font-size: 20px; font-weight: bold; color: {{ $marqueeTextColor }}; line-height: 1.6; white-space: nowrap;">
                            @foreach($duyurular as $duyuru)
                                {{ $duyuru->baslik }}
                                @if (!$loop->last)
                                    &nbsp;&nbsp;&nbsp; • &nbsp;&nbsp;&nbsp;
                                @endif
                            @endforeach
                        </marquee>
                    </div>
                </div>
