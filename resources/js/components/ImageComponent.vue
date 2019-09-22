<template>

<div class="block sm:flex h-108 w-full p-3">
    <!-- min-h-screen bg-grey bg-cover flex items-end block md:fixed w-full md:w-1/2 shadow-md -->

    <!-- opacity-90 bg-theme-gray -->
    <!-- <transition name="fade"> -->

        <!-- <transition name="zoom"> -->
        <transition
        enter-active-class="animated bounce"
        leave-active-class="animated shake"
        >

            <!-- watch vue transition/animation vids to get the background image to zoom in and change from 'normal' to 'luminosity' -->
                    <div
                        :class='"bg-cover bg-center w-full h-full cursor-pointer bg-theme-black text-center h-full opacity-90 {zoom ? animated zoomIn : animated zoomOut} "'
                        class="zoom animated zoomIn"
                        style="background-blend-mode: normal;"
                        :style="{ backgroundImage: `url(${item.image})`}"
                        @mouseover="hover = true, zoom = true"
                        @mouseleave="hover = false, zoom = false"
                    >

                    <!-- <h1 class="animated infinite bounce delay-2s">Example</h1> -->

                        <!-- style="background-blend-mode: hover;"  // on hover: transition to this mode...-->

                    <!-- <div class="bg-blue-200 animated zoomIn" v-show="zoom">reveal</div> -->

                    <!-- <transition name="fade">
                        <div class="z-10 h-full py-40"  v-if="hover">
                            <div class="bg-blue-200 py-7 animated fadeInUp">
                                <h3 class="block text-white">Samples</h3>
                                <p class="block text-white">Click here to browse our libary</p>
                            </div>
                        </div>
                    </transition> -->
    <!--
                        <div class="z-10 h-full py-40" v-if="hover">
                            <transition name="fade">
                                <div class="bg-blue-200 py-7 max-h-full overflow-hidden animated fadeInUp">
                                    <h3 class="block text-white">Samples</h3>
                                    <p class="block text-white">Click here to browse our libary</p>
                                </div>
                            </transition>
                        </div> -->

                        <!-- <div class="z-10 h-full overflow-hidden" v-if="hover">
                            <transition name="fade">
                                <div class="bg-blue-200 h-full overflow-hidden animated fadeInUp">
                                    <h3 class="block text-white">Samples</h3>
                                    <p class="block text-white">Click here to browse our libary</p>
                                </div>
                            </transition>
                        </div> -->


                        <!-- method 1 -->
                        <div class="z-10 h-full overflow-hidden" v-if="hover">
                            <!-- <transition name="fade"> -->

                                <!-- bg-theme-black opacity-50 -->
                                <div class="
                                    h-full overflow-hidden animated fadeInUp bg-black
                                ">
                                        <!-- py-1/4 -->
                                        <div class="py-2 opacity-100">

                                            <div class="block bg-theme-red ">
                                                <h3 class="text-white"><a href="#">Samples</a></h3>
                                                <hr>
                                                <p class="text-white">Click here to browse our libary</p>
                                            </div>
                                            <div class="featured-content flex items-center pt-2">
                                                <div class="item-1 flex-1 "><h3 class="text-white"><a href="#">Pack 1</a></h3></div>
                                                <div class="item-2 flex-1 "><h3 class="text-white"><a href="#">Pack 2</a></h3></div>
                                                <div class="item-3 flex-1 "><h3 class="text-white"><a href="#">Pack 3</a></h3></div>
                                            </div>
                                        </div>
                                </div>
                            <!-- </transition> -->
                        </div>

                        <!-- method 2 -->
                            <!-- <div class="z-10 h-full overflow-hidden" v-if="hover">
                                <div class="h-full overflow-hidden ">
                                    <div class="py-2 opacity-100">
                                        <div class="block animated fadeInUp">
                                            <h3 class="text-white"><a href="#">Samples</a></h3>
                                            <hr>
                                            <p class="text-white">Click here to browse our libary</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    </div>
        </transition>

</div>
</template>
<style scoped>
.zoom:hover {
    /* transform: scale(1.25); */

}
/*
    .zoom-enter {
        transform: scale(0);
    }
    .zoom-enter-active {
        transition-duration: 0.3s;
        transition-timing-function: ease;
    }

    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.5);
        }
        100% {
            transform: scale(1);
        }
    } */

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
        transition: opacity 0.5s;
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
