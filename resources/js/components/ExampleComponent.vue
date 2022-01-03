<template>
    <div class="container">
        <h2>This is my main message</h2>
        <router-view />
    </div>
</template>

<script>
    export default {
        data() {
            return {
                myVar: "",
                result: null,
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            printMessage() {
                console.log('this is my message');
                this.result = this.myVar;
            }
        }
    }
</script>
