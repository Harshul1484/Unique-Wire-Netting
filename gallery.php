<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Unique Wire Netting</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Lightbox2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <style>
    </style>
</head>

<body>

    <?php include 'includes/header.html'; ?>

    <section class="page-header gallery-header" style="background: linear-gradient(rgba(10, 16, 29, 0.8), rgba(10, 16, 29, 0.8)), url('assets/images/gallery-banner.jpg'); background-size: cover; background-position: center; color: var(--white);">
        <div class="container">
            <h4 class="hero-subtitle">Project Portfolio</h4>
            <h1 class="page-title">Refining Architectural &<br>Industrial Spaces</h1>
            <p class="page-subtitle">A showcase of engineering precision across global projects.</p>
        </div>
    </section>

    <section class="section" style="padding: 60px 0;">
        <div class="container">
            <!-- Filters -->
            <div class="gallery-filters" style="text-align: center; margin-bottom: 5rem; display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <button class="filter-btn active" onclick="filterGallery('all', this)">All Projects</button>
                <button class="filter-btn" onclick="filterGallery('industrial', this)">Industrial</button>
                <button class="filter-btn" onclick="filterGallery('architectural', this)">Architectural</button>
                <button class="filter-btn" onclick="filterGallery('security', this)">Security</button>
                <button class="filter-btn" onclick="filterGallery('zoo', this)">Zoo & Wildlife</button>
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid">
                <!-- Industrial Items -->
                <div class="gallery-item show industrial">
                    <a href="assets/images/gallery/ind-1.jpg" data-lightbox="gallery"
                        data-title="Industrial Mesh Panel">
                        <img src="assets/images/gallery/ind-1.jpg" alt="Industrial Mesh Panel">
                        <div class="overlay"><i class="fas fa-search-plus"></i></div>
                    </a>
                </div>

                <!-- Architectural Items -->
                <div class="gallery-item show architectural">
                    <a href="assets/images/gallery/arch-1.jpg" data-lightbox="gallery"
                        data-title="Architectural Decorative Mesh">
                        <img src="assets/images/gallery/arch-1.jpg" alt="Architectural Decorative Mesh">
                        <div class="overlay"><i class="fas fa-search-plus"></i></div>
                    </a>
                </div>

                <!-- Security Items -->
                <div class="gallery-item show security">
                    <a href="assets/images/gallery/sec-1.jpg" data-lightbox="gallery"
                        data-title="Security Fencing Installation">
                        <img src="assets/images/gallery/sec-1.jpg" alt="Security Fencing Installation">
                        <div class="overlay"><i class="fas fa-search-plus"></i></div>
                    </a>
                </div>

                <!-- Zoo Items -->
                <div class="gallery-item show zoo">
                    <a href="assets/images/gallery/zoo-1.jpg" data-lightbox="gallery" data-title="Tiger Cage Enclosure">
                        <img src="assets/images/gallery/zoo-1.jpg" alt="Tiger Cage Enclosure">
                        <div class="overlay"><i class="fas fa-search-plus"></i></div>
                    </a>
                </div>
                <div class="gallery-item show zoo">
                    <a href="assets/images/gallery/zoo-2.jpg" data-lightbox="gallery" data-title="Lion Enclosure Mesh">
                        <img src="assets/images/gallery/zoo-2.jpg" alt="Lion Enclosure Mesh">
                        <div class="overlay"><i class="fas fa-search-plus"></i></div>
                    </a>
                </div>
                <div class="gallery-item show zoo">
                    <a href="assets/images/gallery/zoo-3.jpg" data-lightbox="gallery"
                        data-title="Sumatran Tiger Exhibit">
                        <img src="assets/images/gallery/zoo-3.jpg" alt="Sumatran Tiger Exhibit">
                        <div class="overlay"><i class="fas fa-search-plus"></i></div>
                    </a>
                </div>
                <div class="gallery-item show zoo">
                    <a href="assets/images/gallery/zoo-4.jpg" data-lightbox="gallery"
                        data-title="Giraffe Enclosure Netting">
                        <img src="assets/images/gallery/zoo-4.jpg" alt="Giraffe Enclosure Netting">
                        <div class="overlay"><i class="fas fa-search-plus"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.html'; ?>

    <!-- JQuery (Required for Lightbox2) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Lightbox2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <script>
        function filterGallery(category, btn) {
            const items = document.querySelectorAll('.gallery-item');
            const buttons = document.querySelectorAll('.filter-btn');

            // Toggle active button
            buttons.forEach(button => button.classList.remove('active'));
            btn.classList.add('active');

            items.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.classList.add('show');
                } else {
                    item.classList.remove('show');
                }
            });
        }

        // Initialize Lightbox options
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': "Project %1 of %2"
        })
    </script>
    <script src="js/main.js"></script>
</body>

</html>