
## WebsitePages

Para atualizar um módulo do site é necessário informar o ID do módulo desejado.

```http
  PUT /v1/websitePages
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `int` | **Obrigatório**. O ID do Módulo Site |
| `namePage`      | `string` | **Obrigatório**. Nome do Módulo Site |
| `showOnHomeButton`      | `char` | **Obrigatório**. Mostrar módulo na home (aceita apenas 'V' ou 'F') |
| `showInMenuButton`      | `char` | **Obrigatório**. Mostrar módulo no Menu (aceita apenas 'V' ou 'F') |



**Exemplo de JSON enviado:**

```json
{
	"id": 7,
	"namePage": "Quem somos",
	"showOnHomeButton": "V",
	"showInMenuButton": "F"
}

```


**Exemplo de retorno:**

```json
1
```
