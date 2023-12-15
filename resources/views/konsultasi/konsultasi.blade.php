@extends('konsultasi.layouts.main')
@push('js')
<script>
    $('#pills-tab a').on('click', function(event) {
        event.preventDefault()
        $(this).tab('show')
    })
</script>
@endpush
@section('container')

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1>kONSULTASIKAN KESEHATAN ANDA DEMI MASA DEPAN LEBIH TERJAMIN</h1>
            <hr>
        </div>


        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pemerikasaan Umum</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Penanganan Keluhan Pasien</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-pitc-tab" data-toggle="pill" href="#pills-pitc" role="tab" aria-controls="pills-pitc" aria-selected="false">pelayanan PITC</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-ibuanak-tab" data-toggle="pill" href="#pills-ibuanak" role="tab" aria-controls="pills-ibuanak" aria-selected="false">Kesehatan Ibu dan Anak</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-gigi-tab" data-toggle="pill" href="#pills-gigi" role="tab" aria-controls="pills-gigi" aria-selected="false">Kesehatan gigi dan mulut</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-gizi-tab" data-toggle="pill" href="#pills-gizi" role="tab" aria-controls="pills-gizi" aria-selected="false">konseling gizi</a>
            </li>
        </ul>


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                @foreach ($poli_1 as $item)
                <div class='single-comments' style='text-align:justify; text-justify: inter-word' ;>
                    <div class='main'>
                        <div class='head'>
                            <img src='img/profil.png' width="50px" alt='#' />
                        </div>
                        <div class='body'>
                            <h4>{{ $item->username }}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->created_at) }}
                                </span>
                            </div>
                            <p>{{ $item->keluhan }}</p>
                            <span>
                                <a href="{{ url('konsul/'.$item->jenis_keluhan.'/'.$item->id) }}">
                                    <button class="btn btn-warning">edit</button>
                                </a>
                                <a href="{{ url('konsul_delete/'.$item->id) }}">
                                    <button class="btn btn-danger">hapus</button>
                                </a>
                            </span>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="div2">
                    <div class='main'>
                        <div class='head'>
                            <img src='img/dokter.jp.jpg' width="50px" alt='#' style="border: radius 100%;"/>
                        </div>
                        <div class='body'>
                            <h4>{{ $item->dokter->name ?? 'Belum dijawab oleh Dokter'}}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->updated_at) }}
                                </span>
                            </div>
                            <h7>Solusi : {{ $item->solusi }}</h7><br>
                           
                        </div>
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                @foreach ($poli_2 as $item)
                <div class='single-comments' style='text-align:justify; text-justify: inter-word' ;>
                    <div class='main'>
                        <div class='head'>
                            <img src='img/profil.png' width="50px" alt='#' />
                        </div>
                        <div class='body'>
                            <h4>{{ $item->username }}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->created_at) }}
                                </span>
                            </div>
                            <p>{{ $item->keluhan }}</p>
                            <span>
                                <a href="{{ url('konsul/'.$item->jenis_keluhan.'/'.$item->id) }}">
                                    <button class="btn btn-warning">edit</button>
                                </a>
                                <a href="{{ url('konsul_delete/'.$item->id) }}">
                                    <button class="btn btn-danger">hapus</button>
                                </a>
                            </span>
                        </div>
                    </div>
                </div><br>

                <div class="div2">
                    <div class='main'>
                        <div class='head'>
                            <img src='img/dokter.jp.jpg' width="50px" alt='#' style="border: radius 100%;" />
                        </div>
                        <div class='body'>
                        <h4>{{ $item->dokter->name ?? 'Belum dijawab oleh Dokter'}}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->updated_at) }}
                                </span>
                            </div>
                            <h7>Solusi : {{ $item->solusi }}</h7><br>

                        </div>
                        <hr>
                    </div>
                </div>
                <!-- </center> -->
                @endforeach
            </div>
            <div class="tab-pane fade" id="pills-pitc" role="tabpanel" aria-labelledby="pills-contact-tab">
                @foreach ($poli_3 as $item)
                <div class='single-comments' style='text-align:justify; text-justify: inter-word' ;>
                    <div class='main'>
                        <div class='head'>
                            <img src='img/profil.png' width="50px" alt='#' />
                        </div>
                        <div class='body'>
                        <h4>{{ $item->username }}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->created_at) }}
                                </span>
                            </div>
                            <p>{{ $item->keluhan }}</p>
                            <span>
                                <a href="{{ url('konsul/'.$item->jenis_keluhan.'/'.$item->id) }}">
                                    <button class="btn btn-warning">edit</button>
                                </a>
                                <a href="{{ url('konsul_delete/'.$item->id) }}">
                                    <button class="btn btn-danger">hapus</button>
                                </a>
                            </span>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="div2">
                    <div class='main'>
                        <div class='head'>
                            <img src='img/dokter.jp.jpg' width="50px" alt='#' style="border: radius 100%;" />
                        </div>
                        <div class='body'>
                        <h4>{{ $item->dokter->name ?? 'Belum dijawab oleh Dokter'}}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->updated_at) }}
                                </span>
                            </div>
                            <h7>Solusi : {{ $item->solusi }}</h7><br>

                        </div>
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="pills-ibuanak" role="tabpanel" aria-labelledby="pills-contact-tab">
                @foreach ($poli_4 as $item)
                <div class='single-comments' style='text-align:justify; text-justify: inter-word' ;>
                    <div class='main'>
                        <div class='head'>
                            <img src='img/profil.png' width="50px" alt='#' />
                        </div>
                        <div class='body'>
                        <h4>{{ $item->username }}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->created_at) }}
                                </span>
                            </div>
                            <p>{{ $item->keluhan }}</p>
                            <span>
                                <a href="{{ url('konsul/'.$item->jenis_keluhan.'/'.$item->id) }}">
                                    <button class="btn btn-warning">edit</button>
                                </a>
                                <a href="{{ url('konsul_delete/'.$item->id) }}">
                                    <button class="btn btn-danger">hapus</button>
                                </a>
                            </span>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="div2">
                    <div class='main'>
                        <div class='head'>
                            <img src='img/dokter.jp.jpg' width="50px" alt='#' style="border: radius 100%;" />
                        </div>
                        <div class='body'>
                        <h4>{{ $item->dokter->name ?? 'Belum dijawab oleh Dokter'}}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->updated_at) }}
                                </span>
                            </div>
                            <h7>Solusi : {{ $item->solusi }}</h7><br>

                        </div>
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="pills-gigi" role="tabpanel" aria-labelledby="pills-contact-tab">
                @foreach ($poli_5 as $item)
                <div class='single-comments' style='text-align:justify; text-justify: inter-word' ;>
                    <div class='main'>
                        <div class='head'>
                            <img src='img/profil.png' width="50px" alt='#' />
                        </div>
                        <div class='body'>
                        <h4>{{ $item->username }}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->created_at) }}
                                </span>
                            </div>
                            <p>{{ $item->keluhan }}</p>
                            <span>
                                <a href="{{ url('konsul/'.$item->jenis_keluhan.'/'.$item->id) }}">
                                    <button class="btn btn-warning">edit</button>
                                </a>
                                <a href="{{ url('konsul_delete/'.$item->id) }}">
                                    <button class="btn btn-danger">hapus</button>
                                </a>
                            </span>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="div2">
                    <div class='main'>
                        <div class='head'>
                            <img src='img/dokter.jp.jpg' width="50px" alt='#' style="border: radius 100%;" />
                        </div>
                        <div class='body'>
                        <h4>{{ $item->dokter->name ?? 'Belum dijawab oleh Dokter'}}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->updated_at) }}
                                </span>
                            </div>
                            <h7>Solusi : {{ $item->solusi }}</h7><br>

                        </div>
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="pills-gizi" role="tabpanel" aria-labelledby="pills-contact-tab">
                @foreach ($poli_6 as $item)
                <div class='single-comments' style='text-align:justify; text-justify: inter-word' ;>
                    <div class='main'>
                        <div class='head'>
                            <img src='img/profil.png' width="50px" alt='#' />
                        </div>
                        <div class='body'>
                            <h4>{{ $item->username }}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->created_at) }}
                                </span>
                            </div>
                            <p>{{ $item->keluhan }}</p>
                            <span>
                                <a href="{{ url('konsul/'.$item->jenis_keluhan.'/'.$item->id) }}">
                                    <button class="btn btn-warning">edit</button>
                                </a>
                                <a href="{{ url('konsul_delete/'.$item->id) }}">
                                    <button class="btn btn-danger">hapus</button>
                                </a>
                            </span>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="div2">
                    <div class='main'>
                        <div class='head'>
                            <img src='img/dokter.jp.jpg' width="50px" alt='#' style="border: radius 100%;" />
                        </div>
                        <div class='body'>
                        <h4>{{ $item->dokter->name ?? 'Belum dijawab oleh Dokter'}}</h4>
                            <div class='comment-meta'>
                                <span class='meta'>
                                    <i class='fa fa-calendar'></i> {{ hariTglWaktuIndo($item->updated_at) }}
                                </span>
                            </div>
                            <h7>Solusi : {{ $item->solusi }}</h7><br>

                        </div>
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>


