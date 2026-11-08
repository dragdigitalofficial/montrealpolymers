# Montreal Polymers — WordPress & Elementor Theme Documentation

This turnkey package transforms the Montreal Polymers Industrial Yellow design (`yellow.html`) into a production-ready WordPress theme with full Elementor manageability across the **entire site**.

---

## 📦 What's Included

| File / Folder | Description |
| :--- | :--- |
| **`montreal-polymers-theme.zip`** | The complete WordPress theme ready to upload via `Appearance > Themes > Upload Theme`. |
| **`montreal-polymers-theme/`** | The uncompressed theme source code (PHP, JS, CSS, SVG assets). |
| **`elementor-templates.zip`** | Exported Elementor JSON templates for instant 1-click import. |
| **`elementor-templates/header-template.json`** | Elementor Header Template (Section type - compatible with Free & Pro). |
| **`elementor-templates/footer-template.json`** | Elementor Footer Template (Section type - compatible with Free & Pro). |
| **`elementor-templates/homepage-template.json`** | Elementor Homepage Page Template containing all 10 modular sections. |
| **`elementor-templates/homepage-section-template.json`** | Elementor Homepage Section Template (alternative for direct section insertion). |

---

## 🚀 Quick Setup Guide (5 Minutes)

### Step 1: Install and Activate the Theme
1. Log in to your WordPress Admin dashboard (`/wp-admin`).
2. Go to **Appearance > Themes > Add New > Upload Theme**.
3. Choose **`montreal-polymers-theme.zip`** and click **Install Now**.
4. Click **Activate**.

---

### Step 2: Install Recommended Plugins
1. Go to **Plugins > Add New**.
2. Search and install **Elementor** (Free or Pro).
3. *(Optional for Free Elementor users)*: If you do not have Elementor Pro, install the free official plugin **Elementor Header & Footer Builder** (`header-footer-elementor`). The theme includes native built-in hooks for both!

---

### Step 3: Import Elementor Templates
1. Go to **Templates > Saved Templates**.
2. Click **Import Templates** at the top.
3. Unzip `elementor-templates.zip` or import directly:
   - `header-template.json`
   - `footer-template.json`
   - `homepage-template.json`
4. All three templates will now appear in your Elementor library.

---

### Step 4: Set Header & Footer for the Entire Site

#### Option A: Using Elementor Pro (Theme Builder)
1. Go to **Templates > Theme Builder**.
2. Click on **Header** > Select your imported **Montreal Polymers Header**.
3. Click **Edit with Elementor** > Click **Publish** (or Update).
4. In the "Where Do You Want to Display Your Template?" modal, click **Add Condition**.
5. Set condition to: **`Include: Entire Site`**.
6. Click **Save & Close**.
7. Repeat the exact same steps for **Footer**:
   - Theme Builder > **Footer** > Import/Edit **Montreal Polymers Footer** > Set condition to **`Include: Entire Site`** > **Save & Close**.

#### Option B: Using Free Elementor + "Elementor Header & Footer Builder"
1. Go to **Appearance > Elementor Header & Footer Builder > Add New**.
2. Title it: `Site Header`.
3. Under **Type of Template**, select **Header**.
4. Under **Display On**, select **Entire Website**.
5. Under **User Roles**, select **All**.
6. Click **Publish**, then click **Edit with Elementor**.
7. Click the **Folder icon (Add Template)** > **My Templates** > Insert **Montreal Polymers Header (Entire Site)** > Update.
8. Repeat for **Footer** (select Type of Template: **Footer**, Display On: **Entire Website**).

---

### Step 5: Setup the Homepage
1. Go to **Pages > Add New**.
2. Title it **Home**.
3. In the right sidebar under **Page Attributes > Template**, select **Elementor Full Width**.
4. Click **Publish**, then click **Edit with Elementor**.
5. Click the **Folder icon (Add Template)** > **My Templates** tab.
6. Find **Montreal Polymers Homepage** and click **Insert** (choose "Don't Apply" to preserve your site settings if prompted).
7. Click **Update**.
8. Set as Front Page:
   - Go to **Settings > Reading**.
   - Under *Your homepage displays*, choose **A static page**.
   - Select **Homepage: Home** and click **Save Changes**.

---

## 🛠️ How to Manage Sections in Elementor

Every section of the website is organized into distinct, clean Elementor sections. When editing with Elementor, open the **Navigator** (`Ctrl + I` or click the layers icon in the bottom-left panel):

### 1. Section 1: Hero Banner (3D WebGL Canvas)
- Edit the H1 title: *"Saving Earth from Chemicals. Zero Plastic Waste to Landfills."*
- Edit subtext, scrap pickup CTA button, and Live Trading Desk availability cards.
- The 3D polymer molecule canvas initializes automatically via `theme.js`. You can also use the native Elementor widget **Montreal Polymers: 3D Hero Banner** or shortcode `[montreal_3d_hero]`.

