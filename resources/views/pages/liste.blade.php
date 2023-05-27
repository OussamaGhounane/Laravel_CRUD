@extends('layouts.app')

@section('title','liste')
@section('content')
    
<table class="table">
    <tr>
        <th>Id</th>
        <th>Categories</th>
        <th>Created-at</th>
        <th>Updated-at</th>
    </tr>

    @foreach ($listes as $liste)
        <tr class="table-primary">
            <td>{{$liste->id}}</td>
            <td>{{$liste->name}}</td>
            <td>{{$liste->created_at->diffForHumans()}}</td>
            <td>{{$liste->updated_at->diffForHumans()}}</td>
            <td>
                <a class="btn btn-dark" href="{{route('edit_categorie',$liste->id)}}" role="button">Modifer</a>
                <form action="{{ route('delete_category', $liste->id) }}" method="POST"
                    class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#confirmDeleteModal{{ $liste->id }}">
                        Delete
                    </button>

                    <!-- Confirm Delete Modal -->
                    <div class="modal fade" id="confirmDeleteModal{{ $liste->id }}"
                        tabindex="-1"
                        aria-labelledby="confirmDeleteModalLabel{{ $liste->id }}"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"
                                        id="confirmDeleteModalLabel{{ $liste->id }}">
                                        Confirm Delete</h5>
                                    <button type="button" class="btn-close"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this category?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit"
                                        class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </td>
            
        </tr>
    @endforeach
</table>

@endsection