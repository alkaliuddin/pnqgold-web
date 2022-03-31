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


    const ctxBar = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: monthly_labels,
            datasets: [{
                    label: '# Tiket Baru',
                    data: [{!! $newCount->count() !!}],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: '# Tiket Dalam Proses',
                    data: [{!! $progressCount->count() !!}],
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: '# Tiket Selesai',
                    data: [{!! $completedCount->count() !!}],
                    backgroundColor: 'rgba(25, 192, 128, 0.2)',
                    borderColor: 'rgba(25, 192, 128, 1)',
                    borderWidth: 1
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

    // const ctxBar = document.getElementById('barChart').getContext('2d');
    // const barChart = new Chart(ctxBar, {
    //     type: 'bar',
    //     data: {
    //         labels: ['New', 'In Progress', 'Completed'],
    //         datasets: [{
    //             label: '# of Complaint Tickets',
    //             data: [{!! $newCount->count() !!}, {!! $progressCount->count() !!}, {!! $completedCount->count() !!}],
    //             backgroundColor: [
    //                 'rgba(54, 162, 235, 0.2)',
    //                 'rgba(255, 206, 86, 0.2)',
    //                 'rgba(75, 192, 192, 0.2)',
    //                 'rgba(255, 99, 132, 0.2)'
    //             ],
    //             borderColor: [
    //                 'rgba(54, 162, 235, 1)',
    //                 'rgba(255, 206, 86, 1)',
    //                 'rgba(75, 192, 192, 1)',
    //                 'rgba(255, 99, 132, 1)'
    //             ],
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             yAxes: [{
    //                 ticks: {
    //                     beginAtZero: true
    //                 }
    //             }]
    //         }
    //     }
    // });
</script>
