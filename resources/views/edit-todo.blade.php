<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

</head>
<body>


<div class="row justify-content-center mt-5">
    <div class="col-lg-6">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
        @endif
    </div>
</div>

<div class="text-center mt-5">
    <h2>Edit Todo</h2>
</div>

<form  method="POST" action="{{route('todos.update',['todo'=>$todo->id])}}">

    @csrf

    {{ method_field('PUT') }}

    <div class="row justify-content-center mt-5">

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Lets Going Fuck This Place...🖕🏿</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{$todo->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Status Y Liv'</label>
                <select name="is_completed" id="" class="form-control">
                    <option value="1" @if($todo->is_completed==1) selected @endif>liv</option>
                    <option value="0" @if($todo->is_completed==0) selected @endif>Not Liv</option>
                    <option value="2" @if($todo->is_completed==2) selected @endif>goin hell</option>
                    <option value="3" @if($todo->is_completed==3) selected @endif>another world</option>
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
    </div>

</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>