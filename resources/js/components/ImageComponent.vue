<template>
<div class="container">
    <img
    class="
    object-cover
    h-108
    w-full ...
    overflow-hidden
    "
    :src="src"
    :alt="name()">
</div>
</template>
<script>
export default {
    props: ['src'],
    data(){
        return{
            name(){
                return this.src.substring(this.src.lastIndexOf('/'), this.src.lastIndexOf('.')).slice(1);
            }
        }
    }
}
</script>
