
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">{{ trans('articles.title') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($article)->title) }}" minlength="1" maxlength="255" placeholder="{{ trans('articles.title__placeholder') }}">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
    <label for="slug" class="col-md-2 control-label">{{ trans('articles.slug') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="slug" type="text" id="slug" value="{{ old('slug', optional($article)->slug) }}" minlength="1" placeholder="{{ trans('articles.slug__placeholder') }}">
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
    <label for="content" class="col-md-2 control-label">{{ trans('articles.content') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="content" type="text" id="content" value="{{ old('content', optional($article)->content) }}" minlength="1" placeholder="{{ trans('articles.content__placeholder') }}">
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
    <label for="notes" class="col-md-2 control-label">{{ trans('articles.notes') }}</label>
    <div class="col-md-10">
        <textarea class="form-control" name="notes" cols="50" rows="10" id="notes" minlength="1" maxlength="1000">{{ old('notes', optional($article)->notes) }}</textarea>
        {!! $errors->first('notes', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('created_by') ? 'has-error' : '' }}">
    <label for="created_by" class="col-md-2 control-label">{{ trans('articles.created_by') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="created_by" name="created_by">
        	    <option value="" style="display: none;" {{ old('created_by', optional($article)->created_by ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('articles.created_by__placeholder') }}</option>
        	@foreach ($creators as $key => $creator)
			    <option value="{{ $key }}" {{ old('created_by', optional($article)->created_by) == $key ? 'selected' : '' }}>
			    	{{ $creator }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
    <label for="body" class="col-md-2 control-label">{{ trans('articles.body') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="body" type="text" id="body" value="{{ old('body', optional($article)->body) }}" minlength="1" placeholder="{{ trans('articles.body__placeholder') }}">
        {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">{{ trans('articles.image') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="image" type="number" id="image" value="{{ old('image', optional($article)->image) }}" placeholder="{{ trans('articles.image__placeholder') }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('active') ? 'has-error' : '' }}">
    <label for="active" class="col-md-2 control-label">{{ trans('articles.active') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="active" type="text" id="active" value="{{ old('active', optional($article)->active) }}" minlength="1" placeholder="{{ trans('articles.active__placeholder') }}">
        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('featured') ? 'has-error' : '' }}">
    <label for="featured" class="col-md-2 control-label">{{ trans('articles.featured') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="featured" type="text" id="featured" value="{{ old('featured', optional($article)->featured) }}" minlength="1" placeholder="{{ trans('articles.featured__placeholder') }}">
        {!! $errors->first('featured', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">{{ trans('articles.user_id') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id">
        	    <option value="" style="display: none;" {{ old('user_id', optional($article)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('articles.user_id__placeholder') }}</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($article)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
    <label for="category_id" class="col-md-2 control-label">{{ trans('articles.category_id') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="category_id" name="category_id">
        	    <option value="" style="display: none;" {{ old('category_id', optional($article)->category_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('articles.category_id__placeholder') }}</option>
        	@foreach ($categories ?? '' as $key => $category)
			    <option value="{{ $key }}" {{ old('category_id', optional($article)->category_id) == $key ? 'selected' : '' }}>
			    	{{ $category }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('comment_id') ? 'has-error' : '' }}">
    <label for="comment_id" class="col-md-2 control-label">{{ trans('articles.comment_id') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="comment_id" name="comment_id">
        	    <option value="" style="display: none;" {{ old('comment_id', optional($article)->comment_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('articles.comment_id__placeholder') }}</option>
        	@foreach ($comments ?? '' as $key => $comment)
			    <option value="{{ $key }}" {{ old('comment_id', optional($article)->comment_id) == $key ? 'selected' : '' }}>
			    	{{ $comment }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('comment_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

