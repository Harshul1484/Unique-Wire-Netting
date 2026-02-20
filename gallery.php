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
        .filter-btn {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 10px 24px;
            margin: 0 8px 15px;
            cursor: pointer;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--primary-color);
            color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            padding: 20px 0;
        }

        .gallery-item {
            display: none;
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.5s ease;
            cursor: pointer;
        }

        .gallery-item.show {
            display: block;
            animation: fadeIn 0.6s ease forwards;
        }

        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .gallery-item .overlay i {
            color: white;
            font-size: 2.5rem;
            transform: scale(0.8);
            transition: transform 0.4s ease;
        }

        .gallery-item:hover .overlay i {
            transform: scale(1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #333;
        }

        .page-header p {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <?php include 'includes/header.html'; ?>

    <div class="page-header"
        style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 80px 0; text-align: center;">
        <div class="container">
            <h1>Project Gallery</h1>
            <p>A showcase of our versatile wire mesh solutions delivering excellence across diverse applications.</p>
        </div>
    </div>

    <section class="section" style="padding: 60px 0;">
        <div class="container">
            <!-- Filters -->
            <div style="text-align: center; margin-bottom: 50px;">
                <button class="filter-btn active" onclick="filterGallery('all', this)">All</button>
                <button class="filter-btn" onclick="filterGallery('industrial', this)">Industrial</button>
                <button class="filter-btn" onclick="filterGallery('architectural', this)">Architectural</button>
                <button class="filter-btn" onclick="filterGallery('security', this)">Security</button>
                <button class="filter-btn" onclick="filterGallery('zoo', this)">Zoo / Animal</button>
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