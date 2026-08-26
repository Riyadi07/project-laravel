function initEffects() {
    // ---------------------------------------------------------
    // 1. ANIMASI TEKS BERGERAK (TYPED.JS)
    // ---------------------------------------------------------
    const typedElem = document.getElementById('typed-text');
    if (typedElem && typeof Typed !== 'undefined') {
        new Typed('#typed-text', {
            strings: [
                'Software Developer',
                'Backend Developer'
            ],
            typeSpeed: 60,
            backSpeed: 40,
            loop: true
        });
    }

    // ---------------------------------------------------------
    // 2. KURSOR GLOW INTERAKTIF (FOLLOW MOUSE)
    // ---------------------------------------------------------
    const glow = document.getElementById('cursor-glow');
    if (glow) {
        window.addEventListener('mousemove', (e) => {
            glow.style.left = `${e.clientX}px`;
            glow.style.top = `${e.clientY}px`;
        });
    }

    // ---------------------------------------------------------
    // 3. ANIMASI METEOR CANVAS BACKGROUND
    // ---------------------------------------------------------
    const canvas = document.getElementById('meteorCanvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        class Meteor {
            constructor() {
                this.reset();
            }

            reset() {
                this.x = Math.random() * canvas.width * 1.5 - canvas.width * 0.5;
                this.y = -50;
                this.length = Math.random() * 100 + 70;
                this.speed = Math.random() * 8 + 4;
                this.opacity = Math.random() * 0.8 + 0.4;
                this.width = Math.random() * 2 + 1;
            }

            update() {
                this.x += this.speed * 0.7;
                this.y += this.speed;

                if (this.y > canvas.height || this.x > canvas.width) {
                    this.reset();
                }
            }

            draw() {
                ctx.save();
                ctx.shadowBlur = 15;
                ctx.shadowColor = 'rgba(255, 255, 255, 1)';

                const gradient = ctx.createLinearGradient(
                    this.x, this.y, 
                    this.x - this.length * 0.7, this.y - this.length
                );
                gradient.addColorStop(0, `rgba(255, 255, 255, ${this.opacity})`);
                gradient.addColorStop(0.3, `rgba(147, 197, 253, ${this.opacity * 0.8})`);
                gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

                ctx.beginPath();
                ctx.moveTo(this.x, this.y);
                ctx.lineTo(this.x - this.length * 0.7, this.y - this.length);
                ctx.strokeStyle = gradient;
                ctx.lineWidth = this.width;
                ctx.lineCap = 'round';
                ctx.stroke();
                ctx.restore();
            }
        }

        const meteors = Array.from({ length: 35 }, () => new Meteor());

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            meteors.forEach(meteor => {
                meteor.update();
                meteor.draw();
            });
            requestAnimationFrame(animate);
        }

        animate();
    }

   // ---------------------------------------------------------
// 4. FISIKA LANYARD BADGE 3D (NATURAL CURVE & STABLE CARD)
// ---------------------------------------------------------
const card = document.getElementById('draggable-nametag');
const canvasString = document.getElementById('stringCanvas');
const container = document.getElementById('about-card-container');

if (card && canvasString && container) {
    const ctxString = canvasString.getContext('2d');
    
    let anchorX = 0, anchorY = 0; 
    let cardX = 0, cardY = -450;     
    let targetX = 0, targetY = 0;   
    
    let vx = 0, vy = 0; 
    let isDragging = false;
    let dragStartX = 0, dragStartY = 0;
    let isInAboutSection = false;

    function setupPositions() {
        canvasString.width = container.clientWidth;
        canvasString.height = container.clientHeight + 160;

        anchorX = canvasString.width / 2;
        targetX = canvasString.width / 2 - card.clientWidth / 2;
    }

    setupPositions();
    window.addEventListener('resize', setupPositions);

    // Scroll Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                isInAboutSection = true;
                card.classList.remove('opacity-0');
                canvasString.classList.remove('opacity-0');
                
                cardY = -350;
                vy = 28;
                vx = (Math.random() - 0.5) * 16;
            } else {
                isInAboutSection = false;
                card.classList.add('opacity-0');
                canvasString.classList.add('opacity-0');
                cardY = -450;
                vx = 0;
                vy = 0;
            }
        });
    }, { threshold: 0.3 });

    observer.observe(container);

    // Mouse Dragging
    card.addEventListener('mousedown', (e) => {
        if (!isInAboutSection) return;
        isDragging = true;
        dragStartX = e.clientX - cardX;
        dragStartY = e.clientY - cardY;
    });

    window.addEventListener('mousemove', (e) => {
        if (isDragging) {
            cardX = e.clientX - dragStartX;
            cardY = e.clientY - dragStartY;
        }
    });

    window.addEventListener('mouseup', () => {
        if (isDragging) {
            isDragging = false;
        }
    });

    // Render Loop
