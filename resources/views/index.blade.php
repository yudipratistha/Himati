@extends('layouts.app')

@section('content')
<section id="slider-sec" class="slider4">
        <div id="slider4" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="7000">
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox" id="beranda">
                <div class="carousel-item fullwidth active">
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <div class="container">
                        <div class="row justify-content-center">
                            <!-- Column -->
                            <div class="col-lg-7 col-md-6 align-self-center text-center" data-aos="fade-up" data-aos-duration="1200">
                            <h1 class="title typewrite" data-type='["HMTI","Kabinet","{{$kabinet}}"]'>&nbsp;</h1>
                                <h4 class="subtitle font-light">Himpunan Mahasiswa Teknologi Informasi<br/>Universitas Udayana</h4>
                            </div>
                            <!-- Column -->
                        </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                    <!-- Slide Background --><img src="assets/images/sliders/slide1.jpg" alt="We are Digital Agency" class="slide-image" />

                </div>
                <!-- End of Slide -->
            </div>
        </div>
        <!-- End Slider -->
    </section>
    <!-- ============================================================== -->
    <!-- End Static Slider 10  -->
    <!-- ============================================================== -->
   <!-- ============================================================== -->
    <!-- Berita  -->
    <!-- ============================================================== -->
    <div class="blog-home2 spacer team2" id="berita">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <!-- Column -->
                <div class="col-md-8 text-center">
                    <h2 class="title">Berita Terkini</h2>
                    <h6 class="subtitle">Lihat berita terkini di linkungan HMTI</h6>
                </div>
                <!-- Column -->
                <!-- Column -->
            </div>
            <div class="row m-t-40">
                <!-- Column -->
                @foreach($news as $number => $new)
                
                <div class="col-lg-3 col-md-4">
                    <div class="card" data-aos="flip-left" data-aos-duration="1200">
                        <a href="#"><div class="col-md-12 pro-pic" style="background: url('assets/images/berita/{{$new->foto_berita}}')  center center no-repeat; background-size: 100%; border-top-left-radius: calc(.25rem - 1px); border-top-right-radius: calc(.25rem - 1px);"></div> </a>
                        <div style="height:75px; overflow:hidden;">
                            <h5 class="font-medium m-t-30"><a href="{{ route('berita.show', $new ) }}" class="link">{{$new->judul_berita}}</a></h5>
                        </div>
                        <div class="d-flex no-block font-13 icon-list-demo" >
                            <div class="preview">
                                <i class="icon-Alarm-Clock m-l-0"></i><span> OCT 17, 2017</span>
                            </div>
                        </div> 
                        <div style="height:70px; overflow:hidden;">
                            <p class="m-t-10">{{ words(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",($new->isi_berita)))) }}</p>
                        </div>
                        <a data-toggle="collapse" href="#" class="linking text-danger-gradiant m-t-10">Selengkapnya <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Berita  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Kegiatan  -->
    <!-- ============================================================== -->
    <div class="bg-light spacer feature2" id="kegiatan">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="title">Kegiatan</h2>
                    <h6 class="subtitle">Kegiatan-kegiatan yang ada di lingkungan HMTI</h6>
                </div>
            </div>
            <!-- Row  -->
            <div class="row m-t-40">
                <!-- Column -->
                @foreach($kegiatan as $number => $activ)
                <div class="col-md-4">
                <div class="invisible">{{$number+1}}</div>
                    <div class="card" data-aos="flip-left" data-aos-duration="1200">
                        <a href="#" data-toggle="modal" data-target="#mymodal-{{ $number+1 }}" class="img-ho"><img class="card-img-top" src="{{ URL::asset('assets/images/' . $activ->media_kegiatan) }}" alt="wrappixel kit"/></a>
                            <h5 class="font-medium m-b-0 m-l-15 m-r-15 title">{{$activ->nama_kegiatan}}</h5>
                            <p class="m-b-10 m-l-15 m-r-15 font-14 subtitle">{{words($activ->desk_kegiatan,4)}}</p>
                    </div>
                </div>

                <div id="mymodal-{{ $number+1 }}" class="modal fade custom-modal modal1" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content po-relative">
                                <div class="modal-body p-0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-8">
                                            <div class="modal-bg" style="background-image: url('/assets/images/2.png');">
                                                <h1 class="font-light">{{$activ->nama_kegiatan}}</h1>
                                                <h6 class="subtitle m-t-20">
                                                    {{$activ->desk_kegiatan}}
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-4 modal-bg-img" style="background-image: url('/assets/images/{{$activ->media_kegiatan}}');">
                                        </div>
                                    </div>
                                    <a href="#" class="close-btn" data-dismiss="modal" aria-hidden="true">×</a>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Kegiatan -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Team 2  -->
    <!-- ============================================================== -->
    <div class="spacer team2" id="fungsionaris">
        <div class="container">
            <div class="row justify-content-center m-b-30">
                <div class="col-md-7 text-center">
                    <h2 class="title">Fungsionaris</h2>
                    <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
                </div>
            </div>
            <div class="row m-t-40 wrap-feature45-box">
                <div class="col-lg-12">
                    <!-- Tabs -->
                    <nav class="nav f45-tab" id="myTab4">
                        <!-- Tabs -->
                        <a class="nav-item nav-link active" id="ketuawakil-tab" data-toggle="tab" href="#ketuawakil" aria-expanded="true">
                            <i class="hidden-sm-up icon-Monitor-4"></i> <span class="hidden-sm-down">Ketua dan Wakil Ketua</span>
                        </a>
                        <!-- Tabs -->
                        <a class="nav-item nav-link" id="sekretarisbendahara-tab" data-toggle="tab" href="#sekben">
                            <i class="hidden-sm-up icon-Share-onCloud"></i> <span class="hidden-sm-down">Sekretaris dan Bendahara</span>
                        </a>


                    </nav>
                    <!-- Tabs content -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- KETUAWAKIL  -->
                        <div class="tab-pane fade show active" id="ketuawakil" role="tabpanel" aria-labelledby="ketuawakil-tab">
                            <div class="row">

                                @foreach($ketuawakil as $number => $kw)

                                <div class="col-md-4 m-b-30">
                                    <!-- Row -->
                                    <div class="row no-gutters aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                                        <div class="col-md-12 pro-pic" style="background: url('assets/images/{{$kw->media_profile}}') center center no-repeat; background-size: 100%;">
                                            <div class="card-img-overlay">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="p-t-10">
                                                <h5 class="title font-medium">{{$kw->nama_fungsionaris}}</h5>
                                                <h6 class="subtitle">{{$kw->periode_awal}}-{{$kw->periode_akhir}}</h6>
                                                <p>{{$kw->nama_jabatan}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                                </div>

                                @endforeach
                            </div>
                        </div>

                        <!-- SEKBEN  -->
                        <div class="tab-pane fade" id="sekben" role="tabpanel" aria-labelledby="sekretarisbendahara-tab">
                            <div class="row">

                                @foreach($sekben as $number => $sb)

                                <div class="col-md-4 m-b-30">
                                    <!-- Row -->
                                    <div class="row no-gutters aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                                        <div class="col-md-12 pro-pic" style="background: url('assets/images/{{$sb->media_profile}}') center center no-repeat; background-size: 100%;">
                                            <div class="card-img-overlay">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="p-t-10">
                                                <h5 class="title font-medium">{{$sb->nama_fungsionaris}}</h5>
                                                <h6 class="subtitle">{{$sb->periode_awal}}-{{$sb->periode_akhir}}</h6>
                                                <p>{{$sb->nama_jabatan}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                                </div>

                                @endforeach

                            </div>
                        </div>

                        <!-- KABID  -->
                        <div class="tab-pane fade" id="kabid" role="tabpanel" aria-labelledby="kabidkadiv-tab">
                            <div class="row">

                                @foreach($ketuawakil as $number => $kw)

                                <div class="col-md-4 m-b-30">
                                    <!-- Row -->
                                    <div class="row no-gutters aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                                        <div class="col-md-12 pro-pic" style="background: url('assets/images/{{$kw->media_profile}}') center center no-repeat; background-size: 100%;">
                                            <div class="card-img-overlay">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="p-t-10">
                                                <h5 class="title font-medium">{{$kw->nama_fungsionaris}}</h5>
                                                <h6 class="subtitle">{{$kw->periode_awal}}-{{$kw->periode_akhir}}</h6>
                                                <p>{{$kw->nama_jabatan}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- KADIV  -->
                        <div class="tab-pane fade" id="kadiv" role="tabpanel" aria-labelledby="kabidkadiv-tab">
                            <div class="row">

                                @foreach($ketuawakil as $number => $kw)

                                <div class="col-md-4 m-b-30">
                                    <!-- Row -->
                                    <div class="row no-gutters aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                                        <div class="col-md-12 pro-pic" style="background: url('assets/images/{{$kw->media_profile}}') center center no-repeat; background-size: 100%;">
                                            <div class="card-img-overlay">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="p-t-10">
                                                <h5 class="title font-medium">{{$kw->nama_fungsionaris}}</h5>
                                                <h6 class="subtitle">{{$kw->periode_awal}}-{{$kw->periode_akhir}}</h6>
                                                <p>{{$kw->nama_jabatan}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Team 2  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!--location map & Kontak--> <!-- footer  -->
<!-- ============================================================== -->

<div class="map" id="kontak">
    <div id="map"></div>
</div>
@endsection