<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script>
    const ctxBar = document.getElementById('barChart').getContext('2d');
    const ctxDonut = document.getElementById('donutChart').getContext('2d');

    const barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['New', 'In Progress', 'Completed', 'Unknown'],
            datasets: [{
                label: '# of Complaint Tickets',
                data: [{!! $newCount->count() !!}, {!! $progressCount->count() !!}, {!! $completedCount->count() !!},
                    {!! $unknownCount->count() !!}
                ],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const donutChart = new Chart(ctxDonut, {
        type: 'doughnut',
        data: {
            labels: [
                'New',
                'In Progress',
                'Completed',
                'Unknown'
            ],
            datasets: [{
                label: 'Complaint Tickets',
                data: [{!! $newCount->count() !!}, {!! $progressCount->count() !!}, {!! $completedCount->count() !!},
                    {!! $unknownCount->count() !!}
                ],
                backgroundColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                hoverOffset: 4
            }]
        }
    });
</script>
