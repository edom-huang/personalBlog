<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostUpdateRequest extends PostCreateRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
