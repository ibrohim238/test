<template>
    <footer class="sm:container mx-auto flex bg-white ">
        <div class="px-4">
            <img class="w-32" :src="image_src" alt="">
        </div>
        <nav class="prose space-y-1 prose-p:text-zinc-800 prose:py-0">
            <p>Телефон: (499) 340-94-71</p>
            <p>Email: info@future-group.ru</p>
            <p>Адрес: 115088 Москва, ул. 2-я Машиностроения, д.7 стр.1</p>
            <p>© 2010 - 2014 Future. Все права защищены</p>
        </nav>
    </footer>
</template>

<script>
export default {
    name: "Footer",
    data() {
        return {
            image_src: '/favicon.png'
        }
    }
}
</script>

<style scoped>

</style>

