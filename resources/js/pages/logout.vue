<template>
    <div></div>
</template>

<script>import Base from './base.vue';

export default{
    extends: Base,
    name: 'logout',
    mounted(){
        localStorage.clear();
        this.route('/')
    }



}
</script>
