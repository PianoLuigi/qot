@extends('parts.base')

@section('content')
    <div class="container mt-3" id="prizes">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="card third-place">
                    <div class="">
                        <div class="medal">🥉</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">$50 USD</li>
                            <li class="list-group-item">1 Months Donator</li>
                            <li class="list-group-item">Profile Badge</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card first-place">
                    <div class="">
                        <div class="medal">🥇</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">$150 USD</li>
                            <li class="list-group-item">3 Months Donator</li>
                            <li class="list-group-item">Profile Badge</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card second-place">
                    <div class="">
                        <div class="medal">🥈</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">$100 USD</li>
                            <li class="list-group-item">2 Months Donator</li>
                            <li class="list-group-item">Profile Badge</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
