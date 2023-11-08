<template>

    <div>
        <h2>Splash Page</h2>
    </div>
    

</template>

<script>import Base from './base.vue';



export default{
    extends: Base,
    name: 'splash',
    mounted(){
        setTimeout( () => {
            this.route('/dashboard')
        }, 5000)
    }



}
</script>