
## 📄 Client Proposal Generator

Generate beautiful, downloadable client proposals with dynamic inputs and PDF export — built with Laravel and ready for customization.

---

### 🚀 Features

- 📝 Dynamic form for proposal creation
- 📄 PDF generation using DOMPDF
- 🎨 Customizable Blade templates
- 🗂️ Clean MVC structure with extensible design
- ⚙️ CI-ready with linting and formatting workflows
- 📦 Future-ready for packaging as a Laravel module

---

### 🧰 Tech Stack

| Layer        | Tools Used                          |
|--------------|-------------------------------------|
| Backend      | Laravel 10                          |
| PDF Export   | barryvdh/laravel-dompdf             |
| Frontend     | Blade, Tailwind CSS (optional)      |
| CI Workflow  | GitHub Actions (PHPStan, Pint, etc) |

---

### 📦 Installation

```bash
git clone https://github.com/tawfikhabib/client-proposal-generator.git
cd client-proposal-generator
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

---

### 🛠 Usage

1. Visit `/proposal` in your browser.
2. Fill in client details, scope, pricing, and notes.
3. Click **Generate PDF** to download a polished proposal.

---

### 🧪 Testing & CI

Includes GitHub Actions for:
- ✅ PHPStan (static analysis)
- ✅ Laravel Pint (code style)
- ✅ PHPUnit (optional)

To run locally:
```bash
./vendor/bin/pint
./vendor/bin/phpstan analyse
php artisan test
```

---

### 📁 Folder Structure

```
app/
├── Http/
│   └── Controllers/
│       └── ProposalController.php
resources/
└── views/
	├── proposal/create.blade.php
	└── proposal/pdf.blade.php
routes/
└── web.php
```

---

### 📄 License

MIT — free to use, modify, and distribute.

---
