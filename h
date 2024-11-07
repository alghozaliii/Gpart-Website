<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Gpart, your one-stop shop for car parts and accessories.">
    <meta name="keywords" content="car parts, accessories, auto parts, fast delivery, quality parts">
    <title>Home - Gpart</title>
    <?php include 'header2.php'; ?>

    <!-- External CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <link href="gilang.css" rel="stylesheet">

    <style>
        /* Existing styles remain the same */
        
        /* New styles */
        .feature-card {
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }

        .category-card {
            position: relative;
            overflow: hidden;
        }

        .category-card img {
            transition: transform 0.5s ease;
        }

        .category-card:hover img {
            transform: scale(1.1);
        }

        .product-card {
            transition: all 0.3s ease;
        }

        .product-card:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .footer-link {
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #3B82F6;
        }

        .social-icon {
            transition: transform 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Header remains the same -->

    <!-- Main Content -->
        <!-- Carousel remains the same -->

        <!-- Features Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Why Choose Gpart?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="feature-card p-6 bg-gray-50 rounded-lg text-center" data-aos="fade-up" data-aos-delay="100">
                        <span class="iconify text-4xl text-blue-500 mb-4" data-icon="uil:truck"></span>
                        <h3 class="text-xl font-semibold mb-2">Fast Delivery</h3>
                        <p class="text-gray-600">Quick and reliable shipping to your doorstep</p>
                    </div>
                    <div class="feature-card p-6 bg-gray-50 rounded-lg text-center" data-aos="fade-up" data-aos-delay="200">
                        <span class="iconify text-4xl text-blue-500 mb-4" data-icon="uil:shield-check"></span>
                        <h3 class="text-xl font-semibold mb-2">Quality Guaranteed</h3>
                        <p class="text-gray-600">All products are carefully selected and tested</p>
                    </div>
                    <div class="feature-card p-6 bg-gray-50 rounded-lg text-center" data-aos="fade-up" data-aos-delay="300">
                        <span class="iconify text-4xl text-blue-500 mb-4" data-icon="uil:headphones"></span>
                        <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
                        <p class="text-gray-600">Always here to help with your queries</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Categories -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Popular Categories</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            
            <!-- Category Card 1 -->
            <div class="category-card rounded-lg overflow-hidden shadow-md" data-aos="fade-up" data-aos-delay="100">
                <img src="gambar/OSA.jpg" alt="Category" class="w-full h-48 object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold">Tshirt Parts</h3>
                    <p class="text-gray-600 text-sm">12 Products</p>
                </div>
            </div>
            
            <!-- Category Card 2 -->
            <div class="category-card rounded-lg overflow-hidden shadow-md" data-aos="fade-up" data-aos-delay="200">
                <img src="gambar/OSA2.jpg" alt="Category" class="w-full h-48 object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold">Hoodies Collection</h3>
                    <p class="text-gray-600 text-sm">8 Products</p>
                </div>
            </div>

            <!-- Category Card 3 -->
            <div class="category-card rounded-lg overflow-hidden shadow-md" data-aos="fade-up" data-aos-delay="300">
                <img src="gambar/OSA3.jpg" alt="Category" class="w-full h-48 object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold">Caps & Accessories</h3>
                    <p class="text-gray-600 text-sm">15 Products</p>
                </div>
            </div>

            <!-- Category Card 4 -->
            <div class="category-card rounded-lg overflow-hidden shadow-md" data-aos="fade-up" data-aos-delay="400">
                <img src="gambar/OSA4.jpg" alt="Category" class="w-full h-48 object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-lg font-semibold">Footwear Collection</h3>
                    <p class="text-gray-600 text-sm">20 Products</p>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- Featured Products -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Featured Products</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="product-card bg-white rounded-lg overflow-hidden shadow-md" data-aos="fade-up" data-aos-delay="100">
                        <img src="gambar/GPRT  Hoodie Zip Boxy star circle (blkg).JPEG.jpg" alt="Product" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">Product Name</h3>
                            <p class="text-gray-600 mb-2">Short description here</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-500 font-bold">$99.99</span>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product cards as needed -->
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h4 class="text-xl font-bold mb-4">About Gpart</h4>
                    <p class="text-gray-400 mb-4">Your trusted source for quality car parts and accessories. We provide the best products at competitive prices.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="social-icon text-gray-400 hover:text-white">
                            <span class="iconify text-2xl" data-icon="uil:facebook"></span>
                        </a>
                        <a href="#" class="social-icon text-gray-400 hover:text-white">
                            <span class="iconify text-2xl" data-icon="uil:instagram"></span>
                        </a>
                        <a href="#" class="social-icon text-gray-400 hover:text-white">
                            <span class="iconify text-2xl" data-icon="uil:twitter"></span>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="home.php" class="footer-link text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="allproduk/all.product.php" class="footer-link text-gray-400 hover:text-white">Shop</a></li>
                        <li><a href="allproduk/Categories.php" class="footer-link text-gray-400 hover:text-white">Categories</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <!-- Customer Service -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Customer Service</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">FAQs</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Shipping Info</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Returns Policy</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Track Order</a></li>
                        <li><a href="#" class="footer-link text-gray-400 hover:text-white">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe to get special offers and updates</p>
                    <form class="space-y-4">
                        <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 rounded bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-blue-500">
                        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 Gpart. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="gilang.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Existing menu toggle script remains the same
    </script>
</body>
</html>