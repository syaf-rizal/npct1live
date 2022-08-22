@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Penanganan Barang Berbahaya</h1>
                <h6><a href="{{ url('/') }}">Beranda</a> <i class="fas fa-angle-right"></i> Pelayanan Kami </h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 content">
                <h1>Informasi Umum</h1>
                <ol style="line-height: 2; margin-left: 20px;">
                    <li style="text-align: left;">Perusahaan pelayaran / pemilik kargo bertanggung jawab penuh atas segala resiko dan tuntutan yang mungkin terjadi jika petikemas mereka, karena karakteristik khusus dari muatan tersebut merusak atau mempengaruhi petikemas di sekitarnya.</li>
                    <li style="text-align: left;">Biaya tambahan sebesar 200% dari tarif penanganan dan penumpukan akan dibebankan kepada perusahaan pelayaran / pemilik kargo dalam hal petikemas tidak sesuai dengan surat pemberitahuan.</li>
                </ol>
                <h1>Perusahaan Pelayaran</h1>
                <ol style="line-height: 2; margin-left: 20px;">
                    <li style="text-align: left;">Perusahaan pelayaran dengan kegiatan impor wajib menyerahkan daftar Ditjen, termasuk Nomor UN dan MSDS (Material Safety Data Sheet) kepada Departemen Operasi, Perencanaan Lapangan dan HSSE, bersama dengan penyerahan CVIA.</li>
                    <li style="text-align: left;">Jalur pengiriman dengan aktivitas impor untuk memastikan hardcopy MSDS terpasang pada tangki petikemas ISO Tank</li>
                    <li style="text-align: left;">Perusahaan pelayaran dengan kegiatan ekspor diwajibkan untuk menyerahkan daftar barang berbahaya, termasuk Nomor UN, Nomor Kelas dan MSDS (Material Safety Data Sheet) secara elektronik kepada Departemen Operasi, Perencanaan Lapangan dan HSSE dan COPARN untuk proses penerbitan gate pass yang harus menyertakan Nomor UN dan Kelas yang valid.</li>
                    <li style="text-align: left;">Penanganan petikemas barang berbahaya diatur sebagai berikut :
                        <ol type="a" style="margin-left: 20px;">
                            <li>Petikemas impor yang harus dikirim langsung, tetapi tidak dapat dikirim secara langsung sampai dengan kegiatan Bongkar Muat selesai, harus dimuat kembali ke kapal dan biaya perpindahan untuk kegiatan tersebut di atas menjadi tanggung jawab perusahaan pelayaran</li>
                            <li>Petikemas ekspor yang ditumpuk di Terminal yang belum dimuat ke kapal karena keterlambatan kapal atau pembatalan pemuatan dikenakan biaya tambahan sebagai berikut:
                                <ol style="margin-left: 15px; list-style-type:circle;">
                                    <li>Rp. 444.000 per petikemas 20"</li>
                                    <li>Rp. 606.000 per petikemas 40"</li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                </ol>

                <h1>Pemilik Kargo</h1>
                <ol style="line-height: 2; margin-left: 20px;">
                    <li style="text-align: left;">Eksportir yang mengirimkan barang berbahaya melalui Terminal wajib melampirkan Nota Pelayanan Ekspor (NPE) yang memuat informasi nomor petikemas dan tinggi muatan, pada saat pengajuan Terminal Gate Pass</li>
                    <li style="text-align: left;">Dalam hal proses penerbitan gate pass tidak didukung oleh EDI maka Eksportir yang mengirimkan barang berbahaya melalui Terminal wajib menyerahkan Export Approval (NPE) yang memuat informasi nomor petikemas, detail kargo serta menyampaikan Deklarasi barang berbahaya yang menyebutkan nomor peti kemas yang sah, nomor UN dan nomor kelas untuk pengajuan penerbitan Terminal Gate Pass</li>
                    <li style="text-align: left;">Petikemas yang membawa Barang Berbahaya (DG) harus diberi label yang jelas dengan stiker IMDG, Nomor UN dan Nama Pengiriman yang benar di semua sudut petikemas</li>
                    <li style="text-align: left;">Jangka waktu penumpukan maksimum di terminal untuk petikemas dengan barang berbahaya (FCL, LCL atau Transshipment) dihitung berdasarkan Estimated Time of Berthing (ETB) Kapal. Dengan rincian sebagai berikut:
                        <ol type="a" style="margin-left: 20px;">
                            <li>Petikemas impor berisi barang berbahaya
                                <ol style="margin-left: 15px; list-style-type:circle;">
                                    <li>Kelas 1 dan 7 Langsung diangkut keluar Terminal / Truck Loosing</li>
                                    <li>Kelas 2.1; 2.3; 5.1; 5.2; 6.1 Maksimum 24 jam</li>
                                    <li>Kelas 2.2; 3; 4; 5; 6.2; 8; 9 Maksimum 72 jam</li>
                                </ol>
                            </li>
                            <li>Petikemas Ekspor berisi barang berbahaya
                                <ol style="margin-left: 15px; list-style-type:circle;">
                                    <li>Kelas 1 dan 7 Langsung diangkut keluar Terminal / Truck Loosing</li>
                                    <li>Kelas 2.1; 2.3; 5.1; 5.2; 6.1 Maksimum 24 jam</li>
                                    <li>Kelas 2.2; 3; 4; 5; 6.2; 8; 9 Maksimum 96 jam</li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li style="text-align: left;">Penanganan petikemas barang berbahaya diatur sebagai berikut:
                        <ol type="a" style="margin-left: 20px;">
                            <li>Petikemas impor yang ditumpuk di Terminal yang telah melebihi masa penumpukan maksimal akan dipindahkan ke Tempat Penyimpanan Sementara (TPS) yang ditunjuk dan semua biaya yang timbul menjadi tanggung jawab pemilik kargo</li>
                            <li>Apabila terjadi keterlambatan karena Hari Kerja / Libur Nasional, petikemas Impor tersebut akan dipindahkan setelah hari libur.</li>
                            <li>Petikemas tanpa label sebagaimana ditetapkan oleh Kode IMDG akan dikenakan biaya tambahan 200% untuk tarif penanganan dan penumpukan.</li>
                            <li>Petikemas yang memiliki lebih dari 1 tanda / label harus dikategorikan menurut kadar keterangan / label tertinggi yang terdapat pada petikemas.</li>
                        </ol>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection