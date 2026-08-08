# Paisape — Website & CMS

This is the Paisape corporate website and Content Management System (CMS). It is built using PHP, Tailwind CSS, and a MariaDB database to manage dynamic content like Blogs and Settings.

---

## 1. Local Development (Docker Setup)

The easiest way to run this project on your local machine is using Docker. You do not need to install PHP, Apache, or MySQL locally.

### Prerequisites:
- **Docker Desktop** installed and running on your PC.
> [!WARNING]
> **Drive Installation Note:** Do NOT install Docker, your IDE, or clone this repository into the `C:\` drive. The `C:\` drive is reserved strictly for Windows system files. Please install Docker and clone this project onto your `D:\` drive (or `F:\` drive) for all development work.

### Installation Steps:
1. Open your terminal (PowerShell, CMD, or VS Code Terminal) in the project folder (`paisape-website`).
2. Run the following command to build and start the servers:
   ```bash
   docker-compose up -d --build
   ```
3. Docker will automatically:
   - Start an Apache web server with PHP 8.2 on port 8000.
   - Start a MariaDB database and automatically create the required tables and default admin user using `admin/init.sql`.

### Viewing the Site:
- **Public Website:** Open `http://localhost:8000` in your browser.
- **Admin Panel:** Open `http://localhost:8000/admin/login.php`
  - **Username:** `admin`
  - **Password:** `admin123`

To stop the servers when you are done, run:
```bash
docker-compose down
```

---

## 2. Server Deployment (Coolify)

When deploying to a production server (like Coolify using Nixpacks):
1. The platform will automatically detect `index.php` and serve the site.
2. You must provision a **MariaDB Database** on your server.
3. Set the following Environment Variables in your Coolify project settings so the website can connect to the database:
   - `DB_HOST` (e.g., your database container IP or hostname)
   - `DB_NAME` (e.g., paisape_db)
   - `DB_USER` (e.g., root)
   - `DB_PASS` (Your database password)
4. Execute the SQL script located in `admin/init.sql` inside your production database to create the tables.

---

## 3. Folder Structure

```
paisape-website/
├── index.php                       Home / landing
├── config.php                      Global configuration & DB credentials
├── core/
│   ├── db.php                      Database connection logic (PDO)
│   ├── mail.php                    Email sending logic
├── admin/                          CMS Dashboard
│   ├── init.sql                    Database schema and default data
│   ├── login.php                   Admin authentication
│   ├── dashboard.php               Stats overview
│   └── blogs.php                   Blog manager with Quill.js
├── blog/                           Public blog folder
├── contact/                        Contact Us page
├── contact_us.php                  Form processor (sends emails)
├── css/style.css                   Custom CSS (animations, mega menu)
├── docker/                         Local Docker environment files
└── docker-compose.yml              Docker service configuration
```

---

## 4. Replacing the Logo

Drop your files in `assets/` using the same names and nothing else changes:

| File | Where it appears | Recommended |
|---|---|---|
| `assets/logo.svg` | Navbar (light background) | SVG or PNG @2x, ~200×52 |
| `assets/logo-white.svg` | Footer (dark background) | white/light version |
| `assets/paisape-logo.png` | Browser tab | square |

---

## 5. Changing colours and fonts

Everything lives in `js/tailwind.config.js`. Change one value, all pages update:

```js
brand:   '#0E9BEE',   // primary blue — buttons, links, highlights
mint:    '#2ECFB4',   // secondary — mega menu arrows
ink:     '#16233B',   // headings
body:    '#5C6B84',   // paragraphs
```

Fonts are loaded from Google Fonts in each page's `<head>` — Plus Jakarta Sans (headings), Inter (body), JetBrains Mono (terminal).

---

## 6. Animations

| Effect | How to use it |
|---|---|
| Fade up on scroll | `data-reveal` |
| Slide in from left/right | `data-reveal="left"` / `data-reveal="right"` |
| Zoom in | `data-reveal="zoom"` |
| Stagger | `data-delay="120"` (milliseconds) |

Marquees loop seamlessly because `js/main.js` clones the `[data-mq-group]` block into `[data-mq-clone]`. Hovering pauses the scroll.

---

## 7. Contact Form Telemetry

The Contact Us form (`contact_us.php`) includes built-in telemetry tracking. When a user submits the form, it captures:
- Screen Resolution
- Timezone
- Browser Language
- User IP Address
- User-Agent

This data is automatically appended to the internal notification email sent to the sales team, helping you understand your leads better.
