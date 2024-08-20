@extends('layouts.admin_main')
@section('adminmain')

<div class="container">
   
    <div class="inner-page">
         {{-- Session message display --}}
    @if (session()->has('blog-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('blog-created') }}
        </div>
        @endif
        {{-- display success message if blog is deleted --}}
        @if (session()->has('blog-deleted'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('blog-deleted') }}
        </div>
        @endif
        {{-- display success message if blog is updated --}}
         @if (session()->has('blog-updated'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('blog-updated') }}
        </div>
        @endif
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-4 pb-4">
            <h3>Liste des Blog </h3> <br>
           
        </div>
         <div class="container pt-4 pb-4">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 30%;" >Titre</th>
                            <th style="width: 40%;" >Contenu</th>
                            <th style="width: 30%;" >Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->content}}</td>
                            <td>
                                <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-primary">Edit</a>
                                 <button type="button" class="btn btn-danger confirm-delete" data-form="deleteForm{{$blog->id}}" data-toggle="modal" data-target="#deleteModal{{$blog->id}}">Supprmier </button>
                                
                        <form id="deleteForm{{$blog->id}}" action="{{ route('blog.destroy', $blog->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                        </form>
                            </td>
                        </tr>
                         <!-- Delete Confirmation Modal -->
                <div class="modal fade" id="deleteModal{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Confirmer! </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Voulez-vous vraiment supprimer ce blog ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler </button>
                                <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$blog->id}}">OUI </button>
                            </div>
                        </div>
                    </div>
                </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection
