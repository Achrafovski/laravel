@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        
        <div class="col-md-2">
            <div class="list-group">
                <a href="" class="btn btn-secondary list-group-item list-group-item-action">
                    Groupes &nbsp; <span class="badge badge-info">{{$group_number}}</span>
                </a>
                <a href="" class="btn btn-secondary list-group-item list-group-item-action">
                    Contacts &nbsp; <span class="badge badge-info">{{$contact_number}}</span>
                </a>
            </div>
        </div>

        <div class="col-md-10">
            <div class="card card-default">
                <div class="card-header bg-info">Listes des groupes</div>
                <div class="card-body">
                    <p>
                        <button type="button" class="btn btn-success" data-toogle="modal" data-target="#addGroup" data-whatever="@getbootstrap" >Nouveau</button>
                    </p>
                    @include('group.table')
                </div>
            </div>
            <span>&nbsp;</span>
            {{ $groups->links() }}
        </div>

    </div>
@include(groups.add)
</div>
@endsection
