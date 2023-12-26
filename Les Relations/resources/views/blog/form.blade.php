@section('content')
    <form action="" method="post" class="vstack gap-2">
        @csrf
        @method($post->id ? 'PATCH' : 'POST')
        <div class="form-group">
            <input class="form-control" type="text" name="title" value="{{ old('title', 'Mon Titre') }}">
            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="slug" value="{{ old('slug') }}">
            @error('slug')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <textarea class="form-control" name="content">{{ old('content', 'Contenu de démonstration') }}</textarea>
            @error('content')
                {{ $message }}
            @enderror
        </div>
        <button class="btn btn-primary">
            @if ($post->id)
                Modifier
            @else
                Créer
            @endif
        </button>
    </form>
@endsection