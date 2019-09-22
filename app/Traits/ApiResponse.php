<?php

namespace App\Traits;

use Response;

trait ApiResponse
{
    /**
     * @param $result
     * @param $message
     * @param $code
     *
     * @return mixed
     */
    public function sendResponse($result, $message, $code)
    {
        return Response::json(self::makeResponse($message, $result), $code);
    }

    /**
     * @param $error
     * @param integer $code
     * @param array $data
     *
     * @return mixed
     */
    public function sendError($error, $code = 400, $data = [])
    {
        return Response::json(self::makeError($error, $data), $code);
    }

    /**
     * @param string $message
     * @param mixed $data
     *
     * @return array
     */
    public function makeResponse($message, $data)
    {
        return [
            'success' => true,
            'data' => $data,
            'message' => $message
        ];
    }

    /**
     * @param string $message
     * @param array $data
     *
     * @return array
     */
    public function makeError($message, array $data = [])
    {
        return [
            'success' => false,
            'message' => $message
        ];
    }
}