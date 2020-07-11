@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/slider1.png') }}" class="img-fluid" alt="Responsive image">\


<div class="container">
        <h5 class="judul-section text-center" style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
                Visi &amp; Misi</h5><br>
        <div class="garis"></div><br>
        <div class="font-body font-justify"
                style="font-family:OpenSans-Regular;font-size:15px; font-weight: normal;  text-align: justify;">
                <p class="font-body font-justify"><span style="color: #000000;"><strong>“PSPSDM ADALAH LEMBAGA SWADAYA
                                        MASYARAKAT YANG
                                        BERGERAK DI BIDANG PENGEMBANGAN SWADAYA MASYARAKAT ”</strong></span>
                </p>
                <p class="font-body font-justify"><span style="color: #000000;"><strong><span
                                                class="font-body-title"><strong>VISI</strong></span></strong></span>
                </p>
                <p><span style="color: #000000;">
                                <ul id="datalist" class="point-list">
                                        <li class="point-list"><span style="color: #000000;">Meningkatkan kualitas hidup
                                                        dan pendapatan
                                                        masyarakat melalui kegiatan mobilisasi sumber daya yang mereka
                                                        miliki.</span>
                                        </li>
                                        <li class="point-list"><span style="color: #000000;">Meningkatkan mutu peran
                                                        serta masyarakat dalam pembangunan kesejahteraan berbangsa dan
                                                        bernegara berdasarkan keswadayaan dan kemandirian.</span>
                                        </li>
                                        <li class="point-list"><span style="color: #000000;">Mendorong kesinambungan
                                                        semangat kebersamaan, keterbukaan dan kementrian yang sudah
                                                        terjalin dengan baik antara masyarakat dan pemerintah.</span>
                                        </li>
                                        <li class="point-list"><span style="color: #000000;">Sebagai pusat informasi,
                                                        pendidikan dan penelitian kegiatan pemberdayaan
                                                        masyarakat.</span>
                                        </li>
                                </ul>
                        </span></p>
                <p>&nbsp;</p>
                <p class="font-body font-justify"><span style="color: #000000;"><strong><span
                                                class="font-body-title"><strong>MISI</strong></span></strong></span></p>
                <div class="font-body font-justify">
                        <span style="color: #000000;">Untuk mencapai tujuan organisasi, PSPSDM menyediakan dan mempunyai
                                ruang
                                lingkup kegiatan sebagai berikut :</span>
                        <ol type="a" id="datalist" class="list misi">
                                {{-- list :a --}}
                                <li class="point-list"><span style="color: #000000;">Menyelenggarakan kegiatan
                                                pengembangan dan peningkatan keswadayaan masyarakat melalui
                                                program</span>
                                        <ul type="disc" id="datalist" class="point-list">
                                                <li class="point-list"><span style="color: #000000;">Agroforestry /
                                                                pertanian
                                                                berkelanjutan (terutama pengembangan pertanian lahan
                                                                kering /
                                                                miring).</span>
                                                </li>
                                                <li class="point-list"><span style="color: #000000;">Hutan
                                                                Kemasyarakatan.</span>
                                                </li>
                                                <li class="point-list"><span style="color: #000000;">Kesehatan
                                                                masyarakat (program kesehatan ibu anak dan dana
                                                                sehat).</span>
                                                </li>
                                                <li class="point-list"><span style="color: #000000;">Peningkatan
                                                                pendapatan.</span>
                                                <li class="point-list"><span style="color: #000000;">Penyediaan saranan
                                                                air bersih dan sanitasi.</span>
                                                <li class="point-list"><span style="color: #000000;">Program padat
                                                                karya.</span>
                                                <li class="point-list"><span style="color: #000000;">Pengembangan peran
                                                                wanita melalui pendidikan keaksaraan fungsional.</span>
                                                </li>
                                        </ul>
                                </li>
                                {{-- end list :a --}}
                                {{-- list :b --}}
                                <li class="point-list">
                                        <span style="color: #000000;">
                                                Menyelenggarakan kegiatan pengembangan sumber daya manusia dan
                                                peningkatan kemampuan kelembagaan melalui
                                        </span>
                                        <ul type="disc" id="datalist" class="point-list">
                                                <li class="point-list"><span style="color: #000000;">Kegiatan pelatihan
                                                                keterampilan, penelitian seminar, lokakarya dan
                                                                kunjungan silang.</span>
                                                </li>
                                                <li class="point-list"><span style="color: #000000;">Pelayanan
                                                                konsultasi di bidang pemberdayaan masyarakat.</span>
                                                </li>
                                        </ul>
                                </li>
                        </ol>
                </div>
        </div>
</div>

@endsection