@extends('layouts.app')

@section('title', 'ประวัติการกรอกข้อมูลประจำวัน')

@section('content')
    <section class="history-page">

        <div class="history-page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="mb-0 history-page-heading__title">
                            ประวัติการกรอกข้อมูลประจำวัน
                        </h1>
                    </div>
                </div>
            </div>
        </div>


        @livewire('auth.history')

    </section>
@endsection
