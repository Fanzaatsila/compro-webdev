# Deployment ke Vercel - Panduan Lengkap

## ⚠️ Catatan Penting

**Laravel di Vercel memiliki keterbatasan:**
- Timeout 10 detik untuk serverless functions (Hobby plan) / 60 detik (Pro plan)
- Tidak support persistent storage (gunakan cloud storage seperti S3)
- Database harus serverless (PlanetScale, Supabase, Neon, dll)
- Beberapa fitur Laravel mungkin tidak bekerja optimal
- Filament admin panel mungkin lambat karena banyak request

**Alternatif yang Lebih Baik untuk Laravel:**
- Railway.app (rekomendasi)
- Fly.io
- DigitalOcean App Platform
- AWS Elastic Beanstalk

---

## Langkah-langkah Deploy ke Vercel

### 1. Persiapan Database

Karena Vercel adalah serverless, Anda memerlukan database yang kompatibel:

**Pilihan Database (pilih salah satu):**

#### A. PlanetScale (MySQL - Rekomendasi)
```bash
# Daftar di https://planetscale.com
# Buat database baru
# Copy connection string
```

#### B. Supabase (PostgreSQL)
```bash
# Daftar di https://supabase.com
# Buat project baru
# Copy PostgreSQL connection string
```

#### C. Neon (PostgreSQL)
```bash
# Daftar di https://neon.tech
# Buat database baru
# Copy connection string
```

### 2. Setup Vercel CLI (Opsional)

```bash
# Install Vercel CLI
npm install -g vercel

# Login ke Vercel
vercel login
```

### 3. Environment Variables yang Diperlukan di Vercel

Buka Vercel Dashboard > Your Project > Settings > Environment Variables

Tambahkan variable berikut:

```bash
# Application
APP_NAME="Renjana Cashew"
APP_ENV=production
APP_KEY=base64:YOUR_APP_KEY_HERE  # Generate dengan: php artisan key:generate --show
APP_DEBUG=false
APP_URL=https://your-domain.vercel.app

# Database - Sesuaikan dengan provider yang Anda pilih
DB_CONNECTION=mysql  # atau pgsql untuk PostgreSQL
DB_HOST=your-database-host.com
DB_PORT=3306  # atau 5432 untuk PostgreSQL
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

# Session & Cache
SESSION_DRIVER=cookie  # Penting! Jangan gunakan 'database' atau 'file'
CACHE_DRIVER=array     # Penting! Jangan gunakan 'database' atau 'file'
QUEUE_CONNECTION=sync  # Atau gunakan service eksternal seperti Laravel Vapor Queues

# Filesystem
FILESYSTEM_DISK=s3  # Jika menggunakan AWS S3 untuk storage
AWS_ACCESS_KEY_ID=your_aws_key
AWS_SECRET_ACCESS_KEY=your_aws_secret
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=your_bucket_name

# Logging
LOG_CHANNEL=stderr  # Penting untuk Vercel

# Mail (opsional, gunakan service seperti Mailgun, SendGrid, dll)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS="noreply@renjanacashew.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### 4. Deploy via Vercel Dashboard (Metode Mudah)

1. **Commit dan Push ke GitHub:**
   ```bash
   git add .
   git commit -m "feat: add Vercel deployment config"
   git push origin main
   ```

2. **Connect ke Vercel:**
   - Buka https://vercel.com
   - Login dengan GitHub
   - Klik "Add New Project"
   - Import repository `compro-webdev`
   - Vercel akan otomatis detect `vercel.json`

3. **Configure Build Settings:**
   - Framework Preset: **Other**
   - Build Command: `npm run vercel-build`
   - Output Directory: `public`
   - Install Command: `npm install`

4. **Set Environment Variables:**
   - Tambahkan semua environment variables dari langkah 3
   - Pastikan APP_KEY sudah di-generate

5. **Deploy:**
   - Klik "Deploy"
   - Tunggu proses build selesai (5-10 menit)

### 5. Deploy via CLI (Alternatif)

```bash
# Di folder project
vercel

# Ikuti prompts:
# - Link to existing project? No
# - Project name: compro-webdev
# - Directory: ./
# - Override settings? No

# Deploy ke production
vercel --prod
```

### 6. Post-Deployment

#### Generate APP_KEY jika belum:
```bash
php artisan key:generate --show
# Copy hasilnya dan tambahkan ke Vercel Environment Variables
```

#### Run Migrations (Setelah setup database):
```bash
# Install Vercel CLI jika belum
npm install -g vercel

# Login dan link project
vercel login
vercel link

# Run migration via serverless function
# Buat file: api/migrate.php
```

Atau jalankan migration langsung dari local ke database production:
```bash
# Update .env dengan database production
php artisan migrate --force

# Seed data jika perlu
php artisan db:seed --force
```

### 7. Custom Domain (Opsional)

1. Buka Vercel Dashboard > Project Settings > Domains
2. Add domain Anda
3. Update DNS records sesuai instruksi Vercel

---

## Troubleshooting

### Error: "APP_KEY not set"
- Generate key: `php artisan key:generate --show`
- Tambahkan ke Vercel Environment Variables dengan format: `base64:xxx...`

### Error: "SQLSTATE connection refused"
- Periksa database credentials di Environment Variables
- Pastikan database provider mengizinkan koneksi dari Vercel IP

### Error: "File storage not working"
- Ubah `FILESYSTEM_DISK=s3` di Environment Variables
- Setup AWS S3 bucket atau gunakan Cloudflare R2

### Halaman Loading Lambat
- Vercel memiliki cold start untuk serverless functions
- Pertimbangkan upgrade ke Vercel Pro atau gunakan hosting lain

### Session/Cache Issues
- Pastikan `SESSION_DRIVER=cookie`
- Pastikan `CACHE_DRIVER=array`
- Jangan gunakan file-based session/cache di serverless

---

## Alternatif Deployment (Lebih Direkomendasikan untuk Laravel)

### Railway.app (Paling Mudah)
```bash
# Install Railway CLI
npm i -g @railway/cli

# Login dan init
railway login
railway init

# Deploy
railway up
```

### Fly.io
```bash
# Install Fly CLI
curl -L https://fly.io/install.sh | sh

# Launch app
fly launch

# Deploy
fly deploy
```

---

## File yang Ditambahkan untuk Vercel

- `vercel.json` - Konfigurasi deployment Vercel
- `api/index.php` - Entry point untuk serverless PHP
- `.vercelignore` - File yang di-ignore saat deployment
- `.gitignore` - Updated dengan `.vercel/`
- `package.json` - Updated dengan `vercel-build` script

---

## Support

Jika ada masalah, buka issue atau hubungi:
- Vercel Docs: https://vercel.com/docs
- Laravel Docs: https://laravel.com/docs
