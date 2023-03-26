@extends('layouts.admin.app')

@section('title', 'หน้าหลัก')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">ข้อมูลผู้สูงอายุ</h1>


        <!-- DataTales Example -->
        @livewire('admin.home')
    </div>


@endsection
