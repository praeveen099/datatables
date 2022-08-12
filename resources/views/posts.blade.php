<!DOCTYPE html>
<html>
<head>
<title>Posts</title>
</head>
<body>

<h1>This is a  Posts page</h1>

@foreach ($posts as $post)

    <article>
        <h1>
            {!! $post->title !!}
        </h1>
        <p>
            {!! $post->body !!}
        </p>
    </article>


@endforeach

</body>
</html>
