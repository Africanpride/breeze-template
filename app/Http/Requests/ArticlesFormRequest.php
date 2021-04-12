<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class ArticlesFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => 'string|min:1|max:255|nullable',
            'slug' => 'string|min:1|nullable',
            'content' => 'string|min:1|nullable',
            'notes' => 'string|min:1|max:1000|nullable',
            'created_by' => 'nullable',
            'body' => 'string|min:1|nullable',
            'image' => 'numeric|nullable',
            'active' => 'string|min:1|nullable',
            'featured' => 'string|min:1|nullable',
            'user_id' => 'nullable',
            'category_id' => 'nullable',
            'comment_id' => 'nullable',
        ];

        return $rules;
    }
    
    /**
     * Get the request's data from the request.
     *
     * 
     * @return array
     */
    public function getData()
    {
        $data = $this->only(['title', 'slug', 'content', 'notes', 'created_by', 'body', 'image', 'active', 'featured', 'user_id', 'category_id', 'comment_id']);

        return $data;
    }

}