<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>

  <div class="container-fluid py-5 d-flex justify-content-center bg-body-secondary">
    <div class="card shadow p-5" style="width: 500px;">
      <h1 class="text-center text-success">Registration</h1>
      <hr class="text-success">

      <form id="registerForm" method="post" novalidate>
         <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter your fullname" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Student Matric No</label>
            <input type="text" class="form-control" placeholder="Enter your matric no" required>
          </div>
        <div class="mb-3">
            <label class="form-label">Institution Name</label>
            <input type="text" class="form-control" placeholder="Enter Institution Name" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Department</label>
            <input type="text" class="form-control" placeholder="Enter Department" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" placeholder="Enter Your Email Address" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="number" class="form-control" placeholder="Enter Your Phone number" required>
          </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" required minlength="6">
          <div class="invalid-feedback">Password must be at least 6 characters long.</div>
          <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" required>
          <div class="invalid-feedback">Passwords do not match.</div>
          <div class="valid-feedback">Passwords match!</div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success mt-3 w-50">Register</button>
        </div>
        <div class="text-center">
          Already have an account <a href="../student/login.php">click here</a>
        </div>
      </form>
    </div>
  </div>

  <script>
    const form = document.getElementById('registerForm');
    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const password = document.getElementById('password');
      const confirm = document.getElementById('confirmPassword');

      // Reset states
      password.classList.remove('is-invalid', 'is-valid');
      confirm.classList.remove('is-invalid', 'is-valid');

      // Validation logic
      if (password.value.length < 6) {
        password.classList.add('is-invalid');
      } 
      else {
        password.classList.add('is-valid');
      }

      if (confirm.value !== password.value || confirm.value === "") {
        confirm.classList.add('is-invalid');
      } 
      else {
        confirm.classList.add('is-valid');
      }

      // Success message if all is valid
      if (password.classList.contains('is-valid') && confirm.classList.contains('is-valid')) {
        alert('✅ Registration successful!');
        form.reset(); 
        password.classList.remove('is-valid');
        confirm.classList.remove('is-valid');
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>  