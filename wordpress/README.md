# WordPress Implementation Guide

## Setup Steps

### 1. Theme
Install and activate **Astra** theme.

### 2. Global CSS
Go to **Appearance → Customize → Additional CSS**
Paste the entire contents of `global-css.css`.

### 3. Homepage
1. Create a new Page titled **"Home"**
2. Set page template to **"Full Width"** (Page Attributes panel, right side)
3. Switch the Gutenberg editor to a **"Custom HTML"** block
4. Paste the contents of `homepage.html`
5. Upload your 5 images to **Media Library** and replace all `REPLACE_WITH_*_URL` placeholders with the actual image URLs
6. Go to **Settings → Reading** and set this page as your Static Front Page

### 4. Body Class
To remove Astra's default padding/header space, add the class `floh-page` to the page body.
Easiest way: install the free **Astra Addon** or use **Body Class** plugin.
Alternatively, in Astra's page-level settings (gear icon in editor), set Header and Footer to disabled for this page.

## Image URLs
After uploading images to Media Library, click each image and copy the **File URL** from the attachment details panel on the right.

## Files
- `global-css.css` — paste into Appearance → Customize → Additional CSS
- `homepage.html` — paste into Custom HTML block on the Home page
