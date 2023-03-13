<?php

namespace App\Http\Resources\V1\Account\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthReturnCollection extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "data" =>
            [
                "accessToken" => $this->token,
                "tokenType" => "Bearer",
                "user" => [
                    "login" => $this->login_usuario,
                    "id" => $this->id_usuario,
                    "name" => $this->nome_usuario,
                    "acessLevel" => $this->nivel_usuario,
                ]
            ]
        ];
    }
}
