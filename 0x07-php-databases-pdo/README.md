# 0x07 — PHP Databases with PDO

## Environment Setup
```bash
# Install PostgreSQL
sudo apt install postgresql postgresql-contrib php8.2-pgsql

# Start PostgreSQL
sudo service postgresql start

# Create database
sudo -u postgres createdb buildboard_dev

# Or use SQLite for simpler setup
sudo apt install php8.2-sqlite3
```

## What You Will Learn
- PDO: PHP Data Objects
- Prepared statements and why they matter
- Transactions
- Query building
- N+1 problem and how to solve it
- Database migrations by hand
- Connection pooling concepts
