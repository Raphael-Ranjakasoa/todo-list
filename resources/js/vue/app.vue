<template>
    <div class="todoListContainer">
        <div class="heading">
            <h2 id="title">Todo Liste</h2>
            <add-item-form v-on:reloadlist="getList()"></add-item-form>
        </div>
        <list-view :item="item" v-on:reloadlist="getList()"></list-view>  <!--item: from listItem -->
    </div>
</template>

<script>

import addItemForm from './addItemForm';
import ListView from './listView';
export default {
    components:{
        addItemForm,
        ListView,
    }, 

    data(){
        return{
            items: []
        }
    }, 

    methods:{
        getList(){
            axios.get('/api/items')
                 .then(res =>{
                     this.items = res.data
                 })
                 .catch(err => {
                     console.log(err);
                 })
        }
    },
    
    created(){
        this.getList();
    }
}
</script>

<style scoped>
    .todoListContainer{
        width: 350px;
        margin: auto;
    }

    .heading{
        background-color: rgb(85, 78, 78);
        padding: 10px;
    }

    #title{
        text-align: center;
    }
</style>
