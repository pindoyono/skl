@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Surat Keterangan Lulus') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a target="_blank" href="{{asset('img/'.Auth::user()->name )}}">
                    <button type="button" class="btn btn-primary btn-lg">Download</button>
                    </a>
                    <object data="{{asset('img/'.Auth::user()->name )}}" type="application/pdf" width="100%" height="800px">
                        <p>Alternative text - include a link <a href="myfile.pdf">to the PDF!</a></p>
                    </object>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
