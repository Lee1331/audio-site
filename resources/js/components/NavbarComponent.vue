<template>
    <nav class="sticky top-0 flex items-center flex-wrap bg-black h-2/12 p-3  text-white
        justify-center sm:justify-between
    ">
    <div  :class="open ? 'block': 'justify-between'" >
        <div class="flex-no-shrink mr-6">
            <a class="navbar-brand pr-3" href="">
                <h1 class="inline text-xl">Provayer</h1>
            </a>
        </div>
        <hamburger-component></hamburger-component>
    </div>
    </nav>

</template>
<style>

</style>
<script>
export default {
    data(){
        return {
            open: false,
        }
    },
    methods: {
        toggle() {
            this.open = !this.open
        }
    }
}
</script>
