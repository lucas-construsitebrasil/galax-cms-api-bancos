
## Autenticação

Para se autenticar na aplicação deve gerar o token e incluilo em toda requisição a api.

```http
  POST /v1/auth/userCredentials
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `clientId`      | `int` | **Obrigatório**. O ID do CMS |
| `user`      | `string` | **Obrigatório**. Usuário do cliete |
| `password`      | `string` | **Obrigatório**. Senha do cliete |




**Exemplo de JSON enviado:**

```json
{
	"clientId": 1827,
	"user": "teste@teste.com",
	"password": "teste@teste.com"
}

```



**Exemplo de retorno:**

```json
{
	"data": {
		"accessToken": "7551|L3IZSHeYcDD9ZHb9pffFEULZ5eQwrRH3UH6KEURW",
		"tokenType": "Bearer",
		"user": {
			"login": "ADMIN",
			"id": 777,
			"name": "Construsite Brasil",
			"acessLevel": 6
		}
	}
}
```
