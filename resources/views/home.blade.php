<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="bg-danger">
    <div class="container">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/download (1).png') }}" width="130" height="130" alt="Logo" class="me-3">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/now-showing') }}">Now Showing</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/coming-soon') }}">Coming Soon</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#location_section">Locations</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#contact_sections">Contacts</a></li>
            </ul>
            <div class="search-container">
    <input type="text" id="searchInput" placeholder="Search pages..." />
    <button onclick="navigateToPage()">Go</button>
</div>

        </div>
    </div>
</header>

<section id="posters_section" class="container my-5">
    <div class="slider text-center">
       
        <div class="maindiv mx-auto"></div>
    </div>
</section>

<section id="location_section" class="my-5">
    <div class="bg-danger text-white py-2">
        <h2 class="text-center container">Locations</h2>
    </div>
    <div class="container">
        <div class="d-flex justify-content-around my-3">
            <span class="la text-danger fs-4">DHA</span>
            <span class="la text-danger fs-4">Askari</span>
            <span class="la text-danger fs-4">Saddar</span>
        </div>
        <div class="text-center">
            <a href="https://www.google.com/search?q=cinemas+in+karachi" target="_blank">
                <img src="{{ asset('images/map.png') }}" alt="Map" class="img-fluid">
            </a>
        </div>
    </div>
</section>

<section id="contact_sections" class="my-5">
    <div class="bg-danger text-white py-2">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="container">
        <div class="details bg-dark text-white p-4">
            <ul id="d1" class="list-unstyled">
                <li class="fs-5">DHA</li>
                <li>Cinepax Ocean Mall, 4th Floor</li>
                <li>II Talwar, Karachi - Pakistan</li>
                <li>UAN: (042) 111-CINEPAX (246 372)</li>
                <li>Local call charges apply</li>
                <li>Email: contact@cinepax.com</li>
            </ul>
        </div>
    </div>
</section>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function navigateToPage() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const pages = {
        'home': '/',
        'now showing': '/now-showing',
        'coming soon': '/coming-soon',
        // Add more keywords and paths as needed
    };

    if (pages[input]) {
        window.location.href = pages[input];
    } else {
        alert("Page not found. Try 'home', 'now showing', or 'coming soon'.");
    }
}
</script>
</body>
</html>
