# Requisitos Não Funcionais

Abaixo estão listadas as características técnicas e restrições do sistema:

| **ID**  | **Requisito**                          | **Descrição**                                                                 |
|---------|----------------------------------------|-------------------------------------------------------------------------------|
| RNF01   | Ambiente de Desenvolvimento            | O projeto deve ser desenvolvido utilizando Laravel Sail com Docker.           |
| RNF02   | Banco de Dados                         | O banco de dados utilizado deve ser MySQL.                                    |
| RNF03   | Interface do Usuário                   | A interface deve ser simples e responsiva, utilizando Bootstrap para o design.|
| RNF04   | Autenticação (Opcional)                | Caso seja implementada autenticação, deve ser feita utilizando o sistema padrão do Laravel. |
| RNF05   | Performance                            | O sistema deve carregar a lista de livros em menos de 2 segundos.             |
| RNF06   | Segurança                              | O sistema deve validar todos os dados de entrada para evitar SQL Injection e outros ataques. |
| RNF07   | Compatibilidade                        | O sistema deve funcionar corretamente nos principais navegadores (Chrome, Firefox, Edge). |
| RNF08   | Documentação                           | O código deve ser bem documentado, com comentários claros e uma documentação externa explicando o funcionamento do sistema. |