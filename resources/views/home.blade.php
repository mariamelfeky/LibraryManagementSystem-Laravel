@extends('layouts.app')
    <head>
        {{ HTML::style('/css/newbook.css') }}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
 @section('content')
    
    <body>
    <div class="container">
  <div class="row">
    <div class="col-sm-6 text-center">
      <form class="form-inline d-block" action="/search" metod="POST" role="search">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="result">
        <button class="btn btn primary" type="submit">Search</button>
      </form>
    </div>
    <div class="col-sm-6 text-center">
    <b>Order By</b> <div class="btn-group" role="group" aria-label="Basic example">
       <a class="btn btn-light btn-outline-primary">Rate</a>
        <a href="/sort/created_at" class="btn btn-light btn-outline-primary">Latest</a>
      </div>
    </div>
    </div>
         @foreach($books as $book)
         <div class="col-md-4">
            <div class="card">
              <img src="/images/{{$book->image}}" class="card-img-top" alt="{{$book->title}}">
        <div class="card-body">
          <h2 class="card-title">
            {{$book->title}}
          </h2>
          
            <!-- <p class="card-text">
                {{$book->details }}
                
            </p> -->
            <h5 class="card-title">
           BY {{$book->auther}}
            </h5>
            <div class="card-title">
                {{ $book->copies }} copies available
            </div>
            <a href="/book/{{$book->id}}"> Book Details </a>
            </div>
            <div class="card-footer">
            <a class="btn btn-primary lease" >
                Lease
            </a>
            </div>
        </div>
        </div>
        
         @endforeach
         
         </div>
         <div class="text-center">
         {{ $books->links() }}
         </div>
    </body>
@endsection

