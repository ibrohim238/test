<form action="{{ route('comment.store') }}" method="post">
    @method('POST')
    @csrf
    <h1 class="text-xl text-gray-600 tracking-wider text-sm sm:text-md font-black">Оставить комментарий</h1>
    <x-inputs.text
        class="mb-6"
        title="Ваше имя"
        id="nickname"
    />
    <x-inputs.textarea
        class="mb-6"
        title="Ваш комментарий"
        id="content"
    />
    <button type="submit" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">
        Отправить
    </button>
</form>

