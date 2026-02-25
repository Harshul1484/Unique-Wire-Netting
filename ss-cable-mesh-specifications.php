<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS Cable Mesh Specifications | Unique Wire Netting</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .spec-intro {
            padding: 40px 0;
            background-color: var(--bg-main);
        }

        .spec-example {
            background-color: #f8f9fa;
            padding: 30px;
            border-left: 4px solid var(--secondary-color);
            margin: 30px 0;
            border-radius: 0 4px 4px 0;
        }

        .spec-example h4 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .list-group {
            margin-bottom: 20px;
        }

        .list-group-item {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }

        .list-group-item::before {
            content: "�";
            color: var(--secondary-color);
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .product-details {
            padding: 60px 0;
        }

        .product-card {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 60px;
            align-items: center;
        }

        .product-img {
            flex: 1;
            min-width: 300px;
            min-height: 300px;
            background-color: #eee;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
            font-size: 1.2rem;
        }

        .product-content {
            flex: 1;
            min-width: 300px;
        }

        .service-ordering {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .service-list {
            list-style: none;
            /* remove default bullets as we use Numbers in heading or custom logic */
            counter-reset: service-counter;
        }

        .service-item {
            margin-bottom: 25px;
        }

        .service-item h4 {
            color: var(--primary-color);
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .service-item h4::before {
            counter-increment: service-counter;
            content: counter(service-counter) ". ";
            color: var(--secondary-color);
        }

        .info-block {
            margin-bottom: 40px;
        }

        .info-block h3 {
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 20px;
            display: inline-block;
        }

        /* Responsive text */
        @media (max-width: 768px) {
            .product-card {
                flex-direction: column;
            }

            .product-img {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <?php include 'includes/header.html'; ?>

    <!-- Hero Banner -->
    <section class="hero-banner"
        style="background-image: linear-gradient(rgba(10, 16, 29, 0.8), rgba(10, 16, 29, 0.8)), url('assets/product-banner/ss-cable-mesh-specifications.jpg');">
        <!-- Placeholder for banner if different -->
        <div class="container">
            <h1>Stainless Steel Cable Mesh Specifications</h1>
            <p>Precise measurements for your custom safety and architectural needs.</p>
        </div>
    </section>

    <!-- Intro & Specs Definition (Image 1) -->
    <section class="spec-intro">
        <div class="container">
            <div class="section-title">
                <h2>Stainless Steel Cable Mesh Specifications</h2>
            </div>
            <p>Stainless steel cable mesh Specifications are composed of the wire rope diameter and the mesh aperture.
                Rope diameter, Mesh aperture, and Mesh panel size can all be customized. We will produce according to
                your requirements. Stainless steel cable mesh by pure manual processing production, after a variety of
                processing technology. It is luxurious in appearance, highly durable, and timeless.</p>
            <br>
            <p>Stainless steel cable mesh (alternate names: hand-woven stainless steel mesh, stainless steel rope woven
                mesh, stainless steel cable netting, stainless steel cable woven mesh, flexible metal mesh, flexible
                cable mesh), suitable for zoo animal fence mesh, zoo aviary mesh, stadium fence, safety protection nets
                and so on.</p>

            <div style="margin-top: 50px;">
                <h3>Details of Products Specifications</h3>
                <p>The specification name of stainless steel wire mesh is composed of the wire rope diameter and the
                    mesh aperture.</p>

                <div class="spec-example">
                    <h4>For example: UW1251</h4>
                    <div style="margin: 20px 0;">
                        <img src="assets/images/products/ss-cable-mesh-specifications/DetailsOfProductsSpecifications.jpg"
                            alt="Details of Products Specifications"
                            style="max-width: 100%; height: auto; border-radius: 4px;">
                    </div>
                    <p><strong>Rope diameter:</strong> 1.2mm (3/64")</p>
                    <p><strong>Mesh aperture:</strong> 51mm x 51mm (2" x 2")</p>
                    <hr style="margin: 15px 0; border: 0; border-top: 1px solid var(--border);">
                    <p>The wire rope diameter is 1.2 mm; When the opening angle of each mesh is 90�, the distance
                        between the two parallel ropes is the standard rope diameter. Shown as the "X" in the picture.
                        In this example, X = 51mm.</p>
                </div>

                <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px;">
                    <div style="flex: 1; min-width: 300px;">
                        <img src="assets/images/products/ss-cable-mesh-specifications/rope-diameters.jpg"
                            alt="Rope Diameters"
                            style="max-width: 100%; height: auto; border-radius: 4px; margin-bottom: 20px;">
                        <h4>Wire rope diameter:</h4>
                        <ul class="list-group">
                            <li class="list-group-item">By inch: 3/64", 1/16", 5/64", 3/32", 1/8"</li>
                            <li class="list-group-item">By mm: 1.2mm, 1.6mm, 2.0mm, 2.4mm, 3.2mm</li>
                        </ul>
                    </div>
                    <div style="flex: 1; min-width: 300px;">
                        <h4>Mesh aperture:</h4>
                        <ul class="list-group">
                            <li class="list-group-item">By inch: 0.8"x0.8", 1"x1", 1.2"x1.2", 1.5"x1.5", 2"x2",
                                2.4"x2.4", 3"x3", 3.6"x3.6", 4"x4", 5"x5", 6"x6".</li>
                            <li class="list-group-item">By mm: 20mmx20mm, 25mmx25mm, 30mmx30mm, 38mmx38mm, 51mmx51mm,
                                60mmx60mm, 76mmx76mm, 90mmx90mm, 102mmx102mm, 127mmx127mm, 152mmx152mm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details (Image 2) -->
    <section class="product-details">
        <div class="container">
            <div class="product-card">
                <!-- Image Container -->
                <div class="product-img">
                    <img src="assets/images/products/ss-cable-mesh-specifications/mesh-detail.jpg"
                        alt="Mesh Detail Image">
                </div>
                <!-- Content -->
                <div class="product-content">
                    <p>Stainless steel cable mesh (alternate names: hand-woven stainless steel netting, stainless steel
                        rope mesh, flexible metal mesh, stainless steel wire rope mesh) is a rhomboid mesh, with
                        excellent elasticity and toughness, almost indestructible, most impact and destructive
                        resistance, anti-weathering.</p>
                    <br>
                    <p>Stainless steel cable mesh is anti-rust, corrosion-resistant, and has a service life of more than
                        30 years.</p>
                    <br>
                    <p>Thanks to the stainless steel material of the braided rope mesh itself, it is securely guaranteed
                        to safely keep any variety of animals, including beasts, raptors, ornamental birds, primates.
                        Its flexible mesh size can be applied to any common bird, from the smallest warbler to the
                        largest macaws.</p>
                    <br>
                    <p>Woven mesh holes can be customized to meet the precise specifications of your exhibits.</p>
                </div>
            </div>

            <p>Whether your requirements are safe and secure, or flexible and beautiful, our cable woven mesh can meet
                your requirements.</p>
            <br>
            <p>We invite you to consider incorporating our stainless steel cable mesh into your design. As a utility
                model material, it will make your design unlimited, can be reliable and elegant, and has unparalleled
                economic benefits, one investment, almost no maintenance costs to spend, a reliable service life of 30
                years.</p>
        </div>
    </section>

    <!-- Product Description & Ordering (Image 3) -->
    <section class="service-ordering">
        <div class="container">
            <div class="section-title">
                <h2>Stainless Steel Rope Mesh Product Description</h2>
            </div>

            <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px; margin-bottom: 40px;">
                <div class="product-img" style="flex: 1;">
                    <img src="assets/images/products/ss-cable-mesh-specifications/product-description.jpg"
                        alt="Product Description" style="width: 100%; height: auto; border-radius: 8px;">
                </div>
                <div class="product-img" style="flex: 1;">
                    <img src="assets/images/products/ss-cable-mesh-specifications/mesh-close-up.jpg"
                        alt="Mesh Close-up Image" style="width: 100%; height: auto; border-radius: 8px;">
                </div>
            </div>

            <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px; margin-bottom: 50px;">
                <div class="product-content" style="flex: 1;">
                    <div class="info-block">
                        <h4>Mesh aperture:</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Mesh aperture is the mesh hole size, that is the distance from
                                knot center to knot center.</li>
                            <li class="list-group-item">Pure hand-woven. Every knot crosses twice by hand, ensuring the
                                hole never varies.</li>
                            <li class="list-group-item">Stainless steel cable mesh aperture has diverse specifications.
                            </li>
                            <li class="list-group-item">No matter large or small, our custom stainless steel cable mesh
                                size can be very suited for your design.</li>
                        </ul>
                    </div>

                    <div class="info-block">
                        <h4>Wire rope diameter of Mesh:</h4>
                        <ul class="list-group">
                            <li class="list-group-item">The stainless steel wire rope diameter</li>
                            <li class="list-group-item">The wire rope structure</li>
                            <li class="list-group-item">The Min breaking load (KN)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="info-block">
                <h4>Material:</h4>
                <ul class="list-group">
                    <li class="list-group-item">High quality stainless steel wire rope, material include AISI304 and
                        AISI316 and 316L.</li>
                    <li class="list-group-item">In general, the material AISI 304 is the main material, can meet the
                        needs of most areas, and the AISI316 material mainly used for wet environment, like seaside.
                    </li>
                </ul>
            </div>

            <!-- End of Product Description Section -->
        </div>
    </section>

    <!-- Specifications Table Section -->
    <section class="spec-table-section section-padding" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="section-title">
                <h2>Product Specification Table</h2>
            </div>
            <div class="spec-table-container">
                <table id="specTable" class="display spec-table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Rope Dia (mm)</th>
                            <th>Aperture (mm)</th>
                            <th>Rope Dia (Inch)</th>
                            <th>Aperture (Inch)</th>
                            <th>Weight (kg/m�)</th>
                            <th>Weight (kg/sq.ft)</th>
                            <th>Structure</th>
                            <th>Tensile</th>
                            <th>Wire Dia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-breaking-load="1.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1215</td>
                            <td>1.2</td>
                            <td>15 x 15</td>
                            <td>3/64"</td>
                            <td>0.6" x 0.6"</td>
                            <td>0.92</td>
                            <td>0.085</td>
                            <td>7 x 7</td>
                            <td>2030</td>
                            <td>0.135</td>
                        </tr>
                        <tr data-breaking-load="1.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1220</td>
                            <td>1.2</td>
                            <td>20 x 20</td>
                            <td>3/64"</td>
                            <td>0.8" x 0.8"</td>
                            <td>0.7</td>
                            <td>0.065</td>
                            <td>7 x 7</td>
                            <td>2030</td>
                            <td>0.135</td>
                        </tr>
                        <tr data-breaking-load="1.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1225</td>
                            <td>1.2</td>
                            <td>25.4 x 25.4</td>
                            <td>3/64"</td>
                            <td>1" x 1"</td>
                            <td>0.53</td>
                            <td>0.049</td>
                            <td>7 x 7</td>
                            <td>2030</td>
                            <td>0.135</td>
                        </tr>
                        <tr data-breaking-load="1.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1230</td>
                            <td>1.2</td>
                            <td>30 x 30</td>
                            <td>3/64"</td>
                            <td>1.2" x 1.2"</td>
                            <td>0.45</td>
                            <td>0.042</td>
                            <td>7 x 7</td>
                            <td>2030</td>
                            <td>0.135</td>
                        </tr>
                        <tr data-breaking-load="1.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1238</td>
                            <td>1.2</td>
                            <td>38 x 38</td>
                            <td>3/64"</td>
                            <td>1.5" x 1.5"</td>
                            <td>0.37</td>
                            <td>0.034</td>
                            <td>7 x 7</td>
                            <td>2030</td>
                            <td>0.135</td>
                        </tr>
                        <tr data-breaking-load="1.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1251</td>
                            <td>1.2</td>
                            <td>51 x 51</td>
                            <td>3/64"</td>
                            <td>2" x 2"</td>
                            <td>0.26</td>
                            <td>0.024</td>
                            <td>7 x 7</td>
                            <td>2030</td>
                            <td>0.135</td>
                        </tr>
                        <tr data-breaking-load="1.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1260</td>
                            <td>1.2</td>
                            <td>60 x 60</td>
                            <td>3/64"</td>
                            <td>2.4" x 2.4"</td>
                            <td>0.23</td>
                            <td>0.021</td>
                            <td>7 x 7</td>
                            <td>2030</td>
                            <td>0.135</td>
                        </tr>
                        <tr data-breaking-load="1.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1276</td>
                            <td>1.2</td>
                            <td>76 x 76</td>
                            <td>3/64"</td>
                            <td>3" x 3"</td>
                            <td>0.19</td>
                            <td>0.018</td>
                            <td>7 x 7</td>
                            <td>2030</td>
                            <td>0.135</td>
                        </tr>
                        <tr data-breaking-load="1.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1290</td>
                            <td>1.2</td>
                            <td>90 x 90</td>
                            <td>3/64"</td>
                            <td>3.6" x 3.6"</td>
                            <td>0.17</td>
                            <td>0.016</td>
                            <td>7 x 7</td>
                            <td>2030</td>
                            <td>0.135</td>
                        </tr>
                        <tr data-breaking-load="1.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW12102</td>
                            <td>1.2</td>
                            <td>102 x 102</td>
                            <td>3/64"</td>
                            <td>4" x 4"</td>
                            <td>0.15</td>
                            <td>0.014</td>
                            <td>7 x 7</td>
                            <td>2030</td>
                            <td>0.135</td>
                        </tr>
                        <tr data-breaking-load="2.13 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1625</td>
                            <td>1.6</td>
                            <td>25.4 x 25.4</td>
                            <td>1/16"</td>
                            <td>1" x 1"</td>
                            <td>1</td>
                            <td>0.093</td>
                            <td>7 x 7</td>
                            <td>2300</td>
                            <td>0.17</td>
                        </tr>
                        <tr data-breaking-load="2.13 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1630</td>
                            <td>1.6</td>
                            <td>30 x 30</td>
                            <td>1/16"</td>
                            <td>1.2" x 1.2"</td>
                            <td>0.9</td>
                            <td>0.084</td>
                            <td>7 x 7</td>
                            <td>2300</td>
                            <td>0.17</td>
                        </tr>
                        <tr data-breaking-load="2.13 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1638</td>
                            <td>1.6</td>
                            <td>38 x 38</td>
                            <td>1/16"</td>
                            <td>1.5" x 1.5"</td>
                            <td>0.64</td>
                            <td>0.059</td>
                            <td>7 x 7</td>
                            <td>2300</td>
                            <td>0.17</td>
                        </tr>
                        <tr data-breaking-load="2.13 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1651</td>
                            <td>1.6</td>
                            <td>51 x 51</td>
                            <td>1/16"</td>
                            <td>2" x 2"</td>
                            <td>0.5</td>
                            <td>0.046</td>
                            <td>7 x 7</td>
                            <td>2300</td>
                            <td>0.17</td>
                        </tr>
                        <tr data-breaking-load="2.13 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1660</td>
                            <td>1.6</td>
                            <td>60 x 60</td>
                            <td>1/16"</td>
                            <td>2.4" x 2.4"</td>
                            <td>0.45</td>
                            <td>0.042</td>
                            <td>7 x 7</td>
                            <td>2300</td>
                            <td>0.17</td>
                        </tr>
                        <tr data-breaking-load="2.13 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1676</td>
                            <td>1.6</td>
                            <td>76 x 76</td>
                            <td>1/16"</td>
                            <td>3" x 3"</td>
                            <td>0.37</td>
                            <td>0.034</td>
                            <td>7 x 7</td>
                            <td>2300</td>
                            <td>0.17</td>
                        </tr>
                        <tr data-breaking-load="2.13 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW1690</td>
                            <td>1.6</td>
                            <td>90 x 90</td>
                            <td>1/16"</td>
                            <td>3.6" x 3.6"</td>
                            <td>0.32</td>
                            <td>0.03</td>
                            <td>7 x 7</td>
                            <td>2300</td>
                            <td>0.17</td>
                        </tr>
                        <tr data-breaking-load="2.13 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW16102</td>
                            <td>1.6</td>
                            <td>102 x 102</td>
                            <td>1/16"</td>
                            <td>4" x 4"</td>
                            <td>0.24</td>
                            <td>0.022</td>
                            <td>7 x 7</td>
                            <td>2300</td>
                            <td>0.17</td>
                        </tr>
                        <tr data-breaking-load="2.94 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW2038</td>
                            <td>2</td>
                            <td>38 x 38</td>
                            <td>5/64"</td>
                            <td>1.5" x 1.5"</td>
                            <td>1.03</td>
                            <td>0.096</td>
                            <td>7 x 7</td>
                            <td>2080</td>
                            <td>0.22</td>
                        </tr>
                        <tr data-breaking-load="2.94 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW2051</td>
                            <td>2</td>
                            <td>51 x 51</td>
                            <td>5/64"</td>
                            <td>2" x 2"</td>
                            <td>0.76</td>
                            <td>0.071</td>
                            <td>7 x 7</td>
                            <td>2080</td>
                            <td>0.22</td>
                        </tr>
                        <tr data-breaking-load="2.94 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW2060</td>
                            <td>2</td>
                            <td>60 x 60</td>
                            <td>5/64"</td>
                            <td>2.4" x 2.4"</td>
                            <td>0.65</td>
                            <td>0.06</td>
                            <td>7 x 7</td>
                            <td>2080</td>
                            <td>0.22</td>
                        </tr>
                        <tr data-breaking-load="2.94 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW2076</td>
                            <td>2</td>
                            <td>76 x 76</td>
                            <td>5/64"</td>
                            <td>3" x 3"</td>
                            <td>0.51</td>
                            <td>0.047</td>
                            <td>7 x 7</td>
                            <td>2080</td>
                            <td>0.22</td>
                        </tr>
                        <tr data-breaking-load="2.94 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW2090</td>
                            <td>2</td>
                            <td>90 x 90</td>
                            <td>5/64"</td>
                            <td>3.6" x 3.6"</td>
                            <td>0.45</td>
                            <td>0.042</td>
                            <td>7 x 7</td>
                            <td>2080</td>
                            <td>0.22</td>
                        </tr>
                        <tr data-breaking-load="2.94 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW20102</td>
                            <td>2</td>
                            <td>102 x 102</td>
                            <td>5/64"</td>
                            <td>4" x 4"</td>
                            <td>0.4</td>
                            <td>0.037</td>
                            <td>7 x 7</td>
                            <td>2080</td>
                            <td>0.22</td>
                        </tr>
                        <tr data-breaking-load="2.94 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW20127</td>
                            <td>2</td>
                            <td>127 x 127</td>
                            <td>5/64"</td>
                            <td>5" x 5"</td>
                            <td>0.3</td>
                            <td>0.028</td>
                            <td>7 x 7</td>
                            <td>2080</td>
                            <td>0.22</td>
                        </tr>
                        <tr data-breaking-load="4.1 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW2451</td>
                            <td>2.4</td>
                            <td>51 x 51</td>
                            <td>3/32"</td>
                            <td>2" x 2"</td>
                            <td>1.02</td>
                            <td>0.095</td>
                            <td>7 x 7</td>
                            <td>1860</td>
                            <td>0.26</td>
                        </tr>
                        <tr data-breaking-load="4.1 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW2460</td>
                            <td>2.4</td>
                            <td>60 x 60</td>
                            <td>3/32"</td>
                            <td>2.4" x 2.4"</td>
                            <td>0.87</td>
                            <td>0.081</td>
                            <td>7 x 7</td>
                            <td>1860</td>
                            <td>0.26</td>
                        </tr>
                        <tr data-breaking-load="4.1 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW2476</td>
                            <td>2.4</td>
                            <td>76 x 76</td>
                            <td>3/32"</td>
                            <td>3" x 3"</td>
                            <td>0.72</td>
                            <td>0.067</td>
                            <td>7 x 7</td>
                            <td>1860</td>
                            <td>0.26</td>
                        </tr>
                        <tr data-breaking-load="4.1 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW2490</td>
                            <td>2.4</td>
                            <td>90 x 90</td>
                            <td>3/32"</td>
                            <td>3.6" x 3.6"</td>
                            <td>0.6</td>
                            <td>0.056</td>
                            <td>7 x 7</td>
                            <td>1860</td>
                            <td>0.26</td>
                        </tr>
                        <tr data-breaking-load="4.1 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW24102</td>
                            <td>2.4</td>
                            <td>102 x 102</td>
                            <td>3/32"</td>
                            <td>4" x 4"</td>
                            <td>0.54</td>
                            <td>0.05</td>
                            <td>7 x 7</td>
                            <td>1860</td>
                            <td>0.26</td>
                        </tr>
                        <tr data-breaking-load="4.1 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW24127</td>
                            <td>2.4</td>
                            <td>127 x 127</td>
                            <td>3/32"</td>
                            <td>5" x 5"</td>
                            <td>0.42</td>
                            <td>0.039</td>
                            <td>7 x 7</td>
                            <td>1860</td>
                            <td>0.26</td>
                        </tr>
                        <tr data-breaking-load="4.1 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW24152</td>
                            <td>2.4</td>
                            <td>152 x 152</td>
                            <td>3/32"</td>
                            <td>6" x 6"</td>
                            <td>0.35</td>
                            <td>0.033</td>
                            <td>7 x 7</td>
                            <td>1860</td>
                            <td>0.26</td>
                        </tr>
                        <tr data-breaking-load="7.82 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW3251</td>
                            <td>3.2</td>
                            <td>51 x 51</td>
                            <td>1/8"</td>
                            <td>2" x 2"</td>
                            <td>1.95</td>
                            <td>0.181</td>
                            <td>7 x 19</td>
                            <td>1920</td>
                            <td>0.21</td>
                        </tr>
                        <tr data-breaking-load="7.82 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW3260</td>
                            <td>3.2</td>
                            <td>60 x 60</td>
                            <td>1/8"</td>
                            <td>2.4" x 2.4"</td>
                            <td>1.65</td>
                            <td>0.153</td>
                            <td>7 x 19</td>
                            <td>1920</td>
                            <td>0.21</td>
                        </tr>
                        <tr data-breaking-load="7.82 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW3276</td>
                            <td>3.2</td>
                            <td>76 x 76</td>
                            <td>1/8"</td>
                            <td>3" x 3"</td>
                            <td>1.28</td>
                            <td>0.119</td>
                            <td>7 x 19</td>
                            <td>1920</td>
                            <td>0.21</td>
                        </tr>
                        <tr data-breaking-load="7.82 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW3290</td>
                            <td>3.2</td>
                            <td>90 x 90</td>
                            <td>1/8"</td>
                            <td>3.6" x 3.6"</td>
                            <td>1.1</td>
                            <td>0.102</td>
                            <td>7 x 19</td>
                            <td>1920</td>
                            <td>0.21</td>
                        </tr>
                        <tr data-breaking-load="7.82 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW32102</td>
                            <td>3.2</td>
                            <td>102 x 102</td>
                            <td>1/8"</td>
                            <td>4" x 4"</td>
                            <td>0.9</td>
                            <td>0.084</td>
                            <td>7 x 19</td>
                            <td>1920</td>
                            <td>0.21</td>
                        </tr>
                        <tr data-breaking-load="7.82 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW32127</td>
                            <td>3.2</td>
                            <td>127 x 127</td>
                            <td>1/8"</td>
                            <td>5" x 5"</td>
                            <td>0.7</td>
                            <td>0.065</td>
                            <td>7 x 19</td>
                            <td>1920</td>
                            <td>0.21</td>
                        </tr>
                        <tr data-breaking-load="7.82 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW32152</td>
                            <td>3.2</td>
                            <td>152 x 152</td>
                            <td>1/8"</td>
                            <td>6" x 6"</td>
                            <td>0.61</td>
                            <td>0.057</td>
                            <td>7 x 19</td>
                            <td>1920</td>
                            <td>0.21</td>
                        </tr>
                        <tr data-breaking-load="7.82 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW32203</td>
                            <td>3.2</td>
                            <td>203 x 203</td>
                            <td>1/8"</td>
                            <td>8" x 8"</td>
                            <td>0.43</td>
                            <td>0.04</td>
                            <td>7 x 19</td>
                            <td>1920</td>
                            <td>0.21</td>
                        </tr>
                        <tr data-breaking-load="10.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW4076</td>
                            <td>4</td>
                            <td>76 x 76</td>
                            <td>5/32"</td>
                            <td>3" x 3"</td>
                            <td>1.9</td>
                            <td>0.177</td>
                            <td>7 x 19</td>
                            <td>1880</td>
                            <td>0.24</td>
                        </tr>
                        <tr data-breaking-load="10.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW4090</td>
                            <td>4</td>
                            <td>90 x 90</td>
                            <td>5/32"</td>
                            <td>3.6" x 3.6"</td>
                            <td>1.7</td>
                            <td>0.158</td>
                            <td>7 x 19</td>
                            <td>1880</td>
                            <td>0.24</td>
                        </tr>
                        <tr data-breaking-load="10.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW40102</td>
                            <td>4</td>
                            <td>102 x 102</td>
                            <td>5/32"</td>
                            <td>4" x 4"</td>
                            <td>1.5</td>
                            <td>0.139</td>
                            <td>7 x 19</td>
                            <td>1880</td>
                            <td>0.24</td>
                        </tr>
                        <tr data-breaking-load="10.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW40127</td>
                            <td>4</td>
                            <td>127 x 127</td>
                            <td>5/32"</td>
                            <td>5" x 5"</td>
                            <td>1.15</td>
                            <td>0.107</td>
                            <td>7 x 19</td>
                            <td>1880</td>
                            <td>0.24</td>
                        </tr>
                        <tr data-breaking-load="10.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW40152</td>
                            <td>4</td>
                            <td>152 x 152</td>
                            <td>5/32"</td>
                            <td>6" x 6"</td>
                            <td>1</td>
                            <td>0.093</td>
                            <td>7 x 19</td>
                            <td>1880</td>
                            <td>0.24</td>
                        </tr>
                        <tr data-breaking-load="10.2 (KN)">
                            <td class="details-control"><i class="fas fa-plus-circle"></i> UW40203</td>
                            <td>4</td>
                            <td>203 x 203</td>
                            <td>5/32"</td>
                            <td>8" x 8"</td>
                            <td>0.75</td>
                            <td>0.07</td>
                            <td>7 x 19</td>
                            <td>1880</td>
                            <td>0.24</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Service & Ordering Section -->
    <section class="service-ordering">
        <div class="container">

            <div class="section-title" style="margin-top: 60px;">
                <h2>Stainless Steel Rope Mesh - About Service & Ordering</h2>
            </div>

            <div class="service-list">
                <div class="service-item">
                    <h4>Free Sample:</h4>
                    <p>A sample of size 30cm x 30cm of Stainless steel cable wire mesh will be provided free of cost.
                    </p>
                </div>

                <div class="service-item">
                    <h4>Custom Specification</h4>
                    <p><strong>Raw Material:</strong> Either AISI 316 & 316L or AISI 304.</p>
                    <p><strong>Panel Size:</strong> Our standard size is 8 meter x 8 meter. Upon request, we will
                        manufacture the wire rope netting according to specification.</p>
                    <p><strong>Wire Rope Diameter:</strong> Ranging from 1.2mm, 1.6mm, 2.0mm, 2.4 mm, and 3.2mm.</p>
                    <p><strong>Apertures:</strong> Standard apertures are from 102mm x 102mm, 90mm x 90mm, 76mm x 76mm,
                        60mm x 60mm, 51mm x 51mm, 38mm x 38mm, 25mm x 25mm, 20mm x 20mm.</p>
                    <p>For more information, please refer to the Product Specifications Table.</p>
                    <p><strong>Color:</strong> natural, black, bronze.</p>
                    <p>If there are any special requirements for the apertures not shown, please feel free to contact
                        us.</p>
                </div>

                <div class="service-item">
                    <h4>The size of wire cable mesh panels roll</h4>
                    <p>The size of the bulk roll varies depending on the size of the stainless steel cable mesh ordered.
                    </p>
                </div>

                <div class="service-item">
                    <h4>Packaging</h4>
                    <p>The stainless steel cable mesh will be rolled and packed into wooden boxes.</p>
                </div>

                <div class="service-item">
                    <h4>Convenient and fast installation</h4>
                    <p>With customized sizes, the wire mesh panels and frames are compatible, easy for installation. Our
                        detailed installation guidance will facilitate a worry-free installation for you.</p>
                </div>
            </div>

        </div>
    </section>


    <?php include 'includes/footer.html'; ?>

    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            var table = $('#specTable').DataTable({
                "pageLength": 12,
                "lengthMenu": [[12, 25, 46, -1], [12, 25, 46, "All"]],
                "ordering": false,
                "language": {
                    "search": "Search:",
                    "lengthMenu": "Show _MENU_ entries"
                }
            });

            // Add event listener for opening and closing details
            $('#specTable tbody').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table.row(tr);
                var breakingLoad = tr.data('breaking-load');
                var icon = $(this).find('i');

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                    icon.removeClass('fa-minus-circle').addClass('fa-plus-circle');
                }
                else {
                    // Open this row
                    row.child(format(breakingLoad)).show();
                    tr.addClass('shown');
                    icon.removeClass('fa-plus-circle').addClass('fa-minus-circle');
                }
            });

            function format(d) {
                // `d` is the breaking load value which already includes (KN)
                return '<div class="child-row-content" style="padding: 10px 20px;">' +
                    '<strong>Min. Breaking Load:</strong> ' + d +
                    '</div>';
            }
        });
    </script>
</body>

</html>