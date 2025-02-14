# Regras de Negócio

Abaixo estão listadas as regras de negócio que o sistema deve seguir:

## Cadastro de Livros
1. **Campos Obrigatórios**:
   - Título, autor, gênero e número de páginas são campos obrigatórios.
   - Status (lido/não lido/lista de leitura) deve ser definido no momento do cadastro.
2. **Validações**:
   - O título deve ter no máximo 200 caracteres.
   - O ano de publicação deve ser um número entre 1000 e o ano atual.
   - O número de páginas deve ser um número positivo maior que 0.
3. **Nota**:
   - A nota é opcional e só pode ser adicionada se o livro estiver marcado como "lido".
   - A nota deve ser um número entre 0 e 5 (permitindo decimais, como 4.5).

## Edição de Livros
1. **Validações**:
   - Todos os campos obrigatórios devem ser mantidos durante a edição.
   - A nota só pode ser editada se o livro estiver marcado como "lido".

## Exclusão de Livros
1. **Confirmação**:
   - Antes de excluir um livro, o sistema deve solicitar confirmação do usuário.

## Marcar como Lido
1. **Regras**:
   - Ao marcar um livro como "lido", o sistema deve permitir que o usuário adicione uma nota.
   - Um livro marcado como "lido" não pode ser alterado para "não lido" sem remover a nota.

## Pesquisa e Filtros
1. **Filtros**:
   - O usuário deve poder filtrar livros por:
     - Status (lido/não lido/lista de leitura).
     - Gênero.
     - Autor.
2. **Pesquisa**:
   - A pesquisa deve ser feita por título, autor ou gênero, e deve retornar resultados parciais (ex: buscar "Harry" retorna "Harry Potter").