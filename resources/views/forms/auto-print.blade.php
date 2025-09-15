<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Queue Slip</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
      background: #f8f9fa;
    }
    .btn {
      padding: 12px 20px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    #queueSlip {
      display: none;
      margin-top: 30px;
      padding: 20px;
      border: 2px dashed #333;
      background: #fff;
      text-align: center;
    }
    #queueSlip h2 {
      margin: 0;
      font-size: 22px;
    }
    #queueSlip .number {
      font-size: 50px;
      font-weight: bold;
      margin: 20px 0;
    }
    #queueSlip p {
      margin: 5px 0;
    }

    /* Print only the slip */
    @media print {
      body * {
        visibility: hidden;
      }
      #queueSlip, #queueSlip * {
        visibility: visible;
      }
      #queueSlip {
        position: absolute;
        top: 20px;
        left: 20px;
        width: 90%;
      }
    }
  </style>
</head>
<body>

  <button class="btn" onclick="generateSlip()">Print Queue Slip</button>

  <div id="queueSlip">
    <h2>Queue Slip</h2>
    <div class="number" id="slipNumber"></div>
    <p id="slipDate"></p>
    <p>Please wait for your number to be called.</p>
  </div>

  <script>
    let counter = 200; // starting number

    function generateSlip() {
      counter++;

      // Set slip number
      document.getElementById("slipNumber").innerText = "Q-" + counter;

      // Set date and time
      let now = new Date();
      document.getElementById("slipDate").innerText = now.toLocaleString();

      // Show slip
      document.getElementById("queueSlip").style.display = "block";

      // Print
      window.print();
    }
  </script>

</body>
</html>
