<?php
// -------------------------------------------------------------------------
//
// Letakkan username, password dan database sebetulnya di file ini.
// File ini JANGAN di-commit ke GIT. TAMBAHKAN di .gitignore
// -------------------------------------------------------------------------

// Data Konfigurasi MySQL yang disesuaikan

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = 'eyJpdiI6IlN0aW9RK0U2d2JMenpBSGZPeFQwWHc9PSIsInZhbHVlIjoiTFc1eDlMeC9lRzlGNGU3RVQxWTZYZz09IiwibWFjIjoiMzU5YzU3M2NhNTQ3YTBlMjZjNTBjNGY1YzRjM2JiMTQyOTQzNjY0NjUxYzI2ZTkzMmJmOTk3NTE1NzMwNWMzYSIsInRhZyI6IiJ9';
$db['default']['port']     = 3306;
$db['default']['database'] = 'dbscon';
$db['default']['dbcollat'] = 'utf8_general_ci';

/*
| Untuk setting koneksi database 'Strict Mode'
| Sesuaikan dengan ketentuan hosting
*/
$db['default']['stricton'] = true;