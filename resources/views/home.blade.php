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
    <div class="row justify-content-center mh-100">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Krijo një kategori</div>

                <div class="card-body">
                    <form method="POST" action="/kategoria/shto">
                        @csrf
                        <div class="form-group">
                            <label for="example-text-input" class="form-label">Emri</label>
                            <input name="emri" type="text" class="form-control " placeholder="Emri p.sh Mengjesi" autocomplete="off">
                        </div>
                        
                        <div class="form-group">
                            <label for="example-text-input" class="form-label">Pershkrimi</label>
                            <input name="pershkrimi"  type="text" class="form-control " placeholder="Emri p.sh Mengjesi" autocomplete="off">
                        </div>
                        <button class="btn btn-primary">Shto Kategorine</button>
                    </form>
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

    <br>
    <div class="row justify-content-center mh-100">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Krijo një produkt</div>

                <div class="card-body">
                    <form method="POST" action="/produkti/shto">
                        @csrf
                        <div class="form-group">
                            <label for="example-text-input" class="form-label">Emri</label>
                            <input name="emri" type="text" class="form-control " placeholder="Emri p.sh Mengjesi" autocomplete="off">
                        </div>
                        
                        <div class="form-group">
                            <label for="example-text-input" class="form-label">Pershkrimi</label>
                            <input name="pershkrimi"  type="text" class="form-control " placeholder="Emri p.sh Mengjesi" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="example-text-input" class="form-label">Kategoria</label>
                            <select name="kategoria_id" class=" form-control select2">
                                @foreach($kategorit as $kategoria)
                                <option value="{{$kategoria->id}}">{{$kategoria->emri}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="example-text-input" class="form-label">Çmimi</label>
                            <input name="qmimi"  type="text" class="form-control " placeholder="Çmimi" autocomplete="off">
                        </div>
                        <button class="btn btn-primary">Shto Produktin</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Produktet</div>

                <div class="card-body">
                   <ul>
                   @foreach($kategorit as $kategoria)
                    <li>
                        {{$kategoria->emri}}
                        <ul> 
                           @foreach($kategoria->produktet as $produkti)
                           <li>
                                {{$produkti->emri}} || Çmimi: € {{$produkti->qmimi}} <a href="#" class="btn btn-success btn-sm">Fshij produktin</a>
                           </li>
                           @endforeach
                        </ul>
                    </li>
                    @endforeach
                   </ul>

                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	$(document).ready(function() {
    $('.select2').select2();
});
</script>
@endsection
