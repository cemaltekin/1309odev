@extends('layouts.admin-master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <strong>Kullanıcı Ekleme </strong> Formu
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('user.import')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" class="form-control">
<<<<<<< HEAD
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Yükle
                                </button>
=======
                                <input type="submit" class="btn btn-block btn-input au-btn--blue" value="Yükle"/>
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