### 2. Section 2: Floating 4-Stat Metrics Banner
- Edit the four key industrial numbers:
  - `24,000 MT` Annual Granulation Capacity
  - `0L` Chemical Solvents & Toxic Effluents
  - `100%` Traceable COA Lot Documentation
  - `48-HR` Factory Scrap Pickup Guaranteed
- Or insert via widget **Montreal Polymers: Stat Banner** or shortcode `[montreal_stat_banner]`.

### 3. Section 3: Chemical-Free Philosophy (Image & Text Split)
- **Left Column**: High-resolution industrial granulator photography, live badge ("Dry Blade Processing").
- **Right Column**: Headline, comparison points, and bulleted features.

### 4. Section 4: Core Services 4-Card Grid
- Industrial cards with gold badge accents and hover lift effects:
  1. Post-Industrial PVC Granulation
  2. Toll Compounding & De-Dusting
  3. Certified Scrap Destruction
  4. Dedicated Freight Logistics

### 5. Section 5: Factory Scrap Logistics (Text & Image Split)
- **Left Column**: Industrial scrap purchasing criteria, dock specifications, and freight manifest benefits.
- **Right Column**: Factory logistics and forklift warehouse photography with live dock stats.

### 6. Section 6: Rigid PVC Regrind Stream Specialization
- Deep industrial slate background (`#0f172a`).
- High-purity grade breakdown:
  - Technical Laboratory Spec Table (K-Value, Bulk Density, Moisture `< 0.05%`, Filtration).
  - Bulk packaging options (Super Sacks, Gaylord Boxes, Bulk Tanker Rail).

### 7. Section 7: Technical Specifications & Testing (Image & Text Split)
- **Left Column**: Testing laboratory photography with live COA badge.
- **Right Column**: Four rigorous inspection stages (Spectroscopy, Melt Flow Index, Sieve Analysis, Contamination Screening).

### 8. Section 8: 4-Step Cold Mechanical Process
- Industrial numbered cards (`01`, `02`, `03`, `04`):
  1. Plant Collection & Sorting
  2. In-Line Metal Detection & De-Dusting
  3. High-Torque Cold Blade Granulation
  4. Laboratory COA & Certified Dispatch

### 9. Section 9: Landfill & Revenue Calculator
- Fully dynamic, interactive client-side calculator.
- Visitors drag sliders for monthly scrap volume (MT) and scrap type (Rigid PVC, HDPE, Purge Lumps).
- Calculates:
  - Tipping Fee Savings
  - Scrap Sales Payout
  - CO2 Landfill Abatement
- Or insert via widget **Montreal Polymers: Landfill Calculator** or shortcode `[montreal_landfill_calculator]`.

### 10. Section 10: Dual Conversion Funnel (RFQ & Sell Scrap)
- Interactive tabs:
  - **Tab 1: Request Trading Quote (Buyers)** — material dropdown, volume, delivery address, RFQ submission.
  - **Tab 2: Sell Factory Scrap (Suppliers)** — scrap type, monthly volume, packaging, photo manifest upload, direct WhatsApp trigger.
- Or insert via widget **Montreal Polymers: Contact Funnel** or shortcode `[montreal_contact_form]`.

---

## 🎨 Color Tokens & Industrial Design System

| Color Name | Hex Code | Purpose |
| :--- | :--- | :--- |
| **Industrial Yellow (Primary Accent)** | `#FFCB0A` | Buttons, badges, borders, highlights, active states |
| **Industrial Gold Dark** | `#E5B300` | Hover states, button shadows |
| **Industrial Deep Slate** | `#0F172A` | Hero banner, technical PVC section, footer |
| **Darkest Slate (Canvas & Cards)** | `#090E17` | 3D canvas background, deep contrast cards |
| **Clean Surface Light** | `#F8FAFC` | Section alternating backgrounds, borders |
| **Border Slate** | `#E2E8F0` / `#334155` | Dividers, card borders, grid lines |

---

## ⚙️ Shortcodes Reference

You can drop these shortcodes anywhere in standard WordPress content or Elementor:

```php
[montreal_3d_hero]               // Renders the 3D WebGL hero canvas and controls
[montreal_stat_banner]           // Renders the floating 4-stat metrics bar
[montreal_landfill_calculator]   // Renders the interactive ROI calculator
[montreal_contact_form]          // Renders the dual RFQ / Scrap manifest funnel
```

---

## 📞 Support & Verification
- **Author**: Montreal Polymers Engineering
- **Compatibility**: WordPress 6.0+, Elementor 3.15+, Elementor Pro 3.15+, PHP 8.0+
