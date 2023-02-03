<script setup>
import { ref, onMounted } from "vue";
const imageHeight = ref('50px');
const setImageHeight = (value) => {
      imageHeight.value = value;
};

onMounted(() => {
    window.addEventListener("scroll", () => {
        var e=document.getElementById('passage');
        var sbHeight = window.innerHeight * (window.innerHeight / document.body.offsetHeight);
        var eHeight = e.offsetHeight ;
        var eTop = e.offsetTop;
        var eBottom = eTop+eHeight;
        var sPosition = window.scrollY+eHeight+sbHeight;
       if(sPosition>eTop && sPosition<eBottom+500){
            var sPercentage= Math.round(parseFloat(eHeight-(eBottom-sPosition))/8);   
            return setImageHeight(sPercentage+100);
       }

    });
});

</script>
<template>
   <section id='passage' class=" relative">
      <div class="w-full h-40 lg:h-96 overflow-hidden">
            <img src="/img/idea.webp" alt="Matrix Image" class="h-40 lg:h-96 w-full -z-10 object-contain" :style=" { height:imageHeight+'%',width:'100%', objectFit:'cover'}" >
            <div class="w-full mb-2 lg:mb-32 absolute bottom-0 flex flex-col lg:flex-row items-center justify-center">
               <p class="lg:mr-4 text-white text-lg lg:text-3xl font-roboto text-center"> {{ $t('goodidea') }} </p>
               <a href="#contact" class="myButton2 mt-4 lg:mt-0"> {{ $t('getoffer') }} </a>
            </div>
      </div>
   </section> 
</template>