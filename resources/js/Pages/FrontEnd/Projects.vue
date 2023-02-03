<script setup>
</script>
<template>
    <section id="projects" class=" bg-black min-h-screen py-14">
        <div class="w-full px-4 lg:px-40 ">
            <div class="flex flex-row items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <div class=" w-full flex items-center justify-start">
                        <p class=" text-white text-3xl lg:text-5xl font-tech"> {{ $t('webprojects') }} </p>
                    </div>
                    <div class="flex flex-row items-center justify-center">
                        <button class="mb-24 mr-2">
                            <img src="/img/arrow_l.webp" alt="Button Left" class="w-6 h-auto">
                        </button>
                        <div class="hidden lg:flex">
                            <div class=" mx-2 flex flex-col items-center justify-center ">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="flex items-center justify-center hover:scale-105 transition-all duration-300">
                                        <img src="/img/pc.webp" alt="Frame" class=" w-96 h-auto rounded-3xl">
                                        <img src="/img/sehri.png" alt="Sehri" class="w-72 h-44 absolute mb-6">
                                    </div>
                                    <p class="mt-2 text-white font-lale text-4xl">ŞEHRİ ZİYAFET</p>
                                    <p class="text-white font-tech text-lg">www.iyiapp.com</p>
                                    <a href="#contact" class="mt-2 myButton"> {{ $t('view') }} </a>
                                </div>
                            </div>
                            <div class=" mx-2 flex flex-col items-center justify-center">
                                <div class=" flex flex-col items-center justify-center">
                                    <div class="flex items-center justify-center hover:scale-105 transition-all duration-300">
                                        <img src="/img/pc.webp" alt="Frame" class=" w-96 h-auto rounded-3xl">
                                        <img src="/img/umut.png" alt="Sehri" class="w-72 h-44 absolute mb-6">
                                    </div>
                                    <p class="mt-2 text-white font-lale text-4xl">UMUT YIKAMA</p>
                                    <p class="text-white font-tech text-lg">www.iyiapp.com</p>
                                    <a href="#contact" class="mt-2 myButton"> {{ $t('view') }} </a>
                                </div>
                            </div>
                            <div class=" mx-2 flex flex-col items-center justify-center">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="flex items-center justify-center hover:scale-105 transition-all duration-300">
                                        <img src="/img/pc.webp" alt="Frame" class=" w-96 h-auto rounded-3xl">
                                        <img src="/img/msk.png" alt="Sehri" class="w-72 h-44 absolute mb-6">
                                    </div>
                                    <p class="mt-2 text-white font-lale text-4xl">MSK SERA</p>
                                    <p class="text-white font-tech text-lg">www.iyiapp.com</p>
                                    <a href="#contact" class="mt-2 myButton"> {{ $t('view') }} </a>
                                </div>
                            </div>
                        </div>
                        <button class="mb-24 ml-2">
                            <img src="/img/arrow_r.webp" alt="Button Right" class="w-6 h-auto">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>