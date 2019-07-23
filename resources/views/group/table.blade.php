<?php
    use App\Model\Group;
?>
<table class="table-bordered">
    <thead class="thead-light">
        <th>#ID</th>
        <th>Nom</th>
        <th>Nombres de contacts</th>
        <th colspan="3" class="text-center">Actions</th>
    </thead>
    <tbody>
        @if(count($groups) > 0)
            @foreach($groups as $g)
                <tr>
                    <td scope="row">{{$g->id}}</td>
                    <td>{{$g->name}}</td>
                    <th>{{$g->contacts()->count()}}</th>
                    <td colspan="3" class="text-white">
                        <a href="">détails</a>
                        <a href="">éditer</a>
                        <a href="">supprimer</a>
                    </td> 
                </tr>
            @endforeach
        @else
            <p class="text-center bg-info text-white">
                Aucun groupe enregistré
            </p>
        @endif   
    </tbody>
</table>