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
<!--main content-->
<main class="col">
    <h1 class="text-center m-4">Add Goal</h1>
    <p>Add any new Goal to update your savings and budget.</p>
    <div class="row">
     <div class="col">
      <div class="card p-2">
       <form action="">
         <div class="row mb-3">
           <div class="col">
             <label for="Goal" class="form-label">Your Goal</label>
             <input type="text" class="form-control" id="Goal" placeholder="enter your goal">
           </div>
         </div>
           <div class="row">
           <div class="col">
             <label for="Goalamount" class="form-label">Amount (₦)</label>
             <input type="number" class="form-control" id="Goalamount" placeholder="Enter amount">
           </div>
         </div>
   
         <div class="row mb-3">
           <div class="col">
            <label for="save" class="form-label">Amount saved so far (₦)</label>
            <input type="number" class="form-control" id="save" placeholder="Enter amount save">
           </div>
         </div>
   
         <button type="submit" class="btn btn-success w-100">
           <i class="bi bi-plus-circle me-2"></i> Save Goal
         </button>
       
       </form>
       
      </div>
     </div>
    </div>
    <div class="row mt-5">
     <div class="col">
        <h2>Goal chart</h2>
        <div class="progress mt-4" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar text-bg-success" style="width: 50%">Goal: 25%</div>
          </div>
     </div>
    </div>
</main>


    </div>
   </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>