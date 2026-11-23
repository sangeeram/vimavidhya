<?php
/**
 * Template Name: Life Stages Horizontal Wave Walker
 */
get_header();

$life_stages = [

    // =========================================================
    // 01. NEW JOB
    // =========================================================
    'new-job' => [
        'title' => 'New Job',
        'subtitle' => 'Young Professional',
        'link' => home_url('/what-and-why-is-insurance/?stage=new-job'),

        'grid_desc' =>
            'Start your earning journey with the right protection from day one.',

        'bg_image' =>
            'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=1000',

        'focus' =>
            'Protecting your dreams as you begin your career',

        'focus_text' =>
            'Your first job is the start of your financial independence. You are building a career, managing your own expenses, maybe buying your first car or setting up your own space. The decisions you make about money right now — including insurance — will shape your financial journey for decades to come.',

        'how_helps' => [
            'Shields you from unexpected events — illness, accidents, or loss of assets — that could derail your career and savings.',
            'Premiums are generally lower when purchased young and healthy, making coverage more cost-effective.',
            'Early policies can help you secure coverage before health conditions potentially affect eligibility or cost.',
            'Builds disciplined financial habits and reduces financial anxiety when unexpected events occur.'
        ],

        'priority_coverage' => [
            '<strong>Health insurance</strong> — to cover medical costs early and avoid financial strain later.',
            '<strong>Term life insurance</strong> — particularly if you have financial dependents.',
            '<strong>Personal accident cover</strong> — for unforeseen accidents and disabilities.'
        ],

        'smart_additions' => [
            '<strong>Motor insurance</strong> — for your vehicle.',
            '<strong>Home or renters insurance</strong> — for your living space.',
            '<strong>Critical illness coverage</strong> — to protect against major medical expenses.'
        ],

        'cover_tags' => [
            ['label' => 'Life', 'id' => 'life'],
            ['label' => 'Health', 'id' => 'health'],
            ['label' => 'Personal Accident', 'id' => 'accident'],
            ['label' => 'Motor', 'id' => 'motor']
        ],

        'bigger_picture' =>
            'Insurance isn’t just about covering risks — it’s about future-proofing your financial journey. Securing protection early lets you focus on career growth, investments, and lifestyle goals without fear of setbacks.',

        'footer_note' =>
            'The right time to start is now — premiums generally rise with age.'
    ],


    // =========================================================
    // 02. YOUNG WORKING
    // =========================================================
    'young-working' => [
        'title' => 'Young Working',
        'subtitle' => 'Career Builder',
        'link' => home_url('/what-and-why-is-insurance/?stage=young-working'),

        'grid_desc' =>
            'Your income is your biggest asset. Protect it while you build your future.',

        'bg_image' =>
            'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1000',

        'focus' =>
            'Maximizing wealth creation while protecting earnings',

        'focus_text' =>
            'As your earnings increase, so do your financial goals. Protecting your growing income stream becomes important to ensuring steady long-term progress. The stronger your financial foundation, the more confidently you can pursue investments, lifestyle goals and future responsibilities.',

        'how_helps' => [
            'Protects against financial loss arising from unexpected disability, accidents or medical emergencies.',
            'Helps preserve savings and investments when unexpected expenses arise.',
            'Provides greater confidence as income and financial responsibilities increase.',
            'Creates a stronger financial foundation before major liabilities are added.'
        ],

        'priority_coverage' => [
            '<strong>Higher Health Cover</strong> — limits suited to your lifestyle and growing income.',
            '<strong>Personal Accident / Disability Insurance</strong> — to protect earning capacity.',
            '<strong>Term Life Insurance</strong> — where dependents or liabilities exist.'
        ],

        'smart_additions' => [
            '<strong>Travel Insurance</strong> — for frequent domestic or international travel.',
            '<strong>Motor Insurance</strong> — for your vehicle.',
            '<strong>Critical Illness Cover</strong> — for major health risks.'
        ],

        'cover_tags' => [
            ['label' => 'Life', 'id' => 'life'],
            ['label' => 'Health', 'id' => 'health'],
            ['label' => 'Personal Accident', 'id' => 'accident'],
            ['label' => 'Motor', 'id' => 'motor']
        ],

        'bigger_picture' =>
            'Solidifying coverage while you are building wealth protects the progress you make. Insurance creates a financial safety layer while your career, investments and responsibilities continue to grow.',

        'footer_note' =>
            'Secure your income before expanding your liabilities.'
    ],


    // =========================================================
    // 03. MARRIED
    // =========================================================
    'married' => [
        'title' => 'Married',
        'subtitle' => 'Shared Journey',
        'link' => home_url('/what-and-why-is-insurance/?stage=married'),

        'grid_desc' =>
            'Two lives, shared dreams, shared responsibilities. Secure them today.',

        'bg_image' =>
            'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&q=80&w=1000',

        'focus' =>
            'Building a joint financial safety net',

        'focus_text' =>
            'Marriage brings shared goals and shared financial responsibilities. Protecting both partners helps ensure that one unexpected event does not place the entire financial burden on the other.',

        'how_helps' => [
            'Provides financial protection for both partners and their shared responsibilities.',
            'Helps protect joint savings, loans and other financial commitments.',
            'Creates a coordinated approach to health, life and asset protection.',
            'Supports long-term goals such as buying a home, investing and starting a family.'
        ],

        'priority_coverage' => [
            '<strong>Family Floater Health Insurance</strong> — for both spouses.',
            '<strong>Term Life Insurance</strong> — based on income and financial responsibilities.',
            '<strong>Personal Accident Cover</strong> — for both partners.'
        ],

        'smart_additions' => [
            '<strong>Critical Illness Riders</strong> — for major health events.',
            '<strong>Home Insurance</strong> — when purchasing a home.',
            '<strong>Motor Insurance</strong> — for family vehicles.'
        ],

        'cover_tags' => [
            ['label' => 'Life', 'id' => 'life'],
            ['label' => 'Health', 'id' => 'health'],
            ['label' => 'Personal Accident', 'id' => 'accident'],
            ['label' => 'Motor', 'id' => 'motor']
        ],

        'bigger_picture' =>
            'Protecting both partners establishes financial stability as shared responsibilities and milestones increase.',

        'footer_note' =>
            'Two lives require a unified financial safety net.'
    ],


    // =========================================================
    // 04. NEW PARENT
    // =========================================================
    'new-parent' => [
        'title' => 'New Parent',
        'subtitle' => 'Growing Family',
        'link' => home_url('/what-and-why-is-insurance/?stage=new-parent'),

        'grid_desc' =>
            'New responsibilities deserve stronger financial protection.',

        'bg_image' =>
            'https://images.unsplash.com/photo-1555252333-9f8e92e65df9?auto=format&fit=crop&q=80&w=1000',

        'focus' =>
            'Securing your child’s future and education',

        'focus_text' =>
            'Raising a child introduces long-term financial commitments. From healthcare and education to everyday living costs, your financial responsibilities now extend well into the future.',

        'how_helps' => [
            'Helps protect your child’s education and future financial needs.',
            'Provides stronger family health protection as medical responsibilities increase.',
            'Ensures the family has financial support if a parent is no longer able to earn.',
            'Helps parents plan confidently for long-term goals.'
        ],

        'priority_coverage' => [
            '<strong>Term Life Insurance</strong> — with sufficient cover for family responsibilities.',
            '<strong>Family Health Floater</strong> — including suitable maternity and pediatric benefits.',
            '<strong>Personal Accident Cover</strong> — for parents and earning members.'
        ],

        'smart_additions' => [
            '<strong>Critical Illness Cover</strong> — for major health events.',
            '<strong>Child Education Planning</strong> — to protect future education goals.',
            '<strong>Home Insurance</strong> — to protect the family asset.'
        ],

        'cover_tags' => [
            ['label' => 'Life', 'id' => 'life'],
            ['label' => 'Health', 'id' => 'health'],
            ['label' => 'Personal Accident', 'id' => 'accident'],
            ['label' => 'Motor', 'id' => 'motor']
        ],

        'bigger_picture' =>
            'Your financial strategy shifts from individual protection to securing the future of your family and the next generation.',

        'footer_note' =>
            'Plan early to give your child greater financial security.'
    ],


    // =========================================================
    // 05. NEW HOMEOWNER
    // =========================================================
    'new-homeowner' => [
        'title' => 'New Homeowner',
        'subtitle' => 'Major Asset',
        'link' => home_url('/what-and-why-is-insurance/?stage=new-homeowner'),

        'grid_desc' =>
            'A home is one of your biggest assets. Protect it well.',

        'bg_image' =>
            'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=1000',

        'focus' =>
            'Protecting the home and the financial commitment behind it',

        'focus_text' =>
            'Buying a home is one of the biggest financial decisions most people make. Along with the property comes a long-term financial commitment. Protecting that asset helps ensure that unexpected events do not undo years of financial planning.',

        'how_helps' => [
            'Protects the physical structure of your home against covered risks.',
            'Can protect household contents and valuable possessions.',
            'Helps manage the financial impact of events such as fire, flood or other covered damage.',
            'Supports financial stability while you manage your home loan and other commitments.'
        ],

        'priority_coverage' => [
            '<strong>Home Insurance</strong> — for the structure and appropriate contents.',
            '<strong>Term Life Insurance</strong> — especially when a home loan is involved.',
            '<strong>Personal Accident Cover</strong> — to protect earning capacity.'
        ],

        'smart_additions' => [
            '<strong>Contents Insurance</strong> — for household belongings.',
            '<strong>Critical Illness Cover</strong> — for major health risks.',
            '<strong>Motor Insurance</strong> — for your vehicle.'
        ],

        'cover_tags' => [
            ['label' => 'Life', 'id' => 'life'],
            ['label' => 'Health', 'id' => 'health'],
            ['label' => 'Personal Accident', 'id' => 'accident'],
            ['label' => 'Motor', 'id' => 'motor']
        ],

        'bigger_picture' =>
            'A home is more than a physical asset. It represents years of savings, a major financial commitment and a place for your family. Protecting it protects the foundation you are building.',

        'footer_note' =>
            'Protect the asset that took years to build.'
    ],


    // =========================================================
    // 06. FREQUENT TRAVELLER
    // =========================================================
    'frequent-traveller' => [
        'title' => 'Frequent Traveller',
        'subtitle' => 'Always Moving',
        'link' => home_url('/what-and-why-is-insurance/?stage=frequent-traveller'),

        'grid_desc' =>
            'Your adventures matter. Stay protected wherever you go.',

        'bg_image' =>
            'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&q=80&w=1000',

        'focus' =>
            'Staying protected wherever life takes you',

        'focus_text' =>
            'Frequent travel brings new experiences but also new uncertainties. Medical emergencies, cancellations, delays, lost baggage and other disruptions can turn an enjoyable trip into an unexpected financial burden.',

        'how_helps' => [
            'Helps manage unexpected medical expenses while travelling.',
            'Provides protection against eligible trip cancellations and interruptions.',
            'Can help with covered baggage loss or delays.',
            'Provides financial support during unexpected travel emergencies.'
        ],

        'priority_coverage' => [
            '<strong>Travel Insurance</strong> — suited to your destination and trip duration.',
            '<strong>Health Insurance</strong> — with appropriate domestic or international protection.',
            '<strong>Personal Accident Cover</strong> — for accident-related risks.'
        ],

        'smart_additions' => [
            '<strong>International Travel Cover</strong> — for overseas journeys.',
            '<strong>Trip Cancellation Protection</strong> — where available.',
            '<strong>Baggage Protection</strong> — for eligible losses or delays.'
        ],

        'cover_tags' => [
            ['label' => 'Life', 'id' => 'life'],
            ['label' => 'Health', 'id' => 'health'],
            ['label' => 'Personal Accident', 'id' => 'accident'],
            ['label' => 'Motor', 'id' => 'motor']
        ],

        'bigger_picture' =>
            'Travel should expand your world, not expose your finances to unnecessary uncertainty. The right protection allows you to explore with greater confidence.',

        'footer_note' =>
            'Wherever you go, take protection with you.'
    ],


    // =========================================================
    // 07. PRE-RETIREMENT
    // =========================================================
    'pre-retirement' => [
        'title' => 'Pre-Retirement',
        'subtitle' => 'Protect What You Built',
        'link' => home_url('/what-and-why-is-insurance/?stage=pre-retirement'),

        'grid_desc' =>
            'Protect what you have built so you can enjoy the years ahead.',

        'bg_image' =>
            'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&q=80&w=1000',

        'focus' =>
            'Protecting accumulated wealth before retirement',

        'focus_text' =>
            'As retirement approaches, the focus gradually shifts from accumulating wealth to preserving it. Protecting health, income and accumulated assets becomes increasingly important as the number of working years remaining decreases.',

        'how_helps' => [
            'Protects retirement savings from unexpected medical expenses.',
            'Helps manage health-related financial risks as you approach retirement.',
            'Provides financial protection for dependents and outstanding liabilities.',
            'Helps preserve the wealth you have spent decades building.'
        ],

        'priority_coverage' => [
            '<strong>Comprehensive Health Insurance</strong> — with appropriate coverage limits.',
            '<strong>Term Life Insurance</strong> — where financial dependents or liabilities remain.',
            '<strong>Critical Illness Cover</strong> — for major health events.'
        ],

        'smart_additions' => [
            '<strong>Personal Accident Cover</strong> — for accident-related risks.',
            '<strong>Home Insurance</strong> — to protect major assets.',
            '<strong>Retirement Income Planning</strong> — to support post-work financial needs.'
        ],

        'cover_tags' => [
            ['label' => 'Life', 'id' => 'life'],
            ['label' => 'Health', 'id' => 'health'],
            ['label' => 'Personal Accident', 'id' => 'accident'],
            ['label' => 'Motor', 'id' => 'motor']
        ],

        'bigger_picture' =>
            'The closer you get to retirement, the more important it becomes to protect what you have already built. One large unexpected expense can significantly affect retirement readiness.',

        'footer_note' =>
            'Protect today’s wealth so tomorrow can be enjoyed with confidence.'
    ],


    // =========================================================
    // 08. RETIRED
    // =========================================================
    'retired' => [
        'title' => 'Retired',
        'subtitle' => 'Preserving What Matters',
        'link' => home_url('/what-and-why-is-insurance/?stage=retired'),

        'grid_desc' =>
            'Your focus shifts from earning to preserving. Stay financially secure.',

        'bg_image' =>
            'https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&q=80&w=1000',

        'focus' =>
            'Preserving financial security and independence',

        'focus_text' =>
            'Retirement changes the role of money. Regular employment income may stop while healthcare, household and lifestyle expenses continue. The priority becomes protecting savings, managing health costs and maintaining financial independence.',

        'how_helps' => [
            'Helps manage healthcare expenses during retirement.',
            'Protects accumulated assets from unexpected financial shocks.',
            'Supports continued financial independence when regular employment income has stopped.',
            'Helps ensure your savings remain available for the goals and people that matter to you.'
        ],

        'priority_coverage' => [
            '<strong>Senior Health Insurance</strong> — with coverage suited to your healthcare needs.',
            '<strong>Critical Illness Cover</strong> — where available and appropriate.',
            '<strong>Personal Accident Cover</strong> — for accident-related expenses.'
        ],

        'smart_additions' => [
            '<strong>Home Insurance</strong> — to protect your primary asset.',
            '<strong>Travel Insurance</strong> — particularly for international travel.',
            '<strong>Estate & Legacy Planning</strong> — to organise the transfer of accumulated wealth.'
        ],

        'cover_tags' => [
            ['label' => 'Life', 'id' => 'life'],
            ['label' => 'Health', 'id' => 'health'],
            ['label' => 'Personal Accident', 'id' => 'accident'],
            ['label' => 'Motor', 'id' => 'motor']
        ],

        'bigger_picture' =>
            'Retirement is not the end of financial planning. It is a new stage where preserving independence, managing healthcare costs and protecting your legacy become the priorities.',

        'footer_note' =>
            'Protect what you have built. Enjoy what you have planned.'
    ]

];
?>

