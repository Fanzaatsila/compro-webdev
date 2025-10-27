# Railway Deployment dengan MySQL

## 🎯 Environment Variables untuk Railway (MySQL)

Setelah add MySQL database di Railway, set environment variables berikut:

### Copy environment variables ini ke Railway Dashboard:

```bash
# Application
APP_NAME="Renjana Cashew"
APP_ENV=production
APP_KEY=base64:w7dJbUv3QqyIISuXTuxtRObLmboUcpCj7k65P5Zq+FQ=
APP_DEBUG=false
APP_URL=${{RAILWAY_PUBLIC_DOMAIN}}

# Database MySQL - Railway akan auto-inject setelah add MySQL
DB_CONNECTION=mysql
DB_HOST=${{MYSQL_HOST}}
DB_PORT=${{MYSQL_PORT}}
DB_DATABASE=${{MYSQL_DATABASE}}
DB_USERNAME=${{MYSQL_USER}}
DB_PASSWORD=${{MYSQL_PASSWORD}}

# Laravel Production Settings
SESSION_DRIVER=database
SESSION_LIFETIME=120
CACHE_DRIVER=database
QUEUE_CONNECTION=database
LOG_CHANNEL=stack

# Broadcasting & Filesystem
BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local

# Mail (gunakan SMTP provider seperti Mailtrap, Mailgun, dll)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="noreply@renjanacashew.com"
MAIL_FROM_NAME="${APP_NAME}"
```

## 📋 Langkah Setup di Railway Dashboard

### 1. Add MySQL Database

1. Buka project Railway: https://railway.com/project/59481115-b8c5-45b4-9a92-d4bed93c06f9
2. Klik **"+ New"**
3. Pilih **"Database" → "Add MySQL"**
4. MySQL akan otomatis ter-provision dengan credentials

### 2. Connect Service ke Database

1. Klik service Laravel Anda
2. Di tab **"Variables"**, Railway akan otomatis inject:
   - `MYSQL_HOST`
   - `MYSQL_PORT`
   - `MYSQL_DATABASE`
   - `MYSQL_USER`
   - `MYSQL_PASSWORD`
   - `MYSQL_URL` (connection string)

### 3. Set Custom Variables

Tambahkan variables di atas (APP_KEY, APP_ENV, dll) di tab **"Variables"**

### 4. Deploy & Run Migrations

Setelah database connected, redeploy service:

```bash
# Via CLI - Run migrations
railway run php artisan migrate --force

# Create admin user untuk Filament
railway run php artisan make:filament-user
```

Atau tambahkan **Post Deploy Command** di Railway:
- Go to **Service Settings → Deploy**
- Add **"Deploy Command"**: 
  ```
  php artisan migrate --force
  ```

## 🔧 Troubleshooting

### Error: "could not find driver"

Pastikan Railway Nixpacks install PHP MySQL extension. Buat file `nixpacks.toml`:

```toml
[phases.setup]
nixPkgs = ["php82", "php82Extensions.pdo", "php82Extensions.pdo_mysql", "php82Extensions.mysqli"]
```

### Error: Connection refused

Check variables di Railway:
```bash
railway variables
```

Pastikan `DB_CONNECTION=mysql` dan `MYSQL_*` variables sudah ter-set.

### Migration gagal

Run manual dengan verbose:
```bash
railway run php artisan migrate --force -vvv
```

## 🚀 Commands Reference

```bash
# Open Railway dashboard
railway open

# Check environment variables
railway variables

# Run artisan commands
railway run php artisan migrate --force
railway run php artisan db:seed --force
railway run php artisan make:filament-user
railway run php artisan optimize
railway run php artisan storage:link

# View logs
railway logs

# SSH ke container (untuk debugging)
railway shell
```

## 📊 Database Connection String

Jika perlu connect dari local (untuk testing):

```bash
# Get MySQL URL
railway variables | grep MYSQL_URL

# Or connect directly
railway run mysql -u $MYSQL_USER -p$MYSQL_PASSWORD -h $MYSQL_HOST $MYSQL_DATABASE
```

## 🎉 Setelah Deploy Berhasil

1. ✅ Aplikasi running di Railway public URL
2. ✅ MySQL database connected
3. ✅ Run migrations
4. ✅ Create admin user:
   ```bash
   railway run php artisan make:filament-user
   ```
5. ✅ Access admin panel: `https://your-app.railway.app/admin`

---

**Current Status:**
- ✅ Railway CLI installed
- ✅ Project linked to Railway
- ✅ GitHub repo connected (deploy otomatis on push)
- ⏳ Waiting: Add MySQL database di Railway dashboard
- ⏳ Waiting: Set environment variables
- ⏳ Waiting: Run migrations

**Next step:** Add MySQL database di Railway dashboard, lalu set environment variables di atas! 🚀
