<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <section>
        <div
          class="flex bg-gray-900 h-screen items-center justify-center px-4 py-10 sm:px-6 sm:py-16 lg:px-8 lg:py-8"
        >
          <div class="xl:mx-auto xl:w-full shadow-md p-4 xl:max-w-sm 2xl:max-w-md">
            <div class="mb-2 flex justify-center"></div>
            <h2 class="text-center text-2xl font-bold leading-tight text-gray-50">
              Sign in to your account
            </h2>
            <form class="mt-8" method="POST" action="#">
              <div class="space-y-5">
                <div>
                  <label class="text-base font-medium text-gray-50">
                    Email address
                  </label>
                  <div class="mt-2">
                    <input
                      placeholder="Email"
                      type="email"
                      class="text-gray-50 flex h-10 w-full rounded-md border border-gray-300 bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50"
                    />
                  </div>
                </div>
                <div>
                  <div class="flex items-center justify-between">
                    <label class="text-base font-medium text-gray-50">
                      Password
                    </label>
                    <a
                      class="text-sm font-semibold text-gray-50 hover:underline"
                      title=""
                      href="#"
                    >
                      Forgot password?
                    </a>
                  </div>
                  <div class="mt-2">
                    <input
                      placeholder="Password"
                      type="password"
                      class="text-gray-50 flex h-10 w-full rounded-md border border-gray-300 bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50"
                    />
                  </div>
                </div>
                <div>
                    <p class="my-4 text-center text-sm text-gray-500">
                        Don't have an account? <a href="#" class="hover:underline">Create a free account</a>
                    </p>
                    <a href="{{ url('dashboard') }}">
                    <button
                      class="inline-flex w-full items-center justify-center rounded-md bg-black px-3.5 py-2.5 font-semibold leading-7 text-white hover:bg-black/80"
                      type="button"
                    >
                      Login
                    </button></a>
                  
                </div>
              </div>
            </form>
            <div class="mt-3 space-y-3">
              <button
                class="relative inline-flex w-full items-center justify-center rounded-md border border-gray-400 bg-white px-3.5 py-2.5 font-semibold text-gray-700 transition-all duration-200 hover:bg-gray-100 hover:text-gray-50 focus:bg-gray-100 focus:text-gray-50 focus:outline-none"
                type="button"
              >
                <span class="mr-2 inline-block">
                  <svg
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 text-rose-500"
                  >
                    <path
                      d="M20.283 10.356h-8.327v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.27 5.27 0 0 1-5.279-5.28 5.27 5.27 0 0 1 5.279-5.279c1.259 0 2.397.447 3.29 1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233a8.908 8.908 0 0 0-8.934 8.934 8.907 8.907 0 0 0 8.934 8.934c4.467 0 8.529-3.249 8.529-8.934 0-.528-.081-1.097-.202-1.625z"
                    ></path>
                  </svg>
                </span>
                Sign in with Google
              </button>
            </div>
          </div>
        </div>
      </section>
<script src="{{ asset('js/darkmode.js') }}"></script>
</body>
</html>