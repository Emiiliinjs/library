<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
/* Basic styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    display: flex;
    justify-content: flex-start; /* Changed from space-between to flex-start */
    align-items: center;
    padding: 1rem;
    background-color: #2222222;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
}

.navbar-brand a {
    color: white;
    text-decoration: none;
    font-size: 1.5rem;
    font-weight: bold;
}

.navbar-toggler {
    display: none;
    background: none;
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
}

.navbar-menu {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.navbar-item a {
    border-radius: 10px;
    color: white;
    text-decoration: none;
    padding: 0.5rem 1rem;
    transition: background-color 0.3s, color 0.3s;
}

.navbar-item a:hover {
    background-color: grey;
    color: white;
}

/* Responsive styling */
@media (max-width: 768px) {
    .navbar-menu {
        display: none;
        flex-direction: column;
        width: 100%;
        background-color: black;
    }

    .navbar-item {
        text-align: center;
        padding: 1rem 0;
        border-top: 1px solid #444;
    }

    .navbar-item a {
        display: block;
        width: 100%;
    }

    .navbar-toggler {
        display: block;
    }

    .navbar-menu.active {
        display: flex;
    }
}

/* Ensure content doesn't go under the fixed navbar */
body {
    padding-top: 4rem; /* Adjust this value if your navbar's height changes */
}

      </style>
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
            <li class="navbar-item"><a href="/">Home</a></li>
            <li class="navbar-item"><a href="/create">Add Book</a></li>
            <li class="navbar-item"><a href="/borrowed">Borrowed Books</a></li>
            <li class="navbar-item">
    <form action="/logout" method="POST" style="display: inline;">
        <a onclick="this.parentNode.submit()" style="color: white; text-decoration: none; padding: 0.5rem 1rem; transition: background-color 0.3s, color 0.3s;">
            Logout ↪
        </a>
    </form>
</li>


        </ul>
    </nav>
</body>
</html>
