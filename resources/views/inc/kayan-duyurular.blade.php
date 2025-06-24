<div style="background-color: #f0f0f0; padding: 10px 0; border-bottom: 1px solid #e0e0e0; margin-bottom: 0px;">
                    <div class="container-fluid" style="padding-left:120px; padding-right:120px;">
                        @php
                            $duyurular = [
                                'ÖNEMLİ DUYURU: Yeni hizmetlerimiz yayında! Detaylar için web sitemizi ziyaret edin.',
                                'KAMPANYALARIMIZDAN HABERDAR OLMAK İÇİN BÜLTENİMİZE ABONE OLMAYI UNUTMAYIN.',
                                'YENİ BİR DUYURU DAHA BURADA YER ALABİLİR!',
                                'Örnek Duyuru 4: Web sitemizdeki yenilikleri kaçırmayın!',
                                'Örnek Duyuru 5: Özel indirimler için hemen kaydolun!'
                            ];
                            // Yazı rengi ve hız için yeni değişkenler
                            $marqueeTextColor = '#333'; // Varsayılan renk
                            $marqueeScrollAmount = 10;    // Varsayılan hız
                        @endphp
                        <marquee behavior="scroll" direction="left" scrollamount="{{ $marqueeScrollAmount }}" style="font-size: 20px; font-weight: bold; color: {{ $marqueeTextColor }}; line-height: 1.6; white-space: nowrap;">
                            @foreach($duyurular as $index => $duyuru)
                                {{ $duyuru }}
                                @if (!$loop->last)
                                    &nbsp;&nbsp;&nbsp; • &nbsp;&nbsp;&nbsp;
                                @endif
                            @endforeach
                        </marquee>
                    </div>
                </div>