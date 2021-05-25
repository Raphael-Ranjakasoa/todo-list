<template>
    <div class="addItem">
        <input type="text" class="" v-model="item.name">
        <button type="submit" 
            :class="[ item.name ? 'btn-danger' : 'btn-primary']"
            @click="addItem()"
        >Add</button>
    </div>
</template>

<script>
export default {
    data(){
        return{
            item: {
                name: ""
            }
        }
    }, 

    methods:{
        addItem(){
            if( this.item.name === ''){
                return
            }
            axios.post('/api/item/store', { item: this.item})
                 .then(res =>{
                     if( res.status == 201){
                         this.item.name = "";
                         this.$emit('reloadlist');
                     }
                 })
                 .catch(err => {
                     console.log(err);
                 })
        }
    }
}
</script>

<style scoped>
    .addItem{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    input{
        background-color: rgb(49, 12, 12);
        border: 0;
        outline: none;
        padding: 5px;
        margin-right: 10px;
    }

</style>