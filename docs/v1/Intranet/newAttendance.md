
## NewAttendance

Criar um novo atendimento via Webservice com a Intranet OLD.

```http
  POST /v1/newAttendance
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `name`      | `string` | **Obrigatório**. Nome do Prospect para ser criado no atendimento |
| `phone`      | `string` | **Obrigatório**. Número de telefone do prospect |
| `nameForm`      | `string` | **Obrigatório**. Nome do formulário de origem |
| `email`      | `string` | **Obrigatório**. Email do Prospect (Na página de turbinar site -> login do CMS ) |
| `from`      | `string` | **Obrigatório**. Origem do atendimento |
| `tagEgoi`      | `int` | **Obrigatório**. Tag Egoi |
| `requestedAction`      | `string` | **Obrigatório**. Ação desejada com a criação do conatto/atendimento |



**Exemplo de JSON enviado:**

```json
{
	"name":"Mário",
 	"phone":"(31) 99885-8885",
 	"nameForm":"formBoostWebsite",
 	"email":"teste@construsite.com",
 	"from":"Quero Turbinar meu site! Dominio do cliente: testeapicms.com.br",
 	"tagEgoi":"5",
 	"requestedAction":"Turbinar site"
}

```

**Exemplo de retorno:**

```json
{
	"type": "success",
	"message": "Contato solicitado com sucesso!"
}

```
