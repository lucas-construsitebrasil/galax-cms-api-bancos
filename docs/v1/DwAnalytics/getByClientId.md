
## DwAnalytics

### Retorna dados para analise de um cliente

```http
  GET  v1/dwAnalytics/infoClient/{id}
```

*Retorna um cliente, com dados de analise, como número de logins, 
visitas diarias, cliques no whatsapp.*


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