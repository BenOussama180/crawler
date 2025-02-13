<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;

name('home');
middleware(['redirect-to-dashboard']);

new class extends Component {};

?>

<x-layouts.marketing>

    @volt('home')
    <div class="relative flex flex-col items-center justify-center w-full h-auto overflow-hidden" x-cloak>

        <svg class="absolute top-0 left-0 w-7/12 -ml-40 -translate-x-1/2 fill-current opacity-10 dark:opacity-5 text-slate-400" viewBox="0 0 978 615" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M978 216.141C656.885 277.452 321.116 341.682 0 402.993c39.425-4.071 128.449-11.563 167.843-15.912l6.661 22.46c59.138 174.752 275.144 254.906 438.792 172.235 48.902-72.088 119.911-180.018 171.073-255.946L978 216.141ZM611.485 405.155c-19.059 27.934-46.278 66.955-65.782 94.576-98.453 40.793-230.472-11.793-268.175-111.202-1.096-2.89-1.702-5.965-3.379-11.972l382.99-38.6c-16.875 24.845-31.224 46.049-45.654 67.198Z" />
            <path d="m262.704 306.481 1.336-28.817c.25-1.784.572-3.562.951-5.323 17.455-81.121 65.161-136.563 144.708-159.63 81.813-23.725 157.283-5.079 211.302 61.02 6.466 7.912 23.695 33.305 23.695 33.305s107.788-20.295 102.487-22.242C710.939 81.362 569.507-31.34 398.149 8.04 221.871 48.55 144.282 217.1 160.797 331.317c23.221-5.568 78.863-19.192 101.907-24.836Z" />
            <path d="M890.991 458.296c-57.168 2.205-69.605 14.641-71.809 71.809-2.205-57.168-14.641-69.604-71.809-71.809 57.168-2.204 69.604-14.641 71.809-71.809 2.204 57.169 14.641 69.605 71.809 71.809Z" />
            <path d="M890.991 458.296c-57.168 2.205-69.605 14.641-71.809 71.809-2.205-57.168-14.641-69.604-71.809-71.809 57.168-2.204 69.604-14.641 71.809-71.809 2.204 57.169 14.641 69.605 71.809 71.809Z" />
            <path d="M952.832 409.766c-21.048.812-25.626 5.39-26.438 26.438-.811-21.048-5.39-25.626-26.437-26.438 21.047-.811 25.626-5.39 26.437-26.437.812 21.047 5.39 25.626 26.438 26.437Z" />
        </svg>
        <svg class="absolute top-0 right-0 w-7/12 -mr-40 translate-x-1/2 fill-current opacity-10 dark:opacity-5 text-slate-400" viewBox="0 0 978 615" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M978 216.141C656.885 277.452 321.116 341.682 0 402.993c39.425-4.071 128.449-11.563 167.843-15.912l6.661 22.46c59.138 174.752 275.144 254.906 438.792 172.235 48.902-72.088 119.911-180.018 171.073-255.946L978 216.141ZM611.485 405.155c-19.059 27.934-46.278 66.955-65.782 94.576-98.453 40.793-230.472-11.793-268.175-111.202-1.096-2.89-1.702-5.965-3.379-11.972l382.99-38.6c-16.875 24.845-31.224 46.049-45.654 67.198Z" />
            <path d="m262.704 306.481 1.336-28.817c.25-1.784.572-3.562.951-5.323 17.455-81.121 65.161-136.563 144.708-159.63 81.813-23.725 157.283-5.079 211.302 61.02 6.466 7.912 23.695 33.305 23.695 33.305s107.788-20.295 102.487-22.242C710.939 81.362 569.507-31.34 398.149 8.04 221.871 48.55 144.282 217.1 160.797 331.317c23.221-5.568 78.863-19.192 101.907-24.836Z" />
            <path d="M890.991 458.296c-57.168 2.205-69.605 14.641-71.809 71.809-2.205-57.168-14.641-69.604-71.809-71.809 57.168-2.204 69.604-14.641 71.809-71.809 2.204 57.169 14.641 69.605 71.809 71.809Z" />
            <path d="M890.991 458.296c-57.168 2.205-69.605 14.641-71.809 71.809-2.205-57.168-14.641-69.604-71.809-71.809 57.168-2.204 69.604-14.641 71.809-71.809 2.204 57.169 14.641 69.605 71.809 71.809Z" />
            <path d="M952.832 409.766c-21.048.812-25.626 5.39-26.438 26.438-.811-21.048-5.39-25.626-26.437-26.438 21.047-.811 25.626-5.39 26.437-26.437.812 21.047 5.39 25.626 26.438 26.437Z" />
        </svg>

        <div class="flex items-center w-full max-w-6xl px-8 pt-12 pb-20 mx-auto">
            <div class="container relative max-w-4xl mx-auto mt-20 text-center sm:mt-24 lg:mt-32">
                <h1 class="mt-5 text-4xl font-light leading-tight tracking-tight text-center dark:text-white text-slate-800 sm:text-5xl md:text-8xl">
                    The Beginning of Your<br> Data-Driven Success.</h1>
                <p class="w-full max-w-2xl mx-auto mt-8 text-lg dark:text-white/60 text-slate-500">The ultimate
                    automation platform for web crawling, content scraping, and intelligent report generation. </p>
                <p class="w-full max-w-2xl mx-auto mt-4 text-md dark:text-white/60 text-slate-500">
                    Effortlessly collect, analyze, and present data from the web and social media. Automate your workflows with precision and ease. </p>
                <div class="flex items-center justify-center w-full max-w-sm px-5 mx-auto mt-8 space-x-5">
                    <x-ui.button type="secondary" tag="a" href="{{ route('register') }}">Sign Up</x-ui.button>
                    <x-ui.button type="primary" tag="a" href="{{ route('dashboard') }}">See It in Action</x-ui.button>
                </div>
            </div>
        </div>
        <div class="py-12 mx-auto border-t px-7 max-w-7xl md:px-12 xl:px-20 sm:py-24 border-zinc-200">
            <section>
                <div class="relative w-full text-center">
                    <h2 class="text-3xl font-medium tracking-tighter text-left sm:text-4xl md:text-center lg:text-5xl">Master the Art of Data Automation
                    </h2>
                    <p class="max-w-2xl mx-auto mt-4 text-sm font-medium text-left sm:text-base md:text-center md:text-balance text-zinc-500">Harness the full potential of automated web crawling, smart content scraping, and dynamic report generation. Transform your workflows with precision and efficiency.</p>
                </div>
                <div class="text-center">
                    <div class="grid grid-cols-2 mt-12 text-center gap-x-6 gap-y-12 lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
                        <div>
                            <div class="flex items-center justify-center mx-auto rounded-full bg-zinc-100 size-12">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                    <path d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm0,72c0,37.07-13.66,67.16-40.6,89.42A129.3,129.3,0,0,1,128,223.62a128.25,128.25,0,0,1-38.92-21.81C61.82,179.51,48,149.3,48,112l0-56,160,0ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"></path>
                                </svg>
                            </div>
                            <div class="mt-6">
                                <h3 class="font-medium text-zinc-900">Secure Authentication</h3>
                                <p class="mt-2 text-sm text-zinc-500">
                                    secure login, registration, and two-factor authentication.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-center mx-auto rounded-full bg-zinc-100 size-12">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                    <path d="M220.27,158.54a8,8,0,0,0-7.7-.46,20,20,0,1,1,0-36.16A8,8,0,0,0,224,114.69V72a16,16,0,0,0-16-16H171.78a35.36,35.36,0,0,0,.22-4,36.11,36.11,0,0,0-11.36-26.24,36,36,0,0,0-60.55,23.62,36.56,36.56,0,0,0,.14,6.62H64A16,16,0,0,0,48,72v32.22a35.36,35.36,0,0,0-4-.22,36.12,36.12,0,0,0-26.24,11.36,35.7,35.7,0,0,0-9.69,27,36.08,36.08,0,0,0,33.31,33.6,35.68,35.68,0,0,0,6.62-.14V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V165.31A8,8,0,0,0,220.27,158.54ZM208,208H64V165.31a8,8,0,0,0-11.43-7.23,20,20,0,1,1,0-36.16A8,8,0,0,0,64,114.69V72h46.69a8,8,0,0,0,7.23-11.43,20,20,0,1,1,36.16,0A8,8,0,0,0,161.31,72H208v32.23a35.68,35.68,0,0,0-6.62-.14A36,36,0,0,0,204,176a35.36,35.36,0,0,0,4-.22Z"></path>
                                </svg>
                            </div>
                            <div class="mt-6">
                                <h3 class="font-medium text-zinc-900">Fully Automated</h3>
                                <p class="mt-2 text-sm text-zinc-500">
                                    Set it up once and let it run—no human intervention needed.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-center mx-auto rounded-full bg-zinc-100 size-12">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                    <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path>
                                </svg>
                            </div>
                            <div class="mt-6">
                                <h3 class="font-medium text-zinc-900">Automated Web Crawling</h3>
                                <p class="mt-2 text-sm text-zinc-500">
                                    Seamlessly gather data from websites and RSS feeds.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-center mx-auto rounded-full bg-zinc-100 size-12">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                    <path d="M232,120H215.63a87.27,87.27,0,0,0-7.74-28.88l14.18-8.19a8,8,0,0,0-8-13.86l-14.2,8.2a88.78,88.78,0,0,0-21.14-21.14l8.2-14.2a8,8,0,0,0-13.86-8l-8.19,14.18A87.27,87.27,0,0,0,136,40.37V24a8,8,0,0,0-16,0V40.37a87.27,87.27,0,0,0-28.88,7.74L82.93,33.93a8,8,0,0,0-13.86,8l8.2,14.2A88.78,88.78,0,0,0,56.13,77.27l-14.2-8.2a8,8,0,0,0-8,13.86l14.18,8.19A87.27,87.27,0,0,0,40.37,120H24a8,8,0,0,0,0,16H40.37a87.27,87.27,0,0,0,7.74,28.88l-14.18,8.19a8,8,0,0,0,4,14.93,7.92,7.92,0,0,0,4-1.07l14.2-8.2a88.78,88.78,0,0,0,21.14,21.14l-8.2,14.2a8,8,0,0,0,13.86,8l8.19-14.18A87.27,87.27,0,0,0,120,215.63V232a8,8,0,0,0,16,0V215.63a87.27,87.27,0,0,0,28.88-7.74l8.19,14.18a8,8,0,0,0,13.86-8l-8.2-14.2a88.78,88.78,0,0,0,21.14-21.14l14.2,8.2A8,8,0,0,0,225,184a8,8,0,0,0-2.92-10.93l-14.18-8.19A87.27,87.27,0,0,0,215.63,136H232a8,8,0,0,0,0-16ZM128,56a72.08,72.08,0,0,1,71.54,64H132.62L99.16,62.05A71.58,71.58,0,0,1,128,56ZM56,128A72,72,0,0,1,85.31,70.06L118.76,128,85.31,185.94A72,72,0,0,1,56,128Zm72,72A71.58,71.58,0,0,1,99.16,194L132.62,136h66.92A72.08,72.08,0,0,1,128,200Z"></path>
                                </svg>
                            </div>
                            <div class="mt-6">
                                <h3 class="font-medium text-zinc-900">Smart Content Scraping</h3>
                                <p class="mt-2 text-sm text-zinc-500">
                                    Extract relevant information based on your keywords and queries.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-center mx-auto rounded-full bg-zinc-100 size-12">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                                    <path d="M208,32H80A16,16,0,0,0,64,48V64H48A16,16,0,0,0,32,80V208a16,16,0,0,0,16,16H176a16,16,0,0,0,16-16V192h16a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM80,48H208v69.38l-16.7-16.7a16,16,0,0,0-22.62,0L93.37,176H80Zm96,160H48V80H64v96a16,16,0,0,0,16,16h96Zm32-32H116l64-64,28,28v36Zm-88-64A24,24,0,1,0,96,88,24,24,0,0,0,120,112Zm0-32a8,8,0,1,1-8,8A8,8,0,0,1,120,80Z"></path>
                                </svg>
                            </div>
                            <div class="mt-6">
                                <h3 class="font-medium text-zinc-900">Dynamic Report Generation</h3>
                                <p class="mt-2 text-sm text-zinc-500">
                                    Create professional Word and PowerPoint reports with pre-defined templates.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="py-12 mx-auto border-t px-7 max-w-7xl md:px-12 xl:px-20 sm:py-24 border-zinc-200">
            <section>
                <div class="relative w-full text-center">
                    <h2 class="text-3xl font-medium tracking-tighter text-left sm:text-4xl md:text-center lg:text-5xl">Automate Your Data Discovery</h2>
                    <p class="max-w-2xl mx-auto mt-4 text-sm font-medium text-left sm:text-base md:text-center md:text-balance text-zinc-500">Effortlessly crawl the web, extract valuable insights, and generate structured reports—all on autopilot. </p>
                </div>
                <div x-data="{ on: false, billing: 'Monthly',
            toggleRepositionMarker(toggleButton){
                this.$refs.marker.style.width=toggleButton.offsetWidth + 'px';
                this.$refs.marker.style.height=toggleButton.offsetHeight + 'px';
                this.$refs.marker.style.left=toggleButton.offsetLeft + 'px';
            }
         }" x-init="
                setTimeout(function(){
                    toggleRepositionMarker($refs.monthly);
                    $refs.marker.classList.remove('opacity-0');
                    setTimeout(function(){
                        $refs.marker.classList.add('duration-300', 'ease-out');
                    }, 10);
                }, 1);
        " class="w-full max-w-6xl mx-auto mt-12 mb-2 md:my-12">

                    <div class="relative flex items-center justify-start pb-5 -translate-y-2 md:justify-center">
                        <div class="relative inline-flex items-center justify-center w-auto p-1 text-center -translate-y-3 border-2 rounded-full md:mx-auto border-zinc-900">
                            <div x-ref="monthly" x-on:click="billing='Monthly'; toggleRepositionMarker($el)" :class="{ 'text-white': billing == 'Monthly', 'text-zinc-900' : billing != 'Monthly' }" class="relative z-20 px-3.5 py-1 text-sm font-medium leading-6 rounded-full duration-300 ease-out cursor-pointer text-white">
                                Monthly
                            </div>
                            <div x-ref="yearly" x-on:click="billing='Yearly'; toggleRepositionMarker($el)" :class="{ 'text-white': billing == 'Yearly', 'text-zinc-900' : billing != 'Yearly' }" class="relative z-20 px-3.5 py-1 text-sm font-medium leading-6 rounded-full duration-300 ease-out cursor-pointer text-zinc-900">
                                Yearly
                            </div>
                            <div x-ref="marker" class="absolute left-0 z-10 w-1/2 h-full duration-300 ease-out" style="width: 81px; height: 32px; left: 4px;">
                                <div class="w-full h-full rounded-full shadow-sm bg-zinc-900"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col flex-wrap lg:flex-row lg:space-x-5">

                        <div x-show="(billing == 'Monthly' &amp;&amp; 'price_1Pg4y6CzMorJyh54SfX1AkfE' != '') || (billing == 'Yearly' &amp;&amp; 'price_1PgsWiCzMorJyh54yEHhAmih' != '')" class="flex-1 w-full px-0 mx-auto mb-6 md:max-w-lg lg:mb-0">
                            <div class="flex flex-col h-full bg-white border-2 shadow-sm lg:mb-10 rounded-xl border-zinc-200 sm:mb-0">
                                <div class="px-8 pt-8">
                                    <span class="px-4 py-1 text-base font-medium text-white rounded-full bg-zinc-900 text-uppercase" data-primary="indigo-700">
                                        Basic
                                    </span>
                                </div>

                                <div class="px-8 mt-5">
                                    <span class="text-5xl font-bold">$<span x-text="billing == 'Monthly' ? '5' : '50'">5</span></span>
                                    <span class="text-xl font-bold text-zinc-500"><span x-text="billing == 'Monthly' ? '/mo' : '/yr'">/mo</span></span>
                                </div>

                                <div class="px-8 pb-10 mt-3">
                                    <p class="text-base leading-7 text-zinc-500">Signup for the Basic User Plan to access all the basic features.</p>
                                </div>

                                <div class="p-8 mt-auto rounded-b-lg bg-zinc-50">
                                    <ul class="flex flex-col">
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Basic Feature Example 1
                                                </span>
                                            </span>
                                        </li>
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Basic Feature Example 2
                                                </span>
                                            </span>
                                        </li>
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Basic Feature Example 3
                                                </span>
                                            </span>
                                        </li>
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Basic Feature Example 4
                                                </span>
                                            </span>
                                        </li>
                                    </ul>

                                    <div class="mt-8">
                                        <a href="/settings/subscription" style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 w-full bg-black">



                                            <span class="fi-btn-label">
                                                Get Started
                                            </span>



                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="(billing == 'Monthly' &amp;&amp; 'price_1PgEfJCzMorJyh54DWuIQz0r' != '') || (billing == 'Yearly' &amp;&amp; 'price_1PgsVTCzMorJyh54HAyXZDzI' != '')" class="flex-1 w-full px-0 mx-auto mb-6 md:max-w-lg lg:mb-0">
                            <div class="flex flex-col h-full bg-white border-2 shadow-sm lg:mb-10 rounded-xl border-zinc-900 lg:scale-105 sm:mb-0">
                                <div class="px-8 pt-8">
                                    <span class="px-4 py-1 text-base font-medium text-white rounded-full bg-zinc-900 text-uppercase" data-primary="indigo-700">
                                        Premium
                                    </span>
                                </div>

                                <div class="px-8 mt-5">
                                    <span class="text-5xl font-bold">$<span x-text="billing == 'Monthly' ? '8' : '80'">8</span></span>
                                    <span class="text-xl font-bold text-zinc-500"><span x-text="billing == 'Monthly' ? '/mo' : '/yr'">/mo</span></span>
                                </div>

                                <div class="px-8 pb-10 mt-3">
                                    <p class="text-base leading-7 text-zinc-500">Signup for our premium plan to access all our Premium Features.</p>
                                </div>

                                <div class="p-8 mt-auto rounded-b-lg bg-zinc-50">
                                    <ul class="flex flex-col">
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Premium Feature Example 1
                                                </span>
                                            </span>
                                        </li>
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Premium Feature Example 2
                                                </span>
                                            </span>
                                        </li>
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Premium Feature Example 3
                                                </span>
                                            </span>
                                        </li>
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Premium Feature Example 4
                                                </span>
                                            </span>
                                        </li>
                                    </ul>

                                    <div class="mt-8">
                                        <a href="/settings/subscription" style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 w-full bg-black">



                                            <span class="fi-btn-label">
                                                Get Started
                                            </span>



                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="(billing == 'Monthly' &amp;&amp; 'price_1PgEfeCzMorJyh54XyPpktzr' != '') || (billing == 'Yearly' &amp;&amp; 'price_1PgsIrCzMorJyh54vV8Iwldn' != '')" class="flex-1 w-full px-0 mx-auto mb-6 md:max-w-lg lg:mb-0">
                            <div class="flex flex-col h-full bg-white border-2 shadow-sm lg:mb-10 rounded-xl border-zinc-200 sm:mb-0">
                                <div class="px-8 pt-8">
                                    <span class="px-4 py-1 text-base font-medium text-white rounded-full bg-zinc-900 text-uppercase" data-primary="indigo-700">
                                        Pro
                                    </span>
                                </div>

                                <div class="px-8 mt-5">
                                    <span class="text-5xl font-bold">$<span x-text="billing == 'Monthly' ? '12' : '120'">12</span></span>
                                    <span class="text-xl font-bold text-zinc-500"><span x-text="billing == 'Monthly' ? '/mo' : '/yr'">/mo</span></span>
                                </div>

                                <div class="px-8 pb-10 mt-3">
                                    <p class="text-base leading-7 text-zinc-500">Gain access to our pro features with the pro plan.</p>
                                </div>

                                <div class="p-8 mt-auto rounded-b-lg bg-zinc-50">
                                    <ul class="flex flex-col">
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Pro Feature Example 1
                                                </span>
                                            </span>
                                        </li>
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Pro Feature Example 2
                                                </span>
                                            </span>
                                        </li>
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Pro Feature Example 3
                                                </span>
                                            </span>
                                        </li>
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                <span class="text-zinc-700">
                                                    Pro Feature Example 4
                                                </span>
                                            </span>
                                        </li>
                                    </ul>

                                    <div class="mt-8">
                                        <a href="/settings/subscription" class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 w-full bg-black">

                                            <span class="fi-btn-label">
                                                Get Started
                                            </span>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="w-full mt-0 mb-8 text-center text-zinc-500 sm:my-10">All plans are fully configurable in the Admin Area.</p>
            </section>
        </div>
        <div class="flex flex-col items-center justify-between py-10 border-t border-solid lg:flex-row border-gray">
            <ul class="flex flex-wrap mr-10 space-x-5 text-xs">
                <li class="mb-6 text-center flex-full lg:flex-none lg:mb-0">© 2025 INDUSTRICOM GROUP, All rights reserved.</li>
                <li class="lg:ml-6">
                    <a href="#_" class="relative inline-block text-black group">
                        <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-0"></span>
                        <span>Privacy Policy</span>
                    </a>
                </li>
                <li class="lg:ml-6">
                    <a href="#_" class="relative inline-block text-black group">
                        <span class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-0"></span>
                        <span>Terms and Conditions</span>
                    </a>
                </li>
            </ul>

            <ul class="flex items-center mt-10 space-x-3 lg:mt-0">
                <li>
                    <a href="#" class="text-zinc-600 hover:text-zinc-900">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-zinc-600 hover:text-zinc-900">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-zinc-600 hover:text-zinc-900">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-zinc-600 hover:text-zinc-900">
                        <span class="sr-only">GitHub</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-zinc-600 hover:text-zinc-900">
                        <span class="sr-only">Dribbble</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @endvolt

</x-layouts.marketing>