<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="pt-20 bg-gray-100">

    <!-- PHP Include Header -->
    <?php include 'header2.php'; ?>

    <!-- Header Fixed -->
    <header class="fixed top-0 w-full z-50 bg-white shadow">
        <!-- Header content can go here, if needed -->
    </header>

    <!-- Container for categories -->
    <div class="container mx-auto mt-24">
        <div class="flex flex-wrap justify-between">

            <!-- Category 1: T-Shirt -->
            <div class="flex-1 bg-cover bg-center border-2 border-black p-12 m-2 flex justify-center items-center relative overflow-hidden rounded-lg transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer" style="background-image: url('gambar/OSA.jpg');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="text-5xl font-bold text-white relative z-10">T-Shirt</div>
                <a href="T-SHIRTS.php" class="absolute inset-0 z-20"></a>
            </div>

            <!-- Category 2: Hoodie -->
            <div class="flex-1 bg-cover bg-center border-2 border-black p-12 m-2 flex justify-center items-center relative overflow-hidden rounded-lg transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer" style="background-image: url('gambar/OSA2.jpg');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="text-5xl font-bold text-white relative z-10">Hoodie</div>
                <a href="HOODIE.php" class="absolute inset-0 z-20"></a>
            </div>

            <!-- Category 3: Other -->
            <div class="flex-1 bg-cover bg-center border-2 border-black p-12 m-2 flex justify-center items-center relative overflow-hidden rounded-lg transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer" style="background-image: url('gambar/other.jpg');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="text-5xl font-bold text-white relative z-10">Other</div>
                <a href="other.php" class="absolute inset-0 z-20"></a>
            </div>

        </div>
    </div>

</body>
</html>
