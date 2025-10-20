
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Validation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</heaid>
<body class="bg-light p-4">

<div class="container mt-5">
  <div class="card shadow p-4 mx-auto" style="max-width: 400px;">
    <h4 class="text-center mb-3 text-success">Student Login</h4>
    <form id="registerForm" novalidate>
      
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" required minlength="6">
        <div class="invalid-feedback">
          Password must be at least 6 characters long.
        </div>
      </div>

      <!-- Confirm Password -->
      <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" required>
        <div class="invalid-feedback">
          Passwords do not match.
        </div>
      </div>
<div class="mb-3">
     <button type="submit" class="btn btn-success w-100"><a href="../student/dashboard.php" class="text-decoration-none text-white">Login</a></button>
</div>
<p>Dont have an account <a href="http://localhost/budget_proj/student/registration.php">click here to register</a></p>
    </form>
  </div>
</div>

<script>
  // Bootstrap validation logic
  const form = document.getElementById('registerForm');
  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const password = document.getElementById('password');
    const confirm = document.getElementById('confirmPassword');

    // Reset validation states
    password.classList.remove('is-invalid');
    confirm.classList.remove('is-invalid');

    if (password.value.length < 6) {
      password.classList.add('is-invalid');
    } else if (password.value !== confirm.value || confrim.value ==="") {
      confirm.classList.add('is-invalid');
    } else {
      alert('Registration successful!');
      form.reset();
    }
  });
</script>

</body>
</html>

</html>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
   