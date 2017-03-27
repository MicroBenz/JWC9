<template>
    <div>
        <h1>Test</h1>
        <h2>Welcome to {{test}}</h2>
        <input v-model="test">
    </div>
</template>
<script>
    export default {
        data() {
            return {
                test: 'Hello'
            }
        }
    }
</script>
