<template>
    <div>
        <div v-for="(item, index) in items" :key="index">
            <list-item :item="item" class="item"></list-item>
        </div>
    </div>
</template>

<script>

import listItem from './listItem';

export default {
    props: ['items'], 
    components: {
        listItem
    }
}
</script>

<style scoped>

</style>