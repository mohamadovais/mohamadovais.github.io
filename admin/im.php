<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Sender</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input, textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Email Sender</h2>
    <form id="emailForm">
      <label for="recipient">Recipient Email:</label>
      <input type="email" id="recipient" name="recipient" required>

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="button" onclick="sendEmail()">Send Email</button>
    </form>
  </div>

  <script>
    function sendEmail() {
      // Fetch input values
      var recipient = document.getElementById('recipient').value;
      var subject = document.getElementById('subject').value;
      var message = document.getElementById('message').value;

      // You would typically send this data to a server for actual email sending
      // Here, we'll just log the values to the console
      console.log('Recipient:', recipient);
      console.log('Subject:', subject);
      console.log('Message:', message);
    }
  </script>
</body>
</html>
