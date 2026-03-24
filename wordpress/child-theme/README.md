# FLOH Cornhole Child Theme

This is a child theme of Astra. It includes a custom page template that bypasses WordPress content sanitization entirely.

## Files

- `style.css` — Theme declaration + all FLOH CSS
- `functions.php` — Enqueues styles, adds body class
- `page-home.php` — Custom "FLOH Homepage" page template
- `images/` — Copy your 5 images here (babyj.jpg + 4x eaglelakepark)

## Installation

1. Zip the entire `child-theme` folder (rename it `floh-cornhole-child` first)
2. In WordPress go to **Appearance → Themes → Add New → Upload Theme**
3. Upload the zip and Activate
4. Copy your 5 images into the theme's `images/` folder via FTP or File Manager
5. In WordPress go to **Pages → Home → Edit**
6. In the right panel under **Page Attributes → Template**, select **"FLOH Homepage"**
7. Save/Update the page
8. Go to **Settings → Reading** and set Home as the static front page

## Updating the homepage

Edit `page-home.php` directly — no WordPress editor needed. The HTML renders exactly as written.
