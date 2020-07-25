<?php	

namespace App\Traits;

trait Response 
{
	/**
     * response get request success
     * @param array    $data
     * @param string   $message
     * @param int|null $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function success(array $data, string $message = "", int $code = null)
    {
        $response = [
            'code'        => $this->getCode($code),
            'server_time' => $this->getServerTime(),
            'message'     => empty($message) ? __('Successful') : $message,
            'data'        => $this->getOutputs($data)
        ];
        return $this->response($response);
    }


	/**
     * error when validate fail
     * @param        $errors
     * @param string $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorValidateRequest($errors, $code = '')
    {
        $response = [
            'code'        => empty($code) ? 422 : $code,
            'server_time' => $this->getServerTime(),
            'errors'      => $errors
        ];
        return $this->response($response);
    }


    /**
     * response server error
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorServices(string $message = '')
    {
        $response = [
            'code'        => config('code.server_error'),
            'server_time' => $this->getServerTime(),
            'errors'      => empty($message) ? __("Operation Failed") : $message
        ];
        return $this->response($response);
    }

    /**
     * error token
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorToken(string $message = '')
    {
        $response = [
            'code'        => config('code.token_required'),
            'server_time' => $this->getServerTime(),
            'errors'      => empty($message) ? __("Token Required") : $message
        ];
        return $this->response($response);
    }

    /**
     * response unauthorized error
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorUnauthorized(string $message = "")
    {
        $response = [
            'code'        => config('code.unauthorized'),
            'server_time' => $this->getServerTime(),
            'errors'      => empty($message) ? __("Unauthorized") : $message
        ];
        return $this->response($response);
    }

    /**
     * @param array $response
     * @return \Illuminate\Http\JsonResponse
     */
	private function response(array $response = [])
    {
        return response()->json(
            $response,
            config('code.success'),
            ['Content-type' => 'application/json; charset=utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

    /**
     * get output for response data
     * @param array $data
     * @return \stdClass
     */
    private function getOutputs(array $data = [])
    {
        $results = new \stdClass();
        foreach ($data as $key => $value) {
            $results->{$key} = $value;
        }
        return $results;
    }

    /**
     * get code for response data
     * @param int|null $code
     * @return mixed
     */
    private function getCode(int $code = null)
    {
        return !is_null($code) && is_int($code) ? $code : config('code.success');
    }

    /**
     * return current server time with default format
     * @return string
     */
    private function getServerTime()
    {
        return now()->format(config('datetime.default'));
    }
}

