Claro! Aqui está a versão em inglês do seu `README.md`:

---

# 🐾 Veterinary Medical Record

This project is a simple PHP system for searching animals in a veterinary medical record. The application allows users to search for animals by name and view related records.

## 📄 Description

The main page (`index.php`) contains a search form and logic to display all registered animals or filter them based on the entered name.

### 🧠 Features:

- Display all animals registered in the system.  
- Search for specific animals by name.  
- Simple interface with HTML and CSS.  

## 🚀 How to Use

1. **Requirements:**
   - PHP 7.0 or higher  
   - Local server (such as XAMPP, WAMP, or MAMP)  
   - Web browser  

2. **Installation:**

   - Clone the repository or copy the files to your local server directory.  
   - Make sure the `config.php` file is correctly set up with your database connection.  
   - The application expects a class named `AnimalView` with the following methods:  
     - `ExibirTodosAnimais()`  
     - `BuscarPeloNome($nome)`  

3. **Usage:**

   - Access `index.php` via your browser (e.g., `http://localhost/your_project/index.php`).  
   - Enter an animal's name in the search field or leave it blank to view all.

## 🗃️ Project Structure

```
├── index.php
├── config.php
├── css/
│   ├── estilo.css
│   └── estiloAtendimento.css
```

## 📦 Expected Class Example (`AnimalView`)

```php
class AnimalView {
    public function ExibirTodosAnimais() {
        // logic to display all animals
    }

    public function BuscarPeloNome($nome) {
        // logic to search for an animal by name
    }
}
```

## 📌 Notes

- This project is in early development and can be expanded with features like authentication, animal registration, clinical history, etc.  
- The search uses the `GET` method, making it possible to share the search URL.

## 📋 License

This project is free for educational or personal use. For commercial use, it's recommended to review the dependencies and business rules.

---

Developed by Wallace Araújo.
