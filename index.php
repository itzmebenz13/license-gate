<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SHEIN QR Purchase Confirmation</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      text-align: left;
      max-width: 450px;
      width: 90%;
    }

    .logo {
      font-weight: bold;
      font-size: 1.4rem;
      text-align: center;
      margin-bottom: 20px;
      color: #000;
    }

    h2 {
      font-size: 1.1rem;
      margin-bottom: 10px;
      color: #222;
    }

    p {
      font-size: 0.95rem;
      margin: 6px 0;
      color: #444;
    }

    .receipt {
      background: #f0f0f0;
      padding: 10px 15px;
      border-radius: 6px;
      margin-top: 15px;
      font-size: 0.95rem;
      font-family: monospace;
      color: #000;
    }

    .btn {
      margin-top: 25px;
      display: block;
      width: 100%;
      background-color: #000;
      color: #fff;
      padding: 14px;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #333;
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="logo">SHEIN | QR Ownership</div>
    <h2>Verified Purchaser Details:</h2>
    <p><strong>Name:</strong> Reanne May Sevilla Roquero</p>
    <p><strong>National ID Number:</strong> 123456789</p>
    <p><strong>Address:</strong> Purok 5, San Pablo, Jaen, Nueva Ecija</p>
    <p><strong>RA Facebook Link: :</strong> https://www.facebook.com/share/1BFH2wSLTY/</p>

    <div class="receipt">
      Purchase # Receipt: <strong>2ibzirc0xerysp25</strong>
    </div>

    <button class="btn" onclick="confirm()">Confirm</button>
  </div>

  <script>
    function confirm() {
      window.location.href = "http://bit.ly/3IcyFtk"; // Replace with your final event link
    }
  </script>
</body>
</html>
