@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{route('articles.create')}}" class="btn btn-primary my-2">
                        <i class="fa fa-plus"></i>
                    </a>
                    <table class="table table-nover">
                       <thead>
                         <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                         </tr>
                        </thead>
                        <tbody>
                          @foreach($articles as $article)
                          <tr>
                           <td>{{$article->id }}</td>
                           <td>{{$article->title }}</td>
                           <td>{{$article->description }}</td>
                           <td>{{$article->price }}</td>
                           <td class="d-flex flex-row justify-content-center align-items-center">
                              <a href="{{route('articles.show',$article->id)}}" class="btn btn-sm btn-success mr-2">
                                <i class="fa fa-eye"></i>
                              </a>
                              <a href="{{route('articles.edit',$article->id)}}" class="btn btn-sm btn-warning mr-2">
                                <i class="fa fa-edit"></i>
                              </a>
                              <form id="{{$article->id}}" method="POST" action="{{route('articles.destroy',$article->id)}}">
                                   @csrf
                                   @method("DELETE")
                                   <button onclick="event.preventDefault();
                                      if (confirm('Voulez vous vraiment supprimer la article {{$article->title}} ?')) 
                                        document.getElementById({{$article->id}}).submit();
                                      " class="btn btn-sm btn-danger">
                                       <i class="fa fa-trash"></i>
                                   </button>
                               </form>
                           </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>

                    <hr>
                    <div class="justify-content-center d-flex">
                      {{$articles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
