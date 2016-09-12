<?php

namespace Kordy\Ticketit\Helpers;

use Symfony\Component\HttpFoundation\Response;

class TicketitResponseTransformer
{
    public static function respond($output) {
        return response()->json([ 'data' => $output ])->setStatusCode(Response::HTTP_OK);
    }

    public static function respondSuccess($message = 'Operation is successfully done!') {
        return response()->json([
            'success' => [ 'message' => $message ]
        ])->setStatusCode(Response::HTTP_OK);
    }

    public static function errorNotFound($message = 'Not found!') {
        return response()->json([
            'error' => [ 'message' => $message ]
        ])->setStatusCode(Response::HTTP_NOT_FOUND);
    }

    public static function errorInValidSubmission($message = 'Invalid Submission!') {
        return response()->json([
            'error' => [ 'message' => $message ]
        ])->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    public static function errorUnknown($message = 'Unknown error!') {
        return response()->json([
            'error' => [ 'message' => $message ]
        ])->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public static function errorUnAuthorized($message = 'Unauthorized Access.') {
        return response()->json([
            'error' => [ 'message' => $message ]
        ])->setStatusCode(Response::HTTP_FORBIDDEN);
    }
}
