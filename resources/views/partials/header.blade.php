<nav class=" container relative flex h-16 max-w-screen-xl items-center py-4">
    <a class="mr-1 lg:mr-4 order-1" href="" aria-label="CouponOnTop home">
        <img src="/imagery/C2.png" fill="currentColor" alt="" class=" md:inline-block">
    </a>
    <div class="order-4 text-base md:ml-0 lg:order-2 lg:text-sm">
        <button class="ml-4 cursor-pointer lg:hidden" aria-label="Open Menu">
            <svg class="h-8 w-5" height="32" width="32" fill="currentColor" viewBox="0 0 448 512">
                <path
                    d="M0 88c0-4.4 3.6-8 8-8h432c4.4 0 8 3.6 8 8s-3.6 8-8 8H8c-4.4 0-8-3.6-8-8m0 160c0-4.4 3.6-8 8-8h432c4.4 0 8 3.6 8 8s-3.6 8-8 8H8c-4.4 0-8-3.6-8-8m448 160c0 4.4-3.6 8-8 8H8c-4.4 0-8-3.6-8-8s3.6-8 8-8h432c4.4 0 8 3.6 8 8">
                </path>
            </svg> </button>
        <svg class="mx-3.5 h-5 w-5 cursor-pointer lg:hidden hidden"
            @click="storeNavOpen = !storeNavOpen;  activeStoreIndex = 0" height="32" width="32"
            x-bind:class="storeNavOpen ? '' : 'hidden'" fill="none" viewBox="0 0 20 20">
            <path fill="currentColor" fill-rule="evenodd"
                d="m10 12.357-7.155 7.155a1.667 1.667 0 1 1-2.357-2.357L7.643 10 .488 2.845A1.667 1.667 0 0 1 2.845.488L10 7.643 17.155.488a1.667 1.667 0 1 1 2.357 2.357L12.357 10l7.155 7.155a1.667 1.667 0 1 1-2.357 2.357z"
                clip-rule="evenodd"></path>
        </svg>
        <div
            class="absolute left-0 z-[60] w-full overflow-y-scroll bg-white pb-96 text-black max-lg:top-0 lg:static lg:flex lg:items-center lg:justify-between lg:overflow-y-visible lg:bg-transparent lg:pb-0 lg:text-white lg:opacity-100 max-lg:pointer-events-none max-lg:opacity-0">
            <template>
                <div class="mb-4">
                    <div class="justify-center bg-white pb-6 drop-shadow-lg lg:hidden">
                        <div class="flex flex-row justify-between">
                            <svg class="w-42 mx-4 mt-6 h-8 text-purple-700" height="32" width="168"
                                fill="currentColor" viewBox="0 675.5 612 117.6">
                                <path
                                    d="M102.9 783.8c-4.8-.5-8.5-1.4-12-4.2-3.2-2.6-5.7-6.9-7.7-12.4-4.3-11.9-8.6-26.5-10.7-33.9 27.9-9.7 40.8-22.4 40.8-36.4 0-12.9-10.6-21.4-34-18.4-10.3 1.3-17.9 2.6-25.9 4.2-30 5.8-41.3 18.8-41.3 32.1 0 9 7.9 15.3 17.1 15.3 6.3 0 6.9-3.5 5-4.9-3.9-3-6.3-5.8-6.3-10.8 0-7.8 5.9-17.9 27.5-22.7 1.4-.3 2.5-.5 3.7-.8-3.6 10.2-10 28.1-15.8 43.4C10.4 747.5 0 765.7 0 778.3c0 9.4 7.4 14.8 16.1 14.8 13.4 0 23.8-8.9 32.2-29 3.1-7.3 6.5-15.9 9.7-24.8 2.1 7.8 6 21.5 10.2 32.5 2.4 6.4 4.6 10.9 7.8 14.2 3.9 3.9 9.3 5.9 15.6 5.9 7.5 0 12-2.5 13.1-4.3 1.6-2.1.8-3.6-1.8-3.8m-69.6-24.3c-7.3 15-11.8 21.3-17.5 22.3-2.5.4-4.6-.8-4.6-4.6 0-4.1 4.5-19.6 28.1-32-2.4 6.2-4.5 11.2-6 14.3m29.3-32.4c5.7-15.7 11-30.7 14-39.4 12.5-1.4 18.9 2.4 18.9 11.8 0 9.1-7.7 18.1-24.3 24.5-3.1 1-5.9 2.1-8.6 3.1m352.6 32.7c-2.5 0-6.3 4.1-12.9 4.1-4.5 0-6.9-2.9-6.9-8.9 0-1.5.2-3.1.5-4.8h1.7c21.4 0 34.2-12.4 34.2-24.5 0-8.7-6.7-13.1-13.2-13.1-16 0-35.3 19-38.6 38.4-4.6 7.8-8.4 10.8-10.7 10.7-2.6-.1-2.4-3.8 0-10.8 3.7-10.6 9-24.9 13.7-35.9 9.2-21.8 15-33.9 15.8-36.4.7-2.5-.6-3-3.2-2.5-9.3 1.4-14.5 1-18.4 7.5-6.3 10.4-33.1 52.1-33.1 52.1s7.9-51.6 9.2-56.9c.6-2.9-.8-3.7-3.4-3.1-3 .8-5.6 1.5-9.6 2.8-3.5 1.2-4.2 2.3-6.7 7.9-1.3 3-11.5 33.4-18.8 48.7-7.6 16.3-13.8 25.9-28.2 27-3.9.3-4.1 2.3-3.1 4.8 2.2 5.2 7.8 8.3 12.9 8.3 9 0 15.4-6.4 21.5-21.2 5.1-12.3 12.6-33.4 18.2-49.3-4.7 24.7-10.2 57.6-11 66.3-.4 5.1 6.4 5.2 9.1.2 7.2-13 22.8-39.7 36.8-63.9-5.7 13.7-12.4 29.9-15.5 39-2.1 6.7-4 11.5-4 17.7 0 7.1 4.9 11.3 10.3 11.3 5.5 0 11.9-2.8 18.6-11.3 2 7.1 7.3 11.5 16.3 11.5 11.8 0 20.4-8.1 20.4-13.1.5-1.6-.5-2.6-1.9-2.6m-.2-36.5c6.7 0 1.5 17.5-15.9 18 4.4-9.3 11.5-18 15.9-18m-34.8-30.9c-.1.1-.1.2-.2.3.1-.2.2-.2.2-.3m-39.2-9.6c0-.1 0-.2.1-.3-.1.1-.1.2-.1.3">
                                </path>
                                <path
                                    d="M514.4 694.6c6.3-4.5 11-4.8 12.5-6 2.2-1.9-.8-11.1-9.5-11.1-13.9 0-21.1 17.4-26.6 32.7-3.6 10-7.6 22.1-10.7 31.9 1.5-21.5 4.1-55.9 4.2-59.8.1-2 0-3.1-1-3.5.1-.1.1-.1.1-.2h-.7c-.3-.1-.7-.1-1.3-.1-1.9 0-3.6.1-5.4.1h-24.1c-35.4 0-32.7 33.2-10.8 33.2 4 0 4.1-3.9 2.2-5-7.9-4-9.5-18.5 17-18.5h7.2c-3.3 11.3-9.5 30.4-17.4 47.3-8.4 18-13.1 24.7-26.3 28.1-3.8 1-3.5 3.1-2.4 5.5 1.3 3 6 6.1 11.9 6.1 10.4 0 15.9-7.6 21.5-22.9 5.5-14.8 10.1-29.2 13.5-40.4-1 23.9-1.8 54.6-2 60.2-.1 4.2 1.6 4.2 4.9 2.8 6.7-2.9 9-3.9 10.8-9.3 5.6-17.2 11-31.5 17.4-47.6 3.8-10.3 9.8-19.8 15-23.5">
                                </path>
                                <path
                                    d="M533.8 714c-27.9 0-41.5 32.3-41.5 46.2 0 9.9 6.3 16 16.8 16 23.3 0 36.7-31.8 36.7-46.4 0-10-4.6-15.8-12-15.8m-20.2 49.3c-10.4 0 3.4-39 12.7-39 8.7 0-1.7 39-12.7 39">
                                </path>
                                <path
                                    d="M607.3 697c-2.3 0-10.5.2-22.9.6 2-4.9 3.6-8.8 4.7-11.4.8-2 .4-3.2-1.7-3.2-1.9 0-5.2.6-9.1 1.7-5.3 1.4-5.9 2.3-8.8 8.5-.6 1.3-1.4 3-2.2 5.1-12.1.4-26.2 1.1-41.7 1.7-6 .3-14.6 7.8-7.2 7.8 14.6 0 30.4.5 44.8 1-2.2 5.9-5 13.2-8.4 21.8-4.2 10.8-10.2 23.7-10.2 32.6 0 6.6 4.5 12.3 12.5 12.3 10 0 14-5.8 12.9-9.2-.6-1.9-2.4-1.9-6.3-1.9-2.6 0-3.6-1.8-3.6-3.8 0-3.1 1.5-6.3 3.1-10.5 5.6-14.6 11.4-29 16.3-40.8 4 .1 7.8.1 11.3.1 8.6 0 11.9-.2 14.9-2.5 2.5-1.9 3.7-3 5.1-4.8 1.6-1.8 2.4-5.1-3.5-5.1m-352.8 14.2c4.6 0 9.2-4.2 10.3-9.4s-1.7-9.4-6.3-9.4-9.2 4.2-10.3 9.4 1.7 9.4 6.3 9.4">
                                </path>
                                <path
                                    d="M274 764.8c-2.2-.3-2.9-1.8-2.9-4.3 0-3.1.8-7.4 2.3-12.3 36.3-17.1 60.2-69.1 33.1-69.1-18 0-40.5 39.9-47.7 67.1-4 6.5-10.8 16.2-15.6 16.2-3.7 0-2.8-4.9 0-12.2 6.3-17 15.4-34.4 15.4-34.4s-4.6-1.9-10.8-.8c-4 .7-5.8 2.8-7.7 6.4-.2.3-.5.7-.7 1.4-11.8 25.3-19.2 39.6-25.9 39.6-4.7 0-2-5.2.6-12.4 6.3-17 15.4-34.4 15.4-34.4s-4.6-1.9-10.8-.8c-3.9.6-5.7 2.5-7.5 5.9-1.3-3.5-3.9-6.9-9.6-6.9-17.5 0-30.6 22.5-34.3 38.4-3.6 5.5-8.3 11.4-11.8 11.4s-3.5-3.1-.7-10.3c4.5-11.5 13-31.5 19.8-47.2 17.2.4 33.4.7 42.7.7 8.6 0 11.9-.2 14.9-2.5 2.5-1.9 3.7-3 5.1-4.8 1.5-1.8 2.1-5.1-3.7-5.1-3.2 0-26.7.7-54.7 1.8 2.1-4.8 3.8-8.6 4.8-10.8.6-1.4-.3-2.9-2.4-2.6-3.3.3-4.5.7-7.9 1.6-5.3 1.3-6.6 2.9-9.5 9-.4.8-1 2-1.6 3.5-11.1.4-22.5 1-33.1 1.4-6 .3-12.9 7-5.6 7 9.2 0 21.7.2 34.9.5-2.3 5.2-4.9 11.2-7 16.5-.2.4-.5 1-.7 1.6-8.9 20.2-22.5 41.5-37.4 41.5-5.8 0-8.3-3.8-8.3-8.8 0-1.9.3-3.9.7-6 .5 0 1.2.1 1.9.1 21.4 0 34-13.1 34-25.2 0-7.7-6.5-12.3-12.9-12.3-17.6 0-39.1 22.9-39.1 44.1 0 11.4 6.1 19 16.5 19 14 0 24.9-8.6 32.5-18q-.6 3.15-.6 6.3c0 6.6 3.8 11.4 10 11.4 7 0 13-4.2 18.6-11.7 1.2 7.4 5.4 11.7 11.7 11.7 7.4 0 13.8-5.6 18.9-12.4.3 6.1 2.4 12.4 10.6 12.4 5.7 0 11.7-3.1 18.6-12.8.2 6.4 2.9 13.1 10.5 13.1 7.4 0 14-5.3 19.9-13.4.5 8.1 4.9 12.8 11.1 12.8 6.4 0 11.8-4.1 11.4-8.7-.3-3.4-3.3-1.9-5.4-2.2m31.2-74.4c3.9 0-6.8 28.1-26.5 43.7 8.4-20.6 21.8-43.7 26.5-43.7M124 722.7c6.8 0 2.6 18.9-15.4 18.9h-.2c4.2-9.8 11.1-18.9 15.6-18.9m60.4 40.3c-10.2 0 7-38.4 16.7-38.4 3.7 0 5 2.4 5.5 4.5-7.9 18.5-14.5 33.9-22.2 33.9">
                                </path>
                            </svg> <button class="cursor-pointer self-end text-black lg:place-self-center"
                                aria-label="Close Menu" @click="storeNavOpen = false">
                                <svg class="mx-8 h-8 w-3" height="12" width="12" fill="none"
                                    viewBox="0 0 20 20">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="m10 12.357-7.155 7.155a1.667 1.667 0 1 1-2.357-2.357L7.643 10 .488 2.845A1.667 1.667 0 0 1 2.845.488L10 7.643 17.155.488a1.667 1.667 0 1 1 2.357 2.357L12.357 10l7.155 7.155a1.667 1.667 0 1 1-2.357 2.357z"
                                        clip-rule="evenodd"></path>
                                </svg> </button>
                        </div>
                        <p class="m-4 text-center font-semibold">
                            <img class="mr-4 inline h-14 w-14" src="/svg/images/cashback-bills.svg" alt=""
                                role="presentation" loading="lazy">Start Earning Cash Back
                        </p>
                        <p class="mx-4 mt-6 text-sm font-bold uppercase leading-8"></p>
                        <div class="mx-4 flex flex-row">
                            <a class="h-[50px] w-80 min-w-40 self-end rounded-full border text-center font-extrabold leading-[50px] text-purple-700"
                                href="#">Sign
                                In</a>
                            <div class="flex flex-col">
                                <div class="flex flex-row">
                                    <img class="inline h-9 w-9" src="/svg/images/cashback-bolt.svg" alt=""
                                        role="presentation" loading="lazy">
                                    <p class="text-3xl font-extrabold"></p>
                                </div>
                                <p class="w-44 text-xs font-semibold uppercase leading-5"><span></span> Ready to Redeem
                                </p>
                            </div>
                            <a class="ml-3 mr-2 h-[50px] w-80 min-w-40 rounded-full bg-purple-700 text-center font-extrabold leading-[50px] text-white"
                                href="#">
                                Join For Free
                            </a>
                        </div>
                    </div>
                </div>
            </template>
            <a class="block whitespace-nowrap px-4 py-3 lg:rounded-full lg:bg-transparent lg:font-bold lg:tracking-wider lg:hover:bg-white/10"
                href="/shop/deals/summer-checklist">
                Summer Checklist
            </a>
            <div class="bg-gray-white relative z-40 lg:bg-transparent">
                <button
                    class="flex items-center whitespace-nowrap rounded-full px-4 py-3 hover:bg-white/10 max-lg:hidden lg:tracking-wider">
                    <span class="inline">Stores</span>
                    <svg class="ml-px inline h-4 w-4 transition-all" height="12" width="12"
                        x-bind:class="storeNavOpen ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="m8 8.478 2.954-2.517a.77.77 0 0 1 1.058 0l.014.015a.72.72 0 0 1-.009 1.052L8.53 10.04a.767.767 0 0 1-1.048.008L3.975 7.02a.72.72 0 0 1-.001-1.042l.015-.015a.767.767 0 0 1 1.048-.01z">
                        </path>
                    </svg> </button>
                <span class="block px-4 py-3 uppercase lg:hidden">Browse Stores</span>
            </div>
            <a class="bg-gray-white block whitespace-nowrap px-4 py-3 font-bold max-lg:mt-6 lg:rounded-full lg:bg-transparent lg:font-bold lg:tracking-wider lg:hover:bg-white/10"
                href="https://www.CouponOnTop.com/cashback">Cash
                Back</a>
            <div class="bg-gray-white relative z-40 lg:bg-transparent"
                @click.away="$root.offsetWidth &gt; 1023 ? blogNavOpen = false : ''">
                <button
                    class="flex items-center whitespace-nowrap rounded-full px-4 py-3 hover:bg-white/10 max-lg:hidden lg:tracking-wider"
                    @click="blogNavOpen = !blogNavOpen;activeBlogIndex = 0">
                    <span class="inline">Blog</span>
                    <svg class="ml-px inline h-4 w-4 transition-all" height="12" width="12"
                        x-bind:class="blogNavOpen ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="m8 8.478 2.954-2.517a.77.77 0 0 1 1.058 0l.014.015a.72.72 0 0 1-.009 1.052L8.53 10.04a.767.767 0 0 1-1.048.008L3.975 7.02a.72.72 0 0 1-.001-1.042l.015-.015a.767.767 0 0 1 1.048-.01z">
                        </path>
                    </svg> </button>
                <button class="flex w-full cursor-pointer flex-row lg:hidden"
                    @click="blogNavOpen = !blogNavOpen; activeBlogIndex = -1">
                    <span class="py-3 pl-4 uppercase">Blog</span>
                    <svg class="fill-current absolute relative top-5 ml-1 inline-block h-3 w-3 stroke-1 transition-all duration-300 lg:hidden"
                        x-bind:class="blogNavOpen ? 'hidden' : 'inline-block'" fill="currentColor"
                        viewBox="0 0 448 512">
                        <path
                            d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                        </path>
                    </svg> <svg
                        class="fill-current absolute relative top-5 ml-1 inline-block h-3 w-3 stroke-1 transition-all duration-300 lg:hidden hidden"
                        x-bind:class="blogNavOpen ? 'inline-block' : 'hidden'" fill="currentColor"
                        viewBox="0 0 448 512">
                        <path
                            d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                        </path>
                    </svg> </button>
            </div>
            <div class="mx-4 my-6 border-b border-black/10 lg:hidden"></div>
            <a class="block px-4 py-3 lg:hidden" href="https://CouponOnTop.onelink.me/LeIP/eyooiv46">CouponOnTop
                App</a>
            <a class="block px-4 py-3 font-bold lg:hidden" href="https://www.CouponOnTop.com/extension">CouponOnTop
                Extension</a>
            <a href="/my/offers" class="relative block px-4 py-3 lg:hidden" x-data=""
                @click="window.Alpine.store('googleEvents').sendClickEvent({'template':'home','destination_url':'\/my\/offers'})">My
                Offers
                <img class="absolute left-24 top-1 h-8 w-12" src="/svg/images/new-spirit-fingers.svg" alt="new"
                    width="48px" height="32px" loading="lazy"></a>
            <a class="block px-4 py-3 lg:hidden hidden" href="https://secure.CouponOnTop.com/my-account"
                :class="{ 'hidden': !$store.user.isLoggedIn }" @click="userDropdownOpen = false">My Account</a>
            <a class="block px-4 py-3 lg:hidden hidden"
                href="https://secure.CouponOnTop.com/logout?returnTo=https%3A%2F%2Fwww.CouponOnTop.com%2F"
                x-data="signIn" :href="pathToLogout(window.location)"
                :class="{ 'hidden': !$store.user.isLoggedIn }" @click="userDropdownOpen = false">Log Out</a>
        </div>
    </div>

    <div class="flex relative order-last items-center max-lg:order-3"
        @user-setup-loaded.window="if ($store.user.hasLoaded &amp;&amp; window.location.pathname.startsWith('/landing')) { $el.classList.remove('hidden'); $el.classList.add('flex'); }">
        <div class="relative bottom-1 hidden lg:block">
            <img class="h-8 w-12" src="/svg/images/new-spirit-fingers.svg" alt="new" width="48px"
                height="32px" x-show="$store.user.isLoggedIn" loading="lazy" style="display: none;">
        </div>
        <div class="relative z-50 order-last bg-gray-100 bg-transparent" @click.outside="userDropdownOpen = false">
            <button
                class="flex w-40 items-center justify-center whitespace-nowrap rounded-full py-3 tracking-wider hover:border hover:border-white hover:bg-white/10 max-lg:hidden"
                data-component-class="sign_in" x-data="signIn"
                @click="if ($store.user.isLoggedIn) { userDropdownOpen = !userDropdownOpen; } else { $store.googleEvents.sendClickEvent({'template': 'home', 'module': 'global_nav', 'element': 'sign_in'}); window.blizzard?.trackClickEvent({type: 'sign_in', element: $el, followLink: false, preventDefault: false}); window.location = `${pathToLogin(window.location.href)}`; }">
                <span class="w-32 overflow-hidden text-ellipsis"
                    x-text="$store.user.isLoggedIn ? $store.user.username : 'Sign In'">Sign In</span><svg
                    class="inline-block h-4 w-4 transition-all hidden"
                    x-bind:class="{ 'hidden': !$store.user.isLoggedIn, 'rotate-180': userDropdownOpen }" height="12"
                    width="12" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="m8 8.478 2.954-2.517a.77.77 0 0 1 1.058 0l.014.015a.72.72 0 0 1-.009 1.052L8.53 10.04a.767.767 0 0 1-1.048.008L3.975 7.02a.72.72 0 0 1-.001-1.042l.015-.015a.767.767 0 0 1 1.048-.01z">
                    </path>
                </svg> </button>

            <template x-if="userDropdownOpen">
                <div class="left-2 top-12 w-40 rounded border bg-white p-4 text-sm font-semibold text-black shadow-lg max-lg:hidden"
                    x-bind:class="userDropdownOpen ? 'absolute block' : 'absolute hidden'" x-cloak="">
                    <a href="/my/offers" class="relative block hover:underline hover:decoration-purple-700"
                        x-data=""
                        @click="window.Alpine.store('googleEvents').sendClickEvent({'template':'home','destination_url':'\/my\/offers'})">My
                        Offers
                        <img class="absolute bottom-0 right-0 h-8 w-12" src="/svg/images/new-spirit-fingers.svg"
                            alt="new" width="48px" height="32px" loading="lazy"></a>
                    <a class="mt-4 block hover:underline hover:decoration-purple-700"
                        href="https://secure.CouponOnTop.com/my-rewards">
                        My Rewards
                    </a>
                    <a class="my-4 block hover:underline hover:decoration-purple-700"
                        href="https://secure.CouponOnTop.com/my-account">
                        My Account
                    </a>
                    <a class="block hover:underline hover:decoration-purple-700" href="#" aria-label="Log Out"
                        x-data="signIn" :href="pathToLogout(window.location)"
                        @click="userDropdownOpen = false">
                        Log Out
                    </a>
                </div>
            </template>
        </div>
        <div class="order-last max-lg:order-3" x-data="wallet('home', '1')" ax-load="">
            <button
                class="group relative inline-block h-10 min-w-24 cursor-pointer whitespace-nowrap rounded-full bg-white text-black"
                data-component-name="wallet" x-ref="wallet" @click="handleWalletClicked()">
                <img class="absolute left-2 top-2 h-6 w-6 group-hover:animate-bounce"
                    src="/svg/images/cashback-bolt.svg" alt="" role="presentation" loading="lazy"
                    width="24" height="24" x-ref="bolt" @user-setup-loaded.window="animateWallet()">
                <p class="ml-2 inline" x-ref="rewards">$5.00</p>
            </button>
            <section
                class="lg:top-16 z-20 hidden bg-white text-black max-lg:fixed max-lg:-bottom-12 max-lg:left-0 max-lg:rounded-t-md max-lg:pb-12 max-lg:shadow-[0_-4px_4px_0_#00000040] lg:absolute lg:-right-4 lg:w-80 lg:rounded-md lg:shadow-xl"
                data-component-name="new_user_bonus" @click.self="handleMaximize()" x-ref="walletToolTip">
                <div
                    class="absolute -top-2 right-14 h-0 w-0 border-b-[10px] border-l-[22px] border-r-[22px] border-white border-l-transparent border-r-transparent max-lg:hidden">
                </div>
                <div class="flex flex-col text-base max-lg:mt-4 lg:mt-8">
                    <button
                        class="absolute right-0 ml-auto mr-2 grid place-items-center rounded-full p-2.5 tracking-widest outline-none hover:bg-gray-100 lg:top-2"
                        aria-label="close tooltip" @click="handleClose()"><svg class="h-4 w-4" fill="none"
                            viewBox="0 0 20 20">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10 12.357-7.155 7.155a1.667 1.667 0 1 1-2.357-2.357L7.643 10 .488 2.845A1.667 1.667 0 0 1 2.845.488L10 7.643 17.155.488a1.667 1.667 0 1 1 2.357 2.357L12.357 10l7.155 7.155a1.667 1.667 0 1 1-2.357 2.357z"
                                clip-rule="evenodd"></path>
                        </svg></button>

                    <div class="flex flex-row max-md:border-b" @click="handleMaximize()">
                        <img class="mx-4 h-12 w-12" src="/svg/images/cashback-bills.svg" alt=""
                            role="presentation" loading="lazy" width="48" height="48">
                        <div class="mb-3">
                            <p class="font-proxima text-xs font-semibold uppercase text-purple-700">Limited Time
                            </p>
                            <p class="text-xl font-bold text-black">Sign up and get $5*</p>
                        </div>
                    </div>

                    <div
                        class="px-5 text-center text-xs font-normal text-black [&amp;_a]:font-bold [&amp;_a]:underline [&amp;_a]:underline-offset-1">
                        <p class="mb-2.5 mt-4">
                            By signing up you confirm that you are 16 years of age or older and you agree to our <a
                                data-component-name="terms_of_use" href="https://www.ziffdavis.com/terms-of-use"
                                target="_blank"
                                @click="$store.user.setClickedNubPopUpCookie(); window.blizzard.trackClickEvent({type: 'terms_of_use', event: $event, element: $el});">Terms
                                of Service</a>
                            and <a data-component-name="privacy_policy"
                                href="https://www.ziffdavis.com/shopping-privacy-policy" target="_blank"
                                @click="$store.user.setClickedNubPopUpCookie(); window.blizzard.trackClickEvent({type: 'privacy_policy', event: $event, element: $el});">Privacy
                                Policy</a>.
                        </p>
                        <p class="mb-4">
                            <sup>*</sup>Purchase Required <a data-component-name="terms_and_conditions"
                                href="https://www.CouponOnTop.com/blog/membership" target="_blank"
                                @click="$store.user.setClickedNubPopUpCookie(); window.blizzard.trackClickEvent({type: 'terms_and_conditions', event: $event, element: $el});">Terms
                                &amp;
                                Conditions</a>
                        </p>
                    </div>

                    <div class="grid grid-flow-row bg-gray-100 transition-all duration-500 ease-in-out grid-rows-[0fr]"
                        x-bind:class="isMaximized() ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'">
                        <div class="flex w-full flex-col overflow-hidden"
                            x-bind:class="isMaximized() ? ['max-lg:border-t', 'max-lg:border-black/10', 'py-6', ] : ''">
                            <div x-show="!hasSocialParam">
                                <div class="flex w-full flex-row place-items-center justify-center">
                                    <button
                                        class="mx-4 flex h-9 w-full cursor-pointer items-center justify-center rounded-full border border-black/10 bg-black text-sm font-bold leading-[44px] text-white"
                                        data-component-name="google_sign_in" @click="googleSignIn()">
                                        <img class="mx-2 h-6 w-6" src="/svg/images/colored-google-g.svg"
                                            width="24" height="24" loading="lazy"> Continue with Google
                                    </button>
                                </div>
                                <p class="mt-4 text-center font-proxima text-sm font-medium">
                                    Or <a class="cursor-pointer underline underline-offset-2"
                                        data-component-name="other_sign_in"
                                        href="https://secure.CouponOnTop.com/register?returnTo=https%3A%2F%2Fwww.CouponOnTop.com%2Fmy%2Foffers"
                                        x-data="signIn" :href="pathToSignUp(`${window.location}`)"
                                        @click="continueWithOtherOptions()">
                                        continue with other options</a>
                                </p>
                            </div>
                            <div class="flex w-full flex-row place-items-center justify-center"
                                x-show="hasSocialParam" style="display: none;">
                                <button
                                    class="mx-4 mb-6 flex h-9 w-full cursor-pointer justify-center rounded-full border border-black/10 bg-black text-sm font-bold leading-[44px] text-white"
                                    data-component-name="other_sign_in" x-data="signIn"
                                    @click="continueWithOtherOptions(); window.location.href = pathToSignUp(`${window.location}`)">
                                    Sign up now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="lg:w-[310px] z-50 order-2 w-screen lg:order-3">
        <div class="group relative inset-x-0 order-2 w-full rounded-3xl focus-within:max-lg:fixed focus-within:max-lg:top-0 focus-within:max-lg:z-50 focus-within:max-lg:rounded-b-none focus-within:max-lg:rounded-t-none focus-within:max-lg:bg-white focus-within:max-lg:pb-5 focus-within:max-lg:pt-7 lg:relative lg:order-3 lg:rounded-full lg:py-0 lg:tracking-wider focus-within:lg:relative"
            tabindex="-1" x-data="searchAutocomplete()" @click.self="handleClickAway()"
            @add-recent-page-data.window="addRecentSearchPage(event.detail.title, event.detail.url)"
            x-ref="searchContainer">
            <div class="mx-2 flex max-lg:min-w-36 group-focus-within:max-lg:max-w-96 lg:mx-0" x-ref="searchBar">
                <div
                    class="relative z-20 flex min-h-10 grow items-center rounded-3xl border-2 border-transparent bg-purple-800 px-4 py-2 text-white group-focus-within:bg-white group-focus-within:text-gray-500 group-focus-within:max-lg:ml-4 group-focus-within:max-lg:border-gray-600 lg:ml-0 lg:w-auto lg:border-0">
                    <svg class="z-20 ml-1 mr-2 h-5 w-5 font-black" width="20" height="20" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M1.925 7.125c0 2.868 2.332 5.2 5.2 5.2s5.2-2.332 5.2-5.2-2.332-5.2-5.2-5.2a5.205 5.205 0 0 0-5.2 5.2m9.893 4.004 3.09 3.09a.488.488 0 0 1-.69.688l-3.054-3.12a6.14 6.14 0 0 1-4.04 1.513A6.175 6.175 0 1 1 13.3 7.125a6.14 6.14 0 0 1-1.482 4.004">
                        </path>
                    </svg>
                    <input
                        class="z-20 h-7 w-full bg-transparent text-base font-medium text-white placeholder:text-white focus:outline-none group-focus-within:text-black group-focus-within:placeholder:text-gray-500"
                        type="search" value="" aria-label="Search on CouponOnTop" placeholder="Search">
                </div>

                <svg class="z-20 ml-7 mr-2 mt-3 hidden h-7 w-7 text-black group-focus-within:max-lg:block"
                    width="20" height="20" @click="handleClickAway()" fill="currentColor"
                    viewBox="0 0 448 512">
                    <path
                        d="M443.3 267.3c6.2-6.2 6.2-16.4 0-22.6l-176-176c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6L393.4 240H16c-8.8 0-16 7.2-16 16s7.2 16 16 16h377.4L244.7 420.7c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0z">
                    </path>
                </svg>
            </div>
            <div class="absolute inset-x-0 -z-10 mt-5 w-0 overflow-auto overscroll-none bg-white pb-2 font-sans text-black opacity-0 drop-shadow-sm group-focus-within:pointer-events-auto group-focus-within:z-10 group-focus-within:w-screen group-focus-within:opacity-100 max-lg:h-[calc(100vh_-_100%)] lg:top-0 lg:mt-0 lg:h-fit lg:rounded-3xl lg:pb-0 lg:pt-11 lg:group-focus-within:w-full"
                x-ref="searchResults" @click.self="handleClickAway()">

                <h5 class="mt-1 bg-gray-200 py-2 pl-5 lg:bg-transparent lg:py-0">
                    Recent
                </h5>
                <ul class="lg:border-b mb-1 pb-1 text-sm font-light text-gray-500">
                    <template x-for="item in recentSearches">
                        <li>
                            <a class="block px-8 py-2 hover:bg-gray-100 lg:py-1 [&amp;&gt;b]:font-bold"
                                href="#">
                                Recent search results goes here
                            </a>
                        </li>
                    </template>
                    <li>
                        <a class="block px-8 py-2 hover:bg-gray-100 lg:py-1 [&amp;&gt;b]:font-bold"
                            href="/view/chewy.com">Chewy.com</a>
                    </li>
                </ul>
                <h5 class="mt-1 bg-gray-200 py-2 pl-5 lg:bg-transparent lg:py-0"style="display: none;">
                    Popular at CouponOnTop
                </h5>
                <ul class="mb-1 pb-1 text-sm font-light text-gray-500 lg:border-b"style="display: none;">
                    <li>
                        <a class="block px-8 py-2 hover:bg-gray-100 lg:py-1" href="/cashback">
                            Cash Back
                        </a>
                    </li>
                    <li>
                        <a class="block px-8 py-2 hover:bg-gray-100 lg:py-1" href="/coupons">
                            Coupons &amp; Promo Codes
                        </a>
                    </li>
                    <li>
                        <a class="block px-8 py-2 hover:bg-gray-100 lg:py-1" href="/blog/">
                            The Real Deal
                        </a>
                    </li>
                    <li>
                        <a class="block px-8 py-2 hover:bg-gray-100 lg:py-1"
                            href="https://www.CouponOnTop.com/extension">
                            CouponOnTop Extension
                        </a>
                    </li>
                </ul>

                <template x-for="bucket in results">
                    <div class="lg:border-b my-1">
                        <h5 class="bg-gray-200 px-5 py-2 lg:bg-transparent lg:py-0" x-text="bucket.label">Bucket</h5>
                        <ul class="pb-1 text-sm font-light text-gray-500">
                            <template x-for="item in bucket.items">
                                <li class="flex hover:bg-gray-100 max-lg:px-8 max-lg:py-1">
                                    <a class="flex w-full grow lg:py-1 lg:pl-8 lg:pr-2 [&amp;&gt;b]:font-bold"
                                        href="#">
                                        <span class="grow" x-html="item['title']">Bucket results goes here</span>
                                        <span class="pt-0.5 text-right text-xs"></span>
                                    </a>
                                </li>
                            </template>
                        </ul>
                    </div>
                </template>
                <a class="mb-4 mt-1 hidden cursor-pointer pl-8 font-light text-gray-500 hover:bg-gray-100 lg:block"
                    href="/shop/how-to-save">
                    How to Save the Most with CouponOnTop
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="h-10 w-full bg-gray-100 text-center align-middle text-xs font-semibold capitalize leading-10 text-black">
    <div class="relative m-auto max-w-full overflow-hidden lg:max-w-xl glide--ltr glide--carousel glide--swipeable">
        <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="me-2">
                            <img src="/svg/images/new-spirit-fingers.svg" alt="new" width="48"
                                height="32" loading="lazy">
                        </div>
                        <div>
                            <a href="/my/offers" class="fw-bold text-decoration-underline">Personalized Offers</a>
                            Just For You
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-none d-lg-block fw-semibold">
                        Automatically apply the best codes and cash back offers to your cart
                        <a href="https://www.CouponOnTop.com/extension"
                            class="ms-2 fw-bold text-decoration-underline">Add to your browser! It's free</a>
                    </div>
                    <div class="d-block d-lg-none fw-bold">
                        Stack Your Savings with the
                        <a href="https://CouponOnTop.page.link/yFPN"
                            class="fw-bold text-decoration-underline">CouponOnTop App</a>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="absolute left-5 top-3" type="button" data-bs-target="#promoCarousel"
                data-bs-slide="prev">
                <svg class="h-3 w-3 text-black ease-out" fill="none" viewBox="0 0 8 12">
                    <path fill="currentColor"
                        d="M5.078 11.398.79 6.922A.64.64 0 0 1 .625 6.5c0-.117.047-.258.14-.375l4.29-4.477a.56.56 0 0 1 .797-.023c.234.21.234.563.023.797L1.961 6.5l3.937 4.125a.56.56 0 0 1-.023.797.56.56 0 0 1-.797-.024">
                    </path>
                </svg>
            </button>
            <button class="absolute right-2 top-3" type="button" data-bs-target="#promoCarousel"
                data-bs-slide="next">
                <svg class="h-3 w-3 rotate-180 text-black ease-out" fill="none" viewBox="0 0 8 12">
                    <path fill="currentColor"
                        d="M5.078 11.398.79 6.922A.64.64 0 0 1 .625 6.5c0-.117.047-.258.14-.375l4.29-4.477a.56.56 0 0 1 .797-.023c.234.21.234.563.023.797L1.961 6.5l3.937 4.125a.56.56 0 0 1-.023.797.56.56 0 0 1-.797-.024">
                    </path>
                </svg>
            </button>

        </div>
    </div>
</div>
