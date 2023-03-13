
## Autenticação

Para se autenticar na aplicação deve gerar o token e incluilo em toda requisição a api.

```http
  POST /v1/auth/token
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `clientId`      | `int` | **Obrigatório**. O ID do CMS |
| `clientSecret`      | `string` | **Obrigatório**. A Chave Secreta do cliente |


Como o campo está criptografado, **não adianta só colocar qualquer clientSecret,
a chave deve ser gerada pela  API**.



**Exemplo de JSON enviado:**

```json
{
	"clientId": 1827,
	"clientSecret": "senha"
}

```



**Exemplo de retorno:**

```json
{
  "data": [
    "access_token": "8ed10550890d0c3d8143375bd6df276574afebd",
    "token_type": "Bearer",
    "expires_in": "1200"
  ]
}
```