function renderElasticCard() {
    if (isInAboutSection) {
        const isMobile = window.innerWidth < 640;

        if (!isDragging) {
            const springK = 0.045;   
            const damping = 0.83;   

            // Jika di HP, gantung kartu sedikit lebih rendah agar tali tidak terlalu panjang
            const mobileTargetY = isMobile ? 20 : targetY;

            const forceX = (targetX - cardX) * springK;
            const forceY = (mobileTargetY - cardY) * springK;

            vx = (vx + forceX) * damping;
            vy = (vy + forceY) * damping;

            cardX += vx;
            cardY += vy;
        }

        // Rotasi lebih kecil di HP agar tidak melenceng jauh
        const maxRot = isMobile ? 8 : 15;
        const rotationZ = Math.max(-maxRot, Math.min(maxRot, vx * 0.5));
        card.style.transform = `translate3d(${cardX - (canvasString.width / 2 - card.clientWidth / 2)}px, ${cardY}px, 0) rotateZ(${rotationZ}deg)`;
    }

        ctxString.clearRect(0, 0, canvasString.width, canvasString.height);

        if (isInAboutSection || cardY > -300) {
            const cardHangerX = cardX + card.clientWidth / 2;
            const cardHangerY = cardY + 160; 

            // Hitung Kelengkungan Tali saat Didorong ke Atas
            const deltaY = targetY - cardY;
            const pushUpBend = deltaY > 0 ? deltaY * 0.8 : 0;
            
            const controlX = (anchorX + cardHangerX) / 2 + (isDragging ? (cardX - targetX) * 0.25 : pushUpBend + (cardX - targetX) * 0.1);
            const controlY = (anchorY + cardHangerY) / 2 + (isDragging ? 30 : pushUpBend * 0.4);

            // 1. Pita Lanyard Gradient Royal Blue
            ctxString.beginPath();
            ctxString.moveTo(anchorX, 0);
            ctxString.quadraticCurveTo(controlX, controlY, cardHangerX, cardHangerY);
            
            const gradient = ctxString.createLinearGradient(anchorX, 0, cardHangerX, cardHangerY);
            gradient.addColorStop(0, '#212121');
            gradient.addColorStop(1, '#1f1f1f');

            ctxString.strokeStyle = gradient;
            ctxString.lineWidth = 12;
            ctxString.lineCap = 'round';
            ctxString.stroke();

            // 2. Garis Jahitan Tepi Tali (Stitching Effect)
            ctxString.beginPath();
            ctxString.moveTo(anchorX, 0);
            ctxString.quadraticCurveTo(controlX, controlY, cardHangerX, cardHangerY);
            ctxString.strokeStyle = '#fdfdfde0';
            ctxString.lineWidth = 1.5;
            ctxString.setLineDash([6, 6]);
            ctxString.stroke();
            ctxString.setLineDash([]);

            // 3. Ring Pengait Metalik Bawah
            ctxString.beginPath();
            ctxString.arc(cardHangerX, cardHangerY - 2, 6, 0, Math.PI * 2);
            ctxString.fillStyle = '#cbd5e1';
            ctxString.fill();
            ctxString.lineWidth = 1.5;
            ctxString.strokeStyle = '#334155';
            ctxString.stroke();
        }

        requestAnimationFrame(renderElasticCard);
    }

    renderElasticCard();
}
}

// Menjalankan fungsi setelah DOM siap
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initEffects);
} else {
    initEffects();
}