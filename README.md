# Errata de consultas públicas

Registro de erratas do participe. 

Para registrar os erros crie um arquivo json no diretório erratas. A errata deve ter como 
nome a id da consulta. Exemplo:

```
erratas/43.json
```

O json criado deve seguir este padrão abaixo:

`erratas/43.json`
```json
{	
	"descricao": "Lista de erros da consulta do PIU Setor 2",
	"urlConsulta": "http://participe.gestaourbana.prefeitura.sp.gov.br/setor-central-2/",
	"erros": [
        {
            "id": 0,
            "atualizacao": "aaaa-mm-dd",
            "conteudoAntigo": {
                "tipo": "texto",
                "conteudo": "Operação Urbana Consorciada",
            },
            "conteudoNovo": {
                "tipo": "texto",
                "conteudo": "Operação Consorciada",
            }
        }
    ]

```
> obs: [Veja na api o id numérico de cada consulta](https://api.gestaourbana.prefeitura.sp.gov.br/consultas/)


## Propriedades
### *descricao*
Descrição textual da consulta.

tipo: _String_

Exemplo: 
```json
{
    "descricao": "Lista de erros da consulta do PIU Setor 2"
}
```
_ _ _

### *urlConsulta*
Url pública da consulta pública.

tipo: _String_

Exemplo: 
```json
{
    "urlConsulta": "http://participe.gestaourbana.prefeitura.sp.gov.br/setor-central-2/"
}
```
_ _ _

# *erros*
Coleção de erros desta consulta

tipo: _Array_
```json
{
    "erros": [ { }, { } ]
}
```

_ _ _

## *erro*
> erros.[Object, Object]

Objeto da coleção de erros

tipo: _Objeto_

_ _ _
### *erro.id*
id desta coleção. 

tipo: _Number_
```json
{ 
     "id": 33, 
}
```
_ _ _

### *erro.atualizacao*
Data da atualização no padrão `aaaa-mm-dd` 

tipo: _String_


```json
{ 
     "idatualizacao": "2019-05-10",
}
```
_ _ _

### *erro.conteudoAntigo*
Objeto do conteúdo antigo. 

tipo: _Object_

_ _ _

#### *erro.conteudoAntigo.tipo*
Tipo do erro. Isto define o tipo de conteúdo a ser alterado. 

tipo: _String_
*Valores previstos*: 
 * `"texto"`
 * `"imagem"`

#### *erro.conteudoAntigo.conteudo*
Atenção: 
* Caso o `tipo` seja `"texto"`, o conteúdo deve ser uma _String_ simples. 
* Caso o `tipo` seja `"imagem"`, o conteúdo deve ser um caminho absoluto de uma imagem.

tipo: _String_
*Valores previstos*: 
 * `"texto"`
 * `"imagem"`

`tipo` é um texto.
```json
{ 
     "conteudoAntigo": {
         "tipo": "texto",
         "conteudo": "Lorem ipsum"
     }
}
```

`tipo` é uma imagem.
```json
{ 
     "conteudoAntigo": {
         "tipo": "imagem",
         "conteudo": "https://participe.gestaourbana.prefeitura.sp.gov.br/arquivos/setor-central-2/img/distribuicao-estoque.png"
     }
}
```
_ _ _

#### *erro.conteudoNovo.tipo*
Tipo do erro. Isto define o tipo de conteúdo a ser alterado. 

tipo: _String_
*Valores previstos*: 
 * `"texto"`
 * `"imagem"`

#### *erro.conteudoNovo.conteudo*
Atenção: 
* Caso o `tipo` seja `"texto"`, o conteúdo deve ser uma _String_ simples. 
* Caso o `tipo` seja `"imagem"`, o conteúdo deve ser um caminho absoluto de uma imagem.

tipo: _String_
*Valores previstos*: 
 * `"texto"`
 * `"imagem"`

`tipo` é um texto.
```json
{ 
     "conteudoNovo": {
         "tipo": "texto",
         "conteudo": "Lorem ipsum"
     }
}
```

`tipo` é uma imagem.
```json
{ 
     "conteudoNovo": {
         "tipo": "imagem",
         "conteudo": "https://participe.gestaourbana.prefeitura.sp.gov.br/arquivos/setor-central-2/img/distribuicao-estoque.png"
     }
}
```

