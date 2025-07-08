# 📬 Contact Form with PHP & MySQL

A fully functional and styled **Contact Form** that allows users to submit their details and messages.  
Built using **PHP**, **MySQL**, and custom **Glassmorphism UI** — with form validation and database integration.

---

## ✨ Features

- 🧾 Form to collect: Name, Email, Subject, Message
- ✅ Input validation on required fields
- 💾 Save messages to MySQL database
- 🎨 Beautiful UI with purple theme and modern glass effect
- 🔐 Secured against empty submissions and invalid input

---

## 💻 Tech Stack

- `PHP` — server-side logic
- `MySQL` — database (contact_form_in)
- `HTML & CSS` — responsive and styled layout
- `XAMPP` — local development (Apache + MySQL)

---

## 🗃️ Database Structure

**Database:** `contact_form_in`  
**Table:** `messages`

| Field     | Type           | Description        |
|-----------|----------------|--------------------|
| `id`      | INT (AI, PK)   | Auto-increment ID  |
| `name`    | VARCHAR(100)   | Sender's name      |
| `email`   | VARCHAR(255)   | Sender's email     |
| `subject` | VARCHAR(255)   | Message subject    |
| `message` | TEXT           | Full message       |
| `created_at` | TIMESTAMP   | Submission time    |
