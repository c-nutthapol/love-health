@extends('layouts.app')

@section('title', 'แคลอรี่รวม')

@section('content')
    <section class="history-page">

        @include('components.tabs')

        <div class="history-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-0 history-page-content__title">
                            แคลอรี่รวมของกินและออกกำลังกาย
                        </h1>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row g-4">
                    <div class="col-md-12">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('script')
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['27', '28', '29', '30', '31', '1'],
                datasets: [{
                    label: 'แคลอรี่รวมของกินและออกกำลังกาย',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'แคลอรี่'
                        }
                    },
                    x: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'วันที่'
                        }
                    }
                }
            }
        });
    </script>
@endsection
