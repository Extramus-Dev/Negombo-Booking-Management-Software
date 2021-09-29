@extends('layouts.usermaster')

@section('section')

    <div class="container-fluid padding20">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-body">
                        <h3><strong>{{ (__('Price')) }} dal 31 Luglio al 29 Agosto</strong></h3><hr>
                        <iframe src="{{ asset('images/docs/pricelist1.pdf') }}" width="100%" height="350px" /></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-body">
                        <h3><strong>{{ (__('Price')) }} dal 30 Agosto alla chiusura</strong></h3><hr>
                        <iframe src="{{ asset('images/docs/pricelist2.pdf') }}" width="100%" height="350px" /></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-body">
                        <h3><strong>{{ (__('Price')) }} dall'apertura al 30 Luglio</strong></h3><hr>
                        <iframe src="{{ asset('images/docs/pricelist3.pdf') }}" width="100%" height="350px" /></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
