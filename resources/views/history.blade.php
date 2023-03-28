@extends('layouts.app')

@section('title', 'ประวัติการกรอกข้อมูลประจำวัน')

@section('content')
    <section class="history-page">

        @include('components.tabs')


        @livewire('auth.history')

    </section>
@endsection
