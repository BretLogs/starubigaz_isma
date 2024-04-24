<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Dashboard - Brand</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" />
  <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css" />
  <link rel="stylesheet" href="assets/css/Add-Another-Button-1.css" />
  <link rel="stylesheet" href="assets/css/Add-Another-Button.css" />
  <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css" />
  <link rel="stylesheet" href="assets/css/Projects-Grid-images.css" />
</head>

<body id="page-top">
  <div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
      style="width: 100%">
      <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-gas-pump" style="transform: scale(1)"></i>
          </div>
          <div class="sidebar-brand-text mx-3"><span>Starubigaz</span></div>
        </a>
        <hr class="sidebar-divider my-0" />
        <ul class="navbar-nav text-light" id="accordionSidebar">
          <li class="nav-item">
            <a class="nav-link active" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inventory.php"><i class="fas fa-database"></i><span>Inventory</span></a><a
              class="nav-link" href="suppliers.php"><i class="fas fa-truck"></i><span>Suppliers</span></a><a
              class="nav-link" href="branches.php"><i class="fas fa-warehouse"></i><span>Branches</span></a>
          </li>
          <li class="nav-item"></li>
          <li class="nav-item">
            <a class="nav-link" href="branch_owners.php"><i class="fas fa-user-tie"></i><span>Branch Admins</span></a><a
              class="nav-link" href="rewards.php"><i class="fas fa-award"></i><span>Rewards</span></a>
          </li>
        </ul>
        <div class="text-center d-none d-md-inline">
          <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
        </div>
      </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
      <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top"
          style="margin: 0px; padding: 0px">
          <div class="container-fluid">
            <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
              <i class="fas fa-bars"></i>
            </button>
            <ul class="navbar-nav flex-nowrap ms-auto">
              <li class="nav-item dropdown d-sm-none no-arrow">
                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i
                    class="fas fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="me-auto navbar-search w-100">
                    <div class="input-group">
                      <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..." />
                      <div class="input-group-append">
                        <button class="btn btn-primary py-0" type="button">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
              <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false"
                    data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Super
                      Admin</span><img class="border rounded-circle img-profile"
                      src="assets/img/avatars/avatar1.jpeg"></a>
                  <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item"
                      href="profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a
                      class="dropdown-item" href="#"><i
                        class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="/login.php"><i
                        class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex">
              <h3 class="text-dark mb-0" style="display: inline">
                Dashboard /&nbsp;&nbsp;
              </h3>
              <?php include 'php/index/get_branchid.php'; ?>
            </div>
            <div class="col-md-6 float-end d-xxl-flex justify-content-xxl-end">
              <a class="btn btn-success d-xxl-flex justify-content-xxl-end btn-icon-split" role="button"
                style="background: rgba(255, 255, 255, 0.42); border-style: solid; border-color: rgb(230, 230, 230);"
                href="generate_pdf.php">
                <span class="text-light icon" style="background: rgb(230, 230, 230)">
                  <i class="fas fa-print" style="color: rgb(106, 106, 106)"></i>
                </span>
                <span class="d-xxl-flex text" style="color: rgb(106, 106, 106)">Print Reports</span>
              </a>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="d-flex d-sm-flex justify-content-between align-items-center justify-content-xxl-start mb-4"></div>
          <div class="row">
            <div class="col col-9">
              <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <div class="d-flex">
                    <h6 class="text-primary fw-bold m-0" style="color: rgb(28, 200, 138)">
                      Revenue and Transaction
                    </h6>
                  </div>
                  <div>
                    <input id="startDate" class="form-control-sm" type="date"
                      style="color: var(--bs-gray-dark);font-weight: bold;font-family: Nunito, sans-serif;text-align: center;border-style: solid;border-color: var(--bs-card-border-color);">
                    <span>&nbsp; to &nbsp;</span>
                    <input id="endDate" class="form-control-sm" type="date"
                      style="color: var(--bs-gray-dark);font-weight: bold;font-family: Nunito, sans-serif;text-align: center;border-style: solid;border-color: var(--bs-card-border-color);">
                  </div>
                </div>
                <div class="card-body">
                  <div style="--bs-success: #1cc88a;--bs-success-rgb: 28,200,138;">
                    <canvas id="displaychart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-3">
              <div>
                <div class="card mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0" style="color: var(--bs-blue)">
                      Revenue and Transactions
                    </h6>
                  </div>
                  <div id="newResult" class="card-body" style="display: grid;">

                    <?php include ("php/index/index_sales_cost.php") ?>

                  </div>
                </div>
              </div>
              <div class="card shadow border-start-warning py-2">
                <div class="card-body" style="padding-top: 5px">
                  <div style="padding-top: 10px;transform-style: preserve-3d;padding-bottom: 10px;">
                    <canvas id="pieChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col">
              <div class="card shadow">
                <div class="card-header py-3">
                  <p class="text-primary m-0 fw-bold">Available Stocks</p>
                </div>
                <div class="card-body">
                  <div style="overflow: scroll; overflow-x: hidden; height: 40vh">
                    <div class="table-responsive table mt-2" id="dataTable-6" role="grid"
                      aria-describedby="dataTable_info">
                      <table class="table my-0" id="dataTable">
                        <thead>
                          <tr>
                            <th>Barcode</th>
                            <th>Product</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php include ("php/index/index_stock_display.php") ?>
                        </tbody>
                        <tfoot>
                          <tr></tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-md-8">
              <hr style="margin-bottom: 0px" />
              <div style="--bs-success: #1cc88a; --bs-success-rgb: 28, 200, 138">
                <?php include ("php/index/index_stock_graph.php") ?>
              </div>
            </div>
          </div>
          <hr />
          <div class="row" style="margin-top: 28px">
            <div class="col">
              <div class="card shadow">
                <div class="card-header py-3">
                  <div>
                    <p class="text-primary d-inline m-0 fw-bold" style="display: inline">
                      Top 5 Sold Products on the Month of <?php echo date('F', strtotime('last month')); ?>
                    </p>
                  </div>
                </div>
                <div class="card-body" style="padding-top: 3px">
                  <div class="table-responsive table mt-2" id="dataTable-1" role="grid"
                    aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                      <thead>
                        <tr style="
                              text-align: center;
                              background: #00492f;
                              border-color: rgb(255, 255, 255);
                            ">
                          <th></th>
                          <th style="
                                border-color: rgb(255, 255, 255);
                                color: rgb(255, 255, 255);
                              ">
                            Barcode
                          </th>
                          <th style="
                                border-color: rgb(255, 255, 255);
                                color: rgb(255, 255, 255);
                              ">
                            Product
                          </th>
                          <th style="
                                border-color: rgb(255, 255, 255);
                                color: rgb(255, 255, 255);
                              ">
                            Sales
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php include ("php/index/index_top_inv.php") ?>
                      </tbody>
                      <tfoot>
                        <tr></tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col" style="padding-bottom: 30px">
              <div class="card shadow">
                <div class="card-header py-3">
                  <p class="text-primary m-0 fw-bold">
                    Top 5 Customer on the Month of <?php echo date('F', strtotime('last month')); ?>
                  </p>
                </div>
                <div class="card-body" style="padding-top: 3px">
                  <div class="table-responsive table mt-2" id="dataTable-3" role="grid"
                    aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                      <thead>
                        <tr style="text-align: center; background: #a77800">
                          <th></th>
                          <th style="color: rgb(255, 255, 255)">ID</th>
                          <th style="color: rgb(255, 255, 255)">Name</th>
                          <th style="color: rgb(255, 255, 255)">Points</th>
                        </tr>
                      </thead>
                      <tbody id="branchresult">
                        <?php include ("php/index/index_top_cst.php") ?>
                      </tbody>
                      <tfoot>
                        <tr></tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="bg-white sticky-footer">
        <div class="container my-auto">
          <div class="text-center my-auto copyright">
            <span>Copyright © Starubikals 2024</span>
          </div>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
      </footer>
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
  </div>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/chart.min.js"></script>
  <script src="assets/js/bs-init.js"></script>
  <script src="assets/js/theme.js"></script>
  <script>
    var startDateInput = document.getElementById('startDate');
    var endDateInput = document.getElementById('endDate');
    var branchSelect = document.getElementById('branchSelect'); // Assuming you have a select dropdown for selecting branches
    var ctx = document.getElementById('displaychart').getContext('2d');
    var myChart;
    var myChartpie;

    function handleDateChange() {
      var startDate = startDateInput.value;
      var endDate = endDateInput.value;
      var branchId = branchSelect.value; // Get the selected branch ID

      fetchSummaryData(startDate, endDate, branchId);
      fetchSalesCostData(startDate, endDate, branchId);
      fetchPieChartData(startDate, endDate, branchId);
      fetchTopCustomerData(branchId);
    }

    function fetchSummaryData(startDate, endDate, branchId) {
      var xhr1 = new XMLHttpRequest();
      xhr1.open("GET", "php/index/index_summary.php?start_date=" + startDate + "&end_date=" + endDate + "&branch_id=" + branchId, true);
      xhr1.onreadystatechange = function () {
        if (xhr1.readyState === 4) {
          if (xhr1.status === 200) {
            var data = JSON.parse(xhr1.responseText);
            var labels = data.data.map(function (item) {
              return item.date;
            });
            var grossProfitData = data.data.map(function (item) {
              return item['overall revenue of price in order_id'];
            });
            var netProfitData = data.data.map(function (item) {
              return item['overall revenue of price in order_id but bprice'];
            });

            if (myChart) {
              myChart.data.labels = labels;
              myChart.data.datasets[0].data = grossProfitData;
              myChart.data.datasets[1].data = netProfitData;
              myChart.update();
            } else {
              myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: labels,
                  datasets: [{
                    label: 'Sales Price',
                    backgroundColor: '#A1bdf3',
                    borderColor: '#ffffff',
                    data: grossProfitData
                  },
                  {
                    label: 'Cost Price',
                    backgroundColor: '#320889',
                    borderColor: '#ffffff',
                    data: netProfitData
                  }
                  ]
                }
              });
            }
          } else {
            console.error("Error fetching summary data: " + xhr1.status);
          }
        }
      };
      xhr1.send();
    }

    function fetchSalesCostData(startDate, endDate, branchId) {
      var xhr2 = new XMLHttpRequest();
      xhr2.open("GET", "php/index/index_sales_cost.php?start_date=" + startDate + "&end_date=" + endDate + "&branch_id=" + branchId, true);
      xhr2.onreadystatechange = function () {
        if (xhr2.readyState === 4) {
          if (xhr2.status === 200) {
            document.getElementById("newResult").innerHTML = xhr2.responseText;
          } else {
            console.error("Error fetching sales cost data: " + xhr2.status);
          }
        }
      };
      xhr2.send();
    }

    function fetchPieChartData(startDate, endDate, branchId) {
      var xhr3 = new XMLHttpRequest();
      xhr3.open("GET", "php/index/index_display_pie.php?start_date=" + startDate + "&end_date=" + endDate + "&branch_id=" + branchId, true);
      xhr3.onreadystatechange = function () {
        if (xhr3.readyState === 4) {
          if (xhr3.status === 200) {
            var data = JSON.parse(xhr3.responseText);

            // Extract active and inactive counts from the JSON response
            var active = parseFloat(data['data'][0]['count_active']);
            var inactive = parseFloat(data['data'][0]['count_inactive']);

            // Get the canvas context
            var ctx = document.getElementById('pieChart').getContext('2d');

            // Destroy the previous chart instance if it exists
            if (typeof myChartpie !== 'undefined' && myChartpie !== null) {
              myChartpie.destroy();
            }

            // Create a new pie chart using Chart.js
            myChartpie = new Chart(ctx, {
              type: 'pie',
              data: {
                labels: ['Active', 'Inactive'],
                datasets: [{
                  label: 'Active vs Inactive',
                  data: [active, inactive],
                  backgroundColor: [
                    '#A1bdf3',
                    '#320889'
                  ]
                }]
              },
              options: {
                maintainAspectRatio: false,
                legend: {
                  display: true,
                  labels: {
                    fontStyle: 'normal'
                  }
                },
                title: {
                  display: true,
                  text: 'Customer'
                }
              }
            });
          } else {
            console.error("Error fetching pie chart data: " + xhr3.status);
          }
        }
      };
      xhr3.send();
    }

    function fetchTopCustomerData(branchId) {
      var xhr4 = new XMLHttpRequest();
      xhr4.open("GET", "php/index/index_top_cst.php?branch_id=" + branchId, true);
      xhr4.onreadystatechange = function () {
        if (xhr4.readyState === 4) {
          if (xhr4.status === 200) {
            document.getElementById("branchresult").innerHTML = xhr4.responseText;
          } else {
            console.error("Error fetching top customer data: " + xhr4.status);
          }
        }
      };
      xhr4.send();
    }

    handleDateChange();
    startDateInput.addEventListener('change', handleDateChange);
    endDateInput.addEventListener('change', handleDateChange);
    branchSelect.addEventListener('change', handleDateChange); // Add event listener for branch selection

    // Assuming you have jQuery included in your project

  </script>



</body>

</html>