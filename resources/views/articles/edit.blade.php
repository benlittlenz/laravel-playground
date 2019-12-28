@extends ('layout')

@section ('content')
    <div id="wrapper">
        <div id="page">
            <h1>Edit article</h1>
            <form method="POST" action="/articles/{{article->id}}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label for="">Title</label>
                    <div>
                        <input type="text" name="title" id="title" value={{$article->title}}>
                    </div>
                </div>
                <div class="field">
                    <label for="">Excerpt</label>
                    <div>
                        <textarea name="excerpt" id="excerpt" >{{$article->excerpt}}</textarea>
                    </div>
                </div>
                <div class="field">
                    <label for="">Body</label>
                    <div>
                        <textarea name="body" id="body">{{$article->body}}</textarea>
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