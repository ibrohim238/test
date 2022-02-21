<template>
  <div class="max-w-lg">
    <h1 class="text-xl text-gray-600 tracking-wider text-sm sm:text-md font-black">Оставить комментарий</h1>
    <div class="mb-6">
      <label for="nickname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ваше
        имя</label>
      <input value="" type="text" id="nickname" v-model="nickname"
             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Ваш
        комментарий</label>
      <textarea id="content" v-model="content" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment..."></textarea>
    </div>
    <button @click.prevent="addComment" type="submit"
            class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">
      Отправить
    </button>
  </div>
</template>

<script>
export default {
  name: "CreateComponent",
  data() {
    return {
      nickname: null,
      content: null,
    }
  },
  methods: {
    addComment() {
      axios.post('api/comments', {
        nickname: this.nickname,
        content: this.content
      })
          .then(responce => {
            this.nickname = null
            this.content = null
            this.$parent.$refs.index.getComments()
          })
    },
  }
}
</script>

<style scoped>

</style>
