@extends('layouts.app')

@section('title', 'แคลอรี่ของการกินและออกกำลังกาย')

@section('content')
    <section class="history-page">

        @include('components.tabs')

        <div class="history-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-0 history-page-content__title">
                            แคลอรี่ของการกินและออกกำลังกาย
                        </h1>
                    </div>
                </div>
            </div>

            @livewire('chart.calories-eating')
        </div>

    </section>
@endsection
