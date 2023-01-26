<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { EffectCoverflow, Pagination ,Navigation} from "swiper";
import "swiper/css";
import "swiper/css/effect-coverflow";
import "swiper/css/navigation";
import "swiper/css/pagination";
import '/resources/css/style.css';
const props = defineProps({
    projects: Object,
});

</script>
<template>

    <Swiper
        :effect="'coverflow'"
        :grabCursor="true"
        :loop="true"
        :centeredSlides="true"
        :slidesPerView="'auto'"
        :coverflowEffect="{rotate: 50,stretch: 0, depth: 100, modifier: 1, slideShadows: true,}"
        :pagination="true"
        :modules="[EffectCoverflow,Pagination,Navigation]"
        :navigation="true"
        :style="{
            '--swiper-pagination-color': '#FFFFFF',
         }">
        <SwiperSlide v-for="projects in projects.data" :key="projects.id"  class=" w-96 flex flex-col items-center justify-center lg:mx-16 mb-24 ">
            <div class="pt-16 relative w-72 lg:w-80 flex items-center justify-center">
                <img src="/img/pc.webp" alt="Frame" class="  w-80 h-auto rounded-3xl">
                <div class="absolute mb-4 w-56 px-1 lg:px-0 lg:w-60 flex items-center justify-center">
                    <img :src="projects.image" :alt="projects.name" class=" w-56 h-32 lg:h-36 lg:w-60 object-cover">
                </div>
            </div>
            <p class="mt-2 text-white font-lale text-4xl">{{ projects.name }}</p>
            <p class="text-white font-tech text-lg">www.iyiapp.com</p>
            <a :href="projects.url" class="mt-2 myButton"> {{ $t('view') }} </a>
        </SwiperSlide>
    </Swiper>
</template>