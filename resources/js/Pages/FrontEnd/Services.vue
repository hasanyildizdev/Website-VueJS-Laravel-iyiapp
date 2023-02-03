<script setup>
</script>
<template>
    <section id="services" class="min-h-screen bg-black py-20 lg:py-14 z-10">
        <div class="w-full h-full lg:px-40 ">
            <div class="w-full flex items-center lg:justify-start justify-center">
                <p class=" text-white text-3xl lg:text-5xl font-tech">{{ $t('softwareservice') }}</p>
            </div>

            <div class="mt-10 lg:mt-16 lg:h-80 flex flex-col lg:flex-row items-center justify-between">
                <div class=" relative rounded-3xl h-72 w-52 shadow-md shadow-purple2 hover:h-80 transition-all duration-300">
                    <div class=" absolute  w-full h-full flex">
                        <img src="/img/nature.webp" alt="Tech" class=" w-full h-full rounded-3xl object-cover">
                    </div>
                    <div class="pb-4 h-full w-full absolute flex flex-col items-center justify-end">
                        <p class=" text-white text-2xl font-tech "> {{ $t('webdesign') }} </p>
                        <p class=" text-white text-xl font-tech "> {{ $t('mobileapplication') }} </p>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0 relative rounded-3xl h-72 w-52 shadow-md shadow-brown hover:h-80 transition-all duration-300">
                    <div class=" absolute  w-full h-full flex">
                        <img src="/img/bird.webp" alt="Tech" class=" w-full h-full rounded-3xl object-cover">
                    </div>
                    <div class="pb-4 h-full w-full absolute flex flex-col items-center justify-end">
                        <p class=" text-white text-4xl font-tech ">UI/UX</p>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0  relative rounded-3xl h-72 w-52 shadow-md shadow-dark_blue hover:h-80 transition-all duration-300">
                    <div class=" absolute  w-full h-full flex">
                        <img src="/img/ocean.webp" alt="Tech" class=" w-full h-full rounded-3xl object-cover ">
                    </div>
                    <div class="pb-4 h-full w-full absolute flex flex-col items-center justify-end">
                        <p class=" text-white text-2xl font-tech ">Orginal</p>
                        <p class=" text-white text-2xl font-tech "> {{ $t('moderndesign') }} </p>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0 flex flex-col items-center justify-center cart h-72 w-80 hover:scale-90 lg:hover:scale-105 transition-all duration-300 scale-75 lg:scale-100 ">
                    <div class=" h-72 w-72 flex items-center justify-center ">
                        <img src="/img/responsive.webp" alt="Responsive Image" class="w-72 absolute">
                        <img src="/img/icon.png" alt="Responsive Image" class="w-16 absolute pb-16 ml-6">
                        <div class="pl-10 flex flex-col items-center justify-center  z-10 pt-10">
                            <p class="mb-2 text-white text-lg font-bold">www.iyiapp.com</p>
                        </div>
                    </div>
                    <p class=" w-full text-2xl flex items-center justify-center text-white font-tech ">RESPONSIVE DESIGN
                    </p>
                </div>
            </div>
            <div class=" w-full flex flex-col lg:flex-row items-center justify-center lg:py-10 px-4 pt-6 text-center">
                <p class=" text-white font-tech text-lg lg:text-3xl">{{ $t('limitless') }}</p>
                <a href="#contact" class="lg:ml-4 myButton mt-4 lg:mt-0"> {{ $t('getoffer') }} </a>
            </div>
        </div>
    </section>
</template>