<template>
    <div>
        <div class="block sm:hidden" :class="open ? 'flex justify-end' : ''">
            <button @click="toggle" class="flex items-center px-3 py-2 border rounded border-white hover:text-theme-red hover:border-white">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="text-sm sm:flex-grow" :class="open ? 'text-right mr-0' : ''">
                <a class="navbar-item block sm:inline-block hover:text-theme-red" href="">
                    <h3 class="block sm:inline-block text-xl" :class="open ? '' : 'mr-4'">Store</h3>
                </a>
                <a class="navbar-item block sm:inline-block hover:text-theme-red" href="">
                    <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Releases</h3>
                </a>
                <a class="navbar-item block sm:inline-block hover:text-theme-red" href="">
                    <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Projects</h3>
                </a>
                <a class="navbar-item block sm:inline-block hover:text-theme-red" href="">
                    <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Reaktor</h3>
                </a>
                <a class="navbar-item block sm:inline-block hover:text-theme-red" href="">
                    <h3 class=" text-xl" :class="open ? '' : 'mr-4'">Contact</h3>
                </a>
            </div>
        </div>
    </div>

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
