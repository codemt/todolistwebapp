@if(count($errors) > 0 )
       @foreach($errors->all() as $errors)
        <div class="alert alert-danger">


                {{ $error }}
        </div>
       @endforeach
@endif


@if(session('sucess'))
        <div class="alert alert-sucess">

                {{ session('success') }}


        </div>
@endif