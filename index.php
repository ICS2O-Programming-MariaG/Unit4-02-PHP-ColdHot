<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's Temperature Evaluator PHP Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Temperature Evaluator in PHP - Maria Goemans</title>
  </head>
  <body>
    <?php echo "<h1>Temperature Evaluator in PHP</h1>"; ?>
    <!-- Div for styled background colour -->
    <div id="purple">
      <?php
        echo "<h3>Welcome!</h3>";
        echo "<p>Wondering whether the day's temperature is hot or cold? What should you wear, on those in-between-weather days of spring and fall? Our web page is here to help! Enter a temperature in Celsius below, and we will answer both of the above questions.</p>";
      ?>
    </div>
    <!-- Table for style -->
    <table>
      <tr>
        <td class="data">
          <!-- Div for background colour -->
          <div id="green">
            <?php echo "<h3>Your Input:</h3>"; ?>
            <form action="./evaluate.php" method="post" target="results">
              <label for="user-input">Enter the temperature in degrees Celsius (C):</label>
              <input type="number" step="0.01" name="temp-entered" placeholder="Degrees C..."><br><br>
              <input type="submit" id="button" value="Evaluate">
            </form>
          </div>
        </td>
        <td class="data">
          <iframe name="results" id="results"><iframe>
        </td>
      </tr>
    </table>
  </body>
</html>