<nav class="sticky z-50 top-0 left-0 right-0 bg-white shadow-sm dark:bg-gray-800/95 dark:shadow-none dark:after:pointer-events-none dark:after:absolute dark:after:inset-x-0 dark:after:bottom-0 dark:after:h-px dark:after:bg-white/10" id="navbar">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <div class="flex shrink-0 items-center">
                    <div class="flex items-center gap-x-2 dark:text-white">
                        <img src="img/logo.png" class="w-10 h-10 mr-1.5" alt="Logo SPKPedia">
                        <h1 class="font-bold text-2xl -ml-2.5">
                            SPK<span class="bg-gradient-to-r from-blue-500 to-indigo-500 text-transparent animate-pulse bg-clip-text">Pedia</span>
                        </h1>
                    </div>
                </div>

                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="" class="inline-flex items-center border-b-2 border-indigo-600 px-1 pt-1 text-sm font-medium text-gray-900 dark:border-indigo-500 dark:text-white">Home</a>
                    <a href="about" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-300 dark:hover:border-white/20 dark:hover:text-white">About</a>
                    <a href="articles" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-300 dark:hover:border-white/20 dark:hover:text-white">Articles</a>
                </div>
            </div>

            <div class="hidden sm:ml-6 sm:flex sm:items-center relative space-x-4">
                <div id="theme-switcher-desktop" class="flex space-x-2 rounded-full bg-teal-100 dark:bg-teal-600 px-1.5 py-1.5 text-sm font-semibold text-black shadow-xs select-none">
                    <button data-theme="dark" class="theme-btn rounded-full border p-1 hover:cursor-pointer border-black/30 hover:bg-teal-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        </svg>
                    </button>

                    <button data-theme="light" class="theme-btn rounded-full border p-1 hover:cursor-pointer border-black/30 hover:bg-teal-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                        </svg>
                    </button>

                    <button data-theme="system" class="theme-btn rounded-full border p-1 hover:cursor-pointer border-black/30 hover:bg-teal-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 20.25c-1.886-.649-3.903-1-6-1s-4.114.351-6 1m-2.25-4h16.5a1 1 0 0 0 1-1V4.75a1 1 0 0 0-1-1H3.75a1 1 0 0 0-1 1v10.5a1 1 0 0 0 1 1" />
                        </svg>
                    </button>
                </div>

                <a href="login.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:cursor-pointer hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">
                    Login
                </a>
                <a href="register.php" class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:cursor-pointer hover:bg-gray-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 dark:bg-gray-500 dark:hover:bg-gray-400 dark:focus-visible:outline-gray-500">
                    Register
                </a>
            </div>

            <div class="-mr-2 flex items-center sm:hidden">
                <button type="button" id="mobile-menu-btn" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-600 dark:hover:bg-white/5 dark:hover:text-white dark:focus:outline-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg id="menu-open-icon" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg id="menu-close-icon" class="h-8 w-8 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden sm:hidden opacity-0 transition-opacity duration-200">
        <div class="space-y-1 pt-2 pb-3">
            <a href="" class="block border-l-4 border-indigo-600 bg-indigo-50 py-2 pr-4 pl-3 text-base font-medium text-indigo-700 dark:border-indigo-500 dark:bg-indigo-600/10 dark:text-indigo-400">Home</a>
            <a href="about" class="block border-l-4 border-transparent py-2 pr-4 pl-3 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 dark:text-gray-300 dark:hover:border-white/20 dark:hover:bg-white/5 dark:hover:text-white">About</a>
            <a href="articles" class="block border-l-4 border-transparent py-2 pr-4 pl-3 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700 dark:text-gray-300 dark:hover:border-white/20 dark:hover:bg-white/5 dark:hover:text-white">Articles</a>
        </div>
        <div class="border-t border-gray-200 pt-4 pb-3 dark:border-white/10">
            <div class="flex justify-around items-center px-4">
                <div id="theme-switcher-mobile" class="flex space-x-2 rounded-full bg-teal-100 px-1.5 py-1.5 text-sm font-semibold text-black shadow-xs dark:bg-teal-500 select-none">
                    <button data-theme="dark" class="theme-btn-mobile rounded-full border p-1 hover:cursor-pointer border-black/30 hover:bg-teal-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        </svg>
                    </button>

                    <button data-theme="light" class="theme-btn-mobile rounded-full border p-1 hover:cursor-pointer border-black/30 hover:bg-teal-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                        </svg>
                    </button>

                    <button data-theme="system" class="theme-btn-mobile rounded-full border p-1 hover:cursor-pointer border-black/30 hover:bg-teal-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 20.25c-1.886-.649-3.903-1-6-1s-4.114.351-6 1m-2.25-4h16.5a1 1 0 0 0 1-1V4.75a1 1 0 0 0-1-1H3.75a1 1 0 0 0-1 1v10.5a1 1 0 0 0 1 1" />
                        </svg>
                    </button>
                </div>
                <div>
                    <a href="login.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">
                        Login
                    </a>
                </div>
                <div>
                    <a href="register.php" class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-gray-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 dark:bg-gray-500 dark:hover:bg-gray-400 dark:focus-visible:outline-gray-500">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    class ThemeManager {
        constructor() {
            this.theme = localStorage.getItem('theme') || 'system';
            this.mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
            this.init();
        }

        init() {
            this.applyTheme(this.theme);
            this.updateButtons();

            this.mediaQuery.addEventListener('change', () => {
                if (this.theme === 'system') {
                    this.applyTheme('system');
                }
            });

            document.querySelectorAll('.theme-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const theme = e.currentTarget.getAttribute('data-theme');
                    this.setTheme(theme);
                });
            });

            document.querySelectorAll('.theme-btn-mobile').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const theme = e.currentTarget.getAttribute('data-theme');
                    this.setTheme(theme);
                });
            });
        }

        applyTheme(theme) {
            const prefersDark = this.mediaQuery.matches;
            const isDark = theme === 'dark' || (theme === 'system' && prefersDark);

            if (isDark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }

        setTheme(theme) {
            this.theme = theme;
            localStorage.setItem('theme', theme);
            this.applyTheme(theme);
            this.updateButtons();
        }

        updateButtons() {
            document.querySelectorAll('.theme-btn').forEach(btn => {
                const btnTheme = btn.getAttribute('data-theme');
                if (btnTheme === this.theme) {
                    btn.className = 'theme-btn rounded-full border p-1 hover:cursor-pointer bg-blue-500 text-white border-blue-500 hover:bg-blue-600';
                } else {
                    btn.className = 'theme-btn rounded-full border p-1 hover:cursor-pointer border-black/30 hover:bg-teal-200';
                }
            });

            document.querySelectorAll('.theme-btn-mobile').forEach(btn => {
                const btnTheme = btn.getAttribute('data-theme');
                if (btnTheme === this.theme) {
                    btn.className = 'theme-btn-mobile rounded-full border p-1 hover:cursor-pointer bg-blue-500 text-white border-blue-500 hover:bg-blue-600';
                } else {
                    btn.className = 'theme-btn-mobile rounded-full border p-1 hover:cursor-pointer border-black/30 hover:bg-teal-200';
                }
            });
        }
    }

    class MobileMenu {
        constructor() {
            this.mobileMenu = document.getElementById('mobile-menu');
            this.menuBtn = document.getElementById('mobile-menu-btn');
            this.openIcon = document.getElementById('menu-open-icon');
            this.closeIcon = document.getElementById('menu-close-icon');
            this.isOpen = false;
            this.init();
        }

        init() {
            this.menuBtn.addEventListener('click', () => this.toggle());

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && this.isOpen) {
                    this.close();
                }
            });
        }

        toggle() {
            if (this.isOpen) {
                this.close();
            } else {
                this.open();
            }
        }

        open() {
            this.isOpen = true;
            this.mobileMenu.classList.remove('hidden');
            this.mobileMenu.offsetHeight;
            this.mobileMenu.classList.remove('opacity-0');
            this.mobileMenu.classList.add('opacity-100');
            this.openIcon.classList.add('hidden');
            this.closeIcon.classList.remove('hidden');
            this.menuBtn.setAttribute('aria-expanded', 'true');
        }

        close() {
            this.isOpen = false;
            this.mobileMenu.classList.remove('opacity-100');
            this.mobileMenu.classList.add('opacity-0');
            setTimeout(() => {
                this.mobileMenu.classList.add('hidden');
            }, 200);
            this.openIcon.classList.remove('hidden');
            this.closeIcon.classList.add('hidden');
            this.menuBtn.setAttribute('aria-expanded', 'false');
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        new ThemeManager();
        new MobileMenu();
    });
</script>