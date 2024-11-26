<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK TELKOM PURWOKERTO JAYA2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-poppins bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <nav class="container mx-auto flex items-center justify-between py-4 px-6">
            <div class="flex items-center space-x-2">
                <img src="Logo.png" alt="Educare" class="h-8 w-8">
                <span class="text-xl font-bold text-green-500">Educare</span>
            </div>
            <ul class="flex space-x-6">
                <li><a href="#home" class="hover:text-green-500">Home</a></li>
                <li><a href="#about" class="hover:text-green-500">About</a></li>
                <li><a href="#courses" class="hover:text-green-500">Courses <span class="text-xs">▼</span></a></li>
                <li><a href="#blog" class="hover:text-green-500">Blog <span class="text-xs">▼</span></a></li>
                <li><a href="#contact" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Contact us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-16">
        <!-- First Section -->
        <section class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 mb-8 lg:mb-0">
                <h1 class="text-4xl font-bold leading-tight mb-4">Start learning<br>with us now</h1>
                <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam voluptates sed beatae?</p>
                <button class="bg-green-500 text-white px-6 py-3 rounded hover:bg-green-600">Start learning</button>
            </div>
            <div class="lg:w-1/2">
                <img src="gambar1.png" alt="Student learning" class="w-full rounded">
            </div>
        </section>

        <!-- Second Section -->
        <section class="mt-16 flex flex-col lg:flex-row items-center bg-gray-100 rounded-lg p-8">
            <div class="lg:w-1/2 mb-8 lg:mb-0">
                <img src="gambar2.png" alt="Student studying online" class="w-full rounded">
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-3xl font-bold mb-4">Welcome to the online centers</h2>
                <ul class="list-disc pl-5 text-gray-600 space-y-2">
                    <li>Start learning from your experience</li>
                    <li>Enhance your skills with us now</li>
                    <li>Do your favorite course</li>
                </ul>
            </div>
        </section>

        <!-- Third Section -->
        <section class="mt-16 flex flex-col lg:flex-row items-center bg-green-100 rounded-lg p-8">
            <div class="lg:w-1/2 mb-8 lg:mb-0">
                <h2 class="text-3xl font-bold mb-4">Start learning by creating free account and get register</h2>
                <img src="image1.png" alt="Student with books" class="w-full rounded">
            </div>
            <div class="lg:w-1/2">
                <form class="space-y-4">
                    <input type="text" placeholder="Your name" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    <input type="email" placeholder="Your email address" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Subscribe</button>
                </form>
            </div>
        </section>

        <!-- Fourth Section -->
        <section class="mt-16 text-center">
            <h2 class="text-3xl font-bold mb-4">Start growing with our community</h2>
            <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            <button class="bg-green-500 text-white px-6 py-3 rounded hover:bg-green-600">Join community</button>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <img src="Logo.png" alt="Educare Logo" class="h-10 mb-4">
                <h3 class="text-lg font-bold mb-2">Follow us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-green-500">Twitter</a>
                    <a href="#" class="hover:text-green-500">LinkedIn</a>
                    <a href="#" class="hover:text-green-500">Facebook</a>
                    <a href="#" class="hover:text-green-500">Instagram</a>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-2">Useful Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-green-500">Our Projects</a></li>
                    <li><a href="#" class="hover:text-green-500">FAQ's</a></li>
                    <li><a href="#" class="hover:text-green-500">News and Updates</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-2">Contacts</h3>
                <p>Address: 4-5 Main road, Delhi</p>
                <p>Email: educare@gmail.com</p>
                <p>Phone: +91 4533433265</p>
            </div>
        </div>
        <div class="text-center mt-8">
            <p>&copy; All Copyrights reserved</p>
        </div>
    </footer>
</body>
</html>