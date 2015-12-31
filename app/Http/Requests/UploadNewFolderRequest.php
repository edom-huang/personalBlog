<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UploadNewFolderRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'folder' => 'required',
            'new_folder' => 'required',
        ];
    }
}