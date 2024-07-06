<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Statistik Rumah Sakit</title>
    <style>
        /* Your CSS styles for table, header, body */
        /* Ensure styles are correctly applied to maintain consistency */
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        .chart-container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        canvas {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <!-- Header content, including logo and title -->
        <div>
            <img src="<?php echo base_url() ?>bahan/dist/img/RSUD.png" width="200" height="60" class="user-image" alt="User Image"/>
        </div>
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <h5><b>Grafik Statistik Rumah Sakit</b></h5>
                <h5><b>dari Bulan: <?php echo date('F Y', strtotime($first_bulan)) ?> sampai Bulan: <?php echo date('F Y', strtotime($second_bulan)) ?></b></h5>
            </div>
        </div>
    </header>

    <div class="chart-container">
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Define your graphData object with labels and datasets
        var graphData = {
            "labels": <?php echo json_encode($labels); ?>, // Array of labels (months)
            "datasets": [
                {
                    "label": "BOR", // Label for the first dataset
                    "data": <?php echo json_encode($bor_data); ?>, // Data for BOR
                    "backgroundColor": "rgba(255, 99, 132, 0.2)", // Background color for bars
                    "borderColor": "rgba(255, 99, 132, 1)", // Border color for bars
                    "borderWidth": 1 // Border width for bars
                },
                {
                    "label": "AVLOS", // Label for the second dataset
                    "data": <?php echo json_encode($avlos_data); ?>, // Data for AVLOS
                    "backgroundColor": "rgba(54, 162, 235, 0.2)", // Background color for bars
                    "borderColor": "rgba(54, 162, 235, 1)", // Border color for bars
                    "borderWidth": 1 // Border width for bars
                },
                // Add more datasets as needed
            ]
        };

        // Getting the canvas element where the chart will be rendered
        var ctx = document.getElementById('myChart').getContext('2d');

        // Initializing Chart.js and rendering the chart
        var myChart = new Chart(ctx, {
            type: 'bar', // Type of chart (bar, line, pie, etc.)
            data: graphData, // The data object containing labels and datasets
            options: {
                plugins: {
                    datalabels: {
                        anchor: 'end', // Position of data labels relative to anchor point
                        align: 'top', // Alignment of data labels relative to anchor point
                        formatter: function(value, context) {
                            return value; // Customize the format of data labels if needed
                        },
                        font: {
                            weight: 'bold' // Font weight of data labels
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true // Start y-axis scale from zero
                    }
                }
            }
        });
    </script>
</body>
</html>
