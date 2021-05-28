@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Krijo një kategori</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="example-text-input" class="form-label">Emri</label>
                        <input name="example-text-input" type="text" class="form-control " placeholder="Emri p.sh Mengjesi" autocomplete="off">
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Kategoritë</div>

                <div class="card-body">
                   <ul>
                   @foreach($kategorit as $kategoria)
                    <li>
                        {{$kategoria->emri}}
                    </li>
                    @endforeach
                   </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
