<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import FrontEnd from '@/Layouts/Frontend.vue';
import Hero from '@/Pages/FrontEnd/Hero.vue';
import Hero2 from '@/Pages/FrontEnd/Hero2.vue';
import Contact from '@/Pages/FrontEnd/Contact.vue';
import Projects from '@/Pages/FrontEnd/Projects.vue';
import Services from '@/Pages/FrontEnd/Services.vue';
import Passage from './FrontEnd/Passage.vue';
defineProps({
  projects: Object,
});
</script>

<template>
    <Head title="Welcome" />
        <FrontEnd>
            <Hero/>
            <Hero2/>
            <Services/>
            <Projects :projects="projects"/>
            <Passage/>
            <Contact/>
        </FrontEnd>
</template>
