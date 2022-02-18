@extends('layouts.app')

@section('content')
<main class="bg-gray-100">
    <div class="sm:container sm:mx-auto">
        <x-comment.index :comments="$comments" class="p-2"/>
        <x-comment.comment-form/>
    </div>
</main>
@endsection
