Análise de ferramentas para criar mock de APIs

Ferramentas avaliadas
- Wiremock + 10M pull no DockerHub
- Imposter Mocks + 100K pulls
- MockServer +50M pulls (última atualização jan/2023)


Wiremock
- + 10M pull no DockerHub
- Última atualização no Github 29/11/2024
- Documentação
    - https://wiremock.org/docs/overview/
    - https://wiremock.org/docs/standalone/docker/
- Possível definir arquivos de configuração no entrypoint para subir mock server rapidamente
- Possui API JSON para manipular mocks/stubs e verificar requests caso necessário
- Possui implementação de Client em PHP para comunicar com a API JSON
    - Pode ser usado para criar stubs de requisições direto no teste
    - Indicado na documentação do Wiremock https://wiremock.org/external-resources/
    - https://github.com/rowanhill/wiremock-php
- Possibilidade de estender com plugins
- Pode ser usado como proxy para registrar as requisições que passam por ele
    - https://wiremock.org/docs/proxying/
- Pode salvar e retornar dados
- Possui Serviço em Cloud com mais funcionalidades (pagas)
- Importar Swagger somente na versão Cloud, versão self-hosted não tem nativamente
    - Possível importar OpenApi ou Postman Collection e exportar como Wiremock somente na versão paga
- Plugins do PHPStorm para facilitar uso
- Possui API para administrar a ferramenta


Imposter
- Mais novo
- + 100K pulls no DockerHub
- Última atualização no Github 05/01/2025
- Documentação
    - https://docs.imposter.sh/
- Fácil utilização de arquivos Swagger no padrão Openapi para criar um Mock Server
    - Ainda não possui suporte para o arquivo em JSON, mas a conversão de JSON para YAML é tranquila com ferramenta da própria Swagger
        - https://editor.swagger.io/
- Não possui implementação fácil de verificação dos requests, mas pode coletar algumas métricas via API
- Possui pacote em JVM e Nodejs para usar como exemplo para criar mocks direto nos testes unitários
    - Precisa desenvolver o client em PHP
- Aceita REST, OpenAPI (Swagger), SOAP, Wiremock
    - O arquivo json utilizado pelo Wiremock é compatível
- Aceita scripts js para manipular os requests
- Possui validação de requests conforme especificação OpenAPI
    - https://docs.imposter.sh/openapi_validation/
- Geração de dados fictícios
- Pode salvar e retornar dados
- Pode ser usado como proxy para registrar as requisições que passam por ele
    - https://docs.imposter.sh/proxy_endpoint/
- Possui API para administrar a ferramenta
- Possui roadmap
    - https://docs.imposter.sh/roadmap/


MockServer
- +50M pulls no DockerHub
- Mais robusto
- Última atualização no Github 21/02/2023 (parado)
- Possui UI
