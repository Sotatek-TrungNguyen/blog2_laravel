<template>
    <div class="container">
        <div class="content">
            <h1>this is a list</h1>
            <div class="list_container">
                <ul>
                    <formInput></formInput>
                    <displayOutput></displayOutput>
                    <!-- <displayOutputlocalStorage></displayOutputlocalStorage> -->
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import todo from './todolist.vue'
    import displayOutput from './displayOutput.vue'
    import displayOutputlocalStorage from './displayOutputlocalStorage.vue'
    import formInput from './formInput.vue'
    export default {
        components: {
        todo,
        formInput,
        displayOutput,
        displayOutputlocalStorage,
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
