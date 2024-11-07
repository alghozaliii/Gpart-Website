<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="gilang.js"></script> <!-- Tambahkan gilang.js di sini -->
    <style>
        .header-shadow {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .header-animate {
            transition: all 0.3s ease;
        }
        
        .header-shrink {
            height: 60px;
        }
        
        .logo-shrink {
            height: 40px;
        }
        
        .main-content {
            padding-top: 70px;
            min-height: 100vh;
        }
        
        .container-custom {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        @media (min-width: 640px) {
            .container-custom {
                max-width: 640px;
            }
        }
        
        @media (min-width: 768px) {
            .container-custom {
                max-width: 768px;
            }
        }
        
        @media (min-width: 1024px) {
            .container-custom {
                max-width: 1024px;
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }
        
        @media (min-width: 1280px) {
            .container-custom {
                max-width: 1280px;
            }
        }
        
        .mobile-menu-overlay {
            background-color: rgba(0, 0, 0, 0.3);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .mobile-menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Logo styles */
        .logo-image {
            height: 40px; /* Smaller default size */
            width: auto;
            object-fit: contain;
            transition: all 0.3s ease;
        }

        /* Mobile-specific styles */
        @media (max-width: 1023px) {
            .header-layout {
                height: 60px;
            }

            .mobile-logo-container {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }

            .mobile-icons {
                display: flex;
                align-items: center;
                gap: 0.5rem;
            }
        }

        /* Desktop navigation styles */
        @media (min-width: 1024px) {
            .logo-image {
                height: 45px; /* Slightly larger for desktop */
            }

            .desktop-nav {
                display: flex !important;
                position: static !important;
                align-items: center;
                margin-left: 2rem;
            }

            .desktop-nav-item {
                padding: 0.5rem 1rem;
                border-radius: 0.375rem;
                transition: all 0.2s ease;
                color: #374151;
                text-decoration: none;
            }

            .desktop-nav-item:hover {
                background-color: #f3f4f6;
            }

            .header-layout {
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 70px;
            }

            .header-left {
                display: flex;
                align-items: center;
                flex: 1;
            }

            .header-right {
                display: flex;
                align-items: center;
                justify-content: flex-end;
            }

            .logo-container {
                flex: 0 1 auto;
                justify-content: flex-start;
                margin-left: 0;
            }
        }
                /* Add new search styles */
                .search-container {
            position: relative;
            flex-grow: 1;
            max-width: 600px;
            margin: 0 1rem;
        }

        .search-input {
            width: 100%;
            padding: 0.5rem 1rem 0.5rem 2.5rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            outline: none;
            transition: all 0.2s;
        }

        .search-input:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }

        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            margin-top: 0.5rem;
            z-index: 50;
            display: none;
        }

        .search-results.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="fixed top-0 left-0 w-full bg-white header-shadow header-animate z-50">
        <div class="container-custom">
            <div class="header-layout flex items-center justify-between">
                <!-- Left Side - Same as before -->
                <div class="header-left flex items-center">
                    <button id="menu-toggle" class="lg:hidden p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                        <span class="iconify" data-icon="uil:bars" style="font-size: 22px;"></span>
                    </button>
                    
                    <div class="mobile-logo-container lg:static lg:transform-none">
                        <a href="home.php" class="flex items-center">
                            <img src="gambar/4.png" alt="Logo" class="logo-image">
                        </a>
                    </div>

                    <nav class="hidden lg:flex desktop-nav">
                        <a href="home.php" class="desktop-nav-item">Home</a>
                        <a href="all.product.php" class="desktop-nav-item">All Product</a>
                        <a href="Categories.php" class="desktop-nav-item">Categories</a>
                    </nav>
                </div>

        <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200">
            <form action="search.php" method="GET" class="relative flex items-center">
        <input type="text" 
               name="q" 
               class="w-40 lg:w-60 px-3 py-1 text-sm border border-gray-300 rounded-lg focus:outline-none focus:border-gray-400"
               placeholder="Search products..."
               id="search-input"
               autocomplete="off">
        <button type="submit" class="ml-1 p-2 hover:bg-gray-100 rounded-lg">
            <span class="iconify" data-icon="uil:search" style="font-size: 22px;"></span>
        </button>
        <div id="search-results" class="absolute top-full right-0 mt-1 w-64 bg-white rounded-lg shadow-lg hidden"></div>
    </form>
</button>

                <!-- Right Side - Modified for mobile search -->
                <div class="header-right mobile-icons">
                    <button id="mobile-search-toggle" class="lg:hidden p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                        <span class="iconify" data-icon="uil:search" style="font-size: 22px;"></span>
                    </button>
                    <a href="Login.php" class="p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                        <span class="iconify" data-icon="uil:user" style="font-size: 22px;"></span>
                    </a>
                    <div class="hidden lg:flex items-center ml-4 pl-4 border-l border-gray-200">
                        <img src="gambar/bendera.jpeg" alt="Indonesia" class="w-5 h-5 object-cover rounded-sm">
                        <span class="text-sm text-gray-700 ml-2">ID | IDR</span>
                    </div>
                </div>
            </div>

            <!-- Mobile Search Bar (Hidden by default) -->
            <div id="mobile-search" class="lg:hidden hidden p-2">
                <form action="search.php" method="GET" class="relative">
                    <span class="iconify search-icon" data-icon="uil:search"></span>
                    <input type="text" 
                           name="q" 
                           class="search-input" 
                           placeholder="Search products..."
                           autocomplete="off"
                           id="mobile-search-input">
                    <div id="mobile-search-results" class="search-results"></div>
                </form>
            </div>
        </div>
    </header>
    </style>
</head>
<body class="bg-gray-100">
    <header class="fixed top-0 left-0 w-full bg-white header-shadow header-animate z-50">
        <div class="container-custom">
            <div class="header-layout flex items-center justify-between">
                <!-- Left Side - Menu Button (Mobile) / Navigation (Desktop) -->
                <div class="header-left flex items-center">
                    <button id="menu-toggle" class="lg:hidden p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                        <span class="iconify" data-icon="uil:bars" style="font-size: 22px;"></span>
                    </button>
                    
                    <!-- Logo -->
                    <div class="mobile-logo-container lg:static lg:transform-none">
                        <a href="home.php" class="flex items-center">
                            <img src="gambar/4.png" 
                                 alt="Logo" 
                                 class="logo-image">
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <nav class="hidden lg:flex desktop-nav">
                        <a href="home.php" class="desktop-nav-item">Home</a>
                        <a href="all.product.php" class="desktop-nav-item">All Product</a>
                        <a href="Categories.php" class="desktop-nav-item">Categories</a>
                    </nav>
                </div>

                <!-- Right Side - Search and User Icons -->
                <div class="header-right mobile-icons">
                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                        <span class="iconify" data-icon="uil:search" style="font-size: 22px;"></span>
                    </button>
                    <a href="Login.php" class="p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                        <span class="iconify" data-icon="uil:user" style="font-size: 22px;"></span>
                    </a>
                    <!-- Language Selector (Desktop) -->
                    <div class="hidden lg:flex items-center ml-4 pl-4 border-l border-gray-200">
                        <img src="gambar/bendera.jpeg" alt="Indonesia" class="w-5 h-5 object-cover rounded-sm">
                        <span class="text-sm text-gray-700 ml-2">ID | IDR</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="lg:hidden fixed inset-0 z-40 mobile-menu-overlay"></div>

    <!-- Mobile Menu Sidebar -->
    <div id="mobile-menu" class="lg:hidden fixed top-0 left-0 w-[280px] h-screen bg-white z-50 transform -translate-x-full transition-transform duration-300 ease-out shadow-lg">
        <div class="p-4">
            <button class="close-menu absolute top-4 right-4 p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                <span class="iconify" data-icon="uil:times" style="font-size: 22px;"></span>
            </button>
            
            <nav class="mt-16">
                <ul class="space-y-2">
                    <li>
                        <a href="home.php" class="block p-3 text-gray-800 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                            <span class="iconify inline-block mr-2" data-icon="uil:home"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="all.product.php" class="block p-3 text-gray-800 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                            <span class="iconify inline-block mr-2" data-icon="uil:box"></span>
                            All Product
                        </a>
                    </li>
                    <li>
                        <a href="Categories.php" class="block p-3 text-gray-800 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                            <span class="iconify inline-block mr-2" data-icon="uil:apps"></span>
                            Categories
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="absolute bottom-0 left-0 w-full p-4 border-t border-gray-200">
                <div class="flex items-center justify-center space-x-2">
                    <img src="gambar/bendera.png" alt="Indonesia" class="w-5 h-5 object-cover rounded-sm">
                    <span class="text-sm text-gray-700">Indonesia | IDR (Rp)</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const closeMenu = document.querySelector('.close-menu');
        
        // Header scroll behavior
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            const logo = document.querySelector('.logo-image');
            if (window.scrollY > 50) {
                header.classList.add('header-shrink');
                logo.classList.add('logo-shrink');
            } else {
                header.classList.remove('header-shrink');
                logo.classList.remove('logo-shrink');
            }
        });

        // Mobile menu functions
        function openMenu() {
            mobileMenu.classList.remove('-translate-x-full');
            mobileMenuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMenuFunc() {
            mobileMenu.classList.add('-translate-x-full');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        menuToggle.addEventListener('click', openMenu);
        closeMenu.addEventListener('click', closeMenuFunc);
        mobileMenuOverlay.addEventListener('click', closeMenuFunc);

        // Close menu on window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                closeMenuFunc();
            }
        });
    </script>
</body>
</html>