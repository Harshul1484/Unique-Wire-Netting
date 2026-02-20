<?php
require_once 'includes/db_connect.php';

// Fetch all inquiries
$sql = "SELECT * FROM inquiries ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Dashboard | Unique Wire Netting</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Public+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .dashboard-header {
            background: var(--primary);
            padding: 4rem 0;
            color: var(--white);
            margin-bottom: 4rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: -6rem;
            position: relative;
            z-index: 10;
        }

        .stat-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
            text-align: center;
        }

        .stat-card h3 {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-muted);
            margin-bottom: 0.5rem;
        }

        .stat-card .value {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary);
        }

        .inquiry-card {
            background: var(--white);
            border-radius: 16px;
            border: 1px solid var(--border);
            padding: 2.5rem;
            margin-bottom: 2rem;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .inquiry-card:hover {
            box-shadow: var(--shadow-lg);
            border-color: var(--accent);
        }

        .inquiry-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--accent);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 2rem;
            border-bottom: 1px solid var(--gray-100);
            padding-bottom: 1.5rem;
        }

        .user-info h2 {
            margin-bottom: 0.25rem;
            font-size: 1.5rem;
        }

        .user-meta {
            display: flex;
            gap: 1.5rem;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .user-meta span i {
            margin-right: 8px;
            color: var(--accent);
        }

        .timestamp {
            background: var(--gray-100);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary);
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
        }

        .detail-block h4 {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--accent);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .detail-block p {
            font-size: 1rem;
            color: var(--primary);
            line-height: 1.6;
        }

        .products-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }

        .product-tag {
            background: rgba(197, 160, 89, 0.1);
            color: #8c6e3d;
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
            border: 1px solid rgba(197, 160, 89, 0.2);
        }

        .specs-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .spec-item {
            font-size: 0.9rem;
        }

        .spec-item strong {
            display: block;
            color: var(--text-muted);
            font-size: 0.8rem;
            text-transform: uppercase;
        }

        .empty-state {
            text-align: center;
            padding: 5rem;
            background: var(--bg-alt);
            border-radius: 20px;
            border: 2px dashed var(--border);
        }

        .empty-state i {
            font-size: 4rem;
            color: var(--border);
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .card-header {
                flex-direction: column;
                gap: 1rem;
            }

            .user-meta {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
</head>

<body class="bg-light">

    <?php include 'includes/header.html'; ?>

    <section class="dashboard-header">
        <div class="container">
            <h1 style="color: white; margin-bottom: 1rem;">Inquiry Management Portal</h1>
            <p style="opacity: 0.8; font-size: 1.1rem;">Review and manage all incoming quotation requests from Unique
                Wirenetting.</p>
        </div>
    </section>

    <div class="container" style="margin-bottom: 8rem;">
        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Inquiries</h3>
                <div class="value">
                    <?php echo $result->num_rows; ?>
                </div>
            </div>
            <div class="stat-card">
                <h3>Last 24 Hours</h3>
                <div class="value">
                    <?php
                    $count_sql = "SELECT COUNT(*) as count FROM inquiries WHERE created_at >= NOW() - INTERVAL 1 DAY";
                    $count_res = $conn->query($count_sql);
                    echo $count_res->fetch_assoc()['count'];
                    ?>
                </div>
            </div>
            <div class="stat-card">
                <h3>Unique Locations</h3>
                <div class="value">
                    <?php
                    $loc_sql = "SELECT COUNT(DISTINCT location) as count FROM inquiries";
                    $loc_res = $conn->query($loc_sql);
                    echo $loc_res->fetch_assoc()['count'];
                    ?>
                </div>
            </div>
        </div>

        <div style="margin-top: 5rem;">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="inquiry-card">
                        <div class="card-header">
                            <div class="user-info">
                                <h2>
                                    <?php echo htmlspecialchars($row['name']); ?>
                                </h2>
                                <div class="user-meta">
                                    <span><i class="fas fa-envelope"></i>
                                        <?php echo htmlspecialchars($row['email']); ?>
                                    </span>
                                    <span><i class="fas fa-phone"></i>
                                        <?php echo htmlspecialchars($row['phone']); ?>
                                    </span>
                                    <span><i class="fas fa-map-marker-alt"></i>
                                        <?php echo htmlspecialchars($row['location']); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="timestamp">
                                <?php echo date('M d, Y - h:i A', strtotime($row['created_at'])); ?>
                            </div>
                        </div>

                        <div class="details-grid">
                            <div class="detail-block">
                                <h4><i class="fas fa-layer-group"></i> Requested Products</h4>
                                <div class="products-list">
                                    <?php
                                    $products = explode(', ', $row['products']);
                                    foreach ($products as $p) {
                                        if (!empty($p))
                                            echo '<span class="product-tag">' . htmlspecialchars($p) . '</span>';
                                    }
                                    if (empty($row['products']))
                                        echo '<span class="product-tag">General Inquiry</span>';
                                    ?>
                                </div>
                            </div>

                            <div class="detail-block">
                                <h4><i class="fas fa-microchip"></i> Specifications</h4>
                                <div class="specs-grid">
                                    <div class="spec-item">
                                        <strong>Material Grade</strong>
                                        <?php echo !empty($row['material']) ? htmlspecialchars($row['material']) : 'N/A'; ?>
                                    </div>
                                    <div class="spec-item">
                                        <strong>Diameter</strong>
                                        <?php echo !empty($row['diameter']) ? htmlspecialchars($row['diameter']) : 'N/A'; ?>
                                    </div>
                                    <div class="spec-item">
                                        <strong>Aperture</strong>
                                        <?php echo !empty($row['aperture']) ? htmlspecialchars($row['aperture']) : 'N/A'; ?>
                                    </div>
                                    <div class="spec-item">
                                        <strong>Dimensions</strong>
                                        <?php echo !empty($row['dimensions']) ? htmlspecialchars($row['dimensions']) : 'N/A'; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="detail-block">
                                <h4><i class="fas fa-info-circle"></i> Application</h4>
                                <p>
                                    <?php echo !empty($row['application']) ? nl2br(htmlspecialchars($row['application'])) : 'No details provided.'; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="empty-state">
                    <i class="fas fa-inbox"></i>
                    <h2>No Inquiries Yet</h2>
                    <p>When customers fill out the quotation form, their requests will appear here.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php include 'includes/footer.html'; ?>
    <script src="js/main.js"></script>
</body>

</html>

<?php $conn->close(); ?>