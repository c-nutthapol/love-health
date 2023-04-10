@extends('layouts.app')

@section('title', 'ผลรวมน้ำหนักทั้งหมดในแต่ละครั้ง')

@section('content')
    <section class="history-page">

        @include('components.tabs')

        <div class="history-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-0 history-page-content__title">
                            ผลรวมน้ำหนักทั้งหมดในแต่ละครั้ง
                        </h1>
                    </div>
                </div>
            </div>

            @livewire('chart.total-weight')
        </div>

    </section>
@endsection

