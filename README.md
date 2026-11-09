# pesquisaNutricional

Formulário web de pesquisa sobre hábitos alimentares, com as respostas gravadas em um banco MySQL.

> **Meu primeiro projeto no GitHub** (março/2021), feito para treinar PHP com MySQL no começo da faculdade. Está aqui como registro do ponto de partida.

## Stack

- PHP (procedural, com `mysqli`)
- MySQL
- Bootstrap 4.1.3 via CDN

## Estrutura

```
index.php          → formulário com as cinco perguntas
salva_mensagem.php → recebe o POST e grava no banco
conexao.php        → credenciais e abertura da conexão
estilo.css         → estilos
fundo.jpg          → imagem de fundo
```

## Perguntas da pesquisa

1. Você sabe a diferença entre nutrição e alimentação?
2. Quantas vezes você come ao dia?
3. Quem compra a comida na sua casa?
4. Você prepara a comida na sua casa?
5. Quantos litros de água você bebe por dia?

## Banco de dados

A tabela esperada é `formulario`:

```sql
CREATE TABLE formulario (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pergunta1 VARCHAR(255),
  pergunta2 VARCHAR(255),
  pergunta3 VARCHAR(255),
  pergunta4 VARCHAR(255),
  pergunta5 VARCHAR(255),
  datacadastro VARCHAR(255)
);
```

## Configuração

A conexão com o banco é lida de variáveis de ambiente, com valores padrão para um MySQL local:

| Variável      | Padrão      |
|---------------|-------------|
| `DB_HOST`     | `localhost` |
| `DB_USER`     | `root`      |
| `DB_PASSWORD` | vazio       |
| `DB_NAME`     | `pesquisa_nutricional` |

```bash
export DB_HOST="localhost"
export DB_USER="root"
export DB_PASSWORD="sua-senha"
export DB_NAME="pesquisa_nutricional"
```

No Windows (PowerShell), use `$env:DB_USER = "root"`.

## Como rodar

1. Suba um ambiente com PHP e MySQL (XAMPP, Laragon ou `docker run -d -p 3306:3306 mysql`).
2. Crie a tabela acima.
3. Configure as variáveis de ambiente do banco (veja a seção acima).
4. Sirva a pasta:

```bash
php -S localhost:8000
```

5. Acesse <http://localhost:8000>.

## Ressalvas (código de 2021)

Este projeto tem problemas que eu não repetiria hoje, e os mantenho documentados por honestidade histórica:

- ~~**Credenciais no repositório.**~~ O `conexao.php` trazia host, usuário e senha de um banco ClearDB do Heroku escritos no código. **Corrigido:** a conexão agora vem de variáveis de ambiente. As credenciais antigas seguem no histórico de commits, mas o serviço ClearDB foi descontinuado e elas estão mortas.
- **SQL injection.** O `INSERT` é montado por concatenação direta dos valores de `$_POST`, sem escape nem *prepared statements*. Em código novo, use `mysqli_prepare` com parâmetros vinculados.
- **`'now()'` como string.** A data de cadastro é gravada como o texto literal `now()` em vez da função SQL, porque está entre aspas simples. O correto seria `NOW()` fora das aspas, ou uma coluna `TIMESTAMP DEFAULT CURRENT_TIMESTAMP`.
- Sem validação no servidor (apenas o `required` do HTML) e sem feedback de sucesso para o usuário.
