@extends('layouts.app')

@section('title')
    Profil Umum Peneliti
@endsection

@section('breadcrumb')
    @parent
    <li><a href="{{ route('home') }}">Profil</a></li>
    <li>Perubahan</li>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>

@end
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary">
            <div class="panel-heading"><strong></strong> <div class="pull-right"><strong></strong></div>
            </div>
            @if($errors->first('success'))
                    <script type="text/javascript">
                        "use strict";
                        swal(
                            'Selamat!',
                            'Data Berhasil Disimpan',
                            'success'
                        );
                    </script>
                    @elseif($errors->first('error'))
                    <script type="text/javascript">
    
                        "use strict";
                        swal(
                            'Terjadi Kesalahan!',
                            'Data Gagal Disimpan',
                            'error'
                        );
                    </script>
    
                    @endif
            <div class="panel-body">
                <form role="form" method="POST" enctype="multipart/form-data" action="{{route('dosen.update',base64_encode(mt_rand(10,99).$iddosen))}}">
                {{ csrf_field() }} {{ method_field('PATCH') }}
                
                <div class="panel panel-default">
                <div class="panel-body"><strong>Profil Dosen - Biodata Pribadi</strong></div>
            
                    <div class="panel-footer">
                     
                        <div class="col col-md-5">
                            <div class="pull-right image"><img src="{{asset('public/images/'.$dosen->foto)}}" class="img-thumbnail  img-circle" alt="User Image" style="width:250px; height: 250px;"></div>
                            
                        </div>
                        
                        <div class="col col-md-7">
                        <br>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama</label>

                            <div class="col-md-9 input-group input-group-sm">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{$dosen->nama}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">NIDN/NIDK</label>

                            <div class="col-md-9 input-group input-group-sm">
                                <input id="nidn" type="text" class="form-control" name="nidn" value="{{$dosen->nidn}}" >
                                @if ($errors->has('nidn'))
                                <span class="help-block">
                                    <code>{{ $errors->first('nidn') }}</code>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-3 control-label">No. Pegawai</label>

                            <div class="form-group">
                                <div class="col-md-9 input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="NIP" name="nip" id="nip" value="{{ $dosen->nip }}" required autofocus>

                                    @if ($errors->has('nip'))
                                    <span class="help-block">
                                        <code>{{ $errors->first('nip') }}</code>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sinta') ? ' has-error' : '' }}">
                            <label for="sinta" class="col-md-3 control-label">Sinta ID</label>

                            <div class="form-group">
                                <div class="col-md-9 input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="ID Sinta" name="sinta" id="sinta" value="{{ $dosen->sinta }}" autofocus>

                                    @if ($errors->has('sinta'))
                                    <span class="help-block">
                                        <code>{{ $errors->first('sinta') }}</code>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hindex') ? ' has-error' : '' }}">
                            <label for="hindex" class="col-md-3 control-label">H-Index</label>

                            <div class="form-group">
                                <div class="col-md-9 input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="H-Index" name="hindex" id="hindex" value="{{ $dosen->hindex }}" required autofocus>

                                    @if ($errors->has('hindex'))
                                    <span class="help-block">
                                        <code>{{ $errors->first('hindex') }}</code>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr>
                        </div>

                        <div class="form-group{{ $errors->has('profil') ? ' has-error' : '' }}">
                            <label for="profil" class="col-md-2 control-label">Gambar Profil <br><small class="text-red">Max. 512 KB</small></label>

                            <div class="col-md-3 input-group-sm">
                                 <input type="file" accept="image/png" name="profil" id="profil" class="form-control" style="margin-left: -15px; width: 240px">

                                @if ($errors->has('profil'))
                                <span class="help-block">
                                    <code>{{ $errors->first('profil') }}</code>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-md-11 input-group-sm">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pt" class="col-md-2 control-label">Institusi</label>

                            <div class="col-md-10 input-group input-group-sm">
                                <select id="pt" class="form-control" name="pt" required>
                                <option value=""> -- Pilih Institusi --</option>
                                @foreach($pt as $list)
                                <option value="{{$list->id}}" {{$dosen->idpt == $list->id ? 'selected' : ''}}> {{$list->pt}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fk" class="col-md-2 control-label">Fakultas</label>

                            <div class="col-md-10 input-group input-group-sm">
                                <select id="fk" class="form-control" name="fk" required>
                                <option value=""> -- Pilih Fakultas --</option>
                                @foreach($fk as $list)
                                <option value="{{$list->id}}" {{$dosen->idfakultas == $list->id ? 'selected' : ''}}> {{$list->fakultas}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pd" class="col-md-2 control-label">Program Studi</label>

                            <div class="col-md-10 input-group input-group-sm">
                                <select id="prodi" class="form-control" name="prodi" required>
                                <option value=""> -- Pilih Program Studi --</option>
                                @foreach($pd as $list)
                                <option value="{{$list->id}}" {{$dosen->idprodi == $list->id ? 'selected' : ''}}> {{$list->prodi}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Jabatan Struktural</label>

                            <div class="form-group">
                                <div class="col-md-10 input-group input-group-sm">
                                    <select id="struktur" class="form-control" name="struktur" required>
                                        <option value=""> -- Pilih Jabatan Struktural --</option>
                                        @if(count($profil))
                                        @foreach($struktur as $list)
                                        <option value="{{$list->id}}" {{$profil->struktur == $list->id ? 'selected' : ''}}> {{$list->struktural}}</option>
                                        @endforeach 
                                        @else
                                        @foreach($struktur as $list)
                                        <option value="{{$list->id}}" {{$dosen->struktur == $list->id ? 'selected' : ''}}> {{$list->struktural}}</option>
                                        @endforeach 
                                        @endif
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Jabatan Fungsional</label>

                            <div class="form-group">
                                <div class="col-md-10 input-group input-group-sm">
                                    <select id="fungsi" class="form-control" name="fungsi" required>
                                        <option value=""> -- Pilih Jabatan Fungsional --</option>
                                        @if(count($profil))
                                        @foreach($fungsi as $list)
                                        <option value="{{$list->id}}" {{$profil->fungsi == $list->id ? 'selected' : ''}}> {{$list->fungsional}}</option>
                                        @endforeach
                                        @else
                                        @foreach($fungsi as $list)
                                        <option value="{{$list->id}}" {{$dosen->fungsi == $list->id ? 'selected' : ''}}> {{$list->fungsional}}</option>
                                        @endforeach
                                        @endif
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Pendidikan Akhir</label>

                            <div class="form-group">
                                <div class="col-md-10 input-group input-group-sm">
                                    <select id="pddk" class="form-control" name="pddk" required>
                                        <option value=""> -- Pilih Jenjang Pendidikan Tertinggi --</option>
                                        @if(count($profil))
                                        @foreach($pddk as $list)
                                        <option value="{{$list->id}}" {{$profil->idpddk == $list->id ? 'selected' : ''}}> {{$list->pendidikan}}</option>
                                        @endforeach
                                        @else
                                        @foreach($pddk as $list)
                                        <option value="{{$list->id}}" {{$dosen->idpddk == $list->id ? 'selected' : ''}}> {{$list->pendidikan}}</option>
                                        @endforeach
                                        @endif
                                    </select>

                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group{{ $errors->has('pakar') ? ' has-error' : '' }}">
                            <label for="pakar" class="col-md-2 control-label">Kepakaran</label>

                            <div class="col-md-5 input-group input-group-sm">
                                <input id="pakar" type="text" class="form-control" name="pakar" value="{{ old('pakar') ? old('pakar') : $dosen->pakar}}" required autofocus>

                                @if ($errors->has('pakar'))
                                    <span class="help-block">
                                        <code>{{ $errors->first('pakar') }}</code>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Rumpun Ilmu</label>

                            <div class="col-md-10 input-group input-group-sm">
                                <select id="ilmu1" class="form-control" name="ilmu1" required>
                                <option value=""> -- Pilih Rumpun Ilmu Level 1 --</option>
                                @foreach($ilmu as $list)
                                <option value="{{$list->ilmu1}}" {{$dosen->rumpun->ilmu1 == $list->ilmu1 ? 'selected' : ''}}> {{ $list->ilmu1 }}</option>
                                @endforeach
                                </select>
                                <br><br>
                                <select id="ilmu2" class="form-control" name="ilmu2" required>
                                <option value=""> -- Pilih Rumpun Ilmu Level 2 --</option>
                                @foreach($ilmu2 as $list)
                                <option value="{{ $list->ilmu2 }}" {{$dosen->rumpun->ilmu2 == $list->ilmu2 ? 'selected' : ''}}> {{ $list->ilmu2 }}</option>
                                @endforeach
                                </select>
                                <br><br>
                                <select id="ilmu3" class="form-control" name="ilmu3" required>
                                <option value=""> -- Pilih Rumpun Ilmu Level 3 --</option>
                                @foreach($ilmu3 as $list)
                                <option value="{{ $list->id }}" {{$dosen->rumpun->ilmu3 == $list->ilmu3 ? 'selected' : ''}}> {{ $list->ilmu3 }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 control-label">E-Mail</label>

                            <div class="col-md-5 input-group input-group-sm">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') ? old('email') : $dosen->email}}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <code>{{ $errors->first('email') }}</code>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" name="submit" id="submit">
                        <span class="fa fa-floppy-o"></span> Update Profil
                        </button>
                    </div>
                </div> 
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><strong>Profil Penelit - Riwayat Penelitian</strong></div>
            
            <div class="panel-body">

              -
            </div> 
        </div>

         <div class="panel panel-default">
            <div class="panel-heading"><strong>Profil Peneliti - Riwayat Pengabdian</strong></div>
            
            <div class="panel-body">

              -
            </div> 
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="{{route('dosen.index')}}" class="btn btn-default pull-left" name="awal" id="awal"><span class="fa fa-reply fa-fw"></span> Kembali</a>
            </div>
        </div> 
        
    </div>
     

</div>

@endsection