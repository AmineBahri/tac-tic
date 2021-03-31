@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-8">
          <div class="card p-3">
            <h3 class="card-title">Visulaiser l'article {{$article->title}}</h3>
            <div class="card-body">
                <div class="form-group">
                  <input type="text" name="title" value="{{$article->title}}" class="form-control">
                </div>
                <div class="form-group">
                   <textarea name="description" cols="30" rows="5" class="form-control">
                     {{$article->description}}
                   </textarea>
                </div>
                <div class="form-group">
                  <input type="number" name="price" value="{{$article->price}}" class="form-control">
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection