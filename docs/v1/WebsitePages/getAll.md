
## WebsitePages

### Retorna os módulos do site do cliente

```http
  GET  v1/websitePages
```

*Retorna todos os dados dos módulos presentes no site do cliente. Consulta na tabela 'modulossite'.*



**Exemplo de retorno:**

```json
{
	"current_page": 1,
	"data": [
		{
			"id": 8,
			"moduleId": null,
			"moduleSiteId": 7,
			"nameModulosite": "Orçamento de Empresa",
			"urlPage": "orcamento-de-empresa",
			"namePage": "Orçamento de Empresa",
			"showInMenuButton": "F",
			"showOnHomeButton": "F",
			"nameBoxHome": "Orçamento de Empresa",
			"emailTo": "contato@divermed.com.br"
		},
		{
			"id": 9,
			"moduleId": 23,
			"moduleSiteId": null,
			"nameModulosite": "Produtos",
			"urlPage": "produtos",
			"namePage": "Produtos",
			"showInMenuButton": "V",
			"showOnHomeButton": "V",
			"nameBoxHome": "Produtos",
			"emailTo": null
		},
		{
			"id": 10,
			"moduleId": null,
			"moduleSiteId": 9,
			"nameModulosite": "Orçamento de Produtos",
			"urlPage": "produtos-orcamento",
			"namePage": "Orçamento de Produtos",
			"showInMenuButton": "F",
			"showOnHomeButton": "F",
			"nameBoxHome": "Orçamento de Produtos",
			"emailTo": "contato@divermed.com.br"
		}
    ]
}
```