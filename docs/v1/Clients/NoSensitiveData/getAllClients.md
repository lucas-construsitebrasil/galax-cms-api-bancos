## Clientes (DataBases)

### Retorna Todos Clientes

Tem disponivel a opção de filtros, para filtrar por dados específicos, como nos exemplos abaixo:


```http
  GET  v1/clients/noSensitiveData/
```

Retorna todos clientes, sem filtros.

```http
  GET  v1/clients/noSensitiveData?filter[dominio_login]={teste}
```

*Retorna todos domínios que possuem a palavra **teste**.*

```http
  GET  v1/clients/noSensitiveData?filter[bln_status_login]=V
```

*Retorna todos clientes **ativos**.*


**Exemplo de retorno:**

```json
{
	"data": [
		{
			"id": 1000,
			"server": "localhost",
			"domain": "pdr.com.br",
			"status": "V",
			"centralized": "F"
		},
		{
			"id": 1827,
			"server": "localhost",
			"domain": "pdr.com.br",
			"status": "V",
			"centralized": "F"
		}
	]
}
```
