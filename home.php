<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Gpart, your premium fashion brand featuring t-shirts, hoodies, caps, and footwear collections.">
    <meta name="keywords" content="fashion, t-shirts, hoodies, caps, footwear, clothing brand">
    
    <!-- Preload critical assets -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" as="style">
    
    <!-- Critical CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="gilang.css" rel="stylesheet">

    <title>Gpart - Premium Fashion Brand</title>

    <!-- Defer non-critical scripts -->
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" defer></script>
</head>

<body class="bg-gray-100">
    <?php include 'header2.php'; ?>

    <!-- Main Content -->
    <main class="loading-animation">
        <!-- Features Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Why Choose Gpart?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature Cards -->
                    <article class="feature-card p-6 bg-gray-50 rounded-lg text-center shadow-sm hover:shadow-md transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                        <span class="iconify text-4xl text-blue-500 mb-4" data-icon="uil:truck"></span>
                        <h3 class="text-xl font-semibold mb-2">Fast Delivery</h3>
                        <p class="text-gray-600">Quick and reliable shipping to your doorstep</p>
                    </article>

                    <article class="feature-card p-6 bg-gray-50 rounded-lg text-center shadow-sm hover:shadow-md transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                        <span class="iconify text-4xl text-blue-500 mb-4" data-icon="uil:shield-check"></span>
                        <h3 class="text-xl font-semibold mb-2">Quality Guaranteed</h3>
                        <p class="text-gray-600">All products are carefully selected and tested</p>
                    </article>

                    <article class="feature-card p-6 bg-gray-50 rounded-lg text-center shadow-sm hover:shadow-md transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                        <span class="iconify text-4xl text-blue-500 mb-4" data-icon="uil:headphones"></span>
                        <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
                        <p class="text-gray-600">Always here to help with your queries</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Popular Categories -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Popular Categories</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Category Cards -->
                    <article class="category-card rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                        <img src="gambar/OSA.jpg" alt="T-shirt Collection" class="w-full h-48 object-cover" loading="lazy">
                        <div class="p-4 bg-white">
                            <h3 class="text-lg font-semibold">T-shirt Collection</h3>
                            <p class="text-gray-600 text-sm">12 Products</p>
                        </div>
                    </article>

                    <article class="category-card rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                        <img src="gambar/OSA2.jpg" alt="Hoodies Collection" class="w-full h-48 object-cover" loading="lazy">
                        <div class="p-4 bg-white">
                            <h3 class="text-lg font-semibold">Hoodies Collection</h3>
                            <p class="text-gray-600 text-sm">8 Products</p>
                        </div>
                    </article>

                    <article class="category-card rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                        <img src="gambar/OSA3.jpg" alt="Caps & Accessories" class="w-full h-48 object-cover" loading="lazy">
                        <div class="p-4 bg-white">
                            <h3 class="text-lg font-semibold">Caps & Accessories</h3>
                            <p class="text-gray-600 text-sm">15 Products</p>
                        </div>
                    </article>

                    <article class="category-card rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="400">
                        <img src="gambar/OSA4.jpg" alt="Footwear Collection" class="w-full h-48 object-cover" loading="lazy">
                        <div class="p-4 bg-white">
                            <h3 class="text-lg font-semibold">Footwear Collection</h3>
                            <p class="text-gray-600 text-sm">20 Products</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Featured Products -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Featured Products</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <article class="product-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                        <img src="gambar/GPPP.jpg" alt="Bundle" class="w-full h-48 object-cover" loading="lazy">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Bundle Box Gpart
                            <p class="text-gray-600 mb-2">Premium quality zip-up bundle with Gpart design</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-500 font-bold">$99.99</span>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300">Add to Cart</button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS with enhanced settings
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100,
                easing: 'ease-in-out'
            });

            // Add smooth scroll behavior
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Remove loading animation
            document.body.classList.add('loaded');
        });
    </script>
    <?php include 'footer.php'; ?>
</body>
</html>