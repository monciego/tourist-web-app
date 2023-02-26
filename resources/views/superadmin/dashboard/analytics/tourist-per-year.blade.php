<div class="mt-4">
    <canvas id="touristsPerYear" width="400" height="100"></canvas>
</div>

<script>
    let data = @json($total_tourists_per_year);
    let newLabel = [];
    let newData = [];
        data.forEach(element => {
        newLabel.push(element.tour_date.slice(0, 4));
       let total = element.total_number_of_adults + element.total_number_of_children + element.total_number_of_infants;
       newData.push(total);
    })
    const ctxTouristPerYear = document.getElementById('touristsPerYear');
            const chartTouristPerYear = new Chart(ctxTouristPerYear, {
            type: 'bar',
            data: {
            labels: newLabel,
            datasets: [{
            label: 'Number of Tourists Per Year',
            data: newData,
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