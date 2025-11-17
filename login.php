<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Ensiklopedia Sistem Pendukung Keputusan</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @variant dark (&:where(.dark, .dark *));
    </style>

    <link rel="icon" type="image/png" href="img/favicon.png">
</head>

<body class="bg-white dark:bg-gray-900">
    <?php include 'components/navbar.php'; ?>

    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8 dark:bg-gray-900">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img src="img/logo.png" alt="Logo SPKPedia" class="mx-auto h-10 w-auto" />
            <h2 class="mt-6 text-center text-2xl/9 font-bold tracking-tight text-gray-900 dark:text-gray-100">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
            <div class="bg-white dark:bg-gray-800 px-6 py-12 shadow-sm mx-2 md:mx-0 rounded-lg sm:px-12">
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Email address</label>
                        <div class="mt-2">
                            <input id="email" type="email" name="email" autofocus required autocomplete="email" class="block w-full rounded-md bg-white dark:bg-gray-700 px-3 py-1.5 text-base text-gray-900 dark:text-gray-100 outline-1 -outline-offset-1 outline-gray-300 dark:outline-gray-600 placeholder:text-gray-400 dark:placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>

                    <div class="relative">
                        <label for="password" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Password</label>
                        <div class="mt-2 relative">
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                class="block w-full rounded-md bg-white dark:bg-gray-700 px-3 py-2 pr-10 text-base text-gray-900 dark:text-gray-100 outline-1 -outline-offset-1 outline-gray-300 dark:outline-gray-600
                   placeholder:text-gray-400 dark:placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" />

                            <button
                                type="button"
                                onclick="togglePassword()"
                                class="absolute inset-y-0 right-2 flex items-center text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-200 hover:cursor-pointer">
                                <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639
                    C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 
                    9.963 7.178.07.207.07.431 0 .639
                    C20.577 16.49 16.64 19.5 12 19.5
                    c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                <svg id="icon-eye-off" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-5 hidden">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12
                    C3.226 16.338 7.244 19.5 12 19.5c.993 0 
                    1.953-.138 2.863-.395M6.228 6.228
                    A10.451 10.451 0 0 1 12 4.5c4.756 0 
                    8.773 3.162 10.065 7.498a10.522 10.522 
                    0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 
                    3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228
                    -3.65-3.65m0 0a3 3 0 1 0-4.243-4.243
                    m4.242 4.242L9.88 9.88" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex gap-3 hover:cursor-pointer">
                            <div class="flex h-6 shrink-0 items-center">
                                <div class="group grid size-4 grid-cols-1">
                                    <input id="remember-me" type="checkbox" name="remember-me" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto hover:cursor-pointer" />
                                    <svg viewBox="0 0 14 14" fill="none" class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25">
                                        <path d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-checked:opacity-100" />
                                        <path d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-indeterminate:opacity-100" />
                                    </svg>
                                </div>
                            </div>
                            <label for="remember-me" class="block text-sm/6 text-gray-900 dark:text-gray-200 hover:cursor-pointer select-none">Remember me</label>
                        </div>

                        <div class="text-sm/6">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 hover:underline">Forgot password?</a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:cursor-pointer">Sign in</button>
                    </div>
                </form>

                <div>
                    <div class="mt-10 flex items-center gap-x-6">
                        <div class="w-full flex-1 border-t border-gray-200 dark:border-gray-700"></div>
                        <p class="text-sm/6 font-medium text-nowrap text-gray-900 dark:text-gray-200">Or continue with</p>
                        <div class="w-full flex-1 border-t border-gray-200 dark:border-gray-700"></div>
                    </div>

                    <div class="mt-6">
                        <a href="#" class="flex w-full items-center justify-center gap-3 rounded-md bg-white dark:bg-gray-700 px-3 py-2 text-sm font-semibold text-gray-900 dark:text-gray-100 shadow-xs inset-ring inset-ring-gray-300 dark:inset-ring-gray-600 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <svg viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5">
                                <path d="M12.0003 4.75C13.7703 4.75 15.3553 5.36002 16.6053 6.54998L20.0303 3.125C17.9502 1.19 15.2353 0 12.0003 0C7.31028 0 3.25527 2.69 1.28027 6.60998L5.27028 9.70498C6.21525 6.86002 8.87028 4.75 12.0003 4.75Z" fill="#EA4335" />
                                <path d="M23.49 12.275C23.49 11.49 23.415 10.73 23.3 10H12V14.51H18.47C18.18 15.99 17.34 17.25 16.08 18.1L19.945 21.1C22.2 19.01 23.49 15.92 23.49 12.275Z" fill="#4285F4" />
                                <path d="M5.26498 14.2949C5.02498 13.5699 4.88501 12.7999 4.88501 11.9999C4.88501 11.1999 5.01998 10.4299 5.26498 9.7049L1.275 6.60986C0.46 8.22986 0 10.0599 0 11.9999C0 13.9399 0.46 15.7699 1.28 17.3899L5.26498 14.2949Z" fill="#FBBC05" />
                                <path d="M12.0004 24.0001C15.2404 24.0001 17.9654 22.935 19.9454 21.095L16.0804 18.095C15.0054 18.82 13.6204 19.245 12.0004 19.245C8.8704 19.245 6.21537 17.135 5.2654 14.29L1.27539 17.385C3.25539 21.31 7.3104 24.0001 12.0004 24.0001Z" fill="#34A853" />
                            </svg>
                            <span class="text-sm/6 font-semibold">Google</span>
                        </a>
                    </div>

                    <p class="mt-10 text-center text-sm text-gray-500 dark:text-gray-300">
                        Don't have an account yet?
                        <a href="register"
                            class="font-semibold text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 transition-colors hover:underline">
                            Register now
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>

    <script src="js/togglePassword.js"></script>
</body>

</html>