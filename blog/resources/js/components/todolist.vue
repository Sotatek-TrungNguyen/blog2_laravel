<template>
    <div class="list-container">
        <div v-for="(item,index) in todos">
            <h3>{{item.title}}</h3>
            <p>{{item.project}}</p>
        </div>
    </div>
</template>

<script>

    export default {
        name:'todolist',    
        data(){
            return {
              todos: [{
                title: 'Todo A',
                project: 'Project A',
                done: false,
              }, {
                title: 'Todo B',
                project: 'Project B',
                done: true,
              }, {
                title: 'Todo C',
                project: 'Project C',
                done: false,
              }, {
                title: 'Todo D',
                project: 'Project D',
                done: false,
              }]
            }
        }

    }
</script>
