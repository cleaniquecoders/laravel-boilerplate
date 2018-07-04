<?php

namespace App\Macros\Http;

use Illuminate\Support\Facades\Response as HttpResponse;

class Response
{
    public static function registerMacros()
    {
        HttpResponse::macro('api', function ($data = null, $message = null, $status = true, $code = 200) {
            return response()->json([
                'data'    => $data,
                'message' => $message,
                'status'  => $status,
                'code'    => $code,
            ], $code);
        });

        HttpResponse::macro('datatable', function ($data, $countRecordsFiltered, $countRecordsTotal) {
            return response()->json([
                'recordsFiltered' => $countRecordsFiltered,
                'recordsTotal'    => $countRecordsTotal,
                'data'            => $data,
            ]);
        });
    }
}
