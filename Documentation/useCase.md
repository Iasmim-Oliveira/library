# Documentação de Casos de Uso - Biblioteca Virtual

Este documento descreve os principais casos de uso do sistema de biblioteca virtual, onde os usuários podem registrar livros que estão lendo, já leram ou planejam ler.

---

## Caso de Uso: Registrar Leitura

### 1. Nome do Caso de Uso
- **Registrar Leitura** (Register Reading)

### 2. Atores
- **Usuário** (User)

### 3. Descrição
O usuário registra um livro que está lendo, já leu ou planeja ler, definindo o status da leitura.

### 4. Pré-Condições
- O usuário deve estar logado no sistema.
- O livro deve estar cadastrado na biblioteca virtual.

### 5. Fluxo Principal
1. O usuário acessa a lista de livros disponíveis.
2. O usuário seleciona um livro da lista.
3. O sistema exibe as opções de status de leitura: "Lido", "Lendo" ou "Planejado".
4. O usuário seleciona o status desejado.
5. O sistema registra o status de leitura para o livro selecionado.
6. O sistema exibe uma mensagem de confirmação de registro.

### 6. Fluxos Alternativos
#### Fluxo Alternativo 1: Livro não encontrado
1. Se o livro não estiver cadastrado, o sistema exibe uma mensagem de erro.
2. O caso de uso é encerrado.

#### Fluxo Alternativo 2: Usuário não logado
1. Se o usuário não estiver logado, o sistema redireciona para a tela de login.
2. Após o login, o usuário pode retomar o registro da leitura.

### 7. Pós-Condições
- O livro selecionado é associado ao usuário com o status de leitura registrado.
- O sistema atualiza a lista de leituras do usuário.

---

## Caso de Uso: Adicionar Livro

### 1. Nome do Caso de Uso
- **Adicionar Livro** (Add Book)

### 2. Atores
- **Administrador** (Admin)

### 3. Descrição
O administrador adiciona um novo livro ao sistema da biblioteca virtual.

### 4. Pré-Condições
- O administrador deve estar logado no sistema.

### 5. Fluxo Principal
1. O administrador acessa a seção de gerenciamento de livros.
2. O administrador seleciona a opção "Adicionar Livro".
3. O sistema exibe um formulário para inserir os detalhes do livro (título, autor, gênero, etc.).
4. O administrador preenche os detalhes do livro.
5. O administrador confirma a adição do livro.
6. O sistema valida os dados e salva o novo livro no banco de dados.
7. O sistema exibe uma mensagem de confirmação.

### 6. Fluxos Alternativos
#### Fluxo Alternativo 1: Dados inválidos
1. Se os dados do livro estiverem incompletos ou inválidos, o sistema exibe uma mensagem de erro.
2. O administrador pode corrigir os dados e tentar novamente.

#### Fluxo Alternativo 2: Livro já cadastrado
1. Se o livro já estiver cadastrado, o sistema exibe uma mensagem informando que o livro já existe.
2. O caso de uso é encerrado.

### 7. Pós-Condições
- O novo livro é adicionado ao sistema e fica disponível para os usuários.

---

## Diagrama de Caso de Uso

Abaixo está um diagrama de caso de uso gerado com PlantUML:

```plantuml
@startuml
actor User
actor Admin

rectangle "Virtual Library System" {
    User --> (Register Reading)
    User --> (Update Reading Status)
    User --> (View Book List)
    Admin --> (Add Book)
    Admin --> (Remove Book)
    Admin --> (Manage Users)
}

note right of User
  The user can register readings,
  update their status, and view books.
end note

note left of Admin
  The admin can manage books
  and users in the system.
end note
@enduml