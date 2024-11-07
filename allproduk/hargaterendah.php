<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="gilang.css">
</head>

<body>
    <div id="header-container"></div>

    <script>
        fetch('allproduk/header2.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('header-container').innerHTML = data;
            })
            .catch(error => console.error('Error loading header:', error));
    </script>

    <!-- Main Content -->
    <div class="container mt-5">
        <!-- Konten utama di sini -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-sHiUvLdqGsL65j/p9sikMyXcXyU6ldOwGiCE42+tBzjWh5q4vHtG6ED59fNpV3fE" crossorigin="anonymous"></script>
</body>

</html>

    <div class="container mt-5 pt-5">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="sidebar">
                    <input type="text" class="form-control mb-3" placeholder="Cari" id="searchInput">
                    <h5>Semua Produk</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="RELEASE.PHP" onclick="filterProducts('release')">RELEASE</a></li>
                        <li class="list-group-item"><a href="HOODIE.PHP" onclick="filterProducts('hoodie')">HOODIE</a></li>
                        <li class="list-group-item"><a href="T-SHIRTS.PHP" onclick="filterProducts('tshirts')">T-SHIRTS</a></li>
                        <li class="list-group-item"><a href="LIHAT LAINNYA.PHP" onclick="filterProducts('lihatLainnya')">LIHAT LAINNYA</a></li>
                    </ul>
                    <h5 class="mt-4">Harga</h5>
                    <input type="range" class="form-range" min="10000" max="1000000" step="10000" id="priceRange" oninput="updatePriceValue(this.value)">
                    <p>Harga: Rp <span id="priceValue">10000</span></p>
                </div>
            </div>
            <!-- Products Section -->
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>Urutkan produk berdasarkan</h4>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Unggulan
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                            <li><a class="dropdown-item" href="unggulan.php" onclick="sortProducts('unggulan', event)">Unggulan</a></li>
                            <li><a class="dropdown-item" href="terbaru.php" onclick="sortProducts('terbaru', event)">Terbaru</a></li>
                            <li><a class="dropdown-item" href="terlama.php" onclick="sortProducts('terlama', event)">Terlama</a></li>
                            <li><a class="dropdown-item" href="terpopuler.php" onclick="sortProducts('terpopuler', event)">Terpopuler</a></li>
                            <li><a class="dropdown-item" href="hargaterendah.php" onclick="sortProducts('hargaTerendah', event)">Harga Terendah</a></li>
                            <li><a class="dropdown-item" href="hargatertinggi.php" onclick="sortProducts('hargaTertinggi', event)">Harga Tertinggi</a></li>
                            <li><a class="dropdown-item" href="namaproduk.php" onclick="sortProducts('namaAZ', event)">Nama Produk (A-Z)</a></li>
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
        // Fungsi untuk memperbarui nilai harga yang ditampilkan
        function updatePriceValue(value) {
            document.getElementById('priceValue').textContent = value;
        }

        // Fungsi untuk pencarian produk
        document.getElementById('searchInput').addEventListener('input', function () {
            let filter = this.value.toUpperCase();
            let productList = document.getElementById('productList');
            let products = productList.getElementsByClassName('col');

            for (let i = 0; i < products.length; i++) {
                let title = products[i].getElementsByClassName('card-title')[0];
                let txtValue = title.textContent || title.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    products[i].style.display = "";
                } else {
                    products[i].style.display = "none";
                }
            }
        });

        // Fungsi untuk mengurutkan produk
        function sortProducts(criteria, event) {
            event.preventDefault();  // Mencegah halaman di-reload

            let productList = document.getElementById('productList');
            let products = Array.from(productList.getElementsByClassName('col'));

            products.sort(function (a, b) {
                let titleA = a.getElementsByClassName('card-title')[0].textContent.toUpperCase();
                let titleB = b.getElementsByClassName('card-title')[0].textContent.toUpperCase();
                let priceA = parseInt(a.getElementsByClassName('card-text')[0].textContent.replace('Rp', '').replace(',', ''));
                let priceB = parseInt(b.getElementsByClassName('card-text')[0].textContent.replace('Rp', '').replace(',', ''));

                if (criteria === 'namaAZ') {
                    return titleA.localeCompare(titleB);
                } else if (criteria === 'hargaTerendah') {
                    return priceA - priceB;
                } else if (criteria === 'hargaTertinggi') {
                    return priceB - priceA;
                }

                // Tambahkan logika pengurutan lain berdasarkan kriteria
            });

            // Hapus semua produk dan tambahkan kembali produk yang telah diurutkan
            productList.innerHTML = "";
            products.forEach(function (product) {
                productList.appendChild(product);
            });

            // Perbarui teks tombol dropdown
            let dropdownButton = document.getElementById('sortDropdown');
            let selectedItemText = document.querySelector(`.dropdown-menu a[onclick="sortProducts('${criteria}', event)"]`).textContent;
            dropdownButton.textContent = selectedItemText;
        }
    </script>
</body>

</html>
