 @extends('layouts.app')

 @section('title', 'กรอกข้อมูลประจำวัน')

 @section('content')
     <section class="form-page">
         <div class="form-page-heading"
             style="background-image: url('{{ asset('assets/images/hero/photo-hero.jpg') }}');
             background-size: cover; background-position: center left;">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 text-center">
                         <h1 class="mb-0 form-page-heading__title">กรอกข้อมูลประจำวัน</h1>
                     </div>
                 </div>
             </div>
         </div>

         <div class="form-page-content">
            @livewire('form')
         </div>
     </section>
 @endsection
