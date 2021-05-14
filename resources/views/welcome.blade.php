@extends('layouts.app')
@section('content')
    <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-white display-4">Lara-vue mix App</h1>
        <todo-component></todo-component>
    </div>
@endsection


<style>
body{
    width: 100vw;
    height: 100vh;
    background: radial-gradient(circle, rgba(74,175,244,1) 32%, rgba(74,175,244,1) 100%);
}
</style>