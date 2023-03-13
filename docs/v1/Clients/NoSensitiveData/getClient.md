
## Clientes (DataBases)

### Retorna Clientes Pelo ID

```http
  GET  v1/clients/noSensitiveData/{id}
```

*Retorna um cliente, sem seus dados sensíveis, como a senha.*


**Exemplo de retorno:**

```json
{
	"data": {
		"id": 1000,
		"server": "localhost",
		"domain": "pdr.com.br",
		"status": "V",
		"centralized": "F"
	}
}
```