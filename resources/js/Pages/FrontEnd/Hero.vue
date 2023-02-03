<script setup>
</script>
<template>
    <section id="hero" class="w-full h-screen bg-black">
        <div  class="h-screen w-full flex items-center">
                <div class=" lg:mt-10 mx-4 lg:ml-10 flex flex-col z-10">
                    <h1 class="  text-purple2 text-3xl lg:text-5xl font-lale animate-[leftToRight_2s]">IYIAPP {{$t('software')}}</h1>
                    <h1 class="lg:mt-4 text-white  font-tech text-lg lg:text-3xl animate-[rightToLeft_3s]">{{ $t('unlimited') }}</h1>
                    <h2 class="hidden lg:block mt-4 text-white font-roboto text-justify lg:text-lg animate-[leftToRight_2s]">
                        {{$t('hero_paragraph1') }} <br/>
                        {{$t('hero_paragraph2')}} <br/>
                        {{$t('hero_paragraph3') }} <br/>
                    </h2>
                    <div class="mt-6 lg:mt-10 w-full animate-[leftToRight_2s]">
                        <div class="w-full flex flex-col lg:flex-row items-start">
                            <a href="#contact" class="myButton">{{$t('getoffer')}}</a> 
                            <a href="#services" class="mt-4 lg:mt-0 lg:ml-4 myButton2">{{$t('services')}}</a> 
                        </div>
                    </div>
                </div>
                <div  class="w-full lg:w-auto flex justify-end absolute -bottom-36 lg:-bottom-44 lg:right-16 right-0">
                    <img src="/img/spaceship.webp" alt="Spaceship" class="w-44 lg:w-auto object-contain">
                </div>
            </div>            
    </section>
</template>