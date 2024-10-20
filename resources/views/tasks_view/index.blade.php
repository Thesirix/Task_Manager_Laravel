@extends('tasks_view.app')

@section('content')
<a href="{{ route("create") }}" class="btn btn-primary">Ajouter une tache</a>
<table class='table'>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Tache 1
            </td>
            <td>
                Description tache 1
            </td>
            <td>
                <span class= "badge text-bg-success" >Termine</span>
            </td>
            <td>
                <a href="#" class="btn btn-info">Modifier</a>
                <a href="#" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection