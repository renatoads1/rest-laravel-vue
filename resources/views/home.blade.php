@extends('layouts.app')

@section('content')
<cabeca link="www.google.com.br" status="{{session('status')}}"></cabeca>
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                    <menssagem cor="alert alert-warning">
                    </menssagem>

                </div>
                <compalert>
                </compalert>

               
            </div>
        </div>
    </div>

</div>
<div class="container">
    <card >
        
    </card>
</div>
@endsection
