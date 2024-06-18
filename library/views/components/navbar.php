<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/style/navbar.css"> <!-- Link to external style.css -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggler = document.getElementById("navbar-toggler");
            const menu = document.getElementById("navbar-menu");

            toggler.addEventListener("click", function() {
                menu.classList.toggle("active");
            });
        });
    </script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <button class="navbar-toggler" id="navbar-toggler">
                ☰ 
            </button>
        </div>
        <ul class="navbar-menu" id="navbar-menu">
            <li class="navbar-item"><a href="/">Books</a></li>
            <li class="navbar-item"><a href="/borrowed">Borrowed Books</a></li>
            <li class="navbar-item"><a href="/create">Create book</a></li>
            <li class="navbar-item">
                <form action="/logout" method="POST" style="display: inline;">
                <form action="/logout" method="POST" style="display: inline;">
        <a onclick="this.parentNode.submit()" style="color: white; text-decoration: none; padding: 0.5rem 1rem; transition: background-color 0.3s, color 0.3s;">
            Logout 
        </a>
                </form>
            </li>
        </ul>
    </nav>
</body>
</html>
