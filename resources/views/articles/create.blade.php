@extends('layouts.backend')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                <h4 class="mt-5 mb-5">{{ trans('articles.create') }}</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('articles.article.index') }}" class="btn btn-primary" title="{{ trans('articles.show_all') }}">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="panel-body">
        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('articles.article.store') }}" accept-charset="UTF-8" id="create_article_form" name="create_article_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('articles.form', [
                                        'article' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="{{ trans('articles.add') }}">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


