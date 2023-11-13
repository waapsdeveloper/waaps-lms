
<template>
    <Cheader></Cheader>
        <CMenu></CMenu>
        <router-view></router-view>
    <Cfooter></Cfooter>
</template>

<script>

import Cheader from '../components/cheader.vue';
import Cfooter from '../components/cfooter.vue';
import Base from './base.vue';
import CMenu from '../components/cmenu.vue';



export default{
    extends: Base,
    name: "parent",
    mounted() {
    },
    components: { Cfooter, Cheader, CMenu }
}
</script>
