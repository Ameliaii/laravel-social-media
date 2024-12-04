<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- 引入 Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-yellow-50 antialiased">
    <!-- 页面头部 -->
    <header class="bg-yellow-500 text-white py-6 shadow-md">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Our Blog</h1>
            <nav>
                <a href="/" class="text-white text-lg font-medium hover:underline">Home</a>
            </nav>
        </div>
    </header>

    <!-- 主内容 -->
    <main class="container mx-auto mt-12 px-6">
        <h2 class="text-4xl font-extrabold text-yellow-700 text-center mb-12">Life and Inspirations</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- 博客文章卡片 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <img src="https://img2.pconline.com.cn/pconline/0706/07/1031072_070611dog09.jpg" alt="Pets" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-yellow-700 mb-4">Cherishing Moments with Pets</h3>
                    <p class="text-gray-600 mb-4">
                        Discover heartwarming stories and tips to make every moment with your furry friends unforgettable.
                    </p>
                    <a href="#" class="text-yellow-500 font-semibold hover:underline">Read more...</a>
                </div>
            </div>

            <!-- 博客文章卡片 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <img src="https://www.2008php.com/09_Website_appreciate/10-07-21/12797215371.jpg" alt="Food" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-yellow-700 mb-4">Exploring World of Flavors</h3>
                    <p class="text-gray-600 mb-4">
                        A journey through delicious cuisines and recipes to inspire your next meal.
                    </p>
                    <a href="#" class="text-yellow-500 font-semibold hover:underline">Read more...</a>
                </div>
            </div>

            <!-- 博客文章卡片 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <img src="https://th.bing.com/th/id/R.d2b3a4779fd2b9af70103d485bc8b664?rik=Xm7zutXMpsp91Q&riu=http%3a%2f%2fup.deskcity.org%2fpic_source%2fd2%2fb3%2fa4%2fd2b3a4779fd2b9af70103d485bc8b664.jpg&ehk=%2fh%2fipXq8Ihn81SbQdkphnzweLFLUGfD1%2fXncDcbLgRE%3d&risl=&pid=ImgRaw&r=0" alt="Scenery" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-yellow-700 mb-4">Capturing Nature's Beauty</h3>
                    <p class="text-gray-600 mb-4">
                        Explore breathtaking landscapes and tips for capturing them with your camera.
                    </p>
                    <a href="#" class="text-yellow-500 font-semibold hover:underline">Read more...</a>
                </div>
            </div>

            <!-- 博客文章卡片 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <img src="https://1.bp.blogspot.com/-6TiuiBNxIVk/XVKkwKFP0EI/AAAAAAAAEaQ/fSihAU-qcCYhdH0o5k4PwBe7QIhFTAzowCLcBGAs/s1600/61.jpg" alt="Wellness" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-yellow-700 mb-4">Daily Wellness Tips</h3>
                    <p class="text-gray-600 mb-4">
                        Simple and effective routines to keep your mind and body in harmony.
                    </p>
                    <a href="#" class="text-yellow-500 font-semibold hover:underline">Read more...</a>
                </div>
            </div>

            <!-- 博客文章卡片 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <img src="https://cdn4.geckoandfly.com/wp-content/uploads/2017/07/travel-quotes-adventure-19.jpg" alt="Travel" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-yellow-700 mb-4">Adventures Await</h3>
                    <p class="text-gray-600 mb-4">
                        From mountains to beaches, find inspiration for your next travel destination.
                    </p>
                    <a href="#" class="text-yellow-500 font-semibold hover:underline">Read more...</a>
                </div>
            </div>

            <!-- 博客文章卡片 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <img src="https://hobbyhelp.com/wp-content/uploads/2020/03/hobby-painting-768x538.jpg" alt="Hobbies" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-yellow-700 mb-4">Unlocking Creative Hobbies</h3>
                    <p class="text-gray-600 mb-4">
                        Discover new hobbies and passions that spark creativity in your everyday life.
                    </p>
                    <a href="#" class="text-yellow-500 font-semibold hover:underline">Read more...</a>
                </div>
            </div>
        </div>
    </main>

    <!-- 页脚 -->
    <footer class="bg-yellow-500 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Social Media Platform. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
