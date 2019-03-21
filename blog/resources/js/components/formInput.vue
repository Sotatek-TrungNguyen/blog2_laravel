<template>
    <div class="page-container">
        <input v-model="title" type="text" name="title">
        <input v-model="content" type="text" name="content">
        <button @click="addNew">Add New</button>
    </div>
</template>

<script>
    export default {
    	name:'forminput',
    	data() {
    		return {
    			title:'',
    			content:'',
    			isActive:false,
    		}
    	},
    	methods: {
    		addNew(){
    			this.$store.dispatch('newLink',{'title':this.title,'content':this.content});
    		}
    	}
    }
</script>