<!-- KOnsul Start -->
{{-- <div class="container-xxl py-5">
<div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1>DAFTAR FORUM KONSULTASI</h1><hr>
    </div>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Pemeriksaan Umum</a></li>
            <li><a href="#tabs-2">Penanganan keluhan pasien</a></li>
            <li><a href="#tabs-3">pelayanan PITC</a></li>
            <li><a href="#tabs-4">Kesehatan Ibu dan Anak</a></li>
            <li><a href="#tabs-5">Kesehatan gigi dan mulut</a></li>
            <li><a href="#tabs-6">konseling gizi</a></li>
            </ul>
        <div id="tabs-1">
            <div class='single-comments' style='text-align:justify; text-justify: inter-word';>
                <div class='main'>
                <div class='head'>
                <img src='img/profil.png' width="50px" alt='#'/>
            </div>
            <div class='body'>
                <h4>ASADA</h4>
                <span>
                    <button class="btn btn-warning">edit</button>
                    <button class="btn btn-danger">hapus</button>
                </span>
                <div class='comment-meta'>
                    <span class='meta'>
                    <i class='fa fa-calendar'></i>			Selasa, 19 April 2022,21:51:38			</span>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus repellendus dolore inventore. Possimus earum ducimus est quod reprehenderit eos, nisi atque sit similique quibusdam blanditiis tenetur sequi inventore quam dolorum, maiores autem perferendis. Quos eius saepe eaque tempore, atque maxime dolorum error molestias! Ea vero mollitia at eum natus praesentium illum corrupti illo iusto fugiat suscipit ratione debitis omnis voluptas porro placeat pariatur maxime exercitationem esse obcaecati corporis dolorem, aliquam saepe ipsa. Nam quis harum quos obcaecati placeat explicabo, facilis veniam est, corporis atque, alias laudantium accusantium quam aspernatur ea sit quidem! Corporis veniam laboriosam vel nulla facilis distinctio und?</p>
            </div>
            <hr>
        </div>
        </div>
        <div class='single-comments' style='text-align:justify; text-justify: inter-word';>
            <div class='main'>
            <div class='head'>
            <img src='img/profil.png' width="50px" alt='#'/>
        </div>
        <div class='body'>
            <h4>PUJI ASTUTI</h4>
            <span>
                <button class="btn btn-warning">edit</button>
                <button class="btn btn-danger">hapus</button>
            </span>
            <div class='comment-meta'>
                <span class='meta'>
                <i class='fa fa-calendar'></i>			Selasa, 19 April 2022,21:51:38			</span>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus repellendus dolore inventore. Possimus earum ducimus est quod reprehenderit eos, nisi atque sit similique quibusdam blanditiis tenetuio und?</p>
        </div>
        <hr>
    </div>
        </div>
        
    
        <div id="tabs-2">
            <div class='single-comments' style='text-align:justify; text-justify: inter-word';>
                <div class='main'>
                <div class='head'>
                <img src='img/profil.png' width="50px" alt='#'/>
            </div>
            <div class='body'>
                <h4>Yohana Tambunan</h4>
                <div class='comment-meta'>
                    <span class='meta'>
                    <i class='fa fa-calendar'></i>			Selasa, 19 April 2022,21:51:38			</span>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus repellendus dolore inventore. Possimus earum ducimus est quod reprehenderit eos, nisi atque sit similique quibusdamcaecati placeat explicabo, facilis veniam est, corporis atque, alias laudantium accusantium quam aspernatur ea sit quidem! Corporis veniam laboriosam vel nulla facilis distinctio und?</p>
            </div>
            <hr>
        </div>
        </div>
        </div>
        <div id="tabs-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptatem ipsam esse architecto porro eveniet totam autem dignissimos vero quas in temporibus sunt maiores veritatis, vitae facere aliquam molestias ullam nam, consequuntur provident repudiandae. Qui quia iste nihil quos suscipit repudiandae temporibus, eligendi, animi atque commodi illum similique ex porro mollitia! Dignissimos explicabo distinctio repellat, quo recusandae et harum iusto dolorem, ad labore fuga, magni assumenda facilis! Debitis, ducimus nemo rerum, velit cupiditate temporibus, ea voluptatem pariatur totam suscipit saepe aspernatur quasi similique esse ipsam dolores. Quidem nihil, quae consequuntur quas quo nam eaque animi necessitatibus consectetur aut. Fugit culpa mollitia voluptate, nisi sit necessitatibus saepe? Maiores autem similique ullam omnis atque veniam ratione, consequatur vitae, porro ut dolores, ad et quae ipsum magnam quo. Minima est rem, magni obcaecati nesciunt dolorum! Exercitationem, quae possimus ullam cupiditate corporis tenetur, suscipit accusamus quibusdam, reiciendis nesciunt facilis dolore veritatis aut! Quis, ipsum odio corporis sunt doloribus officia esse exercitationem maiores quisquam facilis explicabo quibusdam ab accusantium assumenda, repudiandae nobis, iste dolores labore! Quos deserunt deleniti quam reprehenderit iusto aspernatur adipisci aperiam unde, dicta fuga quod veniam nobis saepe sed ex corporis voluptate sequi repellendus, facere nulla laudantium provident similique recusandae. Nihil impedit ad fugit eius, aspernatur enim praesentium quis temporibus facilis nisi fuga architecto, nobis officia voluptate sint culpa tempore hic! Numquam nemo quis, amet facere maiores nisi deserunt aut adipisci dolore fugiat fugit illo neque, doloribus deleniti quia. Consectetur officiis ut quasi fugiat in ipsa repudiandae cum natus, inventore unde dignissimos necessitatibus rerum officia commodi quos cupiditate. Illo vitae facilis quo reprehenderit praesentium, dicta ex earum voluptate dolore non! Odit sint illo eum enim consequatur qui provident quasi tempore veritatis facere! Vero repudiandae voluptatum molestias vitae magni culpa officia architecto sit sunt minima aliquam placeat quod id odit deleniti, laudantium cumque ex error quibusdam nam tenetur! Repudiandae fugit reprehenderit voluptatum mollitia nemo, magnam sunt, earum dolor porro atque quae placeat, nisi vero asperiores sequi ratione laborum ea est! Excepturi modi asperiores laboriosam delectus molestiae placeat! Provident sit delectus a nisi ad repudiandae, saepe officiis, repellat quas voluptatibus error fuga quod reiciendis doloremque autem eveniet deleniti. Eveniet amet ratione cumque ipsa animi maxime provident laboriosam assumenda blanditiis, asperiores quam. Corporis atque natus illo repudiandae asperiores maiores, culpa minus laboriosam aliquam, tempora ad sed veritatis rerum reiciendis assumenda eum? Ipsam dignissimos aperiam aliquam explicabo adipisci id harum quae? Quam totam vitae eligendi blanditiis nobis dolore, saepe asperiores, mollitia magnam doloribus amet doloremque accusantium! Officia doloremque id quisquam officiis aperiam ipsum ipsam voluptatem reiciendis fugit aliquam iure perferendis illo nisi laborum, ab porro atque nulla? Minus non velit ipsum mollitia dolores ratione doloremque, nisi aperiam nostrum delectus harum, magni dolorum similique inventore! Quia accusamus perspiciatis vel asperiores consequuntur porro nulla eaque nihil cum magni, consequatur pariatur dignissimos ipsum, sint aliquid. Sint magnam explicabo quia reiciendis beatae perspiciatis vitae, ducimus optio impedit id harum facere accusamus, provident obcaecati quam. Fugit quia corrupti magni harum, molestias nam! Ullam autem sit non eius nisi deleniti adipisci aut iusto ipsam quidem magnam debitis modi, nemo quam culpa eos libero, accusamus pariatur corporis alias molestias. Debitis delectus magnam vitae provident culpa asperiores a, nulla ipsam vero dolorum quas? A ea deserunt incidunt mollitia velit. Provident minus nesciunt nam id assumenda odio sequi qui laudantium porro doloribus temporibus esse molestias facilis nulla, atque, officia culpa! Vero architecto eos reprehenderit possimus veritatis necessitatibus illum deserunt tempora incidunt, officia natus ipsa voluptatem nam. Dolorem hic accusantium amet, dolor, omnis, tempore laboriosam voluptatem voluptatum suscipit similique beatae architecto? Veniam sequi obcaecati rerum quisquam ratione aliquam, perspiciatis eum accusantium, perferendis molestiae ipsa placeat voluptatum aut reprehenderit debitis laudantium voluptatem, fuga nostrum? Rem, quis officiis! Ab impedit hic id accusamus dolorum placeat delectus doloremque dolorem laborum, sunt reprehenderit dolor assumenda alias magnam error veniam at? Possimus qui est nihil non expedita at? Ratione corporis delectus laudantium pariatur beatae quidem illum repudiandae nam aliquam accusantium, fuga earum et voluptas perferendis consectetur laboriosam. Voluptas dolores nobis, ullam modi deserunt blanditiis facere nostrum similique ipsum debitis quasi eveniet magnam sunt sequi temporibus minima nisi, asperiores corporis doloribus. Aliquam libero laboriosam ducimus excepturi saepe nam eaque? Quis magnam ab vel, officiis sit error maiores incidunt laudantium ipsam aperiam, quisquam hic quibusdam quasi tempore. Quibusdam modi aliquid eos, facere dicta excepturi libero iste expedita vitae laboriosam eligendi quos? Sapiente, ab quasi! Explicabo quidem deleniti sequi id soluta cupiditate ab doloribus praesentium quod inventore! Nemo inventore, laborum illum tempora recusandae sit labore alias odio quis veritatis enim eveniet in, debitis ut mollitia modi possimus esse corrupti dolor. Esse quis nemo magni, omnis aliquid dolorem nam ipsum asperiores nulla minima similique hic deleniti ducimus quia repellat accusamus ullam voluptas natus tempora debitis eaque nesciunt culpa! Hic excepturi laudantium nam omnis similique facilis vel tenetur quasi non voluptates? Vitae assumenda dolorem eligendi aspernatur! Accusamus dolor ex vero quidem dolore minus necessitatibus culpa quod. Assumenda voluptatibus, iure recusandae ut id qui maxime quod cupiditate doloribus ad delectus sint necessitatibus vel fugit tempora voluptates, quaerat architecto perferendis hic, adipisci odit veritatis nostrum. Dolore accusamus aut numquam, excepturi ducimus animi laudantium voluptatem consectetur quia dolorem libero consequuntur consequatur vero voluptas qui natus velit magnam rerum quibusdam earum. Ipsa totam id libero numquam necessitatibus ducimus dolore hic illo eum culpa dolorum cupiditate aut, voluptatem harum asperiores ex impedit veniam accusantium alias pariatur expedita nesciunt ipsum velit doloribus. Expedita dolores totam facere minima iusto saepe repellendus tempora explicabo?</p>
        </div>
    </div>
    </div>
</div>
</div> --}}
<!-- Konsul End -->
@endsection