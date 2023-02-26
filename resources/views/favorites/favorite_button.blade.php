{{--@if (Auth::id() != $micropost->user_id)--}}
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- 解除ボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-error btn-sm normal-case" 
                onclick="return confirm('この記事をお気に入り解除します。よろしいですか？')">お気に入り解除</button>
        </form>
    @else
        {{-- 登録ボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-sm normal-case">お気に入り登録</button>
        </form>
    @endif
{{--@endif--}}
