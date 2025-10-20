 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<style>

  *{
    margin: 0;
    padding: 0;
  }
  .sidebar{
    min-height: 100vh;
    color: white;
    line-height: 50px;
  }
</style>
<body>
    <div class="container-fluid">
        <div class="row">
          <!--  Top bar for mobile -->
<div class="d-md-none bg-success text-white p-2 d-flex justify-content-between align-items-center">
  <span class="fw-bold">Dashboard</span>
  <button class="btn btn-outline-light btn-sm" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
    <i class="bi bi-list"></i>
  </button>
</div>
<!-- Sidebar for Desktop -->
    <nav class="col-md-3 col-lg-2 d-none d-md-block bg-success text-white sidebar p-3">
      <h5 class="text-center py-3">Dashboard</h5>
      <ul class="nav flex-column">
      <li class="nav-item"><a href="../student/dashboard.php" class="nav-link text-white"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
          <li class="nav-item"><a href="../student/income.php" class="nav-link text-white"><i class="bi bi-cash-stack me-2"></i>Add Income</a></li>
          <li class="nav-item"><a href="../student/expense.php" class="nav-link text-white"><i class="bi bi-wallet2 me-2"></i>Expenses</a></li>
          <li class="nav-item"><a href="../student/budget.php" class="nav-link text-white"><i class="bi bi-pie-chart-fill me-2"></i>Budget</a></li>
          <li class="nav-item"><a href="../student/goal.php" class="nav-link text-white"><i class="bi bi-bullseye me-2"></i>Goals</a></li>
          <li class="nav-item"><a href="../student/report.php" class="nav-link text-white"><i class="bi bi-bar-chart-line-fill me-2"></i>Reports</a></li>
          <li class="nav-item"><a href="../student/notification.php" class="nav-link text-white"><i class="bi bi-bell-fill me-2"></i>Notifications</a></li>
          <li class="nav-item"><a href="../student/login.php" class="nav-link text-white"><i class="bi bi-gear-fill me-2"></i>logout</a></li>
      </ul>
    </nav>
    <!--  Offcanvas Sidebar for Mobile -->
<div class="offcanvas offcanvas-start bg-success text-white" id="mobileSidebar">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title"><i class="bi bi-speedometer2 me-2"></i> Dashboard</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
    <li class="nav-item"><a href="../student/dashboard.php" class="nav-link text-white"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
          <li class="nav-item"><a href="../student/income.php" class="nav-link text-white"><i class="bi bi-cash-stack me-2"></i>Add Income</a></li>
          <li class="nav-item"><a href="../student/expense.php" class="nav-link text-white"><i class="bi bi-wallet2 me-2"></i>Expenses</a></li>
          <li class="nav-item"><a href="../student/budget.php" class="nav-link text-white"><i class="bi bi-pie-chart-fill me-2"></i>Budget</a></li>
          <li class="nav-item"><a href="../student/goal.php" class="nav-link text-white"><i class="bi bi-bullseye me-2"></i>Goals</a></li>
          <li class="nav-item"><a href="../student/report.php" class="nav-link text-white"><i class="bi bi-bar-chart-line-fill me-2"></i>Reports</a></li>
          <li class="nav-item"><a href="../student/notification.php" class="nav-link text-white"><i class="bi bi-bell-fill me-2"></i>Notifications</a></li>
          <li class="nav-item"><a href="../student/login.php" class="nav-link text-white"><i class="bi bi-gear-fill me-2"></i>logout</a></li>
    </ul>
  </div>
</div>

        <!--content section-->
        <div class="content col">
          <h1 class="text-center m-4">WELCOME,OMOWUMI</h1>
          <div class="row m-5">
            <div class=" col text-center">
              <div class="card shadow">
              <i class="bi bi-cash-stack fs-1 text-success"></i>
                <h4 class="mt-2">Total Income</h4>
                <p class="text-muted mb-0">#3000</p>
            </div>
           </div>
            <div class=" col-md-4 sm-12 text-center">
             <div class="card shadow">
              <i class="bi bi-cash me-2 fs-1 text-primary"></i>
              <h4 class="mt-2">Current Balance</h4>
              <p class="text-muted mb-0">#2000</p>
             </div>
            </div>
            <div class="col">
              <div class="card text-center shadow">
                <i class="bi bi-wallet2 me-2 fs-1 text-info"></i>
                <h4 class="mt-2">Total Expenses</h4>
                <p class="text-muted  mb-0">#14,000</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col mt-3 ">
            <div class="card text-center py-4 shadow">
              <i class="bi bi-bullseye me-2 fs-1 text-secondary"></i>
              <h4 class="mt-2">Saving Goal Progress</h4>
              <p class="text-muted mb-0">Goal: #100000</p>
              <p class="text-muted mb-0">Saving: #20000</p>
              <div class="">
                <div class="progress mt-4" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar text-bg-success" style="width: 50%">Goal: 25%</div>
                </div>
            </div> 
            </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
              <div class="card p-3 shadow">
                <button type="button" class="btn btn-success p-2 mb-3 text-white text-center">Add income</button>
                <button type="button" class="btn btn-primary p-2 text-white text-center">Add expense</button>
              </div>
            </div>
            <div class="col">
              <div class="card py-3 shadow">
                <h4>Notification</h4>
                <p class=" p-2 text-dark">NO New Notification </p>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>   
</body>
</html>