@extends("layouts.template")

@section("title","Home")

@section("livewiretags")
    @livewireStyles
    @livewireScripts
@endsection

@section("content")
    <livewire:onboarding :random_code="$code"/>
@endsection


