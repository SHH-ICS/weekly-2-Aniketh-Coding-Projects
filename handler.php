<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circle Calculation Result</title>
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Calculation Result</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset">
            <?php
            if (isset($_POST['diameter'])) {
              $diameter = floatval($_POST['diameter']);
              $radius = $diameter / 2;
              $area = pi() * pow($radius, 2);
              $circumference = 2 * pi() * $radius;

              echo '<div class="mdl-card mdl-shadow--2dp">';
              echo '<div class="mdl-card__title"><h2 class="mdl-card__title-text">Results</h2></div>';
              echo '<div class="mdl-card__supporting-text">';
              echo "Diameter: " . $diameter . "<br>";
              echo "Radius: " . $radius . "<br>";
              echo "Area: " . number_format($area, 2) . "<br>";
              echo "Circumference: " . number_format($circumference, 2) . "<br>";
              echo '</div>';
              echo '</div>';
            } else {
              echo '<div class="mdl-card mdl-shadow--2dp">';
              echo '<div class="mdl-card__supporting-text">No diameter provided. Please go back and enter a value.</div>';
              echo '</div>';
            }
            ?>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>