<section class="vv-hwave" id="life-stages-roadmap">
    <div class="vv-hwave__glow vv-hwave__glow--blue" aria-hidden="true"></div>
    <div class="vv-hwave__glow vv-hwave__glow--orange" aria-hidden="true"></div>

    <div class="vv-hwave__container">
        <header class="vv-hwave__header">
            <!-- <span class="vv-hwave__eyebrow">The Road of Life &bull; Vima Vidya</span> -->
            <h1 class="vv-hwave__title">Every Milestone. Every Turn.</h1>
            <p class="vv-hwave__subtitle">Scroll to walk along the wave from left to right—click any milestone card to open its dedicated guide.</p>
        </header>

        <!-- Quick Step Controls for Left/Right Navigation -->
        <!-- <div class="vv-hwave__controls">
            <button type="button" class="vv-hwave__nav-btn js-wave-prev" aria-label="Previous stop">&larr; Prev</button>
            <span class="vv-hwave__progress-label" id="vv-wave-status">Stage 01 / 08</span>
            <button type="button" class="vv-hwave__nav-btn js-wave-next" aria-label="Next stop">Next &rarr;</button>
        </div> -->

        <!-- Horizontal Wave Track (Supports native horizontal scroll + slow wheel sync) -->
        <div class="vv-hwave__scroller" id="vv-hwave-scroller">
            <div class="vv-hwave__canvas" id="vv-hwave-canvas">

                <!-- Horizontal Left-to-Right Wave Road SVG -->
                <svg class="vv-hwave__svg" id="vv-hwave-svg" viewBox="0 0 2400 440" fill="none" preserveAspectRatio="none" aria-hidden="true">
                    <defs>
                        <linearGradient id="vvHwaveGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="#007aff" />
                            <stop offset="50%" stop-color="#38bdf8" />
                            <stop offset="100%" stop-color="#f59a18" />
                        </linearGradient>
                        <filter id="vvHwaveShadow" x="-5%" y="-20%" width="110%" height="140%">
                            <feDropShadow dx="0" dy="10" stdDeviation="10" flood-color="#000000" flood-opacity="0.55" />
                        </filter>
                    </defs>

                    <!-- Road Shoulder -->
                    <path
                        class="vv-hroad-shoulder"
                        filter="url(#vvHwaveShadow)"
                        d="M 0 220
                           C 75 75, 225 75, 300 220
                           C 375 365, 525 365, 600 220
                           C 675 75, 825 75, 900 220
                           C 975 365, 1125 365, 1200 220
                           C 1275 75, 1425 75, 1500 220
                           C 1575 365, 1725 365, 1800 220
                           C 1875 75, 2025 75, 2100 220
                           C 2175 365, 2325 365, 2400 220"
                    />

                    <!-- Active Progress Road -->
                    <path
                        id="vv-hroad-progress"
                        class="vv-hroad-progress"
                        stroke="url(#vvHwaveGrad)"
                        d="M 0 220
                           C 75 75, 225 75, 300 220
                           C 375 365, 525 365, 600 220
                           C 675 75, 825 75, 900 220
                           C 975 365, 1125 365, 1200 220
                           C 1275 75, 1425 75, 1500 220
                           C 1575 365, 1725 365, 1800 220
                           C 1875 75, 2025 75, 2100 220
                           C 2175 365, 2325 365, 2400 220"
                    />

                    <!-- Dashed Center Line -->
                    <path
                        class="vv-hroad-dashes"
                        d="M 0 220
                           C 75 75, 225 75, 300 220
                           C 375 365, 525 365, 600 220
                           C 675 75, 825 75, 900 220
                           C 975 365, 1125 365, 1200 220
                           C 1275 75, 1425 75, 1500 220
                           C 1575 365, 1725 365, 1800 220
                           C 1875 75, 2025 75, 2100 220
                           C 2175 365, 2325 365, 2400 220"
                    />
                </svg>

                <!-- Left-to-Right Walking Man -->
                <div class="vv-hwalker" id="vv-hwalker" aria-hidden="true">
                    <div class="vv-hwalker__pulse"></div>
                    <div class="vv-hwalker__avatar">
                        <svg viewBox="0 0 48 48" width="32" height="32" fill="none">
                            <circle cx="25" cy="11" r="5" fill="#ffffff" />
                            <path d="M19 22C19 19.5 21.5 18 25 18C28.5 18 31 19.5 31 22V29H19V22Z" fill="#f59a18" />
                            <path class="vv-hwalker__leg vv-hwalker__leg--left" d="M22 29L17 42" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round" />
                            <path class="vv-hwalker__leg vv-hwalker__leg--right" d="M28 29L33 42" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round" />
                            <path class="vv-hwalker__arm vv-hwalker__arm--left" d="M20 21L14 28" stroke="#ffffff" stroke-width="3" stroke-linecap="round" />
                            <path class="vv-hwalker__arm vv-hwalker__arm--right" d="M30 21L36 27" stroke="#ffffff" stroke-width="3" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>

                <!-- 8 Horizontal Wave Stops (Direct Page Navigation) -->
                <div class="vv-hwave__stops">
                    <?php
                    $index = 1;
                    foreach ($life_stages as $slug => $stage) :
                        $step_num   = str_pad($index, 2, '0', STR_PAD_LEFT);
                        $wave_class = ($index % 2 !== 0) ? 'is-crest' : 'is-trough';
                        $stage_url  = !empty($stage['link']) ? $stage['link'] : home_url('/what-and-why-is-insurance/?stage=' . $slug);
                    ?>
                        <div class="vv-hstop vv-hstop--<?php echo esc_attr($index); ?> <?php echo esc_attr($wave_class); ?>" data-step="<?php echo esc_attr($index); ?>">
                            <a
                                href="<?php echo esc_url($stage_url); ?>"
                                class="vv-hcard"
                                aria-label="<?php echo esc_attr($step_num . ' ' . $stage['title']); ?>"
                            >
                                <span class="vv-hcard__avatar" style="background-image: url('<?php echo esc_url($stage['bg_image']); ?>');"></span>
                                <span class="vv-hcard__meta">
                                    <span class="vv-hcard__sub"><?php echo esc_html($stage['subtitle']); ?></span>
                                    <strong class="vv-hcard__title"><?php echo esc_html($stage['title']); ?></strong>
                                    <span class="vv-hcard__desc"><?php echo esc_html($stage['grid_desc']); ?></span>
                                </span>
                                <span class="vv-hcard__pointer" aria-hidden="true"></span>
                            </a>

                            <span class="vv-hpin" aria-hidden="true">
                                <span><?php echo esc_html($step_num); ?></span>
                            </span>
                        </div>
                    <?php
                        $index++;
                    endforeach;
                    ?>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const scroller = document.getElementById('vv-hwave-scroller');
    const canvas = document.getElementById('vv-hwave-canvas');
    const svg = document.getElementById('vv-hwave-svg');
    const path = document.getElementById('vv-hroad-progress');
    const walker = document.getElementById('vv-hwalker');
    const stops = Array.from(document.querySelectorAll('.vv-hstop'));
    const statusLabel = document.getElementById('vv-wave-status');
    const prevBtn = document.querySelector('.js-wave-prev');
    const nextBtn = document.querySelector('.js-wave-next');

    if (!scroller || !canvas || !svg || !path || !walker) return;

    const totalLength = path.getTotalLength();
    path.style.strokeDasharray = totalLength;
    path.style.strokeDashoffset = totalLength;

    const WHEEL_SPEED = 0.32;
    const LERP_FACTOR = 0.08;
    const STEP_DURATION = 900;

    let smoothProgress = 0;
    let walkTimer = null;
    let rafId = null;

    const getTargetProgress = () => {
        const maxScrollLeft = Math.max(1, scroller.scrollWidth - scroller.clientWidth);
        return Math.max(0, Math.min(1, scroller.scrollLeft / maxScrollLeft));
    };

    const renderAtProgress = (progress) => {
        const currentLength = totalLength * progress;
        path.style.strokeDashoffset = totalLength - currentLength;

        const pt = path.getPointAtLength(currentLength);
        const canvasWidth = canvas.clientWidth;
        const canvasHeight = canvas.clientHeight;

        const xPx = (pt.x / 2400) * canvasWidth;
        const yPx = (pt.y / 440) * canvasHeight;

        walker.style.left = `${xPx}px`;
        walker.style.top = `${yPx}px`;

        let closestIdx = 0;
        let closestDist = Infinity;

        stops.forEach((stop, idx) => {
            const stopCenter = stop.offsetLeft + stop.offsetWidth * 0.5;
            const dist = Math.abs(stopCenter - xPx);
            if (dist < closestDist) {
                closestDist = dist;
                closestIdx = idx;
            }
            stop.classList.toggle('is-reached', stopCenter <= xPx + 30);
            stop.classList.remove('is-current');
        });

        if (stops[closestIdx]) {
            stops[closestIdx].classList.add('is-current');
        }
        if (statusLabel) {
            const padded = String(closestIdx + 1).padStart(2, '0');
            statusLabel.textContent = `Stage ${padded} / 08`;
        }
    };

    const triggerWalkAnim = () => {
        walker.classList.add('is-walking');
        clearTimeout(walkTimer);
        walkTimer = setTimeout(() => walker.classList.remove('is-walking'), 220);
    };

    const tick = () => {
        const targetProgress = getTargetProgress();
        const delta = targetProgress - smoothProgress;

        if (Math.abs(delta) > 0.0005) {
            smoothProgress += delta * LERP_FACTOR;
            triggerWalkAnim();
            renderAtProgress(smoothProgress);
            rafId = window.requestAnimationFrame(tick);
        } else {
            smoothProgress = targetProgress;
            renderAtProgress(smoothProgress);
            rafId = null;
        }
    };

    const requestSmoothSync = () => {
        if (!rafId) {
            rafId = window.requestAnimationFrame(tick);
        }
    };

    scroller.addEventListener('scroll', () => {
        requestSmoothSync();
    }, { passive: true });

    scroller.addEventListener('wheel', (e) => {
        if (scroller.scrollWidth <= scroller.clientWidth) return;
        const rawDelta = Math.abs(e.deltaY) > Math.abs(e.deltaX) ? e.deltaY : e.deltaX;
        if (rawDelta !== 0) {
            e.preventDefault();
            scroller.scrollLeft += rawDelta * WHEEL_SPEED;
            requestSmoothSync();
        }
    }, { passive: false });

    const easeInOutCubic = (t) => (t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2);

    const slowScrollToLeft = (targetLeft, duration = STEP_DURATION) => {
        const startLeft = scroller.scrollLeft;
        const maxLeft = Math.max(0, scroller.scrollWidth - scroller.clientWidth);
        const clampedTarget = Math.max(0, Math.min(maxLeft, targetLeft));
        const distance = clampedTarget - startLeft;
        const startTime = performance.now();

        const stepAnim = (now) => {
            const elapsed = now - startTime;
            const t = Math.min(1, elapsed / duration);
            scroller.scrollLeft = startLeft + distance * easeInOutCubic(t);
            requestSmoothSync();
            if (t < 1) {
                window.requestAnimationFrame(stepAnim);
            }
        };

        window.requestAnimationFrame(stepAnim);
    };

    const getCurrentIndex = () => {
        const currentIdx = stops.findIndex((s) => s.classList.contains('is-current'));
        return currentIdx >= 0 ? currentIdx : 0;
    };

    const scrollToStop = (idx) => {
        const clamped = Math.max(0, Math.min(stops.length - 1, idx));
        const targetStop = stops[clamped];
        if (!targetStop) return;
        const targetLeft = targetStop.offsetLeft - scroller.clientWidth * 0.5 + targetStop.offsetWidth * 0.5;
        slowScrollToLeft(targetLeft);
    };

    if (prevBtn) prevBtn.addEventListener('click', () => scrollToStop(getCurrentIndex() - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => scrollToStop(getCurrentIndex() + 1));

    window.addEventListener('resize', () => {
        smoothProgress = getTargetProgress();
        renderAtProgress(smoothProgress);
    });

    smoothProgress = getTargetProgress();
    renderAtProgress(smoothProgress);
});
</script>

