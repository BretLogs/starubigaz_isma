document.getElementById("dateForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting normally
    
    var formData = new FormData(this); // Create FormData object from form
    
    // Send AJAX request to server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/index/index_transaction_date.php");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText); // Parse JSON response
                
                // Update chart with received data
                updateChart(data);
            } else {
                console.error("Error fetching data:", xhr.status, xhr.statusText);
            }
        }
    };
    xhr.send(formData);
});

function updateChart(data) {
    // Extract labels and datasets from the received data
    var labels = data.labels;
    var datasets = data.datasets;
    
    // Create or update the chart using Chart.js
    var ctx = document.getElementById('transactionChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: datasets
        },
        options: {
            maintainAspectRatio: true,
            legend: {
                display: true,
                labels: {
                    fontStyle: 'normal'
                }
            },
            title: {
                fontStyle: 'bold'
            },
            scales: {
                xAxes: [{
                    ticks: {
                        fontStyle: 'normal'
                    }
                }],
                yAxes: [{
                    ticks: {
                        fontStyle: 'normal'
                    }
                }]
            }
        }
    });
}
