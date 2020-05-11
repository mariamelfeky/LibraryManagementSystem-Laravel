<html>
    <head>
        {{ HTML::style('/css/newbook.css') }}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="myform">
            {!! Form::open(['route' => 'book.store']) !!}
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Title</span>
                    </div>    
                    {!! Form::text('title',null,['class'=>'form-control','aria-label'=>'Title', 'aria-describedby'=>'basic-addon1','placeholder'=>'Title'])  !!}
                </div>
                <div><span class="text-white">{{$errors->first('title')}}</span></div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2">Details</span>
                    </div>    
                    {!! Form::text('details',null,['class'=>'form-control','aria-label'=>'Details', 'aria-describedby'=>'basic-addon2','placeholder'=>'Details'])  !!}
                </div>
                <div><span class="text-white">{{$errors->first('details')}}</span></div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">Author</span>
                    </div>    
                    {!! Form::text('auther',null,['class'=>'form-control','aria-label'=>'Author', 'aria-describedby'=>'basic-addon3','placeholder'=>'Author'])  !!}
                </div>
                <div><span class="text-white">{{$errors->first('auther')}}</span></div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon4">Copies</span>
                    </div>    
                    {!! Form::number('copies',null,['class'=>'form-control','aria-label'=>'Author', 'aria-describedby'=>'basic-addon4','placeholder'=>'Number Of Copies'])  !!}
                </div>
                <div><span class="text-white">{{$errors->first('copies')}}</span></div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon5">Price</span>
                    </div>    
                    {!! Form::text('price',null,['class'=>'form-control','aria-label'=>'Price', 'aria-describedby'=>'basic-addon5','placeholder'=>'Book Price'])  !!}
                </div>
                <div><span class="text-white">{{$errors->first('price')}}</span></div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <div><span class="text-white">{{$errors->first('image')}}</span></div>
                {!! Form::submit('Add A Book',['class'=>'btn btn-primary'])  !!}

            {!! Form::close() !!}
        </div>
        <div class=" banner-right">
            <img class="img-fluid" src="/img/header-img.png" alt="">
        </div>
    </body>
</html>