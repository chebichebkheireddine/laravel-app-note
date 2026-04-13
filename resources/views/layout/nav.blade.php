<header
    class="flex items-center justify-between mt-4 px-6 py-3 md:py-4 shadow max-w-5xl rounded-full mx-auto w-full bg-blue-100 dark:bg-slate-800 dark:text-white"
    dir="rtl">

    <div class="text-base font-bold text-blue-900 dark:text-blue-300">
        مديرية التربية <br> لولاية المنيعة
    </div>

    <nav id="menu"
        class="max-md:absolute max-md:top-0 max-md:left-0 max-md:overflow-hidden items-center justify-center max-md:h-full max-md:w-0 transition-[width] text-base backdrop-blur flex-col md:flex-row flex gap-8 text-gray-900 dark:text-gray-100 text-sm font-normal">

        <a class="hover:text-indigo-600 dark:hover:text-indigo-400" href="{{ route('home') }}">
            الصفحة الرئيسية
        </a>
        <a class="hover:text-indigo-600 dark:hover:text-indigo-400" href="{{ route('notes.index') }}">
            مصلحة الموظفين
        </a>
        <a class="hover:text-indigo-600 dark:hover:text-indigo-400" href="#">
            مصلحة الإمتحانات
        </a>
        <a class="hover:text-indigo-600 dark:hover:text-indigo-400" href="#">
            مصلحة التمدرس
        </a>

        <button id="closeMenu" class="md:hidden text-gray-600 dark:text-gray-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <div class="flex items-center space-x-4">
        <!-- Theme Toggle Button -->
        <button id="themeToggle"
            class="size-8 flex items-center justify-center hover:bg-gray-100 dark:hover:bg-gray-700 transition border border-slate-300 dark:border-gray-600 rounded-md dark:bg-gray-800">

            <!-- Sun Icon (shows in dark mode) -->
            <svg id="sunIcon" class="w-4 h-4 hidden dark:block text-yellow-400" fill="currentColor"
                viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    clip-rule="evenodd"></path>
            </svg>

            <!-- Moon Icon (shows in light mode) -->
            <svg id="moonIcon" class="w-4 h-4 block dark:hidden text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
        </button>

        <a class="hidden md:flex bg-indigo-600 text-white px-5 py-2 rounded-full text-sm font-medium hover:bg-indigo-700 transition"
            href="#">
            تسجيل الدخول
        </a>

        <button id="openMenu" class="md:hidden text-gray-600 dark:text-gray-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</header>

<script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const menu = document.getElementById('menu');

    openMenu.addEventListener('click', () => {
        menu.classList.remove('max-md:w-0');
        menu.classList.add('max-md:w-full');
    });

    closeMenu.addEventListener('click', () => {
        menu.classList.remove('max-md:w-full');
        menu.classList.add('max-md:w-0');
    });

    // Theme Toggle Logic
    const themeToggle = document.getElementById('themeToggle');

    // Load theme from localStorage on page load
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }

    themeToggle.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');

        // Save preference
        if (document.documentElement.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });
</script>
