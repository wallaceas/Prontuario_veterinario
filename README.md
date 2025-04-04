# 🐾 Prontuário Veterinário

Este projeto é um sistema simples em PHP para busca de animais em um prontuário veterinário. A aplicação permite que usuários pesquisem animais pelo nome e visualizem os registros relacionados.

## 📄 Descrição

A página principal (`index.php`) contém um formulário de busca e lógica para exibir todos os animais cadastrados ou filtrar pelos que correspondem ao nome informado.

### 🧠 Funcionalidades:

- Exibir todos os animais cadastrados no sistema.
- Buscar por animais específicos pelo nome.
- Interface simples com HTML e CSS.

## 🚀 Como Usar

1. **Requisitos:**
   - PHP 7.0 ou superior
   - Servidor local (como XAMPP, WAMP ou MAMP)
   - Navegador web

2. **Instalação:**

   - Clone o repositório ou copie os arquivos para o diretório do seu servidor local.
   - Certifique-se de que o arquivo `config.php` está configurado corretamente com a conexão ao banco de dados.
   - A aplicação espera que exista uma classe chamada `AnimalView` com os métodos:
     - `ExibirTodosAnimais()`
     - `BuscarPeloNome($nome)`

3. **Uso:**

   - Acesse `index.php` via navegador (ex: `http://localhost/seu_projeto/index.php`).
   - Digite o nome de um animal no campo de busca ou deixe em branco para ver todos.

## 🗃️ Estrutura do Projeto

```
├── index.php
├── config.php
├── css/
│   ├── estilo.css
│   └── estiloAtendimento.css
```

## 📦 Exemplo da Classe Esperada (`AnimalView`)

```php
class AnimalView {
    public function ExibirTodosAnimais() {
        // lógica para exibir todos os animais
    }

    public function BuscarPeloNome($nome) {
        // lógica para buscar animal pelo nome
    }
}
```

## 📌 Observações

- O projeto está em desenvolvimento inicial e pode ser expandido com autenticação, cadastro de animais, histórico clínico, etc.
- A busca é feita por `GET`, tornando possível compartilhar a URL da pesquisa.

## 📋 Licença

Este projeto é livre para uso educacional ou pessoal. Para uso comercial, recomenda-se revisar as dependências e regras de negócio.

---
