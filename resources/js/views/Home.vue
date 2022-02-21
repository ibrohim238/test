<template>
    <div>
        <VHeader></VHeader>
        <main class="container sm:mx-auto py-3">
            <IndexComponent ref="index"></IndexComponent>
            <CreateComponent></CreateComponent>
        </main>
        <VFooter></VFooter>
    </div>
</template>

<script>
import VHeader from "../components/layout-parts/VHeader";
import VFooter from "../components/layout-parts/VFooter";
import IndexComponent from "../components/comment/IndexComponent";
import CreateComponent from "../components/comment/CreateComponent";

export default {
    name: "Home",
    components: {
        VFooter,
        VHeader,
        IndexComponent,
        CreateComponent,
    }
}
</script>

<style scoped>

</style>
