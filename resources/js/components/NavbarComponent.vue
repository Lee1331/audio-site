<template>
    <!-- <nav class="z-40 sticky top-0 flex sm:content-center items-center bg-black h-2/12 p-3 text-white justify-center sm:justify-between">
        <div :class="open ? 'block': 'justify-between'" >
            <div class="flex-no-shrink mr-6">
                <a class="navbar-brand pr-3" href="">
                    <h1 class="inline text-xl">Provayer</h1>
                </a>
            </div>
        </div>
        <hamburger-component></hamburger-component>
    </nav> -->
    <nav class="z-50 sticky flex
    <!-- top-0  -->
    <!--sm:content-center items-center-->
    bg-black h-2/12 p-3 text-white justify-center sm:justify-between">
        <div class="flex-no-shrink mr-6">
            <a class="navbar-brand pr-3" href="">
                <h1 class="inline text-xl">test</h1>
            </a>
        </div>
        <div :class="open ? 'block': 'justify-between'" >
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
