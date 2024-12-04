<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>
    <!-- 引入 Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 antialiased">
    <!-- 页面头部 -->
    <header class="bg-purple-600 text-white py-6 shadow-md">
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
            <h2 class="text-4xl font-extrabold text-gray-800 mb-6 text-center">Our Features</h2>
            <p class="text-lg text-gray-600 mb-8 text-center">
                Explore the cutting-edge features of our platform designed to enhance your social media experience and foster meaningful connections.
            </p>

            <!-- 特性部分 -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- 特性卡片 -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-16 h-16 bg-purple-500 text-white rounded-full mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h.01M12 16h.01M16 16h.01M9 20h6m-7 0h-.01m-5 0a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v13a2 2 0 01-2 2h-3" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 text-center">Customizable Profiles</h3>
                    <p class="text-gray-600 text-center">
                        Personalize your profile with unique themes, bios, and photos to showcase your individuality.
                    </p>
                </div>
                <!-- 特性卡片 -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-16 h-16 bg-purple-500 text-white rounded-full mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 text-center">Group Chats</h3>
                    <p class="text-gray-600 text-center">
                        Connect with friends and communities through intuitive and secure group chat features.
                    </p>
                </div>
                <!-- 特性卡片 -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-16 h-16 bg-purple-500 text-white rounded-full mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-4.553M9 21l-6-6m0 0l6-6M3 15h18" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 text-center">Easy Sharing</h3>
                    <p class="text-gray-600 text-center">
                        Share posts, photos, and videos effortlessly with a few clicks and customizable settings.
                    </p>
                </div>
                <!-- 特性卡片 -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-16 h-16 bg-purple-500 text-white rounded-full mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m5-3a9 9 0 11-6.218-8.56M12 8a6 6 0 100 12" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 text-center">Real-Time Notifications</h3>
                    <p class="text-gray-600 text-center">
                        Stay updated with instant notifications for messages, likes, comments, and more.
                    </p>
                </div>
                <!-- 特性卡片 -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-16 h-16 bg-purple-500 text-white rounded-full mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4m5-4v4m-5 4h10M9 17H5m10 0h4m-9 0v4m4-4v4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 text-center">Event Management</h3>
                    <p class="text-gray-600 text-center">
                        Create and manage events, send invites, and track RSVPs with ease.
                    </p>
                </div>
                <!-- 特性卡片 -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-center w-16 h-16 bg-purple-500 text-white rounded-full mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 text-center">Secure Platform</h3>
                    <p class="text-gray-600 text-center">
                        Enjoy peace of mind with top-tier security measures protecting your data.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- 页脚 -->
    <footer class="bg-purple-600 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Social Media Platform. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
