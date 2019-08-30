<template>

<div class="
    block sm:flex h-108 w-full p-3

    ">

    <!-- min-h-screen bg-grey bg-cover flex items-end block md:fixed w-full md:w-1/2 shadow-md -->

    <!-- opacity-90 bg-theme-gray -->

    <div
        :class='"bg-cover bg-center w-full cursor-pointer flex content-center bg-theme-black opacity-90"'
        style="background-blend-mode: luminosity;"
        :style="{ backgroundImage: `url(${item.image})`}"
        @mouseover="hover = true"
        @mouseleave="hover = false"
    >
        <!-- style="background-blend-mode: hover;"  // on hover: transition to this mode...-->

        <!-- :style="{ backgroundImage: `url(${item.image})`, backgroundBlendMode: {blendMode} }" -->
    <!-- style="background-blend-mode: color-dodge;" -->

        <div v-if="hover" class="absolute
        bg-center
        bg-red-500 z-10">

            <h3 class="text-white">Samples</h3>
            <p class="text-white">Click here to browse our libary</p>
        </div>
    </div>

</div>
</template>
<script>
export default {
    props: {
            src: {
                type: String,
                required: true,
            }
        },

    data(){
        return{
            hover: false,
            // blendMode: 'luminosity',
            item:{
                image: this.src
            }
        }
    },
    computed: {
        name(){
            return this.src.substring(this.src.lastIndexOf('/'), this.src.lastIndexOf('.')).slice(1);
        }
    }
}
</script>
