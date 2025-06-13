# 📬 Website Interaction API - Laravel

A powerful and customizable Laravel API designed to manage and store data from a website's:

- 📰 **Newsletter Subscriptions**
- 📝 **Get-Started Forms**
- 💼 **Job Applications**

It also includes a **custom email validation rule** to reject invalid or meaningless email prefixes (e.g. `hfejhfehfjehj@gmail.com`).

---

## 🚀 Features

| Feature | Description |
|--------|-------------|
| ✅ **Newsletter Subscription** | Collect and store newsletter sign-ups. |
| ✅ **Get-Started Form** | Capture user interest through a starter form. |
| ✅ **Job Application Submission** | Accept resumes and cover letters with file upload support. |
| ✅ **Custom Email Validation Rule** | Detects and rejects suspicious or random email prefixes. |
| 🔐 **API Ready** | Built entirely as a RESTful API using Laravel. |

---

## 🛠 Built With

- **Laravel** – PHP web application framework
- **MySQL** (or other supported DBs) – For storing submissions
- **Custom Validation Rule** – Smart logic for filtering out invalid emails

---

## 📦 Installation

```bash
# Clone the repo
git clone https://github.com/Jayjtech/Website-Interaction-API.git

# Navigate into the project directory
cd your-repo-name

# Install dependencies
composer install

# Copy .env file and set your config
cp .env.example .env

# Generate app key
php artisan key:generate

# Set up your database in .env then run migrations
php artisan migrate
