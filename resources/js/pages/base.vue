<script>

export default {
    name: "base",
    data() {

    },
    methods: {
        route(path, query = {}) {
            return this.$router.push({ path: path, query: query });
        },
    }
}

</script>