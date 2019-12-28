@extends ('layout')

@section ('content')
    <div id="wrapper">
        <div id="page">
            <h1>new article</h1>
            <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label for="">Title</label>
                    <div>
                        <input type="text" name="title" id="title" value={{old('title')}}>
                        @if ($errors->has('title'))
                            <p>{{$errors->first('title')}}</p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label for="">Excerpt</label>
                    <div>
                        <input type="text" name="excerpt" id="excerpt" value={{old('excerpt')}}>
                        @if ($errors->has('excerpt'))
                            <p>{{$errors->first('excerpt')}}</p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label for="">Body</label>
                    <div>
                        <input type="text" name="body" id="body" value={{old('body')}}> 
                        @if ($errors->has('body'))
                            <p>{{$errors->first('body')}}</p>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="control">
                        <button type="suubmit">Submit</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection