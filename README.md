<h1 align="center">Music Oven 🎶</h1>

<p align="center">
  <a href="https://github.com/kushanshamika/music-oven/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/kushanshamika/music-oven"></a>
  <a href="https://github.com/kushanshamika/music-oven/network"><img alt="GitHub forks" src="https://img.shields.io/github/forks/kushanshamika/music-oven"></a>
  <a href="https://github.com/kushanshamika/music-oven/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/kushanshamika/music-oven"></a>
  <a href="https://github.com/kushanshamika/music-oven/blob/main/license.txt"><img alt="GitHub license" src="https://img.shields.io/github/license/kushanshamika/music-oven"></a>
</p>

<p align="center">Social media platform for music lovers 🎶. Build  🛠 using CodeIgniter 3 &  Bootstrap 5.</p>

![Music Oven](https://i.imgur.com/Cbavq9C.png)

## ⚙️ Prerequisites

- PHP 8.0
- XAMPP (or similar local server setup)

## 🖥 Project Setup

#### - Clone the Project

```git clone https://github.com/kushanshamika/music-oven```

#### - Import `db.sql`

#### - Add the database configuration

Music Oven uses the CodeIgniter default database configuration; therefore, edit the following variables in the `config/database.php` file.
```
- hostname
- username
- password
- database
```

#### - Set Base URL

Edit CodeIgniter base URL in the `config/config.php`

#### - Set [Image Kit](https://imagekit.io/dashboard/) credintials in the `application/controllers/Users.php ` 

ImageKit.io is used to store user profile pictures.

```php
$imageKit = new ImageKit(
	"<public key>",
	"<private key>",
	"<url endpoint>" 
);
```

#### - Run it in a web browser

## 📝 License
[MIT](https://github.com/kushanshamika/music-oven/blob/main/license.txt)
