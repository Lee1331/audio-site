<template>
    <nav class="z-40 sticky top-0 flex sm:content-center items-center bg-black h-2/12 p-3 text-white justify-center sm:justify-between">
        <div :class="open ? 'block': 'justify-between'" >
            <div class="flex-no-shrink mr-6">
                <a class="navbar-brand pr-3" href="">
                    <h1 class="inline text-xl">Provayer</h1>
                </a>
            </div>
        </div>
        <hamburger-component></hamburger-component>
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
