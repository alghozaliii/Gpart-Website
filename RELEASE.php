<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Custom CSS for smoother appearance */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .sidebar h5 {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .list-group-item {
            border: none;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .list-group-item a {
            color: #566573;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #f8f9fa;
        }

        .list-group-item:hover a {
            color: #2c3e50;
        }

        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
            border-radius: 12px 12px 0 0;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1rem;
            font-weight: 600;
            margin: 10px 0;
            color: #2c3e50;
        }

        .card-text {
            font-weight: 600;
            color: #e74c3c;
            margin-bottom: 10px;
        }

        .rating {
            color: #f1c40f;
            margin-right: 10px;
        }

        .btn-outline-secondary {
            border-radius: 8px;
            padding: 8px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-secondary:hover {
            background-color: #2c3e50;
            color: white;
        }

        .badge {
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 500;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom range slider styling */
        .form-range::-webkit-slider-thumb {
            background: #2c3e50;
        }

        .form-range::-webkit-slider-runnable-track {
            background: #dee2e6;
        }

        /* Search input styling */
        #searchInput {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #dee2e6;
            transition: all 0.3s ease;
        }

        #searchInput:focus {
            border-color: #2c3e50;
            box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
        }

        /* Dropdown styling */
        .dropdown-menu {
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .dropdown-item {
            padding: 8px 20px;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <?php include 'header2.php'; ?>

    <!-- Main Content -->
    <div class="container mt-5 pt-5">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="sidebar">
                    <input type="text" class="form-control mb-3" placeholder="Cari produk..." id="searchInput">
                    <h5>Kategori Produk</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="RELEASE.PHP">RELEASE</a></li>
                        <li class="list-group-item"><a href="HOODIE.PHP">HOODIE</a></li>
                        <li class="list-group-item"><a href="T-SHIRTS.PHP">T-SHIRTS</a></li>
                        <li class="list-group-item"><a href="LIHAT LAINNYA.PHP">LIHAT LAINNYA</a></li>
                    </ul>
                    <h5 class="mt-4">Rentang Harga</h5>
                    <input type="range" class="form-range" min="10000" max="1000000" step="10000" id="priceRange" oninput="updatePriceValue(this.value)">
                    <p class="mt-2">Harga: Rp <span id="priceValue">10000</span></p>
                </div>
            </div>

            <!-- Products Section -->
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold">Urutkan Produk</h4>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Unggulan
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                            <li><a class="dropdown-item" href="#" onclick="sortProducts('unggulan', event)">Unggulan</a></li>
                            <li><a class="dropdown-item" href="#" onclick="sortProducts('terbaru', event)">Terbaru</a></li>
                            <li><a class="dropdown-item" href="#" onclick="sortProducts('terlama', event)">Terlama</a></li>
                            <li><a class="dropdown-item" href="#" onclick="sortProducts('terpopuler', event)">Terpopuler</a></li>
                            <li><a class="dropdown-item" href="#" onclick="sortProducts('hargaTerendah', event)">Harga Terendah</a></li>
                            <li><a class="dropdown-item" href="#" onclick="sortProducts('hargaTertinggi', event)">Harga Tertinggi</a></li>
                            <li><a class="dropdown-item" href="#" onclick="sortProducts('namaAZ', event)">Nama Produk (A-Z)</a></li>
                        </ul>
                    </div>
                </div>

                <div id="productList" class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Product 1 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="gambar/1.jpg" class="card-img-top" alt="Product 1">
                            <div class="card-body">
                                <span class="badge bg-danger">Ada Stok</span>
                                <h5 class="card-title">TRYING TO RISE FROM THE DARKNESS</h5>
                                <p class="card-text">Rp 449,000</p>
                                <span class="rating">★ 5</span>
                                <button class="btn btn-outline-secondary">Beli</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="gambar/3.jpg" class="card-img-top" alt="Product 3">
                            <div class="card-body">
                                <span class="badge bg-danger">Ada Stok</span>
                                <h5 class="card-title">GPART SPECIAL ARTICLE (PRE-ORDER)</h5>
                                <p class="card-text">Rp 100,000</p>
                                <span class="rating">★ 4.86</span>
                                <button class="btn btn-outline-secondary">Beli</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="gambar/slerekan.jpg" class="card-img-top" alt="Product 4">
                            <div class="card-body">
                                <span class="badge bg-danger">Ada Stok</span>
                                <h5 class="card-title">BOXY ZIPPER STAR CIRCLE (PRE-ORDER)</h5>
                                <p class="card-text">Rp 100,000</p>
                                <span class="rating">★ 4.86</span>
                                <button class="btn btn-outline-secondary">Beli</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="gambar/love.jpg" class="card-img-top" alt="Product 5">
                            <div class="card-body">
                                <span class="badge bg-danger">Ada Stok</span>
                                <h5 class="card-title">PRETTIEST LIPS</h5>
                                <p class="card-text">Rp 100,000</p>
                                <span class="rating">★ 4.86</span>
                                <button class="btn btn-outline-secondary">Beli</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 5 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="gambar/OSA.jpg" class="card-img-top" alt="Product 3">
                            <div class="card-body">
                                <span class="badge bg-danger">Ada Stok</span>
                                <h5 class="card-title">GPRT T SHIRT</h5>
                                <p class="card-text">Rp 100,000</p>
                                <span class="rating">★ 4.86</span>
                                <button class="btn btn-outline-secondary">Beli</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 6 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="gambar/OSA2.jpg" class="card-img-top" alt="Product 3">
                            <div class="card-body">
                                <span class="badge bg-danger">Ada Stok</span>
                                <h5 class="card-title">CLOCK TOWER HOODIE</h5>
                                <p class="card-text">Rp 100,000</p>
                                <span class="rating">★ 4.86</span>
                                <button class="btn btn-outline-secondary">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Price range update function
        function updatePriceValue(value) {
            document.getElementById('priceValue').textContent = new Intl.NumberFormat('id-ID').format(value);
        }

        // Product search function with debounce
        let searchTimeout;
        document.getElementById('searchInput').addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                const filter = this.value.toUpperCase();
                const productList = document.getElementById('productList');
                const products = productList.getElementsByClassName('col');

                Array.from(products).forEach(product => {
                    const title = product.querySelector('.card-title');
                    const txtValue = title.textContent || title.innerText;
                    product.style.display = txtValue.toUpperCase().includes(filter) ? "" : "none";
                });
            }, 300);
        });

        // Enhanced sort function
        function sortProducts(criteria, event) {
            event.preventDefault();

            const productList = document.getElementById('productList');
            const products = Array.from(productList.getElementsByClassName('col'));

            products.sort((a, b) => {
                const titleA = a.querySelector('.card-title').textContent.toUpperCase();
                const titleB = b.querySelector('.card-title').textContent.toUpperCase();
                const priceA = parseInt(a.querySelector('.card-text').textContent.replace(/[^\d]/g, ''));
                const priceB = parseInt(b.querySelector('.card-text').textContent.replace(/[^\d]/g, ''));

                switch(criteria) {
                    case 'namaAZ':
                        return titleA.localeCompare(titleB);
                    case 'hargaTerendah':
                        return priceA - priceB;
                    case 'hargaTertinggi':
                        return priceB - priceA;
                    // Add other sorting cases as needed
                    default:
                        return 0;
                }
            });

            // Remove and re-append sorted products with animation
            productList.innerHTML = '';
            products.forEach((product, index) => {
                setTimeout(() => {
                    productList.appendChild(product);
                    product.style.opacity = '0';
                    requestAnimationFrame(() => {
                        product.style.transition = 'opacity 0.3s ease';
                        product.style.opacity = '1';
                    });
                }, index * 50);
            });

            // Update dropdown button text
            const dropdownButton = document.getElementById('sortDropdown');
            const selectedItem = document.querySelector(`.dropdown-menu a[onclick*="${criteria}"]`);
            dropdownButton.textContent = selectedItem.textContent;
        }
    </script>
</body>
</html>