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
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 col-lg-10 col-xl-7 col-xxl-6 mx-auto">
                         <div class="card">
                             <div class="card-body">
                                 <form>
                                     <div class="row g-4">
                                         <div class="col-12">
                                             <label for="food" class="form-label">อาหารที่ทาน</label>
                                             <div class="input-group d-flex flex-row-reverse">
                                                 <select class="form-select" id="food">
                                                     <option selected>กรุณาเลือกอาหารที่ทาน</option>
                                                     <option value="1">One</option>
                                                     <option value="2">Two</option>
                                                     <option value="3">Three</option>
                                                 </select>
                                                 <span class="input-group-text">
                                                     <i class="bi bi-egg-fried"></i>
                                                 </span>
                                             </div>
                                         </div>

                                         <div class="col-12">
                                             <label for="strength" class="form-label">
                                                 ท่าที่ใช้ออกกำลังกาย
                                             </label>
                                             <div class="input-group d-flex flex-row-reverse">
                                                 <select class="form-select" id="strength">
                                                     <option selected>
                                                         กรุณาเลือกท่าที่ใช้ออกกำลังกาย
                                                     </option>
                                                     <option value="1">One</option>
                                                     <option value="2">Two</option>
                                                     <option value="3">Three</option>
                                                 </select>
                                                 <span class="input-group-text">
                                                     <i class="bi bi-universal-access"></i>
                                                 </span>
                                             </div>
                                         </div>

                                         <div class="col-12">
                                             <label for="time-strength" class="form-label">
                                                 เวลาที่ใช้ออกกำลังกาย
                                             </label>
                                             <div class="input-group d-flex flex-row-reverse">
                                                 <select class="form-select" id="time-strength">
                                                     <option selected>
                                                         กรุณาเลือกเวลาที่ใช้ออกกำลังกาย
                                                     </option>
                                                     <option value="10 นาที">10 นาที</option>
                                                     <option value="15 นาที">15 นาที</option>
                                                     <option value="20 นาที">20 นาที</option>
                                                     <option value="30 นาที">30 นาที</option>
                                                     <option value="1 ชั่วโมง">1 ชั่วโมง</option>
                                                     <option value="1 ชั่วโมง 30 นาที">
                                                         1 ชั่วโมง 30 นาที
                                                     </option>
                                                     <option value="2 ชั่วโมง">2 ชั่วโมง</option>
                                                 </select>
                                                 <span class="input-group-text">
                                                     <i class="bi bi-stopwatch"></i>
                                                 </span>
                                             </div>
                                         </div>

                                         <div class="col-12">
                                             <label for="feeling" class="form-label">
                                                 สุขภาพจิต (อารมณ์ความรู้สึก)
                                             </label>
                                             <div class="d-block">
                                                 <div class="btn-group" role="group">
                                                     <input type="radio" class="btn-check" name="emotion" id="emotion1"
                                                         autocomplete="off" />
                                                     <label class="btn btn-check-primary smile" for="emotion1">
                                                         <img src="{{ asset('assets/images/icons/emoji/smile.png') }}" />
                                                         <span class="d-inline-block ms-2">ปกติ</span>
                                                     </label>

                                                     <input type="radio" class="btn-check" name="emotion" id="emotion2"
                                                         autocomplete="off" />
                                                     <label class="btn btn-check-primary sunglasses" for="emotion2">
                                                         <img
                                                             src="{{ asset('assets/images/icons/emoji/sunglasses.png') }}" />
                                                         <span class="d-inline-block ms-2">แจ๋มใส</span>
                                                     </label>

                                                     <input type="radio" class="btn-check" name="emotion" id="emotion3"
                                                         autocomplete="off" />
                                                     <label class="btn btn-check-primary laughing" for="emotion3">
                                                         <img src="{{ asset('assets/images/icons/emoji/laughing.png') }}" />
                                                         <span class="d-inline-block ms-2">เฮฮา</span>
                                                     </label>

                                                     <input type="radio" class="btn-check" name="emotion" id="emotion4"
                                                         autocomplete="off" />
                                                     <label class="btn btn-check-primary frown" for="emotion4">
                                                         <img src="{{ asset('assets/images/icons/emoji/angry.png') }}" />
                                                         <span class="d-inline-block ms-2">โกรธ</span>
                                                     </label>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="col-12">
                                             <label for="age" class="form-label">อายุ</label>
                                             <div class="input-group d-flex flex-row-reverse">
                                                 <input type="number" class="form-control" placeholder="กรุณากรอกอายุ" />
                                                 <span class="input-group-text">
                                                     <i class="bi bi-person-fill-up"></i>
                                                 </span>
                                             </div>
                                         </div>

                                         <div class="form-page-btn text-center">
                                             <button type="submit" class="btn btn-custom-primary w-100 shadow-none">
                                                 ส่งข้อมูล
                                             </button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @endsection
