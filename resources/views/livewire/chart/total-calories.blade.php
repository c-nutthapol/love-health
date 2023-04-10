<div class="container mt-5">
    <div class="row g-4">
        <div class="col-md-12">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {

            var data = {
                labels: [
                    'ไม่มีข้อมูล',
                ],
                datasets: [{
                    data: [2],
                    label: "ไม่มีข้อมูล"
                }]
            }

            function UpdateData(chart, labels, datasets) {
                chart.data.labels = labels;
                chart.data.datasets = datasets;
                chart.update();
            }

            const ctx = document.getElementById('myChart');

            const ChartSET = new Chart(ctx, {
                type: 'line',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'น้ำหนัก'
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

            async function chartDataFn() {
                return await @this.chartData()
            }
            chartDataFn().then(result => {
                UpdateData(ChartSET, result['labels'], result['datasets'])
            });

            console.log("ready!");
        });
    </script>
@endpush
