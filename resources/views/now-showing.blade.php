<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Now Showing</title>
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
</header>>

<section class="container my-5">
    <h2 class="text-center bg-danger text-white py-2">Now Showing</h2>
    <div class="row justify-content-center">
        <div class="col-md-4 col-lg-3 mb-4">
            <img src="{{ asset('images/HO00001401.jpg') }}" class="box img-fluid" alt="maula">
        </div>
        <div class="col-md-4 col-lg-3 mb-4">
            <img src="{{ asset('images/HO00001633.jpg') }}" class="box img-fluid" alt="avatar">
        </div>
        <div class="col-md-4 col-lg-3 mb-4">
            <img src="{{ asset('images/HO00001628.jpg') }}" class="box img-fluid" alt="black panther">
        </div>
        <div class="col-md-4 col-lg-3 mb-4">
            <img src="{{ asset('images/ob3.jpg') }}" class="box img-fluid" alt="ob">
        </div>
        <div class="col-md-4 col-lg-3 mb-4">
            <img src="{{ asset('images/HO00001585.jpg') }}" class="box img-fluid" alt="black adam">
        </div>
        <div class="col-md-4 col-lg-3 mb-4">
            <img src="{{ asset('images/dragono.jfif') }}" class="box img-fluid" alt="dragon">
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
function navigateToPage() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const pages = {
        'home': '/home',
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
