<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-6">
  <h2>Color Table</h2>
  <p>This Table Describes all colors in the shown</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr. No</th>
        <th>Color Name</th>
        <th>Colored Text Exmaple</th>
        <th>Usable Status</th>
        <th>Color Box</th>
        
        
      </tr>

    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Blue</td>
        <td style="color: blue">This Line Shows Blue Color</td>
        <td>Generally Use</td>
        <td><div class="p-3 mb-2 bg-primary text-white">Blue</div></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Green</td>
        <td style="color :darkgreen">This Text Color Is Green</td>
        <td>Rarely Use</td>
        <td><div class="p-3 mb-2 bg-success text-white">Green</div></td>
      </tr>

      <tr>
        <td>3</td>
        <td>Red</td>
        <td style="color:red">This Sentence is Highlighted in Red Color.</td>
        <td>More Useful</td>
        <td><div class="p-3 mb-2 bg-danger text-white">Red</div></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
