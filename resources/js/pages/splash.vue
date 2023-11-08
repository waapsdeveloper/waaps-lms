<template>
    <div></div>
</template>

<script>import Base from './base.vue';

export default{
    extends: Base,
    name: 'splash',
    mounted(){
        setTimeout( () => {
            this.route('/dashboard')
        }, 500)
    }



}
</script>