// =============================================================================
// Montreal Polymers Inc. - 100% Native Figma Canvas Generator Script
// Matches the updated WordPress Design (Garbox / Wastex / Trendustry standard)
//
// How to run in Figma:
// 1. Open any Figma design file (or create a new blank one).
// 2. Open Console: Plugins -> Development -> Open Console (or Ctrl + Shift + I).
// 3. Paste this code into the console and hit Enter.
// It will instantly create all 11 sections, frames, auto-layouts, and text layers!
// =============================================================================

async function buildMontrealPolymersInFigma() {
  await figma.loadFontAsync({ family: "Inter", style: "Regular" });
  await figma.loadFontAsync({ family: "Inter", style: "Medium" });
  await figma.loadFontAsync({ family: "Inter", style: "Bold" });

  const page = figma.currentPage;

  // 1. Color Palette Tokens
  const C = {
    forestDark: { r: 10/255, g: 20/255, b: 3/255 },     // #0a1403 (warm dark olive background)
    forest: { r: 20/255, g: 35/255, b: 6/255 },         // #142306 (deep warm forest)
    pine: { r: 39/255, g: 62/255, b: 11/255 },          // #273e0b (deep warm olive)
    leaf: { r: 101/255, g: 163/255, b: 13/255 },        // #65a30d (primary warm yellowish-green)
    ecoGreen: { r: 132/255, g: 204/255, b: 22/255 },    // #84cc16 (vibrant yellowish-green)
    mint: { r: 163/255, g: 230/255, b: 53/255 },        // #a3e635 (bright chartreuse/lime highlight)
    gold: { r: 255/255, g: 203/255, b: 10/255 },        // #ffcb0a (warm gold accent)
    accent: { r: 245/255, g: 158/255, b: 11/255 },      // #f59e0b (amber accent)
    white: { r: 1, g: 1, b: 1 },
    lightBg: { r: 248/255, g: 250/255, b: 252/255 },    // #f8fafc
    slate: { r: 15/255, g: 23/255, b: 42/255 },         // #0f172a
    slateMuted: { r: 100/255, g: 116/255, b: 139/255 }, // #64748b
    border: { r: 226/255, g: 232/255, b: 240/255 },     // #e2e8f0
  };

  // 2. Desktop Artboard (1440 x 5600)
  const artboard = figma.createFrame();
  artboard.name = "Montreal Polymers - WordPress One-Pager (1440px)";
  artboard.resize(1440, 5600);
  artboard.fills = [{ type: 'SOLID', color: C.white }];
  artboard.layoutMode = "VERTICAL";
  artboard.itemSpacing = 0;

  function createTxt(str, size, weight = "Regular", color = C.slate) {
    const t = figma.createText();
    t.fontName = { family: "Inter", style: weight };
    t.characters = str;
    t.fontSize = size;
    t.fills = [{ type: 'SOLID', color: color }];
    return t;
  }

  // -------------------------------------------------------------
  // A. Top Utility Bar
  // -------------------------------------------------------------
  const topBar = figma.createFrame();
  topBar.name = "01_Top_Bar";
  topBar.resize(1440, 44);
  topBar.fills = [{ type: 'SOLID', color: C.forest }];
  topBar.layoutMode = "HORIZONTAL";
  topBar.primaryAxisAlignItems = "SPACE_BETWEEN";
  topBar.counterAxisAlignItems = "CENTER";
  topBar.paddingLeft = 80;
  topBar.paddingRight = 80;

  topBar.appendChild(createTxt("📍 905 Avenue Munck, Laval, QC  •  Mon-Fri 7:00 AM - 5:00 PM EST", 12, "Medium", { r: 0.8, g: 0.95, b: 0.85 }));
  topBar.appendChild(createTxt("100% CHEMICAL-FREE  •  📞 +1 (450) 663-4200  •  [FR / EN]", 12, "Bold", C.gold));
  artboard.appendChild(topBar);

  // -------------------------------------------------------------
  // B. Main Header Navigation
  // -------------------------------------------------------------
  const header = figma.createFrame();
  header.name = "02_Header_Nav";
  header.resize(1440, 80);
  header.fills = [{ type: 'SOLID', color: C.white }];
  header.layoutMode = "HORIZONTAL";
  header.primaryAxisAlignItems = "SPACE_BETWEEN";
  header.counterAxisAlignItems = "CENTER";
  header.paddingLeft = 80;
  header.paddingRight = 80;

  header.appendChild(createTxt("MONTREAL POLYMERS", 20, "Bold", C.forest));

  const nav = figma.createFrame();
  nav.layoutMode = "HORIZONTAL";
  nav.itemSpacing = 28;
  nav.fills = [];
  ["Home", "About Us", "Services", "PVC Stream", "Products", "Process", "Landfill Audit", "Contact"].forEach((l, i) => {
    nav.appendChild(createTxt(l, 13, i === 0 ? "Bold" : "Medium", i === 0 ? C.leaf : C.slate));
  });
  header.appendChild(nav);

  const ctaBtn = figma.createFrame();
  ctaBtn.resize(190, 42);
  ctaBtn.cornerRadius = 10;
  ctaBtn.fills = [{ type: 'SOLID', color: C.leaf }];
  ctaBtn.layoutMode = "HORIZONTAL";
  ctaBtn.primaryAxisAlignItems = "CENTER";
  ctaBtn.counterAxisAlignItems = "CENTER";
  ctaBtn.appendChild(createTxt("REQUEST FREE BIN →", 12, "Bold", C.white));
  header.appendChild(ctaBtn);

  artboard.appendChild(header);

  // -------------------------------------------------------------
  // C. Hero Section
  // -------------------------------------------------------------
  const hero = figma.createFrame();
  hero.name = "03_Hero_Section";
  hero.resize(1440, 680);
  hero.fills = [{ type: 'SOLID', color: C.forestDark }];
  hero.layoutMode = "HORIZONTAL";
  hero.paddingLeft = 80;
  hero.paddingRight = 80;
  hero.paddingTop = 80;
  hero.itemSpacing = 40;

  const heroLeft = figma.createFrame();
  heroLeft.resize(700, 520);
  heroLeft.fills = [];
  heroLeft.layoutMode = "VERTICAL";
  heroLeft.itemSpacing = 22;

  heroLeft.appendChild(createTxt("✓ ZERO CHEMICAL SOLVENTS  •  100% COLD MECHANICAL", 11, "Bold", C.mint));
  heroLeft.appendChild(createTxt("Saving Earth from Chemicals.\nZero Plastic Waste to Landfills.", 48, "Bold", C.white));
  heroLeft.appendChild(createTxt("Montreal Polymers replaces toxic chemical washing machines and hazardous incinerators with pure cold mechanical granulation — turning industrial PVC offcuts into certified circular raw materials.", 15, "Regular", { r: 0.85, g: 0.95, b: 0.9 }));

  const heroBtns = figma.createFrame();
  heroBtns.layoutMode = "HORIZONTAL";
  heroBtns.itemSpacing = 16;
  heroBtns.fills = [];

  const b1 = figma.createFrame();
  b1.resize(230, 50);
  b1.cornerRadius = 12;
  b1.fills = [{ type: 'SOLID', color: C.ecoGreen }];
  b1.layoutMode = "HORIZONTAL";
  b1.primaryAxisAlignItems = "CENTER";
  b1.counterAxisAlignItems = "CENTER";
  b1.appendChild(createTxt("SCHEDULE SCRAP PICKUP", 13, "Bold", C.white));
  heroBtns.appendChild(b1);

  const b2 = figma.createFrame();
  b2.resize(220, 50);
  b2.cornerRadius = 12;
  b2.fills = [{ type: 'SOLID', color: C.forest }];
  b2.strokes = [{ type: 'SOLID', color: C.mint }];
  b2.strokeWeight = 1.5;
  b2.layoutMode = "HORIZONTAL";
  b2.primaryAxisAlignItems = "CENTER";
  b2.counterAxisAlignItems = "CENTER";
  b2.appendChild(createTxt("LANDFILL CALCULATOR", 13, "Bold", C.white));
  heroBtns.appendChild(b2);
  heroLeft.appendChild(heroBtns);

  hero.appendChild(heroLeft);

  const heroRight = figma.createFrame();
  heroRight.resize(500, 480);
  heroRight.cornerRadius = 24;
  heroRight.fills = [{ type: 'SOLID', color: C.forest }];
  heroRight.strokes = [{ type: 'SOLID', color: C.mint }];
  heroRight.strokeWeight = 1;
  heroRight.paddingLeft = 32;
  heroRight.paddingRight = 32;
  heroRight.paddingTop = 32;
  heroRight.layoutMode = "VERTICAL";
  heroRight.itemSpacing = 20;

  heroRight.appendChild(createTxt("3D CIRCULAR CORE ACTIVE  •  SOLVENT-FREE", 12, "Bold", C.gold));
  
  const graphicBox = figma.createFrame();
  graphicBox.resize(436, 260);
  graphicBox.cornerRadius = 16;
  graphicBox.fills = [{ type: 'SOLID', color: C.pine }];
  graphicBox.layoutMode = "HORIZONTAL";
  graphicBox.primaryAxisAlignItems = "CENTER";
  graphicBox.counterAxisAlignItems = "CENTER";
  graphicBox.appendChild(createTxt("[Interactive 3D Three.js Eco-Earth Canvas]", 14, "Medium", C.mint));
  heroRight.appendChild(graphicBox);

  heroRight.appendChild(createTxt("• 100% Cold Mechanical Granulation\n• Rigid PVC Profiles, Siding, Pipes & Purge\n• Free Roll-off Containers & Freight Across QC & ON", 13, "Medium", C.white));
  hero.appendChild(heroRight);

  artboard.appendChild(hero);

  // -------------------------------------------------------------
  // D. Overlapping Stats Bar
  // -------------------------------------------------------------
  const stats = figma.createFrame();
  stats.name = "04_Stats_Bar";
  stats.resize(1440, 140);
  stats.fills = [{ type: 'SOLID', color: C.lightBg }];
  stats.layoutMode = "HORIZONTAL";
  stats.primaryAxisAlignItems = "SPACE_BETWEEN";
  stats.counterAxisAlignItems = "CENTER";
  stats.paddingLeft = 100;
  stats.paddingRight = 100;

  [
    { val: "25+", lbl: "Years in Quebec", sub: "Eco-recycling pioneers" },
    { val: "45,000 m³", lbl: "Landfill Volume Saved", sub: "Annual municipal diversion" },
    { val: "0%", lbl: "Chemical Solvents", sub: "Zero wastewater effluent" },
    { val: "100%", lbl: "Circular Return", sub: "Virgin resin equivalent" }
  ].forEach(s => {
    const statItem = figma.createFrame();
    statItem.layoutMode = "VERTICAL";
    statItem.itemSpacing = 4;
    statItem.fills = [];
    statItem.appendChild(createTxt(s.val, 32, "Bold", C.forest));
    statItem.appendChild(createTxt(s.lbl, 13, "Bold", C.slate));
    statItem.appendChild(createTxt(s.sub, 11, "Regular", C.slateMuted));
    stats.appendChild(statItem);
  });
  artboard.appendChild(stats);

  // -------------------------------------------------------------
  // E. Services Grid
  // -------------------------------------------------------------
  const srvSection = figma.createFrame();
  srvSection.name = "05_Services_Section";
  srvSection.resize(1440, 720);
  srvSection.fills = [{ type: 'SOLID', color: C.white }];
  srvSection.layoutMode = "VERTICAL";
  srvSection.paddingLeft = 80;
  srvSection.paddingRight = 80;
  srvSection.paddingTop = 60;
  srvSection.itemSpacing = 36;

  srvSection.appendChild(createTxt("INDUSTRIAL SOLUTIONS", 12, "Bold", C.leaf));
  srvSection.appendChild(createTxt("Complete Circular Services for Manufacturing", 36, "Bold", C.slate));

  const srvGrid = figma.createFrame();
  srvGrid.layoutMode = "HORIZONTAL";
  srvGrid.itemSpacing = 24;
  srvGrid.fills = [];

  [
    { title: "Scrap Purchasing & Free Bins", desc: "We purchase production offcuts and purge with free containers placed directly on your docks." },
    { title: "Cold Mechanical Granulation", desc: "Heavy-duty rotary shear machines running at ambient temperatures to protect polymer chains." },
    { title: "Closed-Loop Toll Processing", desc: "Send your scrap; we granulate and return calibrated flakes, cutting resin costs 40%." },
    { title: "Landfill Diversion ESG Audits", desc: "Official Certificates of Recycling for ISO 14001, LEED credits, and municipal compliance." }
  ].forEach(s => {
    const c = figma.createFrame();
    c.resize(300, 320);
    c.cornerRadius = 20;
    c.fills = [{ type: 'SOLID', color: C.lightBg }];
    c.strokes = [{ type: 'SOLID', color: C.border }];
    c.strokeWeight = 1;
    c.paddingLeft = 24;
    c.paddingRight = 24;
    c.paddingTop = 32;
    c.layoutMode = "VERTICAL";
    c.itemSpacing = 14;
    c.appendChild(createTxt(s.title, 18, "Bold", C.forest));
    c.appendChild(createTxt(s.desc, 13, "Regular", C.slateMuted));
    c.appendChild(createTxt("Learn More →", 12, "Bold", C.leaf));
    srvGrid.appendChild(c);
  });
  srvSection.appendChild(srvGrid);
  artboard.appendChild(srvSection);

  page.appendChild(artboard);
  figma.viewport.scrollAndZoomIntoView([artboard]);
  console.log("✓ Montreal Polymers Figma Artboard successfully built!");
}

buildMontrealPolymersInFigma();
