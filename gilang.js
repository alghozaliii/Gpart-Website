document.addEventListener("DOMContentLoaded", function() {
    let lastScrollTop = 0;
    const header = document.getElementById("header"); 
    const menu = document.getElementById('mobile-menu');
    const menuToggle = document.getElementById('menu-toggle');
    const searchInput = document.getElementById('search-input');
    const mobileSearchInput = document.getElementById('mobile-search-input');
    const searchResults = document.getElementById('search-results');
    const mobileSearchResults = document.getElementById('mobile-search-results');
    const mobileSearchToggle = document.getElementById('mobile-search-toggle');
    const mobileSearch = document.getElementById('mobile-search');
    let searchTimeout;

    // Throttle scroll handler to improve performance
    window.addEventListener("scroll", debounce(handleScroll, 100));

    function handleScroll() {
        let scrollTop = window.scrollY;
        header.style.top = (scrollTop > lastScrollTop) ? "-10px" : "0";
        
        if (scrollTop > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
        lastScrollTop = scrollTop;
    }

    // Toggle mobile menu using class instead of inline styles
    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('hidden');
    });

    // Helper to debounce events
    function debounce(func, delay) {
        let timeout;
        return function() {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, arguments), delay);
        };
    }

    // Search functionality with debounce for optimized API calls
    function toggleSearch(inputElement, resultsContainer) {
        inputElement.addEventListener('input', () => {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                performSearch(inputElement, resultsContainer);
            }, 300);
        });
    }

    function performSearch(input, resultsContainer) {
        const query = input.value.trim();
        if (query.length < 2) {
            resultsContainer.innerHTML = '';
            resultsContainer.classList.remove('active');
            return;
        }

        fetch(`search_ajax.php?q=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                resultsContainer.innerHTML = data.length > 0
                    ? data.map(item => `
                        <a href="product.php?id=${item.id}" class="block p-3 hover:bg-gray-100">
                            <div class="flex items-center">
                                <img src="${item.image}" alt="${item.name}" class="w-12 h-12 object-cover rounded">
                                <div class="ml-3">
                                    <div class="font-medium text-gray-900">${item.name}</div>
                                    <div class="text-sm text-gray-500">Rp ${item.price}</div>
                                </div>
                            </div>
                        </a>
                    `).join('')
                    : '<div class="p-3 text-gray-500">No products found</div>';
                resultsContainer.classList.add('active');
            })
            .catch(error => {
                resultsContainer.innerHTML = '<div class="p-3 text-red-500">Error performing search</div>';
                resultsContainer.classList.add('active');
            });
    }

    toggleSearch(searchInput, searchResults);
    toggleSearch(mobileSearchInput, mobileSearchResults);

    // Close search results on click outside
    document.addEventListener('click', (e) => {
        if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
            searchResults.classList.remove('active');
        }
        if (!mobileSearchInput.contains(e.target) && !mobileSearchResults.contains(e.target)) {
            mobileSearchResults.classList.remove('active');
        }
    });

    // Toggle mobile search view
    mobileSearchToggle.addEventListener('click', () => {
        mobileSearch.classList.toggle('hidden');
        if (!mobileSearch.classList.contains('hidden')) {
            mobileSearchInput.focus();
        }
    });
});
