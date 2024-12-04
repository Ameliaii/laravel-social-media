<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- 引入 Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 antialiased">
    <!-- 页面头部 -->
    <header class="bg-blue-600 text-white py-6 shadow-md">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Social Media Platform</h1>
            <nav>
                <a href="/" class="text-white text-lg font-medium hover:underline">Home</a>
            </nav>
        </div>
    </header>

    <!-- 主内容 -->
    <main class="container mx-auto mt-12 px-6">
        <div class="bg-white shadow-md rounded-lg p-8">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-4">About Us</h2>
            <p class="text-lg text-gray-600 mb-6">
                At Social Media Platform, our mission is to bring people together, foster connections, and build communities. We are dedicated to providing a space where you can share your thoughts, discover new ideas, and connect with others across the globe.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <!-- 使命 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-sm">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Our Mission</h3>
                    <p class="text-gray-600">
                        To empower individuals and communities to connect, share, and grow through a reliable and user-friendly platform.
                    </p>
                </div>
                <!-- 团队 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-sm">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Our Team</h3>
                    <p class="text-gray-600">
                        We are a team of passionate developers, designers, and innovators working to create a seamless online experience for our users.
                    </p>
                </div>
                <!-- 价值观 -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-sm">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Our Values</h3>
                    <p class="text-gray-600">
                        Integrity, inclusivity, and innovation drive everything we do, ensuring we remain a trusted platform for all.
                    </p>
                </div>
            </div>
        </div>

        <!-- 图片部分 -->
        <div class="mt-12 bg-gray-100 p-8 rounded-lg shadow-md text-center">
            <h3 class="text-3xl font-bold text-gray-800 mb-4">Discover More About Us</h3>
            <p class="text-lg text-gray-600 mb-6">
                Explore our platform and become part of a growing community that values connection and creativity.
            </p>
            <img src="https://photo.16pic.com/00/54/66/16pic_5466081_b.jpg" 
            alt="About Us Banner" 
            class="w-1/2 h-auto rounded-lg shadow-md mx-auto">

        </div>
    </main>

    <!-- 页脚 -->
    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Social Media Platform. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
