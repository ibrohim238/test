<div>
    <form action="{{ route('comment.store') }}" method="post">
        @method('POST')
        @csrf
        <h1 class="text-xl text-gray-600 tracking-wider text-sm sm:text-md font-black">Оставить комментарий</h1>
        <x-inputs.text
            class="mb-6 max-w-lg"
            title="Ваше имя"
            id="nickname"
        />
        <x-inputs.textarea
            class="mb-6 max-w-lg"
            title="Ваш комментарий"
            id="content"
        />
        <x-inputs.btn class=""/>
    </form>
</div>
