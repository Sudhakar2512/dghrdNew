@extends('Dghrd.website.layouts.main')
@section('main-section')
<style>
    .pdf-book-card {
        min-height: 18rem;
        height: auto;
        margin-bottom: 2rem;

    }

    .manas-title {
        font-size: 25px;
        font-weight: 600;
        text-shadow: 2px 2px 3px lightgrey;
        text-align: center;
    }
</style>
<div class="container">
    <div class="col-12 mx-auto row my-5">
        <div class=" col-lg-4 col-md-6">
            <div class="card pdf-book-card">
                <div class="card-body">
                    <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" style="border: 1px solid lightgray; width: 100%; height: 25rem;" src="https://heyzine.com/flip-book/033c3b801d.html"></iframe>
                </div>
                <div class="card-footer">
                    <h2 class="manas-title">
                        मानस 2024
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card pdf-book-card">
                <div class="card-body">
                    <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/9187f11fbe.html" style="border: 1px solid lightgray; width: 100%; height: 25rem;"></iframe>
                </div>
                <div class="card-footer">
                    <h2 class="manas-title">
                        मानस 2023
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection