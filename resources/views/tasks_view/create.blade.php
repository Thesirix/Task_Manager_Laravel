@extends('tasks_view.app')

@section('content')
<h2>Création d'un tache</h2>
<form action="{{ route('store') }}" method="post">
    @csrf
<div class="mb-3">
    <label for="title" class="form-label">Titre</label>
    <input type="text" name="title" class="form-control" id="title">
</div>

<div class="mb-3">
<label for="description" class="form-label">Description</label>
<textarea class="form-control" name="description" id="description"></textarea>
</div>
<div class="mb-3">
    <input type="checkbox" name="status" class="form-check-input" id="form-check-label">
    <label for="form-check-label" class="form-label">Terminé ?</label>
</div>

<button type="submit" class="btn btn-info">Ajouter</button>




</form>


@endsection