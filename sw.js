self.addEventListener('fetch', event => {
  if (!navigator.onLine) {
    event.respondWith(
      new Response(`
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>No Internet</title>
          <style>
            body {
              font-family: Arial, sans-serif;
              display: flex;
              justify-content: center;
              align-items: center;
              height: 100vh;
              background-color: #fff;
              text-align: center;
              color: #333;
            }
            .message {
              max-width: 300px;
            }
            h1 {
              font-size: 1.8rem;
              margin-bottom: 10px;
            }
            p {
              font-size: 1rem;
            }
          </style>
        </head>
        <body>
          <div class="message">
            <h1>📡 No Internet Connection</h1>
            <p>Please reconnect to continue using this page.</p>
          </div>
        </body>
        </html>
      `, {
        headers: { 'Content-Type': 'text/html' }
      })
    );
  }
});
