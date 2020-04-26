@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <x-nav-side :nav="['home','profile']" />
        </div>

        <div class="col-md-8">
            @include('layouts.message')

            <x-nav-side-content>

                <x-side-content name="home" active>
                    <x-card title="home" modalId="create-post" buttonText="Create Post">
                        <div class="row">
                            @foreach ($posts as $item)
                            <div class="col-md-4">
                                <x-card-post :title="$item->title" :body="$item->body" :color="$item->color->name"
                                    :createdAt="$item->created_at" :createdBy="$item->user->name" :postId="$item->id" />
                            </div>
                            @endforeach
                        </div>
                    </x-card>
                </x-side-content>

                <x-side-content name="profile">
                    <x-card title="profile">
                        ini profile
                    </x-card>
                </x-side-content>

            </x-nav-side-content>
        </div>

        <div class="col-md-2">
            <x-card title="Online Users">
                @foreach (@$users as $item)
                @if ($item->isOnline())
                {{ $item->name }} &#128512;
                <br>
                @endif
                @endforeach
            </x-card>
        </div>
    </div>
</div>
</div>

<x-modal modalId="create-post" title="Craete Post" actionName="post.store" methodName="post">
    <x-input-text label="Title" name="title" />
    <x-textarea label="Isi" name="body" />
    <x-select label="Color" name="color_id" selectData="Color" />
</x-modal>

@endsection