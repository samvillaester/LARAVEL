<!-- contactpage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - MyWebsite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

   

    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white py-20 text-center">
        <h2 class="text-4xl font-bold mb-4">Get in Touch</h2>
        <p class="text-lg max-w-2xl mx-auto">Have questions or want to collaborate? We'd love to hear from you!</p>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 container mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold mb-6">Send Us a Message</h3>
        <form class="max-w-md mx-auto space-y-4">
            <input type="text" placeholder="Your Name" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-600">
            <input type="email" placeholder="Your Email" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-600">
            <input type="text" placeholder="Subject" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-600">
            <textarea placeholder="Message" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-600"></textarea>
            <button type="submit" class="bg-indigo-600 text-white font-semibold px-6 py-3 rounded hover:bg-indigo-700 transition">Send Message</button>
        </form>
    </section>

    <!-- Contact Info Section -->
    <section class="bg-gray-100 py-16 text-center">
        <h3 class="text-3xl font-bold mb-6">Contact Info</h3>
        <p>Email: info@mywebsite.com</p>
        <p>Phone: +63 912 345 6789</p>
        <p>Address: 123 Main Street, Cebu, Philippines</p>
    </section>

    <!-- Footer -->
    <footer class="bg-white shadow mt-16">
        <div class="container mx-auto py-6 px-6 text-center text-gray-600">
            &copy; 2025 MyWebsite. All rights reserved.
        </div>
    </footer>

</body>
</html>