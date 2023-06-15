<!DOCTYPE html>
<html>
<head>
  <title>Shape Calculator</title>

  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f2f2f2;
    }

    .card {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333;
        text-align: center;
    }

    label {
        display: inline-block;
        width: 120px;
        margin-bottom: 10px;
    }

    input[type="number"],
    select {
        width: 150px;
        padding: 5px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }

    input[type="submit"] {
        display: block;
        width: 100%;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        margin-top: 20px;
    }

    .result {
        margin-top: 20px;
        padding: 10px;
        background-color: #f5f5f5;
        border-radius: 3px;
    }
</style>


</head>
<body class="card">
  <h1>Shape Calculator</h1>
  
  <form method="post" action="calculate.php">
    <label for="shape">Select a shape:</label>
    <select name="shape" id="shape">
    <option value="rectangle">None</option>
      <option value="rectangle">Rectangle</option>
      <option value="square">Square</option>
      <option value="circle">Circle</option>
      <option value="rhombus">Rhombus</option>
      <option value="trapezium">Trapezium</option>
      <option value="triangle">Triangle</option>
      <option value="sphere">Sphere</option>
      <option value="cylinder">Cylinder</option>
    </select>
    <br><br>
    
    <div id="rectangleFields" style="display:none;">
      <label for="length">Length:</label>
      <input type="number" name="length" id="length" step="1" >
      <br><br>
      
      <label for="width">Width:</label>
      <input type="number" name="width" id="width" step="1" >
      <br><br>
    </div>
    
    <div id="squareFields" style="display:none;">
      <label for="side">Side:</label>
      <input type="number" name="side" id="side" step="1" >
      <br><br>
    </div>
    
    <div id="circleFields" style="display:none;">
      <label for="radius">Radius:</label>
      <input type="number" name="radius" id="radius" step="1" >
      <br><br>
    </div>
    
    <div id="rhombusFields" style="display:none;">
      <label for="diagonal1">Diagonal 1:</label>
      <input type="number" name="diagonal1" id="diagonal1" step="1" >
      <br><br>
      
      <label for="diagonal2">Diagonal 2:</label>
      <input type="number" name="diagonal2" id="diagonal2" step="1" >
      <br><br>
    </div>
    
    <div id="triangleFields" style="display:none;">
      <label for="base">Base:</label>
      <input type="number" name="base" id="base" step="1" >
      <br><br>
      
      <label for="height">Height:</label>
      <input type="number" name="height" id="height" step="1" >
      <br><br>
    </div>
    
    
    <div id="cylinderFields" style="display:none;">
      <label for="radius">Radius:</label>
      <input type="number" name="radius" id="radius" step="1" >
      <br><br>
      
      <label for="height">Height:</label>
      <input type="number" name="height" id="height" step="1" >
      <br><br>
    </div>

    <div id="sphereFields" style="display:none;">
        <label for="radius">Radius:</label>
        <input type="number" name="radius" id="radius" step="1" >
        <br><br>
    </div>


    
    <div id="trapeziumFields" style="display:none;">
      <label for="base1">Base 1:</label>
      <input type="number" name="base1" id="base1" step="1" >
      <br><br>
      
      <label for="base2">Base 2:</label>
      <input type="number" name="base2" id="base2" step="1" >
      <br><br>
      
      <label for="height">Height:</label>
      <input type="number" name="height" id="height" step="1" >
      <br><br>
      
    </div>
    


    
    <input type="submit" value="Calculate">
  </form>
  
  <script>
    document.getElementById('shape').addEventListener('change', function() {
      var rectangleFields = document.getElementById('rectangleFields');
      var squareFields = document.getElementById('squareFields');
      var circleFields = document.getElementById('circleFields');
      var rhombusFields = document.getElementById('rhombusFields');
      var trapeziumFields = document.getElementById('trapeziumFields');
      var triangleFields = document.getElementById('triangleFields');
      var sphereFields = document.getElementById('sphereFields');
      var cylinderFields = document.getElementById('cylinderFields');
      
      if (this.value === 'rectangle') {
        rectangleFields.style.display = 'block';
        squareFields.style.display = 'none';
        circleFields.style.display = 'none';
        rhombusFields.style.display = 'none';
        trapeziumFields.style.display = 'none';
        triangleFields.style.display = 'none';
        sphereFields.style.display = 'none';
        cylinderFields.style.display = 'none';
      } else if (this.value === 'square') {
        rectangleFields.style.display = 'none';
        squareFields.style.display = 'block';
        circleFields.style.display = 'none';
        rhombusFields.style.display = 'none';
        trapeziumFields.style.display = 'none';
        triangleFields.style.display = 'none';
        sphereFields.style.display = 'none';
        cylinderFields.style.display = 'none';
      } else if (this.value === 'circle') {
        rectangleFields.style.display = 'none';
        squareFields.style.display = 'none';
        circleFields.style.display = 'block';
        rhombusFields.style.display = 'none';
        trapeziumFields.style.display = 'none';
        triangleFields.style.display = 'none';
        sphereFields.style.display = 'none';
        cylinderFields.style.display = 'none';
      } else if (this.value === 'rhombus') {
        rectangleFields.style.display = 'none';
        squareFields.style.display = 'none';
        circleFields.style.display = 'none';
        rhombusFields.style.display = 'block';
        trapeziumFields.style.display = 'none';
        triangleFields.style.display = 'none';
        sphereFields.style.display = 'none';
        cylinderFields.style.display = 'none';
      } else if (this.value === 'trapezium') {
        rectangleFields.style.display = 'none';
        squareFields.style.display = 'none';
        circleFields.style.display = 'none';
        rhombusFields.style.display = 'none';
        trapeziumFields.style.display = 'block';
        triangleFields.style.display = 'none';
        sphereFields.style.display = 'none';
        cylinderFields.style.display = 'none';
      } else if (this.value === 'triangle') {
        rectangleFields.style.display = 'none';
        squareFields.style.display = 'none';
        circleFields.style.display = 'none';
        rhombusFields.style.display = 'none';
        trapeziumFields.style.display = 'none';
        triangleFields.style.display = 'block';
        sphereFields.style.display = 'none';
        cylinderFields.style.display = 'none';
      } else if (this.value === 'sphere') {
        rectangleFields.style.display = 'none';
        squareFields.style.display = 'none';
        circleFields.style.display = 'none';
        rhombusFields.style.display = 'none';
        trapeziumFields.style.display = 'none';
        triangleFields.style.display = 'none';
        sphereFields.style.display = 'block';
        cylinderFields.style.display = 'none';
      } else if (this.value === 'cylinder') {
        rectangleFields.style.display = 'none';
        squareFields.style.display = 'none';
        circleFields.style.display = 'none';
        rhombusFields.style.display = 'none';
        trapeziumFields.style.display = 'none';
        triangleFields.style.display = 'none';
        sphereFields.style.display = 'none';
        cylinderFields.style.display = 'block';
      } else {
        rectangleFields.style.display = 'none';
        squareFields.style.display = 'none';
        circleFields.style.display = 'none';
        rhombusFields.style.display = 'none';
        trapeziumFields.style.display = 'none';
        triangleFields.style.display = 'none';
        sphereFields.style.display = 'none';
        cylinderFields.style.display = 'none';
      }
    });
  </script>
</body>
</html>
