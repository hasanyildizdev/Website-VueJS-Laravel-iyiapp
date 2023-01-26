<script setup>
import Swiper from '@/Pages/FrontEnd/Swiper.vue';
const props = defineProps({
    projects: Object,
});

</script>
<template>
    <section id="projects" class=" bg-black min-h-screen py-14">
        <div class=" px-4 lg:px-40 ">
            <div class=" w-full flex flex-row items-center justify-center">
                <div class=" w-full flex flex-col items-center justify-center">
                    <div class=" w-full flex items-center justify-start">
                        <p class=" text-white text-3xl lg:text-5xl font-tech"> {{ $t('webprojects') }} </p>
                    </div>
                    <div class="w-full flex items-center justify-center ">
                        <Swiper :projects="projects"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>