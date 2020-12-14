@extends('layouts.app')

@section('title')
    Penilaian Monev Hasil
@endsection

@section('breadcrumb')
    @parent
   
    <li>Penilaian</li>
    <li>Monev Hasil</li>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading"><strong></strong> <div class="pull-right"><strong></strong></div></div>
            
            <div class="panel-body">
                
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Periode: 2019 | Batch 1</strong></div>
            
                    <div class="panel-body">
                        <div class="">
                            <div class="box-header">
                                <i class="ion ion-clipboard"></i>
                                <h4 class="box-title">Pengusul: {{$ketua->nama}}</h4>
                            </div>
                            <br>
                            <table class="table table-bordered">
                                <thead>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="8"><b>1. JUDUL</b><br>{{$prop->judul}}</td>
                                    </tr> 
                                    <tr>
                                        <td colspan="8"></td> 
                                    </tr>
                                    <tr>
                                        <td colspan="8"><b>2. LUARAN Akhir </b><br>Luaran Lainnya : <small class="label label-success">Tahun ke-{{$thn}}</small> dari {{$prop->lama}} tahun</td> 
                                    </tr> 
                                    <tr>
                                        <td colspan="8"></td> 
                                    </tr> 
                                    <tr>
                                        <td class="text-center" colspan="2">Jenis Luaran</td>
                                        <td class="text-center" colspan="3">Judul</i>)</td>
                                        <td class="text-center" colspan="3">Keterangan (<i>Status, url dan nama jurnal, penerbit, url paten, keterangan sejenis lainnya</i>)</td>
                                        <td class="text-center" colspan="2">File</td>
                                    </tr>
                                    @foreach($luarkemajuan as $list) 
                                        @if($list->kategori == 3)
                                        <tr>
                                            <td class="text-center" colspan="2">{{$list->keluaran->jenis}}</td>
                                            <td class="text-center" colspan="3">{{$list->judul}}</td>
                                            <td class="text-left" colspan="3">{{$list->publish}} <br> {{$list->urllink}}</td>
                                            <td align="right" style="widows: 80px">
                                            <a  href="{{ route('rn_luaranakhir.baca',base64_encode(mt_rand(10,99).$list->id) )}}" class="btn btn-app btn-sm" id="Unduh"><i class="ion ion-ios-book-outline text-blue"></i> Baca </a>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach

                                    <tr>
                                        <td colspan="8"><br>Luaran Wajib : <small class="label label-success">Tahun ke-{{$thn}}</small> dari {{$prop->lama}} tahun</td> 
                                    </tr> 
                                    <tr>
                                        <td colspan="8"></td> 
                                    </tr> 
                                    <tr>
                                        <td class="text-center" colspan="2">Jenis Luaran</td>
                                        <td class="text-center" colspan="3">Judul</i>)</td>
                                        <td class="text-center" colspan="3">Keterangan (<i>Status, url dan nama jurnal, penerbit, url paten, keterangan sejenis lainnya</i>)</td>
                                        <td class="text-center" colspan="2">File</td>
                                    </tr>
                                    @foreach($luarkemajuan as $list) 
                                        @if($list->kategori == 1)
                                        <tr>
                                            <td class="text-center" colspan="2">{{$list->keluaran->jenis}}</td>
                                            <td class="text-center" colspan="3">{{$list->judul}}</td>
                                            <td class="text-left" colspan="3">{{$list->publish}} <br> {{$list->urllink}}</td>
                                            <td align="right" style="widows: 80px">
                                            <a  href="{{ route('rn_luaranakhir.baca',base64_encode(mt_rand(10,99).$list->id) )}}" class="btn btn-app btn-sm" id="Unduh"><i class="ion ion-ios-book-outline text-blue"></i> Baca </a>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    <tr>
                                        <td colspan="8"></td> 
                                    </tr> 

                                    <tr>
                                        <td colspan="8">Luaran  Tambahan : <small class="label label-success">Tahun ke-{{$thn}}</small> dari {{$prop->lama}} tahun</td> 
                                    </tr> 
                                    <tr>
                                        <td class="text-center" colspan="2">Jenis Luaran</td>
                                        <td class="text-center" colspan="3">Judul</i>)</td>
                                        <td class="text-center" colspan="3">Keterangan (<i>Status, url dan nama jurnal, penerbit, url paten, keterangan sejenis lainnya</i>)</td>
                                        <td class="text-center" colspan="2">File</td>
                                    </tr>
                                    @foreach($luarkemajuan as $list) 
                                        @if($list->kategori == 2)
                                        <tr>
                                            <td class="text-center" colspan="2">{{$list->keluaran->jenis}}</td>
                                            <td class="text-center" colspan="3">{{$list->judul}}</td>
                                            <td class="text-left" colspan="3">{{$list->publish}} <br> {{$list->urllink}}</td>
                                            <td align="right" style="widows: 80px">
                                                <a  href="{{ route('rn_luaranakhir.baca',base64_encode(mt_rand(10,99).$list->id) )}}" class="btn btn-app btn-sm" id="Unduh"><i class="ion ion-ios-book-outline text-blue"></i> Baca </a>
                                            </td>
    
                                        </tr>
                                        @endif
                                     @endforeach

                                     <tr>
                                        <td colspan="8"></td> 
                                    </tr>
                                    <tr>
                                        <td colspan="8"><b>3. Laporan Akhir </b>
                                    </tr> 
                                    <tr>
                                        <td colspan="8"></td> 
                                    </tr> 
                                    <tr>
                                        <td class="text-left" colspan="8">Keterangan </td>
                                        <td class="text-center" colspan="2">File</td>
                                    </tr>
                                   
                                        <tr>
                                        <td class="text-left" colspan="8">Data Laporan Akhir</td>
                                            <td align="right" style="widows: 80px">
                                            <a  href="{{ route('rn_laporanakhir.bacalaporan',base64_encode(mt_rand(10,99).$laporanakhir->id) )}}" class="btn btn-app btn-sm" id="Unduh"><i class="ion ion-ios-book-outline text-blue"></i> Baca </a>
                                            </td>
                                        </tr>
                                   

                                    <tr>
                                        <td colspan="8"></td> 
                                    </tr>
                                    <tr>
                                        <td colspan="8"><b>4. Penggunaan Anggaran Monev Hasil </b>
                                    </tr> 
                                    <tr>
                                        <td colspan="8"></td> 
                                    </tr> 
                                    <tr>
                                        <td class="text-left" colspan="8">Keterangan </td>
                                        <td class="text-center" colspan="2">File</td>
                                    </tr>
                                  
                                        <tr>
                                        <td class="text-left" colspan="8">Data Penggunaan Anggaran Monev Hasil</td>
                                            <td align="right" style="widows: 80px">
                                            <a  href="{{ route('rn_laporanakhir.bacaanggaran',base64_encode(mt_rand(10,99).$anggaranakhir->id) )}}" class="btn btn-app btn-sm" id="Unduh"><i class="ion ion-ios-book-outline text-blue"></i> Baca </a>
                                            </td>
                                        </tr>
                                 
                                    <tr>
                                        <td colspan="8"></td> 
                                    </tr>
                                    <tr>
                                        <td colspan="8"><b>5. Proposal </b>
                                    </tr> 
                                    <tr>
                                        <td colspan="8"></td> 
                                    </tr> 
                                    <tr>
                                        <td class="text-left" colspan="8">Keterangan </td>
                                        <td class="text-center" colspan="2">File</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" colspan="8">Data Proposal</td>
                                        <td align="right" style="widows: 80px">
                                        <a  href="{{ route('rn_laporanakhir.bacaproposal',base64_encode(mt_rand(10,99).$prop->id) )}}" class="btn btn-app btn-sm" id="Unduh"><i class="ion ion-ios-book-outline text-blue"></i> Baca </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>  
                @if ($stat == 1)
                <form class="form-horizontal" method="POST" action="{{ route('pengabdianng.update', base64_encode($idprop)) }}">
                {{ csrf_field() }} {{method_field('PATCH')}}
                
                <div class="form-group row">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-success pull-right">
                          <span class="ion ion-paper-airplane"></span>
                            SUBMIT
                        </button>
                    </div>
                </div>
                </form>
                @else
                <form class="form-horizontal" method="POST" action="{{ route('rn_laporanakhir.index') }}">
                {{ csrf_field() }} {{ method_field('GET') }}
                
                <div class="form-group row">
                    <div class="col-md-8 ">
                        <button type="submit" class="btn btn-default pull-left">
                          <span class="fa fa-reply fa-fw"></span>
                            Kembali
                        </button>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
</div>

@endsection