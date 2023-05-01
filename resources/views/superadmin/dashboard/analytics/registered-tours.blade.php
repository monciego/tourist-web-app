<div class="mt-4">
    <canvas id="touristsPerYear" width="400" height="100"></canvas>
</div>

<script>
    let data = @json($total_tourists_per_specific_year);
    let newLabel = [];
    let newData = [];
    data.forEach(element => {
        newLabel.push(element.year.slice(0, 4));
        let total = parseInt(element.total_number_of_adults || 0) + parseInt(element.total_number_of_children || 0) +  parseInt(element.total_number_of_infants || 0)  + parseInt(element.total_number_of_foreigner || 0);
        newData.push(total);
    })

    console.log(newData)
    // console.log(parseInt(newData))

    console.log(data)
    const ctxTouristPerYear = document.getElementById('touristsPerYear');
            const chartTouristPerYear = new Chart(ctxTouristPerYear, {
            type: 'bar',
            data: {
            labels: newLabel,
            datasets: [{
            label: 'Number of Registered Tour Per Year',
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