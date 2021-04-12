@extends('layouts.backend')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ trans('articles.model_plural') }}</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('articles.article.create') }}" class="btn btn-success" title="{{ trans('articles.create') }}">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($articles) == 0)
            <div class="panel-body text-center">
                <h4>{{ trans('articles.none_available') }}</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>{{ trans('articles.title') }}</th>
                            <th>{{ trans('articles.slug') }}</th>
                            <th>{{ trans('articles.content') }}</th>
                            <th>{{ trans('articles.created_by') }}</th>
                            <th>{{ trans('articles.body') }}</th>
                            <th>{{ trans('articles.image') }}</th>
                            <th>{{ trans('articles.active') }}</th>
                            <th>{{ trans('articles.featured') }}</th>
                            <th>{{ trans('articles.user_id') }}</th>
                            <th>{{ trans('articles.category_id') }}</th>
                            <th>{{ trans('articles.comment_id') }}</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->slug }}</td>
                            <td>{{ $article->content }}</td>
                            <td>{{ optional($article->creator)->name }}</td>
                            <td>{{ $article->body }}</td>
                            <td>{{ $article->image }}</td>
                            <td>{{ $article->active }}</td>
                            <td>{{ $article->featured }}</td>
                            <td>{{ optional($article->user)->name }}</td>
                            <td>{{ optional($article->category)->id }}</td>
                            <td>{{ optional($article->comment)->id }}</td>

                            <td>

                                <form method="POST" action="{!! route('articles.article.destroy', $article->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('articles.article.show', $article->id ) }}" class="btn btn-info" title="{{ trans('articles.show') }}">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('articles.article.edit', $article->id ) }}" class="btn btn-primary" title="{{ trans('articles.edit') }}">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="{{ trans('articles.delete') }}" onclick="return confirm(&quot;{{ trans('articles.confirm_delete') }}&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $articles->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection