<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('blog_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => [
                'required',
            ],
            'catid'       => [
                'required',
            ],
            'photo'=>[
                'required'
            ],
            'content' => [
                'required',
            ],
            'summary' => [
                'required',
            ],
            'isorder' => [
                'required',
            ],
        ];
    }
}
