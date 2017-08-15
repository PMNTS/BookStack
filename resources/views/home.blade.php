@extends('base')

@section('content')

    <div class="faded-small toolbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 faded">
                    <div class="action-buttons text-left">
                        <a data-action="expand-entity-list-details" class="text-primary text-button"><i class="zmdi zmdi-wrap-text"></i>Toggle Details</a>
                    </div>
                </div>
                <div class="col-sm-8 faded">
                    <div class="action-buttons">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" ng-non-bindable>
        <div class="row">

            <div class="col-sm-4">
                <div id="recent-drafts">
                    @if(count($draftPages) > 0)
                        <h4>My Recent Drafts</h4>
                        @include('partials/entity-list', ['entities' => $draftPages, 'style' => 'compact'])
                    @endif
                </div>
                @if($signedIn)
                    <h4>My Recently Viewed</h4>
                @else
                    <h4>Recent Books</h4>
                @endif
                @include('partials/entity-list', [
                'entities' => $recents,
                'style' => 'compact',
                'emptyText' => $signedIn ? 'You have not viewed any pages' : 'No books have been created'
                ])
            </div>
        </div>
    </div>


@stop
