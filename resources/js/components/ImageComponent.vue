<template>

<div class="block sm:flex h-108 w-full p-3">

    <!-- min-h-screen bg-grey bg-cover flex items-end block md:fixed w-full md:w-1/2 shadow-md -->

    <!-- opacity-90 bg-theme-gray -->
    <!-- <transition name="fade"> -->


        <!-- watch vue transition/animation vids to get the background image to zoom in and change from 'normal' to 'luminosity' -->
                <div
                    :class='"bg-cover bg-center w-full h-full cursor-pointer bg-theme-black text-center h-full opacity-90"'
                    class="zoom"
                    style="background-blend-mode: luminosity;"
                    :style="{ backgroundImage: `url(${item.image})`}"
                    @mouseover="hover = true, zoom = true"
                    @mouseleave="hover = false, zoom = false"
                >
                    <!-- style="background-blend-mode: hover;"  // on hover: transition to this mode...-->

                    <!-- :style="{ backgroundImage: `url(${item.image})`, backgroundBlendMode: {blendMode} }" -->
                <!-- style="background-blend-mode: color-dodge;" -->

                    <!-- max-w-full -->
                    <!-- w-9/12 -->
                    <!-- w-auto
                    h-auto -->
                <transition name="fade">
                        <!-- <div v-if=" !hover" class="absolute
                        text-center
                        bg-center
                        bg-red-500 z-10
                        ">
                            <h3 class="text-white flex-wrap">Samples</h3>
                            <p class="text-white flex-wrap">Click here to browse our libary</p>
                        </div> -->




                        <!-- <div
                        v-if=" !hover"
                        class="
                        text-center
                        bg-center
                        bg-red-500 z-10
                        w-full h-full
                        flex content-center
                        ">
                            <div class="flex-wrap h-full ">
                                <h3 class="block text-white">Samples</h3>
                                <p class="block text-white">Click here to browse our libary</p>
                            </div>
                    </div> -->


                            <!-- <h3 class="text-white flex-wrap">Samples</h3> -->
                            <!-- <p class="text-white flex-wrap">Click here to browse our libary</p> -->

                    <div class="z-10 h-full py-40"  v-if="hover">
                    <!-- <div class="w-1/3 p-2">
                        <div class="text-gray-700 text-center bg-gray-400 p-2">1</div>
                    </div>
                    <div class="w-1/3 p-2">
                        <div class="text-gray-700 text-center bg-gray-400 p-2">2</div>
                    </div> -->
                    <div class="bg-blue-200 py-7">
                        <h3 class="block text-white">Samples</h3>
                        <p class="block text-white">Click here to browse our libary</p>
                    </div>
                    </div>
                </transition>
                </div>

    <!-- </transition> -->

</div>
</template>
<style scoped>
.zoom:hover {
        transform: scale(1.25);

}

    .fade-enter {
        opacity: 0;
    }
    .fade-enter-active {
        transition-duration: 0.3s;
        transition: opacity 0.3s;
        transition-timing-function: ease;
        /* background-blend-mode: luminosity; */
    }
    .fade-leave {

    }
    .fade-leave-active {
        transition-duration: 0.3s;
        transition: opacity 1s;
        opacity: 0;
        transition-timing-function: ease;
        /* background-blend-mode: normal; */

    }
</style>
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
            zoom: false,
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
