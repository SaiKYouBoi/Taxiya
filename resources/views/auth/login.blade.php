<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>TaxiYa Secure Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1349ec",
                        "primary-dark": "#0e36b0", // Manually calculated darker shade
                        "background-light": "#f6f6f8",
                        "background-dark": "#101522",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar to keep it sleek */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display antialiased text-slate-800 dark:text-white h-screen overflow-hidden">
    <div class="flex flex-col lg:flex-row w-full h-full">
        <!-- Left Side: Visual Anchor -->
        <div class="hidden lg:flex lg:w-1/2 relative bg-gray-900">
            <!-- Background Image -->
            <img alt="Moroccan sunset city road with traffic" class="absolute inset-0 w-full h-full object-cover"
                data-alt="Moroccan sunset city road with traffic"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC39A6VhZgdTIawKeVYPHd_WsFVJ9pQ73Qqezr2JiA5X4arKazOWzp9A2I_eMlL4jI0qO654wYTGKPPVln3Q9s5uvQ3vmZYdDPN-bRFbhRO0Yr32K5ifpdKhsqy5gCoM8qWnSRYhB0Wue41z599WCEQLqCCoJ7J-3YQURXfc29TYD04B09w5sM4pLbiPR17rqFZKhv_MuumlhUD5ULNfLyAgI8ftfpWEN-Rh6gKVVF1XTb1z_HGMzBFPKGYO9b07SHhBPE47PHOsQ" />
            <!-- Blue Overlay -->
            <div class="absolute inset-0 bg-primary/40 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent"></div>
            <!-- Content Overlay -->
            <div class="relative z-10 flex flex-col justify-end p-16 w-full h-full text-white">
                <div class="mb-8">
                    <div
                        class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center mb-6">
                        <span class="material-icons text-white text-2xl">local_taxi</span>
                    </div>
                    <h2 class="text-4xl font-bold mb-4 leading-tight">Your Journey Begins<br />With Safety &amp;
                        Comfort.</h2>
                    <p class="text-lg text-white/80 max-w-md">Join thousands of travelers and drivers on Morocco's most
                        trusted transportation network.</p>
                </div>
                <div class="flex items-center gap-4 text-sm text-white/60">
                    <div class="flex items-center gap-1">
                        <span class="material-icons text-base">verified_user</span> Secure Login
                    </div>
                    <div class="w-1 h-1 bg-white/60 rounded-full"></div>
                    <div>24/7 Support</div>
                </div>
            </div>
        </div>
        <!-- Right Side: Login Form -->
        <div
            class="w-full lg:w-1/2 flex items-center justify-center bg-white dark:bg-background-dark p-8 lg:p-16 relative">
            <!-- Mobile Background Decoration (visible only on small screens if needed, keeping simple for now) -->
            <div
                class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none">
            </div>
            <div class="w-full max-w-md space-y-8 relative z-10">
                <!-- Brand Header -->
                <div class="text-center">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary/10 text-primary mb-6 shadow-sm">
                        <span class="material-icons text-4xl">directions_car</span>
                    </div>
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">TaxiYa</h1>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Welcome back! Please enter your details.
                    </p>
                </div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="space-y-4">
                        <!-- Email Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                                for="email">Email Address</label>
                            <div class="mt-1 relative rounded-lg shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="material-icons text-gray-400 text-xl">mail_outline</span>
                                </div>
                                <input autocomplete="email"
                                    class="block w-full pl-10 pr-3 py-3 border border-gray-200 dark:border-gray-700 rounded-xl leading-5 bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-all duration-200 ease-in-out"
                                    id="email" type="email" name="email" :value="old('email')" required
                                    autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <!-- Password Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                                for="password">Password</label>
                            <div class="mt-1 relative rounded-lg shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="material-icons text-gray-400 text-xl">lock_outline</span>
                                </div>
                                <input autocomplete="current-password"
                                    class="block w-full pl-10 pr-10 py-3 border border-gray-200 dark:border-gray-700 rounded-xl leading-5 bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary sm:text-sm transition-all duration-200 ease-in-out"
                                    id="password" type="password" name="password" required
                                    autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <div
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer hover:text-gray-600 dark:hover:text-gray-200 text-gray-400 transition-colors">
                                    <span class="material-icons text-xl">visibility_off</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Actions Row -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center mt-2">
                            <input
                                class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded cursor-pointer"
                                id="remember-me" name="rememberme" type="checkbox" />
                            <label
                                class="ml-2 block text-sm text-gray-600 dark:text-gray-400 cursor-pointer select-none"
                                for="remember-me">
                                Remember me
                            </label>
                        </div>
                        <div class="text-sm mt-2">
                            @if (Route::has('password.request'))
                                <a class="font-medium text-primary hover:text-primary-dark transition-colors"
                                    href="{{ route('password.request') }}">
                                    Forgot password?
                                </a>
                            @endif
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="mt-2">
                        <button
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary shadow-lg shadow-primary/30 transition-all duration-200 ease-in-out transform hover:-translate-y-0.5"
                            type="submit">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <span
                                    class="material-icons text-white/50 group-hover:text-white transition-colors text-lg">login</span>
                            </span>
                            Sign In
                        </button>
                    </div>
                </form>
                <!-- Footer -->
                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200 dark:border-gray-700"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white dark:bg-background-dark text-gray-500">
                                Or continue with
                            </span>
                        </div>
                    </div>
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <button
                            class="w-full inline-flex justify-center py-2.5 px-4 border border-gray-200 dark:border-gray-700 rounded-xl shadow-sm bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <span class="sr-only">Sign in with Google</span>
                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24">
                                <path
                                    d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z">
                                </path>
                            </svg>
                        </button>
                        <button
                            class="w-full inline-flex justify-center py-2.5 px-4 border border-gray-200 dark:border-gray-700 rounded-xl shadow-sm bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <span class="sr-only">Sign in with Apple</span>
                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24">
                                <path
                                    d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12c0-5.523-4.477-10-10-10z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <p class="mt-8 text-center text-sm text-gray-600 dark:text-gray-400">
                        Don't have an account?
                        <a class="font-bold text-primary hover:text-primary-dark transition-colors" href="#">
                            Sign Up
                        </a>
                    </p>
                </div>
            </div>
            <!-- Bottom Legal Links -->
            <div class="absolute bottom-6 w-full text-center">
                <div class="flex justify-center gap-6 text-xs text-gray-400">
                    <a class="hover:text-gray-600 dark:hover:text-gray-300 transition-colors" href="#">Privacy
                        Policy</a>
                    <a class="hover:text-gray-600 dark:hover:text-gray-300 transition-colors" href="#">Terms of
                        Service</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
