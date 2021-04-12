@extends('layouts.backend-layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($comment->name) ? $comment->name : 'Comment' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('comments.comment.destroy', $comment->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('comments.comment.index') }}" class="btn btn-primary" title="{{ trans('comments.show_all') }}">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('comments.comment.create') }}" class="btn btn-success" title="{{ trans('comments.create') }}">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('comments.comment.edit', $comment->id ) }}" class="btn btn-primary" title="{{ trans('comments.edit') }}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="{{ trans('comments.delete') }}" onclick="return confirm(&quot;{{ trans('comments.confirm_delete') }}?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>{{ trans('comments.name') }}</dt>
            <dd>{{ $comment->name }}</dd>
            <dt>{{ trans('comments.description') }}</dt>
            <dd>{{ $comment->description }}</dd>
            <dt>{{ trans('comments.slug') }}</dt>
            <dd>{{ $comment->slug }}</dd>

        </dl>

    </div>
</div>

@endsection