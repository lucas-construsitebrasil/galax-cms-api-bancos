<?php

namespace App\Business\V1\Account\Security;

use App\Business\V1\Business;
use App\Facades\Auth\DataBaseFacade;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Payload;

class ExternalAuth
{
    use Business;

    public function decodeToken(): Payload
    {
        try {
            $token = JWTAuth::getToken();
            return JWTAuth::getPayload($token);
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            abort(Response::HTTP_UNAUTHORIZED, 'Token expired');
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            abort(Response::HTTP_UNAUTHORIZED, 'Unauthorized');
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            abort(Response::HTTP_UNAUTHORIZED, 'Unauthorized');
        }
    }

    public function connect(): void
    {
        DataBaseFacade::connectDatabase();
    }

    public function setDataBase(Payload $decodedToken): void
    {
        if (!isset($decodedToken['id'])) {
            abort(Response::HTTP_BAD_REQUEST, 'Invalid Id');
        }
        DataBaseFacade::setId($decodedToken['id']);
        DataBaseFacade::setHost($decodedToken['host'] ?? null);
        DataBaseFacade::setName($decodedToken['name'] ?? null);
        DataBaseFacade::setUser($decodedToken['user'] ?? null);
        DataBaseFacade::setPassword($decodedToken['password'] ?? null);
    }
}
