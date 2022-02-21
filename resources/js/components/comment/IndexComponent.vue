<template>
    <div>
        <template v-for="comment in comments">
            <ShowComponent :comment="comment"></ShowComponent>
        </template>
    </div>
</template>

<script>
import ShowComponent from "./ShowComponent";

export default {
    name: "IndexComponent",
    components: {
        ShowComponent
    },
    data() {
        return {
            comments: null
        }
    },
    mounted() {
        this.getComments()
    },
    methods: {
        getComments() {
            axios.get('/api/comments')
                .then(responce => {
                    this.comments = responce.data
                })
        },
    }
}
</script>

<style scoped>

</style>
