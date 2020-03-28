<?php

namespace App\Http\Requests;

use App\Job;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateJobRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('job_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'         => [
                'required',
            ],
            'skills.*'      => [
                'integer',
            ],
            'skills'        => [
                'array',
            ],
            'contact_email' => [
                'required',
            ],
        ];
    }
}
