/**
 * Montreal Polymers Inc. - Theme & Elementor Interactive Engine
 */

(function () {
    'use strict';

    // 1. Initialize Lucide Icons if available
    function initIcons() {
        if (typeof lucide !== 'undefined' && lucide.createIcons) {
            lucide.createIcons();
        }
    }

    // 2. Mobile Menu Drawer Toggle
    function initMobileMenu() {
        const menuBtn = document.getElementById('mobileMenuBtn');
        const drawer = document.getElementById('mobileDrawer');
        if (menuBtn && drawer) {
            menuBtn.addEventListener('click', function () {
                drawer.classList.toggle('hidden');
            });
        }
    }

    // 3. Form Tab Switcher (Buyer RFQ vs Seller Scrap)
    window.switchFormTab = function (type) {
        const tabBuyer = document.getElementById('tabBuyer');
        const tabSeller = document.getElementById('tabSeller');
        const submitText = document.getElementById('formSubmitText');
        const msgLabel = document.getElementById('formMessageLabel');

        if (!tabBuyer || !tabSeller) return;

        if (type === 'buyer') {
            tabBuyer.className = "py-3 rounded-xl bg-gold-500 text-slate-900 shadow-sm transition-all";
            tabSeller.className = "py-3 rounded-xl text-slate-400 hover:text-white transition-all";
            if (submitText) submitText.innerText = "Request Price & Allocation for Regrind";
            if (msgLabel) msgLabel.innerText = "Target Specifications & Receiving Destination";
        } else {
            tabSeller.className = "py-3 rounded-xl bg-gold-500 text-slate-900 shadow-sm transition-all";
            tabBuyer.className = "py-3 rounded-xl text-slate-400 hover:text-white transition-all";
            if (submitText) submitText.innerText = "Submit Scrap Volume for 48h Pickup Quote";
            if (msgLabel) msgLabel.innerText = "Scrap Details, Packaging (Bales/Gaylords) & Dock Location";
        }
    };

    // 4. Interactive Landfill & Revenue Calculator
    function initCalculator() {
        const slider = document.getElementById('scrapVolumeSlider');
        const scrapDisplay = document.getElementById('scrapDisplay');
        const landfillDiverted = document.getElementById('landfillDiverted');
        const estimatedRevenue = document.getElementById('estimatedRevenue');

        function update() {
            if (!slider) return;
            const val = parseInt(slider.value, 10);
            if (scrapDisplay) scrapDisplay.innerText = val.toLocaleString() + " lbs";

            // Annual pounds diverted
            const annual = val * 12;
            if (landfillDiverted) landfillDiverted.innerText = annual.toLocaleString() + " lbs";

            // Estimated Revenue ($CAD approx $0.35/lb average recovery credit)
            const rev = Math.round(val * 0.35);
            if (estimatedRevenue) estimatedRevenue.innerText = "$" + rev.toLocaleString() + " / mo";
        }

        if (slider) {
            slider.addEventListener('input', update);
            update();
        }
    }

    // 5. Scroll Reveal Animations (IntersectionObserver)
    function initScrollReveals() {
        const revealElements = document.querySelectorAll('.reveal-on-scroll');
        if (!revealElements.length || typeof IntersectionObserver === 'undefined') return;

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(function (el) {
            observer.observe(el);
        });
    }

    // 6. Three.js 3D WebGL Hero Interactive Core
    function initHero3D() {
        const container = document.getElementById('hero-3d-canvas');
        if (!container || typeof THREE === 'undefined') return;

        // Prevent duplicate canvas when in Elementor editor
        container.innerHTML = '';

        const scene = new THREE.Scene();
        const width = container.clientWidth || window.innerWidth;
        const height = container.clientHeight || 550;
        const camera = new THREE.PerspectiveCamera(45, width / height, 0.1, 1000);
        camera.position.z = 24;

        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        renderer.setSize(width, height);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
        container.appendChild(renderer.domElement);

        const heroGroup = new THREE.Group();
        scene.add(heroGroup);

        heroGroup.position.set(7.5, 0, 0);

        // Outer Geodesic Polymer Lattice (Warm Gold/Amber wireframe)
        const outerGeo = new THREE.IcosahedronGeometry(6.5, 2);
        const outerMat = new THREE.MeshBasicMaterial({
            color: 0xffcb0a,
            wireframe: true,
            transparent: true,
            opacity: 0.38
        });
        const outerMesh = new THREE.Mesh(outerGeo, outerMat);
        heroGroup.add(outerMesh);

        // Inner Faceted Core (Amber/Gold Solid Node)
        const innerGeo = new THREE.DodecahedronGeometry(3.6, 0);
        const innerMat = new THREE.MeshStandardMaterial({
            color: 0xf59e0b,
            roughness: 0.25,
            metalness: 0.7,
            flatShading: true,
        });
        const innerMesh = new THREE.Mesh(innerGeo, innerMat);
        heroGroup.add(innerMesh);

        // Orbital Circular Rings (Pure Recycled Molecular Bands)
        const ringGeo1 = new THREE.TorusGeometry(8.5, 0.05, 16, 100);
        const ringMat1 = new THREE.MeshBasicMaterial({ color: 0xffcb0a, transparent: true, opacity: 0.5 });
        const ring1 = new THREE.Mesh(ringGeo1, ringMat1);
        ring1.rotation.x = Math.PI / 3;
        heroGroup.add(ring1);

        const ringGeo2 = new THREE.TorusGeometry(9.2, 0.04, 16, 100);
        const ringMat2 = new THREE.MeshBasicMaterial({ color: 0xfde68a, transparent: true, opacity: 0.3 });
        const ring2 = new THREE.Mesh(ringGeo2, ringMat2);
        ring2.rotation.y = Math.PI / 4;
        heroGroup.add(ring2);

        // Floating Recycled Polymer Flake Particles
        const particleCount = 140;
        const particleGeo = new THREE.BufferGeometry();
        const positions = new Float32Array(particleCount * 3);

        for (let i = 0; i < particleCount * 3; i += 3) {
            positions[i] = (Math.random() - 0.5) * 26;
            positions[i + 1] = (Math.random() - 0.5) * 26;
            positions[i + 2] = (Math.random() - 0.5) * 26;
        }

        particleGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        const particleMat = new THREE.PointsMaterial({
            size: 0.18,
            color: 0xffcb0a,
            transparent: true,
            opacity: 0.85,
        });
        const particles = new THREE.Points(particleGeo, particleMat);
        heroGroup.add(particles);

        // Lighting
        const ambient = new THREE.AmbientLight(0xffffff, 0.8);
        scene.add(ambient);

        const pointLight = new THREE.PointLight(0xffcb0a, 2.5, 50);
        pointLight.position.set(10, 10, 15);
        scene.add(pointLight);

        // Mouse interaction
        let mouseX = 0;
        let mouseY = 0;
        let targetX = 0;
        let targetY = 0;

        window.addEventListener('mousemove', function (e) {
            mouseX = (e.clientX - window.innerWidth / 2) * 0.0006;
            mouseY = (e.clientY - window.innerHeight / 2) * 0.0006;
        });

        function onResize() {
            if (!container) return;
            const w = container.clientWidth || window.innerWidth;
            const h = container.clientHeight || 550;
            camera.aspect = w / h;
            camera.updateProjectionMatrix();
            renderer.setSize(w, h);

            if (window.innerWidth <= 1024) {
                heroGroup.position.x = 0;
                heroGroup.scale.set(0.65, 0.65, 0.65);
            } else {
                heroGroup.position.x = 7.5;
                heroGroup.scale.set(1, 1, 1);
            }
        }

        window.addEventListener('resize', onResize);
        onResize();

        let animId;
        function animate() {
            animId = requestAnimationFrame(animate);

            targetX += (mouseX - targetX) * 0.05;
            targetY += (mouseY - targetY) * 0.05;

            outerMesh.rotation.y += 0.003;
            outerMesh.rotation.x += 0.002;
            innerMesh.rotation.y -= 0.004;
            ring1.rotation.z += 0.004;
            ring2.rotation.y += 0.003;
            particles.rotation.y += 0.001;

            heroGroup.rotation.y = targetX * 1.8;
            heroGroup.rotation.x = -targetY * 1.8;

            renderer.render(scene, camera);
        }
        animate();
    }

    // Bootstrap everything on DOM ready
    function initAll() {
        initIcons();
        initMobileMenu();
        initCalculator();
        initScrollReveals();
        initHero3D();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAll);
    } else {
        initAll();
    }

    // Elementor frontend hook support
    if (typeof window.elementorFrontend !== 'undefined') {
        window.addEventListener('elementor/frontend/init', function () {
            window.elementorFrontend.hooks.addAction('frontend/element_ready/global', function () {
                initIcons();
                initCalculator();
                initScrollReveals();
                initHero3D();
            });
        });
    }
})();
