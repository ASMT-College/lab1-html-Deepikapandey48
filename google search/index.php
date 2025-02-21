<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A webpage about Google, its services, and its importance.">
    <meta name="author" content="Your Name">
    <title>About Google</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        img {
            width: 400px;
            margin: 10px 0;
        }
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        
        footer {
            margin-top: 30px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>About Google</h1>
    </header>

    <section>
        <img src="googlewebtech.jpg" alt="Google Logo">
        <p>
            <strong>Google</strong> is one of the most influential technology companies in the world, specializing in Internet-related services and products. 
            It offers <abbr title="Search Engine Results Page">SERP</abbr>, cloud computing, software, and hardware. Founded by Larry Page and Sergey Brin in 1998, 
            Google has grown to dominate the online search and advertising markets. As of today, Google continues to innovate in <mark>artificial intelligence</mark>, 
            quantum computing, and sustainability.
        </p>
        <blockquote cite="https://www.google.com">
            "Our mission is to organize the world's information and make it universally accessible and useful."
        </blockquote>
        <p>
            Visit the official site: <a href="https://www.google.com" target="_blank">www.google.com</a>.
        </p>
    </section>

    <form action="https://www.google.com/search" method="get">
        <div class="search-container">
            <label for="search">Search Google:</label>
            <input type="text" id="search" name="q" placeholder="Enter your query...">
            <button type="submit">Search</button>
        </div>
    </form>

    <table border="1">
        <caption>Google Services</caption>
        <thead>
            <tr>
                <th>Service</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gmail</td>
                <td>Email service by Google.</td>
            </tr>
            <tr>
                <td>YouTube</td>
                <td>Video-sharing platform.</td>
            </tr>
            <tr>
                <td>Google Drive</td>
                <td>Cloud storage service.</td>
            </tr>
        </tbody>
    </table>

    <footer>
        <p>&copy; 2025 Google Web Tech Example. All rights reserved.</p>
    </footer>
</body>
</html>
