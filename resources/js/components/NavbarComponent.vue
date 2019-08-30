<template>

    <nav class="z-50 sticky top-0 flex bg-black h-2/12 py-3 px-5 text-white justify-between">
        <!-- <div class="flex"> -->

            <div class="flex-no-shrink mr-6 justify-start">
                <a class="navbar-brand pr-3" href="">
                    <h1 class="inline text-xl">Provayer</h1>
                </a>
            </div>
            <!-- <div :class="open ? 'block': 'justify-between'" > -->
                <div :class="open ? 'flex justify-center' : 'flex justify-end' ">
                    <hamburger-component></hamburger-component>
                </div>
            <!-- </div>  -->
        <!-- </div> -->
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
