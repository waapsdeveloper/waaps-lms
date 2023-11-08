<template>
        <Cheader></Cheader>
        <CMenu></CMenu>
        <Cfooter></Cfooter>
</template>

<script>

import Cheader from '../../components/cheader.vue';
import Cfooter from '../../components/cfooter.vue';
import Base from '../base.vue';
import CMenu from '../../components/cmenu.vue';



export default{
    extends: Base,
    name: "dashboard",
    mounted() {
    },
    components: { Cfooter, Cheader, CMenu }
}
</script>