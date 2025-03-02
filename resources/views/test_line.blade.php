<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart.js in Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
    </style>
</head>

<body>
    <div style="width: 80%; max-width: 800px; height: 400px; margin: auto;">
        <canvas id="myChart"></canvas>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch("/chart-data")
                .then(response => response.json())
                .then(data => {
                    const labels = data.map(item => `Month ${item.month}`);
                    const values = data.map(item => item.count);

                    // Define multiple colors
                    const backgroundColors = [
                        'rgba(255, 99, 132, 0.5)', // Red
                        'rgba(54, 162, 235, 0.5)', // Blue
                        'rgba(255, 206, 86, 0.5)', // Yellow
                        'rgba(75, 192, 192, 0.5)', // Green
                        'rgba(153, 102, 255, 0.5)', // Purple
                        'rgba(255, 159, 64, 0.5)' // Orange
                    ];

                    const borderColors = [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ];

                    // Generate chart data with different colors
                    const datasets = [{
                        label: 'Orders Per Month',
                        data: values,
                        backgroundColor: backgroundColors.slice(0, values.length),
                        borderColor: borderColors.slice(0, values.length),
                        borderWidth: 1
                    }];
                    const lineCtx = document.getElementById('myChart').getContext('2d');
                    new Chart(lineCtx, {
                        type: 'line',
                        data: {
                            labels,
                            datasets
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false
                        }
                    });

                });
        });
    </script>

</body>

</html>
