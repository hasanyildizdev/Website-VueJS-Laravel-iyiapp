<script setup>
import Header from "@/Pages/FrontEnd/Header.vue";
import Footer from "@/Pages/FrontEnd/Footer.vue";
import GoTopButton from "@/Pages/FrontEnd/GoTopButton.vue";

</script>
<template>
    <div >
        <div class=" h-screen fixed w-full -z-10 bg-black flex items-center justify-center">
            <video width="" height="" preload autoplay muted loop  id="HasanYildiz" poster="/img/black.webp" class="object-cover">
                <source src="/img/world.webm" type="video/webm"/>
            </video>    
        </div>

        <Header/>
            <main>
                <slot/>
            </main>
        <Footer/>
        <GoTopButton/>
    </div>
</template>