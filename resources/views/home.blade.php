@extends('layouts.app')

@section('title', 'หน้าหลัก')

@section('content')
    <section class="section-hero">
        <div class="container-fluid p-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-hero-text text-center">
                            <h1>
                                <span class="d-block">ทุ่มเทให้กับการดูแล</span>
                                <span class="d-block">สุขภาพในบ้านที่ดีที่สุด</span>
                            </h1>
                            <p>ดูแลเอาใจใส่ ไว้ใจพวกเรา</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-12">
                    <img class="section-hero-photo" src="{{ asset('assets/images/hero/photo-hero.jpg') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="section-content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="mb-0 text-center">ดูแลคุณเหมือนญาติพี่น้อง</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-service">
        <div class="section-service-heading">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mb-0">
                            <span>บริการ</span>
                        </h3>
                        <h3 class="mb-0">ภายใต้การดูแลทางการแพทย์</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-service-content">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <img class="card-icon" src="{{ asset('assets/images/icons/nurse.png') }}" />
                                <h4 class="card-title mb-0">การพยาบาลที่มีทักษะ</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <img class="card-icon" src="{{ asset('assets/images/icons/rehabilitation.png') }}" />
                                <h4 class="card-title mb-0">กายภาพบำบัด</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <img class="card-icon" src="{{ asset('assets/images/icons/speech-therapy.png') }}" />
                                <h4 class="card-title mb-0">การบำบัดด้วยการพูด</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <img class="card-icon" src="{{ asset('assets/images/icons/more.png') }}" />
                                <h4 class="card-title mb-0">บริการอื่น ๆ อีกมากมาย</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-question">
        <div class="section-question-heading">
            <div class="container">
                <h2 class="mb-0">สอบถามเรื่องสุขภาพ</h2>
            </div>
        </div>

        <div class="section-question-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="section-question-content-photo"
                            src="{{ asset('assets/images/question/undraw_questions.svg') }}" />
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-body d-flex align-items-center">
                                <img class="card-icon" src="{{ asset('assets/images/icons/instruction.png') }}" />
                                <h4 class="card-title mb-0">คำแนะนำจากผู้เชียวชาญ</h4>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body d-flex align-items-center">
                                <img class="card-icon" src="{{ asset('assets/images/icons/24-hour.png') }}" />
                                <h4 class="card-title mb-0">ปรึษา 24 ชั่วโมง</h4>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body d-flex align-items-center">
                                <img class="card-icon" src="{{ asset('assets/images/icons/volunteering.png') }}" />
                                <h4 class="card-title mb-0">บริการฟรีไม่มีค่าใช้จ่าย</h4>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body d-flex align-items-center">
                                <img class="card-icon" src="{{ asset('assets/images/icons/love.png') }}" />
                                <h4 class="card-title mb-0">ดูแลเหมือนคนในครอบครัว</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
