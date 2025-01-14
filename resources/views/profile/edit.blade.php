@extends('layouts.app')

@section('title')
    Profil Autentikasi Peneliti
@endsection

@section('breadcrumb')
    @parent
    <li><a href="{{ route('home') }}">Profil</a></li>
    <li>Password</li>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary">
            <div class="panel-heading"><strong></strong> <div class="pull-right"><strong></strong></div>
            </div>
            
            <div class="panel-body">
                <form role="form" method="POST" action="{{route('profile.update',$user->id)}}">
                {{ csrf_field() }} {{ method_field('PATCH') }}
                
                <div class="panel panel-default">
                    <div class="panel-body"><strong>Profil User - Autentikasi Akun</strong></div>
            
                    <div class="panel-footer">
                     
                        <div class="col col-md-4">
                            <div class="pull-right image"><img src="{{asset('public/images/'.$user->foto)}}" class="img-thumbnail  img-circle" alt="User Image" style="width:250px; height: 250px;"></div>
                            
                        </div>
                        <br>
                        <div class="col col-md-8">
                        <div class="form-group">
                            <label class="col-md-1"></label>
                            <label class="col-md-3 control-label">Nama</label>

                            <div class="col-md-7 input-group input-group-sm">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{$user->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-1"></label>
                            <label class="col-md-3 control-label">Username</label>

                            <div class="col-md-7 input-group input-group-sm">
                                <input id="nidn" type="text" class="form-control" name="nidn" value="{{$user->email}}" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group{{ $errors->has('oldpass') ? ' has-error' : '' }}">
                            <label class="col-md-1"></label>
                            <label for="oldpass" class="col-md-3 control-label">Password Lama</label>

                            <div class="form-group">
                                <div class="col-md-7 input-group input-group-sm">
                                    <input type="password" class="form-control" placeholder="Tulis password lama" name="oldpass" id="oldpass"  required autofocus>
                                    
                                    @if ($errors->has('oldpass'))
                                    <span class="help-block">
                                        <code>{{ $errors->first('oldpass') }}</code>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('newpass') ? ' has-error' : '' }}">
                            <label class="col-md-1"></label>
                            <label for="newpass" class="col-md-3 control-label">Password Baru</label>

                            <div class="form-group">
                                <div class="col-md-7 input-group input-group-sm">
                                    <input type="password" class="form-control" placeholder="Tulis password baru" name="newpass" id="newpass" value="{{ old('newpass') }}" required autofocus>

                                    @if ($errors->has('newpass'))
                                    <span class="help-block">
                                        <code>{{ $errors->first('newpass') }}</code>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('confirm') ? ' has-error' : '' }}">
                            <label class="col-md-1"></label>
                            <label for="confirm" class="col-md-3 control-label">Konfirmasi Password</label>

                            <div class="form-group">
                                <div class="col-md-7 input-group input-group-sm">
                                    <input type="password" class="form-control" placeholder="Tulis ulang password baru" name="confirm" id="confirm" value="{{ old('confirm') }}" required autofocus>

                                    @if ($errors->has('confirm'))
                                    <span class="help-block">
                                        <code>{{ $errors->first('confirm') }}</code>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>

                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('home')}}" class="btn btn-default pull-left" name="awal" id="awal"><span class="fa fa-reply fa-fw"></span> Kembali</a> 
                        <button type="submit" class="btn btn-primary pull-right" name="submit" id="submit">
                        <span class="fa fa-floppy-o"></span> Update Password
                        </button>
                    </div>
                </div> 
                </form>
            </div>
        </div>
 
    </div>
</div>

@endsection