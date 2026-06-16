<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>لااراول</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=iran-sans:400,500,600,700" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        green: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                            950: '#052e16',
                        }
                    },
                    fontFamily: {
                        'iran': ['IranSans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'IranSans', sans-serif; }
        .dark .dark\:bg-gray-900 { background-color: #111827; }
        .dark .dark\:bg-gray-800 { background-color: #1f2937; }
        .dark .dark\:bg-gray-700 { background-color: #374151; }
        .dark .dark\:text-white { color: #ffffff; }
        .dark .dark\:text-gray-100 { color: #f3f4f6; }
        .dark .dark\:text-gray-300 { color: #d1d5db; }
        .dark .dark\:border-gray-700 { border-color: #374151; }
        .dark .dark\:hover\:bg-gray-700:hover { background-color: #374151; }
        .dark .dark\:hover\:bg-gray-600:hover { background-color: #4b5563; }
        .dark .dark\:from-green-900 { --tw-gradient-from: #14532d; }
        .dark .dark\:to-green-800 { --tw-gradient-to: #166534; }
        .dark .dark\:bg-gradient-to-br { background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)); }
        .dark .dark\:border-green-800 { border-color: #166534; }
        .dark .dark\:bg-green-900 { background-color: #14532d; }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white antialiased transition-colors duration-300">

    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-sm transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="flex-shrink-0 flex items-center">
                        <span class="text-2xl font-bold text-green-600 dark:text-green-400">لااراول</span>
                    </a>
                </div>
                <div class="flex items-center space-x-8">
                    <!-- Dark Mode Toggle -->
                    <button id="theme-toggle" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                        <svg id="sun-icon" class="w-5 h-5 text-yellow-500 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg id="moon-icon" class="w-5 h-5 text-gray-500 block dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </button>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 font-medium transition-colors">
                                داشبورد
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 font-medium transition-colors">
                                ورود
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg font-medium transition-colors">
                                    ثبت نام
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900 dark:to-green-800 transition-colors duration-300"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                    چیزی
                    <span class="text-green-600 dark:text-green-400">خارق‌العاده</span>
                    بسازید
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 mb-10 max-w-2xl mx-auto">
                    فریمورک مدرن PHP برای ساخت برنامه‌های وب. سریع، امن و کاربرپسند.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://laravel.com/docs" class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all shadow-lg hover:shadow-xl">
                        شروع کنید
                    </a>
                    <a href="https://github.com/laravel/laravel" class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-900 dark:text-white px-8 py-4 rounded-lg font-semibold text-lg border border-gray-200 dark:border-gray-700 transition-all shadow-sm hover:shadow-md">
                        مشاهده در GitHub
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    همه چیزهایی که برای ساخت نیاز دارید
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    امکانات قدرتمند برای ساخت برنامه‌ه وب مدرن با سرعت بیشتر.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 dark:bg-gray-700 rounded-2xl p-8 hover:shadow-lg transition-all border border-green-100 dark:border-green-800">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">سرعت بالا</h3>
                    <p class="text-gray-600 dark:text-gray-300">بهینه‌سازی شده برای عملکرد با کش داخلی، صف و پرس‌وجوهای کارآمد پایگاه داده.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-gray-50 dark:bg-gray-700 rounded-2xl p-8 hover:shadow-lg transition-all border border-green-100 dark:border-green-800">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">امنیت پیش‌فرض</h3>
                    <p class="text-gray-600 dark:text-gray-300">محافظت داخلی در برابر تزریق SQL، XSS، CSRF و سایر آسیب‌پذیری‌های رایج امنیتی.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-gray-50 dark:bg-gray-700 rounded-2xl p-8 hover:shadow-lg transition-all border border-green-100 dark:border-green-800">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">معماری ماژولار</h3>
                    <p class="text-gray-600 dark:text-gray-300">با کامپوننت‌ها، سرویس‌ها و پکیج‌های قابل استفاده مجدد بسازید. برنامه خود را به راحتی مقیاس‌پذیر کنید.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-green-600 to-green-700 dark:from-green-800 dark:to-green-900 transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                آماده‌اید شروع کنید؟
            </h2>
            <p class="text-xl text-green-100 mb-8">
                به هزاران توسعه‌دهنده بپیوندید که با لااراول برنامه‌های خارق‌العاده می‌سازند.
            </p>
            <a href="https://laravel.com/docs" class="inline-block bg-white text-green-700 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-green-50 transition-colors shadow-lg">
                مستندات را بخوانید
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-black text-gray-400 py-12 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <span class="text-2xl font-bold text-white">لااراول</span>
                    <p class="text-sm mt-2">فریمورک PHP برای هنرمندان وب</p>
                </div>
                <div class="flex space-x-6">
                    <a href="https://laravel.com/docs" class="hover:text-white transition-colors">مستندات</a>
                    <a href="https://laracasts.com" class="hover:text-white transition-colors">لاراکستس</a>
                    <a href="https://laravel.com/docs/releases" class="hover:text-white transition-colors">نسخه‌ها</a>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-sm text-center">
                <p>&copy; {{ date('Y') }} لااراول. تمامی حقوق محفوظ است.</p>
            </div>
        </div>
    </footer>

    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;

        // Check for saved theme preference or default to system preference
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        }

        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });
    </script>

</body>
</html>