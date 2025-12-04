<!-- aboutpage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MyWebsite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">


    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white py-20 text-center">
        <h2 class="text-4xl font-bold mb-4">About Us</h2>
        <p class="text-lg max-w-2xl mx-auto">Learn more about our mission, vision, and the team that makes it happen.</p>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-16 container mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold mb-8">Our Mission & Vision</h3>
        <div class="max-w-3xl mx-auto space-y-6">
            <p>Our mission is to provide simple and effective web solutions for everyone.</p>
            <p>Our vision is to make the web accessible, clean, and user-friendly for all users.</p>
        </div>
    </section>

    <!-- Team Section -->
    <section class="bg-gray-100 py-16 text-center">
        <h3 class="text-3xl font-bold mb-8">Meet the Team</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <img src="https://via.placeholder.com/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                <h4 class="font-semibold text-xl mb-2">Alice Smith</h4>
                <p>Founder & CEO</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <img src="https://via.placeholder.com/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                <h4 class="font-semibold text-xl mb-2">John Doe</h4>
                <p>Lead Developer</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <img src="https://via.placeholder.com/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                <h4 class="font-semibold text-xl mb-2">Maria Lee</h4>
                <p>Designer</p>
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