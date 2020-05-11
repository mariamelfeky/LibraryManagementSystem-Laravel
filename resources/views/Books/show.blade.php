<html>
    <head>
        {{ HTML::style('/css/newbook.css') }}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
            <div class="h-100 col-lg-3 col-md-6 mt-3 " style="display:inline-block;">
                <img style="height:600px;" class="card-img-top" src="/images/{{$book->image}}" alt=""> 
            </div>
            <div class="h-100 col-lg-4 col-md-6" style="display:inline-block;">
                <div class="card-body">
                    <h6 class="card-title">Book Title: {{$book->title}}</h6>
                    @foreach($category as $subcategory)
                        <p class="card-text">Category: {{$subcategory->name}}</p>
                    @endforeach
                    <p class="card-text">Book-Details: {{$book->details}}</p>
                    <p class="card-text">Written By: {{$book->auther}}</p>
                    <p class="card-text">There are {{$book->copies}} Copies Available</p>
                    <p class="card-text">Price: {{$book->price}}</p>
                    <a href="{{route('book.edit',$book->id)}}" class="btn btn-info">Edit</a>
                    {!! Form::open(['route' => ['book.destroy', $book ] ,'method' => 'delete' ]) !!}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger mt-3'])  !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class=" banner-right">
            <img class="img-fluid" src="/img/header-img.png" alt="">
        </div>
    </body>
</html>