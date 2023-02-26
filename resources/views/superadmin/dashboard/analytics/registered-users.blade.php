<div class="mt-4">
    <canvas id="usersCount" width="400" height="100"></canvas>
</div>

<script>
    const ctx = document.getElementById('usersCount');
        const chart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
        ],
        datasets: [{
        label: 'Number of Registered Users',
        data: [
            {{ $usersJanuary }}, {{ $usersFebruary }}, {{ $usersMarch }}, {{ $usersApril }}, {{ $usersMay }},
            {{ $usersJune }}, {{ $usersJuly }}, {{ $usersAugust }}, {{ $usersSeptember }}, {{ $usersOctober }},
            {{ $usersNovember }}, {{ $usersDecember }}
        ],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        ],
        borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        ],
        borderWidth: 1
        }]
        },
        options: {
        scales: {
        y: {
        beginAtZero: true
        }}}
        });
</script>