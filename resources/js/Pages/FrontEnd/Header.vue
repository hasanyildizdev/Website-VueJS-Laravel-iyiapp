<script setup>
import { ref, onMounted } from "vue";
const scrollBg = ref(false);
const setScrollBg = (value) => {
    scrollBg.value = value;
};
const showMenu = ref(false);
const setMenu = (value) =>{
    showMenu.value = value;
}

onMounted(() => {
    window.addEventListener("scroll", () => {
        return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
    });
    window.addEventListener('click', function(e){
        if (!document.getElementById('menu').contains(e.target) && (!document.getElementById('menu-logo').contains(e.target))){
        setMenu(false);
       }  
    });
});

function langEn(){ document.location="en";}
function langTr(){ document.location="tr";}

</script>
<template>
    <nav id="top" class="fixed w-full  h-16 flex items-center  z-20 "
    :class="{ ' h-10 transition-all duration-300 bg-black  bg-opacity-80': scrollBg, 'h-16 transition-all duration-300': !scrollBg, }">
    
        <div class=" w-full  h-full flex flex-row items-center justify-between">
            <a href="/" class="pl-4 flex flex-row items-center justify-center hover:scale-105 transition-all duration-300">
                <img src="/img/icon_purple.webp" alt="icon" class="w-8 h-auto">
                <div class="mt-1 pl-2 flex items-center justify-center">
                    <img src="/img/logo.webp" alt="Logo" class="h-8">
                </div>
            </a>

            <div class="hidden lg:flex items-center justify-center z-30">
                <ul class="flex flex-row items-center justify-center">
                    <li> <a href="/" class="navButton"> {{$t('home')}} </a> </li>
                    <li> <a href="#services" class="navButton"> {{ $t('services') }}  </a> </li>
                    <li> <a href="#projects" class="navButton"> {{$t('projects')}} </a> </li>
                    <li> <a href="#contact" class="navButton"> {{ $t('contact') }} </a> </li>
                </ul>
            </div>

            
            <div id="menu" class="lg:hidden absolute top-0 right-0 left-0 py-10 flex items-center justify-center z-30 bg-my_purple3"
            v-if="showMenu">
                <ul class="flex flex-col items-center justify-center">
                    <img src="/img/icon.webp" alt="icon" class="h-10 w-auto">
                    <p class="text-white pt-2">www.iyiapp.com</p>
                    <li> <a href="/" class="navButtonMobile py-4"> {{$t('home')}} </a> </li>
                    <li> <a href="#services" class="navButtonMobile"> {{ $t('services') }}  </a> </li>
                    <li> <a href="#projects" class="navButtonMobile py-4"> {{$t('projects')}} </a> </li>
                    <li> <a href="#contact" class="navButtonMobile "> {{ $t('contact') }} </a> </li>
                </ul>
            </div>
            
            <div class="flex flex-row items-center justify-center border-2 border-purple3 rounded-full px-1 py-1 mr-[1px]">
                <button @click="langEn" class=" flex items-center justify-center hover:scale-110" >
                    <img  src="/img/eng.webp" alt="English" class="h-6 object-contain" loading="lazy">
                </button>
                <button @click="langTr" class="pl-1 flex items-center justify-center hover:scale-110">
                    <img src="/img/tr.webp" alt="Turkish" class=" h-6 object-contain" loading="lazy">
                </button>
            </div>
        </div>
        <button id='menu-logo'  class="px-[1px] mb-[1px] flex lg:hidden items-center justify-center z-30" @click="setMenu(!showMenu)">
            <img  src="/img/menu.webp" alt="Menu" class="h-8 object-contain">
        </button>
    </nav>
</template>