# 🚀 Railway Environment Variables Setup

## 📋 Cara Set Variables di Railway Dashboard

### Method 1: Copy-Paste Manual (Termudah)

1. **Buka Railway Dashboard** → Pilih **service Laravel Anda** (yang baru di-deploy dari GitHub)
2. **Klik tab "Variables"**
3. **Klik "Raw Editor"** (toggle di kanan atas)
4. **Copy-paste semua ini:**

```env
APP_NAME=Renjana Cashew
APP_ENV=production
APP_KEY=base64:w7dJbUv3QqyIISuXTuxtRObLmboUcpCj7k65P5Zq+FQ=
APP_DEBUG=false
APP_URL=${{RAILWAY_PUBLIC_DOMAIN}}
APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US
BCRYPT_ROUNDS=12
MYSQLHOST=${{MySQL.MYSQLHOST}}
MYSQLPORT=${{MySQL.MYSQLPORT}}
MYSQLUSER=${{MySQL.MYSQLUSER}}
MYSQLPASSWORD=${{MySQL.MYSQLPASSWORD}}
MYSQLDATABASE=${{MySQL.MYSQLDATABASE}}
MYSQL_URL=${{MySQL.MYSQL_URL}}
DB_CONNECTION=mysql
DB_HOST=${{MySQL.MYSQLHOST}}
DB_PORT=${{MySQL.MYSQLPORT}}
DB_DATABASE=${{MySQL.MYSQLDATABASE}}
DB_USERNAME=${{MySQL.MYSQLUSER}}
DB_PASSWORD=${{MySQL.MYSQLPASSWORD}}
SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
CACHE_DRIVER=database
QUEUE_CONNECTION=database
BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
LOG_CHANNEL=stack
LOG_LEVEL=info
MAIL_MAILER=log
MAIL_FROM_ADDRESS=noreply@renjanacashew.com
MAIL_FROM_NAME=Renjana Cashew
VITE_APP_NAME=Renjana Cashew
```

5. **Klik "Update Variables"**
6. Railway akan otomatis **redeploy** service

---

### Method 2: Reference MySQL via UI

Jika `${{MySQL.VARIABLE}}` format tidak work, gunakan UI:

1. Di tab **"Variables"** service Laravel
2. Untuk setiap variable MySQL (MYSQLHOST, MYSQLPORT, dll):
   - Klik **"+ New Variable"**
   - Klik **"Add Reference"**
   - Pilih **service "MySQL"**
   - Pilih variable yang sesuai
   - Klik "Add"

3. Ulangi untuk semua variables:
   - `MYSQLHOST` → Reference `MySQL.MYSQLHOST`
   - `MYSQLPORT` → Reference `MySQL.MYSQLPORT`
   - `MYSQLUSER` → Reference `MySQL.MYSQLUSER`
   - `MYSQLPASSWORD` → Reference `MySQL.MYSQLPASSWORD`
   - `MYSQLDATABASE` → Reference `MySQL.MYSQLDATABASE`
   - `MYSQL_URL` → Reference `MySQL.MYSQL_URL`

4. Tambahkan manual variables lainnya (APP_KEY, dll)

---

## ✅ Verifikasi Variables Sudah Benar

Setelah set variables dan deployment selesai, check dari CLI:

```bash
# Link ke Laravel service
railway service

# Pilih Laravel service (bukan MySQL)

# Check variables
railway variables

# Harusnya muncul semua variables yang sudah di-set
```

---

## 🚀 Run Migrations

Setelah variables ter-set dan deployment sukses:

```bash
# Make sure linked ke Laravel service
railway service

# Run migrations
railway run php artisan migrate --force

# Jika sukses, create admin user
railway run php artisan make:filament-user
```

---

## 🔧 Troubleshooting

### Error: "No database selected"

Check variables:
```bash
railway variables | grep -i mysql
```

Pastikan semua MYSQL* variables ada dan tidak null.

### Error: "SQLSTATE[HY000] [2002] Connection refused"

- Pastikan MySQL service sudah running
- Check di dashboard: MySQL service status = "Active"
- Wait 1-2 menit untuk MySQL warm-up

### Variables tidak muncul

- Pastikan Anda link ke **Laravel service** (bukan MySQL)
- Run: `railway service` dan pilih yang benar

### Deployment gagal setelah set variables

Check logs:
```bash
railway logs
```

Biasanya error di build/start command. Check `nixpacks.toml` sudah ada.

---

## 📊 Expected Output

Setelah semua benar:

```bash
$ railway run php artisan migrate --force

   INFO  Preparing database.  

  Creating migration table ........................... 24ms DONE

   INFO  Running migrations.  

  2025_09_29_071704_create_banners_table ............. 45ms DONE
  2025_09_29_071727_create_products_table ............ 38ms DONE
  2025_09_29_071746_create_carriers_table ............ 42ms DONE
  ... (dan seterusnya)
```

---

## 🎉 Next Steps

1. ✅ Set all environment variables
2. ✅ Wait for redeploy (~2-3 minutes)
3. ✅ Run migrations
4. ✅ Create admin user
5. ✅ Access your app: `https://your-app.railway.app`
6. ✅ Access admin panel: `https://your-app.railway.app/admin`

---

**Status Sekarang:**
- [x] Railway project created
- [x] MySQL database added
- [x] GitHub repo deployed
- [ ] ⏳ Environment variables (ACTION NEEDED)
- [ ] ⏳ Run migrations
- [ ] ⏳ Create admin user

**Action Required:** Copy environment variables di atas ke Railway Dashboard (Method 1 atau 2) 🚀
