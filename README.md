# Sistema de Cadastro e Acesso

Este é um sistema simples de cadastro e acesso desenvolvido em PHP e HTML. Ele permite que os usuários realizem um cadastro e acessem uma área restrita do sistema.

## Configuração do Banco de Dados

O sistema utiliza um banco de dados MySQL para armazenar informações de cadastro. As configurações de conexão estão presentes no início do arquivo PHP (`index.php`). Certifique-se de ajustar as variáveis `$dbHost`, `$dbUsername`, `$dbPassword` e `$dbName` de acordo com suas configurações.

```php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';
```

### Estrutura do Projeto

O projeto é dividido em três principais arquivos PHP:

    index.php - Página inicial que contém o formulário de cadastro.
    login.php - Página de login que valida as credenciais.
    sistema.php - Página restrita acessada após o login bem-sucedido.

Além disso, há arquivos de estilo CSS embutidos nas páginas HTML para fornecer uma interface visual amigável.

### Instruções de Uso

    Clone o repositório.
    Configure o banco de dados conforme mencionado acima.
    Abra o projeto em um servidor PHP.
