<template>
<div class="
    relative
    text-center">
    <img
    class="
    object-cover
    h-108
    w-full ...
    overflow-hidden
    "
    :src="src"
    :alt="this.name"
    @mouseover="hover = true"
    @mouseleave="hover = false"
    >

    <div v-if="hover" class="absolute bg-red-500">
        <h3 class="text-white">Samples</h3>
        <p class="text-white">Click here to browse our libary</p>
    </div>

    <!-- <div class="hover:absolute hover:bg-red-500">
        <h3 class="text-white">Samples</h3>
        <p class="text-white">Click here to browse our libary</p>
    </div> -->

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
        }
    },
    computed: {
        name(){
            return this.src.substring(this.src.lastIndexOf('/'), this.src.lastIndexOf('.')).slice(1);
        }
    }
}
</script>
