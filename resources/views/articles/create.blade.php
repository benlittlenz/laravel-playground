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
                        <input type="text" name="title" id="title">
                    </div>
                </div>
                <div class="field">
                    <label for="">Excerpt</label>
                    <div>
                        <input type="text" name="excerpt" id="excerpt">
                    </div>
                </div>
                <div class="field">
                    <label for="">Body</label>
                    <div>
                        <input type="text" name="body" id="body">
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