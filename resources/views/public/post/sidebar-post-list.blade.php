@if (isset($title))
    <h2 class="pb-3 mb-3 border-bottom">{{ __($title) }}</h2>
@endif
@foreach ($posts as $post)
    <div class="d-flex flex-column justify-content-between">
        <h3>
            <a class="text-black pointer" href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
        </h3>
        <div class="d-flex flex-column">
            @include('public.user.user-name', [
                'user' => $post->user
            ])
            <span class="text-secondary">{{ $post->created_at->format('M d, Y') }}</span>
        </div>
    </div>
@endforeach
<div class="text-right">
    <a href="{{ route('posts.popular') }}" class="text-success text-uppercase font-weight-bold">
        {{ __('See more') }}
        <i class="fa fa-chevron-right" style="font-size: 14px"></i>
    </a>
</div>
