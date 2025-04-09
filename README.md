# 📚 Kitaab Duniya – Smart Platform for Buying & Selling Books

**Kitaab Duniya** is a Laravel-based platform that connects students, local copy sellers, and recycling factories to create a sustainable and affordable book ecosystem. Whether you want to buy, sell, rent, or recycle – Kitaab Duniya makes it possible with just a few clicks.

---

## 🚧 Project Status

⚠️ **Currently in Development**

- ✅ Authentication system implemented  
- ✅ Buy/Sell functionality for second-hand books  
- ⏳ Integration with local sellers and recycling factories in progress  
- 🔜 Library rental system and eBook section coming soon

---

## 🎯 Purpose of the Project

Creating a one-stop solution for students and book enthusiasts to:

- Buy and sell second-hand books easily
- Purchase new books without visiting physical stores
- Access free and paid eBooks online
- Rent books from libraries
- Connect with local copy sellers
- Sell used notebooks/copies for recycling and earn money

---

## 🧠 Key Features

- 📚 **Buy/Sell Used Books** – Sell old books or buy at affordable rates  
- 🆕 **Buy New Books** – Purchase brand new books online  
- 📘 **eBooks Access** – Read free or paid eBooks anytime  
- 🏠 **Local Copy Sellers** – Buy notebooks sold by weight directly from local vendors  
- 🔁 **Recycle & Earn** – Sell old notebooks to recycling factories and earn  
- 🏢 **Library Rental System** – Rent books from partnered libraries  
- 🔐 **Authentication System** – Secure login/register for all users  

---

## ♻️ How It Helps

- Saves money for students  
- Promotes sustainability through recycling  
- Provides income opportunity to local sellers and factory partners  
- Reduces the need to travel for buying books or copies

---

## 🛠️ Tech Stack

| Category         | Technology     |
| ---------------- | -------------- |
| **Backend**      | Laravel        |
| **Frontend**     | Blade / HTML   |
| **Styling**      | CSS / Bootstrap|
| **Database**     | MySQL          |
| **Authentication** | Laravel Auth  |

---

## 📁 Folder Structure

```bash
kitaab-duniya/
│
├── app/                # Controllers, Models
├── resources/
│   ├── views/          # Blade templates
│   └── public/         # Images, CSS, JS
├── routes/
│   └── web.php         # Route definitions
├── database/           # Migrations and seeders
├── .env                # Environment config
└── README.md           # You’re reading it!
```

## 💻 How to Run Locally
# Clone the repository
git clone https://github.com/yourusername/kitaab-duniya.git

# Move into the project folder
cd kitaab-duniya

# Install dependencies
composer install

# Copy .env file and generate app key
cp .env.example .env
php artisan key:generate

# Set up your database in .env and run migrations
php artisan migrate

# Start the development server
php artisan serve


📫 Contact: krishna163208@gmail.com
🔧 Open for internship opportunities and collaboration

## 💡 Future Goals

Integrate UPI/payment gateway

AI-powered book recommendation system

Partner with more local vendors and libraries

Mobile-friendly UI redesign
