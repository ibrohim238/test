@extends('layouts.app')

@section('content')
<main class="bg-gray-100">
    <div class="container sm:mx-auto py-3 ">
        <x-comment.index :comments="$comments" class="py-2"/>
        <x-comment.comment-form class="q" />
    </div>
</main>
@endsection
