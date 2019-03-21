<template>
  <div>
    <div>{{localStorage}}</div>
    <div v-for="(item, index) in links">
      <div>
        <h2>{{item.title}}</h2>
        <p>{{item.content}}</p>
        <button @click="updateAvailable(true)">Change</button>
        <button @click="updateAvailable(false)"> Cancel</button>
      </div>
      <div>
        <input v-model="title[index]" :placeholder="item.title">
        <input v-model="content[index]" :placeholder="item.content">
        <button @click="updateInfo(index,title[index],content[index])">Update</button>
      </div>
     </div>
</div>
</template>

<script>
export default {
    name: 'displayOutputlocalStorage',
    data: function () {
      return {
        links: [],
        title:[],
        content:[],
        update: true,
      };
    },
    mounted() {
    if(localStorage.name) this.name = localStorage.name;
    if(localStorage.age) this.age = localStorage.age;
  },

    methods: {
       updateInfo() {

       }
    },
    // created() {
    //   if(localStorage.links){
    //     this.links=localStorage.links;
    //   }else{ this.links= [1,2];}
    // }
}
</script>

<style scoped>

</style>
