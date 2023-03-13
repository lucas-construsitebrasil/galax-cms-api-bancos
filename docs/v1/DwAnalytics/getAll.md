
## DwAnalytics

### Retorna dados para analise de todos cliente

```http
  GET  v1/dwAnalytics/infoClient
```

*Retorna todos clientes, com dados de analise, como número de logins, 
visitas diarias, cliques no whatsapp.*



**Exemplo de retorno:**

```json
{
	"current_page": 1,
	"data": [
		{
			"id": 1,
			"nameDomain": "teste1dayanne.com.br",
			"server": "localhost",
			"status": "V",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 2,
			"nameDomain": "testesversao.com.br",
			"server": "localhost",
			"status": "V",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 3,
			"nameDomain": "mmeletromecanica.com",
			"server": "localhost",
			"status": "F",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 5,
			"nameDomain": "riosulmetaisltda.com.br",
			"server": "localhost",
			"status": "F",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 6,
			"nameDomain": "tudorganizado.com",
			"server": "localhost",
			"status": "F",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 8,
			"nameDomain": "fyrmearmarios.com.br",
			"server": "todobh.com.br",
			"status": "V",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 9,
			"nameDomain": "premoldadosgel.com.br",
			"server": "todobh.com.br",
			"status": "F",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 11,
			"nameDomain": "tecgravacoes.com.br",
			"server": "localhost",
			"status": "V",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 12,
			"nameDomain": "rcprojetos3d.com.br",
			"server": "todobh.com.br",
			"status": "F",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 13,
			"nameDomain": "proaco.eng.br",
			"server": "todobh.com.br",
			"status": "V",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 14,
			"nameDomain": "herondobrasil.com.br",
			"server": "localhost",
			"status": "V",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 15,
			"nameDomain": "floriculturalabelle.com.br",
			"server": "localhost",
			"status": "F",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 17,
			"nameDomain": "cmdecoracoesbh.com.br",
			"server": "localhost",
			"status": "F",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 18,
			"nameDomain": "construsite.com.br\/modelo\/",
			"server": "localhost",
			"status": "V",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		},
		{
			"id": 20,
			"nameDomain": "cachacaserena.com.br",
			"server": "localhost",
			"status": "V",
			"centralized": "F",
			"currentTemplate": 0,
			"dataAnalytics": {
				"todayVisits": 0,
				"todayEmails": 0,
				"todayClickWhatsApp": 0,
				"dailyLogins": 0
			}
		}
	],
	"first_page_url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=1",
	"from": 1,
	"last_page": 306,
	"last_page_url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=306",
	"links": [
		{
			"url": null,
			"label": "&laquo; Previous",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=1",
			"label": "1",
			"active": true
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=2",
			"label": "2",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=3",
			"label": "3",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=4",
			"label": "4",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=5",
			"label": "5",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=6",
			"label": "6",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=7",
			"label": "7",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=8",
			"label": "8",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=9",
			"label": "9",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=10",
			"label": "10",
			"active": false
		},
		{
			"url": null,
			"label": "...",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=305",
			"label": "305",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=306",
			"label": "306",
			"active": false
		},
		{
			"url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=2",
			"label": "Next &raquo;",
			"active": false
		}
	],
	"next_page_url": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient?page=2",
	"path": "http:\/\/apicms.galaxcms.com.br\/v1\/dwAnalytics\/infoClient",
	"per_page": 15,
	"prev_page_url": null,
	"to": 15,
	"total": 4586
}
```