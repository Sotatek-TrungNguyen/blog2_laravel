<template>
  <div>
    <div>{{this.$store.state.links}}</div>
    <div v-for="(item, index) in links">
      <div>
        <h2>{{item.title}}</h2>
        <p>{{item.content}}</p>
        <!-- <button @click="updateAvailable(true)">Change</button>
        <button @click="updateAvailable(false)"> Cancel</button> -->
      </div>
      <div>
        <input v-model="title[index]" :placeholder="item.title">
        <input v-model="content[index]" :placeholder="item.content">
        <button @click="updateInfo(index,title[index],content[index])">Update</button>
        <button @click="deleteInfo(index)">Delete</button>
      </div>
     </div>
</div>
</template>

<script>
export default {
    name: 'displayOutput',
    data: function () {
      return {
        links: [],
        title:[],
        content:[],
        update: true,
      };
    },
    methods: {
        updateInfo(index,title,content) {
          if(content==null|| content==undefined) {
            content ='';
          }
          if(title==null||title==undefined) {
            title = '';
          }
          this.$store.dispatch('updateLink',{'index':index,'title':title,'content':content});
          this.update=true;
        },
        deleteInfo(index) {
          this.$store.dispatch('deleteLink',{'index':index})
        }
    },
    created: function () {
        if(this.update==true){
            this.links = this.$store.state.links;
            this.update=false;
        }
    }
}
</script>

<style scoped>

</style>
