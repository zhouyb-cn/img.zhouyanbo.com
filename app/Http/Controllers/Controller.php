<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function formatValidationErrors(Validator $validator)
    {
        // return $validator->errors()->all();
        // return response(['code' => 1111]);
        $result = [
            'code'    => -1,
            'message' => 'Validation Failed',
            'errors'  => [],
        ];

        $errors = $validator->errors()->messages();
        foreach ($errors as $field => $error) {
            foreach ($error as $key => $value) {
                array_push($result['errors'], [
                    'field'   => $field,
                    'message' => $value
                ]);
            }
        }
        return $result;
    }
}
