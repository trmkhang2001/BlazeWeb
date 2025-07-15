@extends('layouts.app')
@section('title', 'Coupon On Top - The Best Coupons, Promo Codes & Cash Back Offers')
@section('content')
    <main>
        <div class="overflow-clip" bis_skin_checked="1">
            <section
                class="lg:gap-x-none container mx-auto grid max-w-screen-xl grid-cols-[theme(spacing.20)_auto] gap-x-3 [grid-template-areas:'disclaimer_disclaimer'_'logo_heading'_'subheading_subheading'_'offers_offers'_'table_table'_'leftrail_leftrail'_'content_content'] lg:mt-4 lg:auto-rows-[auto_auto_100px_auto_auto_1fr] lg:[grid-template-areas:'logo_heading'_'logo_subheading'_'logo_offers'_'disclaimer_offers'_'leftrail_offers'_'leftrail_table'_'leftrail_content']">
                <h1
                    class="mb-3 flex min-h-16 items-center self-center font-sans-bold text-xl font-extrabold leading-tight [grid-area:heading] lg:-mb-3 lg:mt-1 lg:items-center lg:self-start lg:pl-0 lg:text-4xl">
                    Abercrombie &amp; Fitch Promo Code &amp; Coupons
                </h1>
                {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU8d0GWE7HGSdNYLlydSQmV1LJR4s_VxfmYw&s"
                    alt="Ảnh tròn" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;"> --}}

                <div class="mb-6 mt-2 min-w-0 [grid-area:offers]" bis_skin_checked="1">
                    <div data-component-name="top_offers" bis_skin_checked="1">
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/J2LQP2CQZZBRFKOXVJGGUDRTGE?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=1&amp;offer_uuid=J2LQP2CQZZBRFKOXVJGGUDRTGE&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="J2LQP2CQZZBRFKOXVJGGUDRTGE"
                                data-position="1" x-data="outclickHandler({ 'siteLink': '?u=J2LQP2CQZZBRFKOXVJGGUDRTGE&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'J2LQP2CQZZBRFKOXVJGGUDRTGE' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        15%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    15% Off Sitewide
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        10 valid uses today
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        User saved $63
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Limited time
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        SUITEAF
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="J2LQP2CQZZBRFKOXVJGGUDRTGE"
                                    data-component-class="see_details" data-position="1"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="mt-[6px] flex flex-row gap-x-6 font-sans text-[12px] font-semibold">
                                            <p> Average savings: $20 </p>
                                        </div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Get 15% off sitewide. Use the provided code at checkout to avail the
                                                discount. Offer applicable to all items across the site. Ensure to apply the
                                                code properly as instructed.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/7NUIBVDXOBAZ3NDNM5PB34URQQ?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=2&amp;offer_uuid=7NUIBVDXOBAZ3NDNM5PB34URQQ&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                data-position="2" x-data="outclickHandler({ 'siteLink': '?u=7NUIBVDXOBAZ3NDNM5PB34URQQ&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': '7NUIBVDXOBAZ3NDNM5PB34URQQ' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        30%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    30% off Your Order
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        726 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by celeste.w
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        LTKAF
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                    data-component-class="see_details" data-position="2"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Tap offer to copy the coupon code. Remember to paste code when you check out.
                                                Online only.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/CR5L4PAADJCQXBM5427UYN5GTE?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=3&amp;offer_uuid=CR5L4PAADJCQXBM5427UYN5GTE&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="CR5L4PAADJCQXBM5427UYN5GTE"
                                data-position="3" x-data="outclickHandler({ 'siteLink': '?u=CR5L4PAADJCQXBM5427UYN5GTE&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'CR5L4PAADJCQXBM5427UYN5GTE' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        25%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    Today Only! 25% Off Sitewide
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        426 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by celeste.w
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        LTK25OFF
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 0, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="CR5L4PAADJCQXBM5427UYN5GTE"
                                    data-component-class="see_details" data-position="3"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Excludes kids, fragrance, gift cards, third-party products.</p>
                                            <p>Tap offer to copy the coupon code. Remember to paste code when you check out.
                                                Online only.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/MIM2ZFFCAVGCNEWQ3GLXLNZOSU?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=4&amp;offer_uuid=MIM2ZFFCAVGCNEWQ3GLXLNZOSU&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="MIM2ZFFCAVGCNEWQ3GLXLNZOSU"
                                data-position="4" x-data="outclickHandler({ 'siteLink': '?u=MIM2ZFFCAVGCNEWQ3GLXLNZOSU&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'MIM2ZFFCAVGCNEWQ3GLXLNZOSU' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        15%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    Extra 15% Off In-App Purchases
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Verified by multiple sources
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        User saved $12
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Expiring today
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        AF15
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="MIM2ZFFCAVGCNEWQ3GLXLNZOSU"
                                    data-component-class="see_details" data-position="4"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="mt-[6px] flex flex-row gap-x-6 font-sans text-[12px] font-semibold">
                                            <p> Average savings: $5 </p>
                                            <p> Added by kimeeb </p>
                                        </div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Get an extra 15% off in-app purchases. A code is required for this offer.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="my-4" data-pogo="main" bis_skin_checked="1" id="main-1"
                            data-adunit="/4585/retailmenot/storepg_cpnArea_atf"></div>
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/P67XFM5GLBH2PKZFKBXE37XLNY?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=5&amp;offer_uuid=P67XFM5GLBH2PKZFKBXE37XLNY&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="P67XFM5GLBH2PKZFKBXE37XLNY"
                                data-position="5" x-data="outclickHandler({ 'siteLink': '?u=P67XFM5GLBH2PKZFKBXE37XLNY&amp;outclicked=true', 'offerType': 'OMNI', 'requestSlug': 'abercrombie.com', 'offerUuid': 'P67XFM5GLBH2PKZFKBXE37XLNY' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        $20
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Online &amp; In-Store
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    Up To 50% Off Summer Sale Favorites + $20 OFF EVERY $100
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white before:absolute before:-right-5 before:-top-3 before:z-10 before:h-8 before:w-12 before:rotate-45 before:bg-gray-300 after:absolute after:-right-4 after:-top-4 after:h-12 after:w-12 after:rotate-45 after:rounded-full after:bg-gray-200/30"
                                        bis_skin_checked="1">
                                        Show Code
                                    </div>
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white before:absolute before:-right-5 before:-top-3 before:z-10 before:h-8 before:w-12 before:rotate-45 before:bg-gray-300 after:absolute after:-right-4 after:-top-4 after:h-12 after:w-12 after:rotate-45 after:rounded-full after:bg-gray-200/30"
                                        bis_skin_checked="1">
                                        In-Store Code
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 0, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="P67XFM5GLBH2PKZFKBXE37XLNY"
                                    data-component-class="see_details" data-position="5"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Up to 50% Off Summer Favorites - Not valid outside the US and Canada, at the
                                                5th Avenue location in NYC, or at all Abercrombie &amp; Fitch outlet
                                                locations. Offer does not apply to abercrombie kids merchandise. Discount is
                                                off original prices, applies pre-tax and does not apply to gift cards,
                                                e-gift cards, gift wrapping or shipping &amp; handling of discounted items.
                                                Cannot be applied to previous purchases. Cannot be used in combination with
                                                other offers or promo codes on the same items, or in combination with
                                                Associate Discount.
                                                $20 OFF EVERY $100 - Not valid outside the US and Canada, at the Flagship
                                                location in New York City, or at all Abercrombie &amp; Fitch outlet
                                                locations. Offer does not apply to the following Abercrombie &amp; Fitch
                                                merchandise: Clearance in stores, 'Fall Preview' Styles, Select Fashion
                                                Styles, Cashmere, Leather and suede merchandise, Fragrance, Cologne, Body
                                                Care, Candles, All Multipacks, Watches, Gift Sets and 3rd party merchandise
                                                under the 'Our Favorite Brands' categories online. Offer does not apply to
                                                abercrombie kids merchandise. Applies pre-tax and does not apply to gift
                                                cards, e-gift cards, gift wrapping or shipping &amp; handling. Cannot be
                                                applied to previous purchases. Cannot be used in combination with other
                                                offers or promo codes on the same items, or in combination with Associate
                                                Discount</p>
                                            <p>Get Up To 50% Off Summer Sale Favorites + $20 OFF EVERY $100 (Online &amp;
                                                In-Store). Other restrictions may apply</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/PQMNTULUHJD5ZKT6TE3K2RSI3E?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=6&amp;offer_uuid=PQMNTULUHJD5ZKT6TE3K2RSI3E&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="PQMNTULUHJD5ZKT6TE3K2RSI3E"
                                data-position="6" x-data="outclickHandler({ 'siteLink': '?u=PQMNTULUHJD5ZKT6TE3K2RSI3E&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'PQMNTULUHJD5ZKT6TE3K2RSI3E' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        30%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    30% Off Sitewide
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        144 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by kimeeb
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        11430
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 0, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="PQMNTULUHJD5ZKT6TE3K2RSI3E"
                                    data-component-class="see_details" data-position="6"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Offer does not apply to the following Abercrombie &amp; Fitch items:
                                                Clearance in stores, Archive Collection, Overalls, Cashmere, Leather and
                                                suede merchandise, Fragrance, Cologne, Body Care, Candles, A&amp;F
                                                Collection, All Multipacks, Watches, Gift Sets and 3rd party merchandise
                                                under the 'Our Favorite Brands' categories online (Baggu, Blundstone,
                                                Castaner, Chamula, Clarks, Converse, Dolce Vita, Eastland, Epperson
                                                Mountaineering, Field Notes, G.H. Bass, Ilse Jacobsen, Kletterwerks, New
                                                Balance, Ranger Station Candles, Scosha, Smathers &amp; Branson, Soludos,
                                                Sperry, Stanley, Superga, Teva, The Hill-Side, Timberland, Tretorn). Offer
                                                does not apply to abercrombie kids Items. Cannot be applied to previous
                                                purchases. Cannot be used in combination with other offers or promo codes
                                            </p>
                                            <p>This Weekend Only! Get 30% Off Entire Purchase.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/GRZUGERRLVA2TMAPBE3N52OOF4?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=7&amp;offer_uuid=GRZUGERRLVA2TMAPBE3N52OOF4&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="GRZUGERRLVA2TMAPBE3N52OOF4"
                                data-position="7" x-data="outclickHandler({ 'siteLink': '?u=GRZUGERRLVA2TMAPBE3N52OOF4&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'GRZUGERRLVA2TMAPBE3N52OOF4' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        30%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    30% Off When You Buy 4 Items Or More
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        45 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by saver1
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        14941
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="GRZUGERRLVA2TMAPBE3N52OOF4"
                                    data-component-class="see_details" data-position="7"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Tap offer to copy the coupon code. Remember to paste code when you check out.
                                                Online only.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/HCADHCP5FRC5VCVOICIKUXKMWA?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=8&amp;offer_uuid=HCADHCP5FRC5VCVOICIKUXKMWA&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="HCADHCP5FRC5VCVOICIKUXKMWA"
                                data-position="8" x-data="outclickHandler({ 'siteLink': '?u=HCADHCP5FRC5VCVOICIKUXKMWA&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'HCADHCP5FRC5VCVOICIKUXKMWA' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        25%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    25% Off Sitewide
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        77 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by Stde
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        11775
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 0, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="HCADHCP5FRC5VCVOICIKUXKMWA"
                                    data-component-class="see_details" data-position="8"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Not valid in abercrombie kids stores. Not valid outside the US and Canada, at
                                                the 5th Avenue locations in NYC, or at all Abercrombie &amp; Fitch and
                                                abercrombie kids outlet locations. Not valid on abercrombie kids
                                                merchandise. Offer does not apply to the following Abercrombie &amp; Fitch
                                                merchandise: Select Fashion Items, Clearance Clearout Category Online,
                                                Clearance in Stores, Overalls, Cashmere, Leather and suede merchandise,
                                                Fragrance, Cologne, Body Care, Candles, A&amp;F Collection, All Multipacks,
                                                Watches, Gift Sets and 3rd party merchandise under the Our Favorite Brands
                                                categories online. Applies pre-tax and does not apply to gift cards, e-gift
                                                cards, gift wrapping or shipping &amp; handling.</p>
                                            <p>Get 25% Off Entire Purchase. Other restrictions may apply.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="my-4" data-pogo="main" bis_skin_checked="1" id="main-2"
                            data-adunit="/4585/retailmenot/storepg_cpnArea_btf"></div>
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/QME44EBYFBEBFBUQQQSB4IWVQY?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=9&amp;offer_uuid=QME44EBYFBEBFBUQQQSB4IWVQY&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="QME44EBYFBEBFBUQQQSB4IWVQY"
                                data-position="9" x-data="outclickHandler({ 'siteLink': '?u=QME44EBYFBEBFBUQQQSB4IWVQY&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'QME44EBYFBEBFBUQQQSB4IWVQY' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="text-base md:text-xl leading-[0.75] whitespace-nowrap">
                                        Up To
                                    </p>
                                    <p class="leading-none">
                                        50%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    50% Off Select styles + Extra 15% Off $100 Or More
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        15 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by kimeeb
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        11747
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 0, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="QME44EBYFBEBFBUQQQSB4IWVQY"
                                    data-component-class="see_details" data-position="9"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Exclusions apply.</p>
                                            <p>Tap offer to copy the coupon code. Remember to paste code when you check out.
                                                Online only.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/YCNYD2W4MZEQBMWVEMQAZJSBUE?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=10&amp;offer_uuid=YCNYD2W4MZEQBMWVEMQAZJSBUE&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="YCNYD2W4MZEQBMWVEMQAZJSBUE"
                                data-position="10" x-data="outclickHandler({ 'siteLink': '?u=YCNYD2W4MZEQBMWVEMQAZJSBUE&amp;outclicked=true', 'offerType': 'SALE', 'requestSlug': 'abercrombie.com', 'offerUuid': 'YCNYD2W4MZEQBMWVEMQAZJSBUE' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        $10
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Sale
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    $10 Off $50 Purchase with myAbercrombie Membership Sign Up
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        12 interested users
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white"
                                        bis_skin_checked="1">
                                        Get Deal</div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 0, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="YCNYD2W4MZEQBMWVEMQAZJSBUE"
                                    data-component-class="see_details" data-position="10"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Fragrance, Cologne, Body Care, Candles, Down, Leather, Suede, Cashmere,
                                                Multipacks, Gift Sets, Men's Watches, or 3rd party Items. Other exclusions
                                                may apply. Does not apply to gift wrapping</p>
                                            <p>Limited Time! Online Only! Welcome Offer! Get $10 Off Qualifying $50 purchase
                                                for myAbercrombie members. Maximum available discount is $10. Purchase
                                                quantities may be limited. Other restrictions may apply. One time use only.
                                            </p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/X62MWAY7DNAKHMFYNL6UWKOJZA?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=11&amp;offer_uuid=X62MWAY7DNAKHMFYNL6UWKOJZA&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="X62MWAY7DNAKHMFYNL6UWKOJZA"
                                data-position="11" x-data="outclickHandler({ 'siteLink': '?u=X62MWAY7DNAKHMFYNL6UWKOJZA&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'X62MWAY7DNAKHMFYNL6UWKOJZA' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="text-base md:text-xl leading-[0.75] whitespace-nowrap">
                                        Up To
                                    </p>
                                    <p class="leading-none">
                                        50%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    Up to an Extra 50% Off Fall Styles + Up to an Extra 30% Off With Minimum Spend
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        4 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by TrishAloha
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        11681
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 0, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="X62MWAY7DNAKHMFYNL6UWKOJZA"
                                    data-component-class="see_details" data-position="11"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Not valid outside the US and Canada, at the Flagship location in New York
                                                City, or at all Abercrombie &amp; Fitch outlet locations. Offer does not
                                                apply to the following Abercrombie &amp; Fitch merchandise: Clearance in
                                                stores, Overalls, Cashmere, Leather and suede merchandise, Fragrance,
                                                Cologne, Body Care, Candles, A&amp;F Collection, All Multipacks, Watches,
                                                Gift Sets and 3rd party merchandise under the 'Our Favorite Brands'
                                                categories online.</p>
                                            <p>Last Day! Get Up to an Extra 50% Off Fall Styles + Extra 10% off purchases of
                                                $50, Extra 20% off purchases of $100, Extra 30% off purchases of $150 or
                                                more. Offer valid for a limited time. Other restrictions may apply.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/BNSLQJMI2NDD3B2HSSLVEIF3OM?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=12&amp;offer_uuid=BNSLQJMI2NDD3B2HSSLVEIF3OM&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="BNSLQJMI2NDD3B2HSSLVEIF3OM"
                                data-position="12" x-data="outclickHandler({ 'siteLink': '?u=BNSLQJMI2NDD3B2HSSLVEIF3OM&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'BNSLQJMI2NDD3B2HSSLVEIF3OM' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        20%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    20% Off App Orders
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        37 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by TrishAloha
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        APP20
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="BNSLQJMI2NDD3B2HSSLVEIF3OM"
                                    data-component-class="see_details" data-position="12"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Tap offer to copy the coupon code. Remember to paste code when you check out.
                                                Online only.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/GSOI3PPL4FE7DALMA7FMVEZAWE?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=13&amp;offer_uuid=GSOI3PPL4FE7DALMA7FMVEZAWE&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="GSOI3PPL4FE7DALMA7FMVEZAWE"
                                data-position="13" x-data="outclickHandler({ 'siteLink': '?u=GSOI3PPL4FE7DALMA7FMVEZAWE&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'GSOI3PPL4FE7DALMA7FMVEZAWE' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        20%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    20% Off Sitewide
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        28 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by peggie12345
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        AFKATHLEEN
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="GSOI3PPL4FE7DALMA7FMVEZAWE"
                                    data-component-class="see_details" data-position="13"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Get 20% Off Sitewide - Stacks with Site Discounts</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="my-4 pogoDouble" data-pogo="double" bis_skin_checked="1">
                            <div data-pogo="largerec" data-adunit="/4585/retailmenot/storePg_cpnArea_blkLt_btf2"
                                id="largerec-1" bis_skin_checked="1"></div>
                            <div data-pogo="largerec" data-adunit="/4585/retailmenot/storePg_cpnArea_blkRt_btf2"
                                id="largerec-2" bis_skin_checked="1"></div>
                        </div>
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/ZFNFN3O6GJCJXAUUI33XJVUKVA?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=14&amp;offer_uuid=ZFNFN3O6GJCJXAUUI33XJVUKVA&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="ZFNFN3O6GJCJXAUUI33XJVUKVA"
                                data-position="14" x-data="outclickHandler({ 'siteLink': '?u=ZFNFN3O6GJCJXAUUI33XJVUKVA&amp;outclicked=true', 'offerType': 'COUPON', 'requestSlug': 'abercrombie.com', 'offerUuid': 'ZFNFN3O6GJCJXAUUI33XJVUKVA' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        15%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Code
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    15% Off Your Order
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        11 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Limited time
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by saver1
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-gray-100 text-base font-bold leading-none tracking-wider text-purple-700"
                                        bis_skin_checked="1">
                                        AFCHICKS
                                    </div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="ZFNFN3O6GJCJXAUUI33XJVUKVA"
                                    data-component-class="see_details" data-position="14"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="mt-[6px] flex flex-row gap-x-6 font-sans text-[12px] font-semibold">
                                        </div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Enjoy a discount of 15% on your order. Code required for redemption. Applies
                                                to all items sitewide.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/J2U6TLGCQZGJXFTIXZ5WW3BIJQ?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=15&amp;offer_uuid=J2U6TLGCQZGJXFTIXZ5WW3BIJQ&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="J2U6TLGCQZGJXFTIXZ5WW3BIJQ"
                                data-position="15" x-data="outclickHandler({ 'siteLink': '?u=J2U6TLGCQZGJXFTIXZ5WW3BIJQ&amp;outclicked=true', 'offerType': 'SALE', 'requestSlug': 'abercrombie.com', 'offerUuid': 'J2U6TLGCQZGJXFTIXZ5WW3BIJQ' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        Free
                                    </p>
                                    <p class="text-xs lg:text-sm">Shipping</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Sale
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    Free Shipping on Orders Over $99
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        2 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by kdenee78
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white"
                                        bis_skin_checked="1">
                                        Get Deal</div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="J2U6TLGCQZGJXFTIXZ5WW3BIJQ"
                                    data-component-class="see_details" data-position="15"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Enjoy free shipping on your order when you spend over $99 at Abercrombie
                                                &amp; Fitch. Ensure your cart value meets the minimum threshold to activate
                                                the offer. This is a great opportunity to save on shipping costs for your
                                                favorite styles. No code required, simply add items to your cart and the
                                                shipping discount will apply automatically.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/ZACBFPYB4FHD3KRYMQ3E337I34?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=16&amp;offer_uuid=ZACBFPYB4FHD3KRYMQ3E337I34&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="ZACBFPYB4FHD3KRYMQ3E337I34"
                                data-position="16" x-data="outclickHandler({ 'siteLink': '?u=ZACBFPYB4FHD3KRYMQ3E337I34&amp;outclicked=true', 'offerType': 'SALE', 'requestSlug': 'abercrombie.com', 'offerUuid': 'ZACBFPYB4FHD3KRYMQ3E337I34' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="text-base md:text-xl leading-[0.75] whitespace-nowrap">
                                        Up To
                                    </p>
                                    <p class="leading-none">
                                        50%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Sale
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    Up to 50% Off Dresses
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        5 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Limited time
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Added by kimeeb
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white"
                                        bis_skin_checked="1">
                                        Get Deal</div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="ZACBFPYB4FHD3KRYMQ3E337I34"
                                    data-component-class="see_details" data-position="16"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="mt-[6px] flex flex-row gap-x-6 font-sans text-[12px] font-semibold">
                                        </div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>2 Days Only! Shop online and get up to 50% off all dresses for two days only.
                                                This offer is available exclusively online and provides discounts on a wide
                                                range of styles. Take advantage of this limited-time opportunity to refresh
                                                your wardrobe.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/N2HMH2QZVZAGVGAYYPA77GVIME?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=17&amp;offer_uuid=N2HMH2QZVZAGVGAYYPA77GVIME&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="N2HMH2QZVZAGVGAYYPA77GVIME"
                                data-position="17" x-data="outclickHandler({ 'siteLink': '?u=N2HMH2QZVZAGVGAYYPA77GVIME&amp;outclicked=true', 'offerType': 'SALE', 'requestSlug': 'abercrombie.com', 'offerUuid': 'N2HMH2QZVZAGVGAYYPA77GVIME' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        25%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Sale
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    25% Off The Bra-Free Collection in Men's Tees + 20% Off almost everything else
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        5 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Limited time
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white"
                                        bis_skin_checked="1">
                                        Get Deal</div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 0, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="N2HMH2QZVZAGVGAYYPA77GVIME"
                                    data-component-class="see_details" data-position="17"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Exclusions may apply</p>
                                            <p>Get 25% off the Bra-Free Collection in all men's tees. Save 20% on almost
                                                everything else. No code required.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/VSUR3OVBQNDRDHZTMWCBT7R2EQ?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=18&amp;offer_uuid=VSUR3OVBQNDRDHZTMWCBT7R2EQ&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="VSUR3OVBQNDRDHZTMWCBT7R2EQ"
                                data-position="18" x-data="outclickHandler({ 'siteLink': '?u=VSUR3OVBQNDRDHZTMWCBT7R2EQ&amp;outclicked=true', 'offerType': 'SALE', 'requestSlug': 'abercrombie.com', 'offerUuid': 'VSUR3OVBQNDRDHZTMWCBT7R2EQ' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="text-base md:text-xl leading-[0.75] whitespace-nowrap">
                                        Up To
                                    </p>
                                    <p class="leading-none">
                                        40%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Sale
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    Up to 40% Off Clearance Styles
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        2 interested users
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white"
                                        bis_skin_checked="1">
                                        Get Deal</div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="VSUR3OVBQNDRDHZTMWCBT7R2EQ"
                                    data-component-class="see_details" data-position="18"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>No coupon code needed. Prices as marked. Tap to shop the sale now.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="my-4" data-pogo="main" bis_skin_checked="1" id="main-3"
                            data-adunit="/4585/retailmenot/storepg_cpnArea_btf2"></div>
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/FNKKSIBN4NFZHERDPQJ2QNJBMI?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=19&amp;offer_uuid=FNKKSIBN4NFZHERDPQJ2QNJBMI&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="FNKKSIBN4NFZHERDPQJ2QNJBMI"
                                data-position="19" x-data="outclickHandler({ 'siteLink': '?u=FNKKSIBN4NFZHERDPQJ2QNJBMI&amp;outclicked=true', 'offerType': 'SALE', 'requestSlug': 'abercrombie.com', 'offerUuid': 'FNKKSIBN4NFZHERDPQJ2QNJBMI' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        Sale
                                    </p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Sale
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    The Weekly Drop: New Arrivals Every Thursday
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white"
                                        bis_skin_checked="1">
                                        Get Deal</div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="FNKKSIBN4NFZHERDPQJ2QNJBMI"
                                    data-component-class="see_details" data-position="19"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>No coupon code needed. Prices as marked. Tap to shop the sale now.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/XW4VZQT2DBBXXPWGVW2MBIF5VI?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=20&amp;offer_uuid=XW4VZQT2DBBXXPWGVW2MBIF5VI&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="XW4VZQT2DBBXXPWGVW2MBIF5VI"
                                data-position="20" x-data="outclickHandler({ 'siteLink': '?u=XW4VZQT2DBBXXPWGVW2MBIF5VI&amp;outclicked=true', 'offerType': 'SALE', 'requestSlug': 'abercrombie.com', 'offerUuid': 'XW4VZQT2DBBXXPWGVW2MBIF5VI' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="text-base md:text-xl leading-[0.75] whitespace-nowrap">
                                        Up To
                                    </p>
                                    <p class="leading-none">
                                        50%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Sale
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    Up to 50% Off Select Styles + 50% Off All Clearance
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        2 interested users
                                    </div>
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Limited time
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white"
                                        bis_skin_checked="1">
                                        Get Deal</div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="XW4VZQT2DBBXXPWGVW2MBIF5VI"
                                    data-component-class="see_details" data-position="20"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Get up to 50% off select styles and enjoy 50% off all clearance items. Shop
                                                now to take advantage of these great savings while stocks last. Discounts
                                                are applied directly at checkout.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/AGVEFHX7VVBUBNQGK6IC5BCDMQ?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=21&amp;offer_uuid=AGVEFHX7VVBUBNQGK6IC5BCDMQ&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="AGVEFHX7VVBUBNQGK6IC5BCDMQ"
                                data-position="21" x-data="outclickHandler({ 'siteLink': '?u=AGVEFHX7VVBUBNQGK6IC5BCDMQ&amp;outclicked=true', 'offerType': 'SALE', 'requestSlug': 'abercrombie.com', 'offerUuid': 'AGVEFHX7VVBUBNQGK6IC5BCDMQ' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        Only
                                    </p>
                                    <p class="leading-none">
                                        $59.99</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Sale
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    YPB motionTEK Jacket for $59.99
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        Limited time
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white"
                                        bis_skin_checked="1">
                                        Get Deal</div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 1, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="AGVEFHX7VVBUBNQGK6IC5BCDMQ"
                                    data-component-class="see_details" data-position="21"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Get YPB motionTEK Jacket, originally priced at $90, now available for $59.99.
                                            </p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                        <!-- prettier-ignore-start -->
                                        <!-- prettier-ignore-end -->
                        <div class="border-gray-200 mb-2 min-h-[75px] rounded-lg border px-3 py-3 shadow-lg shadow-gray-200/50 md:px-6 md:shadow-none md:hover:shadow-lg md:hover:shadow-gray-200/50 lg:mb-4"
                            bis_skin_checked="1">
                            <a href="/out/O/W6MDSSUFDJDWPPYB47W732QHH4?template=merchant&amp;element=offer_strip&amp;module=top_offer&amp;position=22&amp;offer_uuid=W6MDSSUFDJDWPPYB47W732QHH4&amp;merchant_uuid=06ClivhMbX75VUmtw1RR8pn&amp;source=https%3A%2F%2Fwww.retailmenot.com%2Fview%2Fabercrombie.com%3FeventReferenceId%3D8151d3e2-20b2-4a89-a023-5fc86daab96d%26from_worker%3D1%26outclicked%3Dtrue%26test_uuid%3D%26test_variant%3DA%26u%3D7NUIBVDXOBAZ3NDNM5PB34URQQ"
                                rel="nofollow sponsored"
                                class="group grid grid-cols-[theme(spacing.20)_auto] gap-x-2 sm:grid-cols-[theme(spacing.30)_auto] md:grid-cols-[theme(spacing.30)_auto_theme(spacing.48)] lg:gap-x-6"
                                data-discoverable="data-discoverable" data-component-class="offer_strip"
                                data-content-datastore="offer" data-content-uuid="W6MDSSUFDJDWPPYB47W732QHH4"
                                data-position="22" x-data="outclickHandler({ 'siteLink': '?u=W6MDSSUFDJDWPPYB47W732QHH4&amp;outclicked=true', 'offerType': 'SALE', 'requestSlug': 'abercrombie.com', 'offerUuid': 'W6MDSSUFDJDWPPYB47W732QHH4' })" @click="juggleTabs">
                                <div class="text-purple-700 col-start-1 row-span-3 row-start-1 mx-0 flex w-fit flex-col self-center text-center text-xl font-extrabold uppercase tracking-tight sm:row-span-3 sm:row-start-1 sm:mx-auto sm:pb-2 sm:pt-1 md:mx-0 md:text-3xl lg:tracking-wide"
                                    bis_skin_checked="1">
                                    <p class="leading-none">
                                        25%
                                    </p>
                                    <p class="leading-none">
                                        Off</p>
                                </div>
                                <div class="col-start-2 row-start-1 mt-auto [&amp;&gt;:after]:text-gray-500"
                                    bis_skin_checked="1">
                                    <span
                                        class="bg-gray-200 mr-1 rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold capitalize text-black max-md:py-0.5 md:inline-block">
                                        Online &amp; In-Store
                                    </span>
                                </div>
                                <h3
                                    class="col-start-2 row-start-2 mt-1 self-center justify-self-start pr-3 font-sans text-base font-medium capitalize tracking-tight sm:text-[22px] lg:col-span-1 lg:font-semibold lg:leading-normal">
                                    25% off Qualifying order of $75 for MyAbercrombie VIP birthday members
                                </h3>
                                <div class="col-start-2 row-start-3 mr-2 flex flex-wrap items-center gap-x-2 overflow-hidden text-ellipsis max-sm:h-6 max-sm:pb-5 [&amp;&gt;*:first-child]:bg-[#D28AFF]/20 [&amp;&gt;*:nth-child(n+2)]:bg-gray-100 max-sm:[&amp;&gt;*:nth-child(n+3)]:hidden [&amp;&gt;*]:mt-1 [&amp;&gt;:after]:mx-1 [&amp;&gt;:after]:pl-2"
                                    bis_skin_checked="1">
                                    <div class="rounded-[4px] px-1 text-center font-sans text-[12px] font-semibold text-black"
                                        bis_skin_checked="1">
                                        8 interested users
                                    </div>
                                </div>
                                <div class="col-start-3 row-span-3 row-start-1 my-auto hidden flex-col md:flex"
                                    bis_skin_checked="1">
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white"
                                        bis_skin_checked="1">
                                        Online Deal</div>
                                    <div class="relative mb-2 flex h-12 w-full items-center justify-center overflow-hidden rounded-3xl bg-purple-700 text-base font-bold leading-none tracking-wider text-white"
                                        bis_skin_checked="1">
                                        In-Store Details</div>
                                </div>
                            </a>
                            <details
                                class="group mt-3 flex list-none flex-col border-t pt-2 max-md:hidden max-md:border-gray-200"
                                x-data="{ focusedTab: 0, detailsOpen: false }">
                                <summary class="flex cursor-pointer list-none items-center text-xs font-semibold"
                                    data-content-datastore="offer" data-content-uuid="W6MDSSUFDJDWPPYB47W732QHH4"
                                    data-component-class="see_details" data-position="22"
                                    x-on:click="detailsOpen = !detailsOpen; $nextTick(() =&gt; { window.blizzard?.trackClickEvent({ type: 'click', event: $event, element: $el, followLink: false }) });">
                                    <div class="ml-auto flex flex-row" bis_skin_checked="1">
                                        <span x-text="detailsOpen ? 'Hide Details' : 'See Details' ">See Details</span>
                                        <div class="relative ml-2 h-3 w-3" bis_skin_checked="1">
                                            <svg class="fill-current absolute top-0 h-3 w-3 rotate-0 stroke-1 opacity-100 transition-all duration-300 group-open:rotate-90 group-open:scale-50 group-open:opacity-0"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H240v176c0 8.844-7.156 16.01-16 16.01s-16-7.21-16-16.01V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99s16 7.15 16 15.99v176h176c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg> <svg
                                                class="fill-current absolute top-0 h-3 w-3 -rotate-90 stroke-1 opacity-0 transition-all duration-300 group-open:rotate-0 group-open:opacity-100"
                                                fill="currentColor" viewBox="0 0 448 512">
                                                <path
                                                    d="M432 256c0 8.8-7.2 16-16 16H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h384c8.8 0 16 7.2 16 16">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </summary>
                                <template x-if="detailsOpen">
                                    <div>
                                        <div class="prose mt-3 w-1/2 font-proxima text-sm">
                                            <p>Fragrance, Cologne, Body Care, Candles, Down, Leather, Suede, Cashmere,
                                                Multipacks, Gift Sets, Men's Watches, or 3rd party Items. Other exclusions
                                                may apply. Does not apply to gift wrapping</p>
                                            <p>Limited Time! Online &amp; In Stores! Get 25% off Qualifying order of $75 for
                                                MyAbercrombie VIP birthday members. Purchase quantities may be limited.
                                                Other restrictions may apply. One time use only.</p>
                                        </div>
                                    </div>
                                </template>
                            </details>
                        </div>
                    </div>
                    <div data-component-name="unverified_offers" bis_skin_checked="1">
                    </div>

                </div>
                <div class="relative mt-16 overflow-x-auto [grid-area:table]" bis_skin_checked="1">
                    <table class="w-full text-left text-sm text-gray-500 rtl:text-right">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                            <tr>
                                <th class="px-6 py-3" scope="col">
                                    Discount
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Offer Description
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Expiration Date
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b bg-white">
                                <td class="px-6 py-4">
                                    15%
                                </td>
                                <td class="px-6 py-4">
                                    15% Off Sitewide
                                </td>
                                <td class="px-6 py-4">
                                    Aug 24, 2025
                                </td>
                            </tr>
                            <tr class="border-b bg-white">
                                <td class="px-6 py-4">
                                    30%
                                </td>
                                <td class="px-6 py-4">
                                    30% off Your Order
                                </td>
                                <td class="px-6 py-4">
                                    Jul 20, 2020
                                </td>
                            </tr>
                            <tr class="border-b bg-white">
                                <td class="px-6 py-4">
                                    25%
                                </td>
                                <td class="px-6 py-4">
                                    Today Only! 25% Off Sitewide
                                </td>
                                <td class="px-6 py-4">
                                    Jun 24, 2019
                                </td>
                            </tr>
                            <tr class="border-b bg-white">
                                <td class="px-6 py-4">
                                    15%
                                </td>
                                <td class="px-6 py-4">
                                    Extra 15% Off In-App Purchases
                                </td>
                                <td class="px-6 py-4">
                                    Jul 16, 2025
                                </td>
                            </tr>
                            <tr class="border-b bg-white">
                                <td class="px-6 py-4">
                                    $20
                                </td>
                                <td class="px-6 py-4">
                                    Up To 50% Off Summer Sale Favorites + $20 OFF EVERY $100
                                </td>
                                <td class="px-6 py-4">
                                    Jun 19, 2019
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="[grid-area:content]" bis_skin_checked="1">
                    <div class="my-4 h-2 border-y lg:hidden" bis_skin_checked="1"></div>
                    <h2 class="my-6 text-2xl font-semibold">About</h2>

                    <div class="mb-14 lg:columns-2 lg:gap-x-12" bis_skin_checked="1">
                        Content About
                    </div>

                    <h2 class="my-4 text-xs font-bold uppercase">How To Apply</h2>
                    <div class="prose mb-14 text-sm" bis_skin_checked="1">
                        Content how to apply

                    </div>

                    <h3 class="mb-6 text-2xl font-semibold">FAQs</h3>
                    <div class="mb-14" bis_skin_checked="1">
                        Thông tin content FAQs
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
