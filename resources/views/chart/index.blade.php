<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart.js Animasi</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest"></script>
</head>
<body>
    <h2>Grafik Jumlah Pendaftar per Jam</h2>
    <canvas id="myChart" width="600" height="400"></canvas>
    <script>
        // Data Dummy
        const hours = ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00'];
        const counts = [5, 15, 10, 20, 25, 10, 5, 12];

        // Konfigurasi Grafik
        const config = {
            type: 'pie',
            data: {
                labels: hours,
                datasets: [{
                    label: 'Jumlah Pendaftar',
                    data: counts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(200, 99, 132, 0.2)',
                        'rgba(100, 149, 237, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(200, 99, 132, 1)',
                        'rgba(100, 149, 237, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                animation: {
                    duration: 2000, // Durasi animasi: 2 detik
                    easing: 'easeInOutQuad', // Efek animasi pantulan
                    onComplete: function() {
                        console.log("Animasi selesai!");
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            font: {
                                size: 14
                            }
                        }
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Pendaftar',
                            font: {
                                size: 16
                            }
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Jam',
                            font: {
                                size: 16
                            }
                        }
                    }
                }
            }
        };

        // Render Grafik
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, config);
    </script>
</body>
</html>
