
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kalkulator iPhone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body class="mode-dark d-flex justify-content-center align-items-center vh-100">

  <div class="iphone-frame">

    <!-- Navbar -->
    <div class="navbar navbar-expand d-flex justify-content-between align-items-center mb-3 px-2">
      <span class="fw-bold text-white" id="title">Kalkulator</span>
      <button class="btn btn-sm btn-outline-light" onclick="toggleMode()">🌙 / ☀️</button>
    </div>

    <!-- Display -->
    <input type="text" id="display" class="form-control mb-3 text-end fs-4" readonly>

    <!-- Button Grid -->
    <div class="row g-2">
      <?php
        $buttons = [
          ['7', '8', '9', '/'],
          ['4', '5', '6', '*'],
          ['1', '2', '3', '-'],
          ['0', '.', '=', '+']
        ];

        foreach ($buttons as $row) {
          echo '<div class="col-12 d-flex justify-content-between">';
          foreach ($row as $btn) {
            echo '<button class="btn btn-light flex-fill m-1 fs-5" onclick="press(\'' . $btn . '\')">' . $btn . '</button>';
          }
          echo '</div>';
        }
      ?>

      <!-- Clear Button -->
      <div class="col-12 mt-2">
        <button class="btn btn-danger w-100 fs-5" onclick="clearDisplay()">Clear</button>
      </div>

      <!-- Footer -->
      <div class="text-center footer-effect small mt-4">
        &copy; 2025_mulyana
      </div>
    </div>

  </div>

  <!-- JavaScript -->
  <script src="script.js"></script>
</body>
</html>

