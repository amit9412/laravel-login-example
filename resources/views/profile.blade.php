<!-- profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .profile-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }
    .profile-container h1 {
      margin-bottom: 20px;
    }
    .btn-logout {
      background-color: #dc3545;
      border-color: #dc3545;
      color: #fff;
    }
    .btn-logout:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="profile-container">
      <h1 class="text-center">Welcome to Your Profile</h1>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mollis vehicula ante nec pellentesque.</p>
      <div class="text-center">
        <form action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-logout">Logout</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
