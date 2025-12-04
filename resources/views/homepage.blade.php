<!-- homepage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

   

    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white py-20 text-center">
        <h2 class="text-4xl font-bold mb-4">Welcome to MyWebsite</h2>
        <p class="text-lg mb-6">A simple homepage design that looks modern and clean.</p>
        <a href="#about" class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded hover:bg-gray-100 transition">Learn More</a>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 container mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold mb-8">Features</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="font-semibold text-xl mb-2">Fast</h4>
                <p>Optimized for speed and performance.</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="font-semibold text-xl mb-2">Responsive</h4>
                <p>Looks great on all devices and screens.</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="font-semibold text-xl mb-2">Easy to Use</h4>
                <p>User-friendly interface for everyone.</p>
            </div>
        </div>
    </section>

    

    <!-- Footer -->
    <footer class="bg-white shadow mt-16">
        <div class="container mx-auto py-6 px-6 text-center text-gray-600">
            &copy; 2025 MyWebsite. All rights reserved.
        </div>
    </footer>

</body>
</html>