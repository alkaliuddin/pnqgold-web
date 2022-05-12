<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
    var labels = {{ Js::from($year) }};

    var totals = {{ Js::from($yearlyTotal) }};
    var newTotals = {{ Js::from($yearlyNew) }};
    var progressTotals = {{ Js::from($yearlyProgress) }};
    var completedTotals = {{ Js::from($yearlyCompleted) }};

    const data = {
        labels: labels,
        datasets: [{
                label: 'Jumlah',
                type: 'line',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: totals,
            },
            {
                label: 'Baru',
                type: 'bar',
                backgroundColor: 'rgb(3, 138, 255)',
                borderColor: 'rgb(3, 138, 255)',
                data: newTotals,
            },
            {
                label: 'Dalam Proses',
                type: 'bar',
                backgroundColor: 'rgb(255, 240, 0)',
                borderColor: 'rgb(255, 240, 0)',
                data: progressTotals,
            },
            {
                label: 'Selesai',
                type: 'bar',
                backgroundColor: 'rgb(38, 194, 129)',
                borderColor: 'rgb(38, 194, 129)',
                data: completedTotals,
            }
        ]
    };

    const config = {
        type: 'scatter',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    };

    const myChart = new Chart(
        document.getElementById('barChart'),
        config
    );
</script>