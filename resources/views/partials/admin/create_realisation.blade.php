@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container">
            <form action="{{ route('realisation.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrer le nom du project: exemple: BH01" required>
                </div>
                <div class="mb-3">
                    <label for="task" class="form-label">Tache:</label>
                    <input type="text" class="form-control" id="task" name="task" placeholder="Entrer la tache effectuee " required>
                </div>
                <div class="mb-3">
                    <label for="area" class="form-label">Quartier:</label>
                    <input type="text" class="form-control" id="area" name="area" placeholder="Entrer le quartier" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">Ville:</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Entrer la ville" required>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Pays:</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Entrer le Pays" required>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Annee:</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Entrer l'annee du projet" required>
                </div>
                <div class="mb-3">
                    <label for="maitre_doeuvre" class="form-label">Maitre doeuvre:</label>
                    <input type="text" class="form-control" id="maitre_doeuvre" name="maitre_doeuvre" placeholder="Maitre d'oeuvre" required>
                </div>
                <div class="mb-3">
                    <label for="video" class="form-label">Lien de la video:</label>
                    <textarea type="text" class="form-control" id="video" name="video" placeholder="Lien Youtube de la video"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                {{-- more images --}}
                <div class="mb-3">
                    <label for="images" class="form-label">Plus d'images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Publier</button>
            </form>
        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection