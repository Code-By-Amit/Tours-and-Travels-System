# 🌍 Tours and Travels Website

A Tours and Travels booking system built using **PHP (CodeIgniter)**, **MySQL**, and **Tailwind CSS**.

## 🚀 Features

- Tour listings
- User registration and login
- Admin panel to manage tours
- Tailwind CSS for modern UI

## ⚙️ Setup Instructions

1. **Clone the repository**
- Place the project inside the `htdocs` folder (e.g., `C:/xampp/htdocs/tours-travels`)
   ```bash
   git clone https://github.com/Code-By-Amit/Tours-and-Travels-System.git
   ```

2.  **Start XAMPP**
   - Start **Apache** and **MySQL** from the XAMPP Control Panel


3. **Import the database**
   - Open [phpMyAdmin](http://localhost/phpmyadmin)
   - Create a new database named `tours_db`
   - Import the `tours_db.sql` file from the project root

4. **Install Tailwind dependencies**
   ```bash
   cd resources
   npm install
   ```

5. **Run the project**
   - Open your browser and visit:  
     `http://localhost/tours-and-travels-system/public`



## 📁 Project Structure

- `/app` – Application logic (Controllers, Models, Views)
- `/public` – Public assets and entry point
- `/resources` – Tailwind config and CSS
- `tours_db.sql` – MySQL database dump

---