@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-8">
          <div class="card p-3">
            <h3 class="card-title">Ajouter un article</h3>
            <div class="card-body">
              <form method="post" action="{{route('articles.store')}}">
                @csrf
                <div class="form-group">
                  <input type="text" name="title" placeholder="Title" class="form-control">
                </div>
                <div class="form-group">
                   <textarea name="description" class="form-control" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                  <input type="number" name="price" placeholder="Price" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                    Valider
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection