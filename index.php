<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicLabel - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Navbar -->
    <?php include 'includes/navbar.html'; ?>

    <!-- Hero Section -->
    <section class="hero bg-dark text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to Doug MusicLabel</h1>
            <p>Your favorite place for the best artists, albums, and music.</p>
            <a href="artists.php" class="btn btn-primary btn-lg">Discover Artists</a>
        </div>
    </section>

    <!-- Featured Artists Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Featured Artists</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/11.jpg" class="card-img-top" alt="Artist 1">
                        <div class="card-body">
                            <h5 class="card-title">Artist 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec turpis et.</p>
                            <a href="artists.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat for more artists -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/12.jpg" class="card-img-top" alt="Artist 1">
                        <div class="card-body">
                            <h5 class="card-title">Artist 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec turpis et.</p>
                            <a href="artists.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Third Artist -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/22.jpg" class="card-img-top" alt="Artist 1">
                        <div class="card-body">
                            <h5 class="card-title">Artist 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec turpis et.</p>
                            <a href="artists.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


       <!-- Music List -->
       <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Music</h2>
            <div class="row">
                <!-- Music Item 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/12.jpg" class="card-img-top" alt="Album 1">
                        <div class="card-body">
                            <h5 class="card-title">Album 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec turpis et.</p>
                            <a href="https://www.spotify.com" class="btn btn-primary">Listen on Spotify</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat for more albums -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/11.jpg" class="card-img-top" alt="Album 1">
                        <div class="card-body">
                            <h5 class="card-title">Album 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec turpis et.</p>
                            <a href="https://www.spotify.com" class="btn btn-primary">Listen on Spotify</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat for more albums -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/22.jpg" class="card-img-top" alt="Album 1">
                        <div class="card-body">
                            <h5 class="card-title">Album 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec turpis et.</p>
                            <a href="https://www.spotify.com" class="btn btn-primary">Listen on Spotify</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.html'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
