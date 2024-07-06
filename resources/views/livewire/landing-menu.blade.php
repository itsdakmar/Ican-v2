<div>
    <header class="flex flex-col lg:flex-row justify-between items-center my-5">
        <div class="flex w-full lg:w-auto items-center justify-between">
            <a href="/" class="text-lg">
                <span class="font-bold text-slate-800"></span>
                <span class="text-slate-500">CertiSwift</span>
            </a>
        </div>
        <nav class="nav-items nav-toggle hidden w-full lg:w-auto mt-2 lg:flex lg:mt-0">
            <ul class="flex flex-col lg:flex-row lg:gap-3">
                <li class="relative">
                    <menu class="nav-dropdown group" aria-expanded="false">
                        <button
                            class="flex items-center gap-1 w-full lg:w-auto lg:px-3 py-2 text-gray-600 hover:text-gray-900">
                            <span>Features</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                 stroke="currentColor" class="w-3 h-3 mt-0.5 group-open:rotate-180">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                        <div class="nav-dropdown dropdown-toggle hidden" aria-expanded="false">
                            <div class="lg:absolute w-full lg:w-48 z-10 lg:left-0 origin-top-left">
                                <div class="px-3 lg:py-2 lg:bg-white lg:rounded-md lg:shadow lg:border flex flex-col">
                                    <a href="/" class="py-1 text-gray-600 hover:text-gray-900"> Action </a>
                                    <a href="#" class="py-1 text-gray-600 hover:text-gray-900"> Another action </a>
                                    <a href="#" class="py-1 text-gray-600 hover:text-gray-900"> Dropdown Submenu </a>
                                    <a href="/404" class="py-1 text-gray-600 hover:text-gray-900">404 Page </a>
                                </div>
                            </div>
                        </div>
                    </menu>
                </li>
                <li>
                    <a href="/pricing" class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900">
                        <span> Pricing</span>
                    </a>
                </li>
                <li>
                    <a href="/about" class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900">
                        <span> About</span>
                    </a>
                </li>
                <li>
                    <a href="/blog" class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900">
                        <span> Blog</span>
                    </a>
                </li>
                <li>
                    <a href="/contact" class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900">
                        <span> Contact</span>
                    </a>
                </li>
                <li>
                    <a href="https://ship-pro.web3templates.com/" class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900">
                        <span> Pro Version</span>
                        <span class="ml-1 px-2 py-0.5 text-[10px] animate-pulse font-semibold uppercase text-white bg-indigo-600 rounded-full">New</span>
                    </a>
                </li>
            </ul>
            <div class="lg:hidden flex items-center mt-3 gap-4">
                <a href="#" class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 w-full px-4 py-1 bg-gray-100 hover:bg-gray-200   border-2 border-transparent">Log in </a>
                <a href="#" class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 w-full px-4 py-1 bg-black text-white hover:bg-gray-800  border-2 border-transparent">Sign up </a>
            </div>
        </nav>
        <div>
            <div class="hidden lg:flex items-center gap-4">
                <a href="#">Log in</a>
                <a href="#" class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-black text-white hover:bg-gray-800  border-2 border-transparent flex gap-1 items-center justify-center">Sign up </a>
            </div>
        </div>
    </header>
    <div class="max-w-screen-xl mx-auto px-5">
        <main class="grid lg:grid-cols-2 place-items-center pt-16 pb-8 md:pt-12 md:pb-24">
            <div class="py-6 md:order-1 hidden md:block">
                <img src="{{ Vite::asset('resources/images/landing.svg') }}">
            </div>
            <div><h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold lg:tracking-tight xl:tracking-tighter">
                    Create, Organize & Verify Certificates
                </h1>
                <p class="text-lg mt-4 text-slate-600 max-w-xl">
                    Streamlining the process to swiftly and systematically issue and approve certificates, eliminating manual methods for enhanced efficiency and accuracy.
                </p>
            </div>
        </main>
        <div class="mt-16 md:mt-0">
            <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">Everything you need to start a website</h2>
            <p class="text-lg mt-4 text-slate-600">Astro comes batteries included. It takes the best parts of state-of-the-art tools and adds its own innovations.</p>
        </div>
        <section class="grid sm:grid-cols-2 md:grid-cols-3 mt-16 gap-16">
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full p-2 w-8 h-8 flex items-center justify-center">
                    <i class="fas fa-qrcode" style="color: #ffffff;"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-lg">Authenticity</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">The certificate comes with a unique QR code for easy identification and verification.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full p-2 w-8 h-8 flex items-center justify-center">
                    <i class="fa-solid fa-infinity" style="color: #ffffff;"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-lg">Everlast</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">Managing records of issued certificates allows for easy reprinting as needed.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full p-2 w-8 h-8 flex items-center justify-center">
                    <i class="fa-solid fa-chart-simple" style="color: #ffffff;"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-lg">On-Demand Statistics</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">The system also offers convenient access to statistics on certificate issuance by the agency.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full p-2 w-8 h-8 flex items-center justify-center">
                    <i class="fa-solid fa-stopwatch" style="color: #ffffff;"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-lg">Hassle free</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">Certificates are now prepared and verified swiftly and systematically, eliminating the need for manual methods.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0">
                    <svg width="1em" height="1em" viewBox="0 0 24 24" class="text-white" data-icon="bx:bxs-file-find">
                        <symbol id="ai:bx:bxs-file-find">
                            <path
                                d="M6 22h12c.178 0 .348-.03.512-.074l-3.759-3.759A4.966 4.966 0 0 1 12 19c-2.757 0-5-2.243-5-5s2.243-5 5-5s5 2.243 5 5a4.964 4.964 0 0 1-.833 2.753l3.759 3.759c.044-.164.074-.334.074-.512V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2z"
                                fill="currentColor"></path>
                            <circle cx="12" cy="14" r="3" fill="currentColor"></circle>
                        </symbol>
                        <use xlink:href="#ai:bx:bxs-file-find"></use>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-lg">Snapshot</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">View event photos and documents from the archive at any time!</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full p-2 w-8 h-8 flex items-center justify-center">
                    <i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-lg">Versatility</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">The platform comes with numerous templates, but if you're not satisfied, you can create your own!.</p>
                </div>
            </div>
        </section>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 dark:text-white">Start your free trial today</h2>
                    <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Try Flowbite Platform for 30 days. No credit card required.</p>
                    <a href="#" class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-black text-white hover:bg-gray-800  border-2 border-transparent flex gap-1 items-center justify-center">Free trial for 30 days</a>
                </div>
            </div>
        </section>
    </div>
</div>
