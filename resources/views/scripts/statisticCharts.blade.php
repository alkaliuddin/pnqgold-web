<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script>
    const monthly_labels = [
        'Januari',
        'Februari',
        'Mac',
        'April',
        'Mei',
        'Jun',
        'Julai',
        'Ogos',
        'September',
        'October',
        'November',
        'December'
    ];

    var newTixData = [{!! $newCount->count() !!}, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    var progressTixData = [{!! $progressCount->count() !!}, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    var completedTixData = [{!! $completedCount->count() !!}, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    var totalTixData = [{!! $totalCount !!}, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];


    const ctxBar = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: monthly_labels,
            datasets: [{
                    label: 'Bil. Tiket Baru',
                    data: newTixData,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    order: 2
                },
                {
                    label: 'Bil. Tiket Dalam Proses',
                    data: progressTixData,
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1,
                    order: 2
                },
                {
                    label: 'Bil. Tiket Selesai',
                    data: completedTixData,
                    backgroundColor: 'rgba(25, 192, 128, 0.2)',
                    borderColor: 'rgba(25, 192, 128, 1)',
                    borderWidth: 1,
                    order: 2
                },
                {
                    type: 'line',
                    label: 'Jumlah Tiket',
                    data: totalTixData,
                    backgroundColor: 'rgba(25, 25, 25, 0)',
                    borderColor: 'rgba(25, 25, 25, 0.8)',
                    borderWidth: 1,
                    order: 1
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
