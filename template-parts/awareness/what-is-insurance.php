<?php
$insurance_items = [
    'life' => [
        'id' => '01',
        'title' => 'Life Insurance',
        'side_desc' => 'Secure your family\'s future and financial stability.',
        'icon' => '💙',
        'subtitle' => 'Financial security for your dependents — parents, spouse, children — when the primary earner is no longer around.',
        'why_matters' => [
            'Income replacement' => 'Replaces lost income so family commitments continue uninterrupted.',
            'Long-term goals' => 'Protects children\'s education and retirement savings.',
            'Debt protection' => 'Covers outstanding loans so debts don\'t become a burden on your family.'
        ],
        'key_benefits' => [
            'Low cost, high cover' => 'High coverage at very low premiums, especially when purchased young.',
            'Tax benefit' => 'Deductions under Section 80C on premiums paid annually.',
            'Lock in early' => 'The younger you buy, the lower the premium for life — rates only rise with age.'
        ],
        'bigger_picture' => 'Life insurance isn\'t just about death cover — it\'s about ensuring the people who depend on you can continue to live, grow, and thrive, no matter what happens.',
        'banner' => 'Mandatory in India? No — but essential if you have dependents. Term plan recommended.'
    ],
    'health' => [
        'id' => '02',
        'title' => 'Health Insurance',
        'side_desc' => 'Protect yourself from rising medical expenses.',
        'icon' => '🏥',
        'subtitle' => 'Rising medical costs can derail household budgets. Family floater policies cover all members under one plan.',
        'why_matters' => [
            'Medical inflation' => 'Healthcare costs in India rise at 14–15% annually — a single hospitalisation can wipe out savings.',
            'Employer cover isn\'t enough' => 'Group cover ends with your job and rarely covers your full family post-retirement.',
            'Buy early' => 'Pre-existing disease waiting periods begin only when you buy — the earlier you start, the sooner you\'re covered.'
        ],
        'key_benefits' => [
            'Comprehensive cover' => 'Covers hospitalisation, day-care treatments, pre and post hospital expenses.',
            'Cashless treatment' => 'At network hospitals — no upfront payment needed at admission.',
            'Tax benefit' => 'Section 80D deductions up to Rs. 25,000 (Rs. 50,000 for senior citizens).'
        ],
        'bigger_picture' => 'A health insurance policy that you own and renew every year is the only cover that truly stays with you through job changes, life stages, and the unexpected.',
        'banner' => 'Mandatory in India? No — but critical for every household. Family floater recommended.'
    ],
    'accident' => [
        'id' => '03',
        'title' => 'Accident Insurance',
        'side_desc' => 'Financial support during accidental injuries.',
        'icon' => '🛡️',
        'subtitle' => 'Commuting, travel, and active lifestyles increase accident risk. This cover steps in when health insurance does not.',
        'why_matters' => [
            'Income protection' => 'Accidents can cause temporary or permanent disability — stopping your income without warning.',
            'Fills the gap' => 'Health insurance covers medical bills; personal accident covers lost income during recovery.',
            'Highly affordable' => 'Premiums are among the lowest of all insurance types relative to protection provided.'
        ],
        'key_benefits' => [
            'Disablement cover' => 'Temporary and permanent total/partial disablement benefits replace lost earnings.',
            'Accidental death' => 'Lump sum payout to the family in the event of accidental death.',
            'Worldwide cover' => '24x7 protection whether you are at home, commuting, or travelling abroad.'
        ],
        'bigger_picture' => 'Personal accident cover is one of the most affordable and most overlooked forms of financial protection available today.',
        'banner' => 'Mandatory in India? No — highly recommended for all earners. Low cost, high impact.'
    ],
    'motor' => [
        'id' => '04',
        'title' => 'Motor Insurance',
        'side_desc' => 'Protection for your vehicle and third party.',
        'icon' => '🚗',
        'subtitle' => 'Vehicles are legally required to be insured. Third-party motor insurance is mandatory across India.',
        'why_matters' => [
            'Legal requirement' => 'Driving without valid third-party insurance is a legal offence — fines and licence suspension apply.',
            'Accident exposure' => 'A road accident can result in significant vehicle damage, injury, or third-party liability claims.',
            'Your vehicle too' => 'Comprehensive cover protects your own vehicle from damage, not just third-party liability.'
        ],
        'key_benefits' => [
            'Own damage cover' => 'Covers vehicle damage from accidents, theft, fire, and natural calamities.',
            'Third-party liability' => 'Covers property damage and personal injury caused to others in an accident.',
            'Add-on options' => 'Zero depreciation, engine protection, and roadside assistance available as riders.'
        ],
        'bigger_picture' => 'A single accident claim can recover many years of premium in one go. Comprehensive cover is a genuine financial safeguard.',
        'banner' => 'Mandatory in India — third-party cover is legally required. Comprehensive cover recommended.'
    ],
    'property' => [
        'id' => '05',
        'title' => 'Property Insurance',
        'side_desc' => 'Safeguard your home and assets.',
        'icon' => '🏠',
        'subtitle' => 'Protects rented or owned homes and household belongings — gadgets, furniture, jewellery — from the unexpected.',
        'why_matters' => [
            'Your biggest asset' => 'For most Indians, a home is the single largest asset they will ever own — and the most underinsured.',
            'Real risks' => 'Fire, flood, earthquake, and burglary can cause losses that take years to recover from without cover.',
            'Renters too' => 'A landlord\'s policy protects the building structure — not your belongings inside the home.'
        ],
        'key_benefits' => [
            'Structure and contents' => 'Compensation for fire, theft, natural disasters, and accidental damage to both.',
            'Valuables covered' => 'Electronics, jewellery, and furniture can be specifically insured within the policy.',
            'Low premium' => 'Premiums are very low relative to the value of the asset and contents being protected.'
        ],
        'bigger_picture' => 'A comprehensive home insurance policy costs a fraction of your annual car insurance premium yet protects an asset that took a lifetime to build.',
        'banner' => 'Mandatory in India? No — but grossly underutilised by homeowners. Most underinsured category.'
    ]
];
$keys = array_keys($insurance_items);
?>

<section class="theme-section">
    <!-- Outer Full-Width Card Container -->
    <div class="homepage-card-container">
        
        <!-- Header -->
        <header class="homepage-header">
            <span class="pill-category">START HERE — YOUR AWARENESS JOURNEY</span>
            <h2 class="section-heading">
                Insurance — <span class="highlight">A risk management tool</span> to protect you through the unexpected
            </h2>
            <p class="section-lead">
                Insurance is a great risk management tool. It is an agreement between an insurer and an individual that helps to compensate for the economic loss suffered. Insurance policies cover various types of risks — when these risks occur, the insurer financially compensates for the loss suffered depending on the agreed terms. A quick look at various types of insurance policies for an individual and what they mean.
            </p>
        </header>

        <!-- Inner Interactive Tab Box -->
        <div class="theme-tab-box">
            <!-- Sidebar with Icon Tabs -->
            <aside class="sidebar">
                <h3 class="sidebar-title">Insurance<br>Coverage Options</h3>
                <ul class="sidebar-nav">
                    <?php foreach ($insurance_items as $key => $item): ?>
                        <li class="sidebar-item <?php echo $key === 'life' ? 'active' : ''; ?>" data-key="<?php echo $key; ?>">
                            <span class="sidebar-icon"><?php echo $item['icon']; ?></span>
                            <div class="step-info">
                                <strong><?php echo $item['title']; ?></strong>
                                <p><?php echo $item['side_desc']; ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="sidebar-footer">
                    <span class="icon">🛡️</span>
                    <p>Choose a coverage type to learn more about its benefits and features.</p>
                </div>
            </aside>

            <!-- Main Content Area -->
            <main class="content-area">
                <div class="panes-container">
                    <?php foreach ($insurance_items as $key => $item): ?>
                        <div class="pane-item <?php echo $key === 'life' ? 'active' : ''; ?>" id="pane-<?php echo $key; ?>">
                            <h3 class="pane-title"><?php echo $item['title']; ?></h3>
                            <p class="pane-subtitle"><?php echo $item['subtitle']; ?></p>

                            <div class="cards-grid">
                                <div class="info-card">
                                    <div class="card-badge">
                                        <span class="icon">👥</span> Why it matters
                                    </div>
                                    <ul class="card-list">
                                        <?php foreach ($item['why_matters'] as $heading => $desc): ?>
                                            <li><strong><?php echo $heading; ?></strong> — <?php echo $desc; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="info-card">
                                    <div class="card-badge">
                                        <span class="icon">🛡️</span> Key benefits
                                    </div>
                                    <ul class="card-list">
                                        <?php foreach ($item['key_benefits'] as $heading => $desc): ?>
                                            <li><strong><?php echo $heading; ?></strong> — <?php echo $desc; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="bigger-picture">
                                <strong>The Bigger Picture:</strong> <?php echo $item['bigger_picture']; ?>
                            </div>

                            <div class="bottom-banner">
                                <div class="banner-left">
                                    <span class="shield">🛡️</span>
                                    <p><?php echo $item['banner']; ?></p>
                                </div>
                                <a href="#" class="btn-know-more">Know More &rarr;</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Footer Navigation -->
                <div class="progress-footer">
                    <button class="btn-nav btn-prev" disabled>&larr; Previous</button>
                    <button class="btn-nav btn-next">Next &rarr;</button>
                </div>
            </main>
        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const keys = <?php echo json_encode($keys); ?>;
    let currentIndex = 0;

    const sidebarItems = document.querySelectorAll(".sidebar-item");
    const panes = document.querySelectorAll(".pane-item");
    const prevBtn = document.querySelector(".btn-prev");
    const nextBtn = document.querySelector(".btn-next");

    function updateActiveState(index) {
        currentIndex = index;
        const currentKey = keys[currentIndex];

        sidebarItems.forEach(item => {
            item.classList.toggle("active", item.getAttribute("data-key") === currentKey);
        });

        panes.forEach(pane => {
            pane.classList.toggle("active", pane.id === `pane-${currentKey}`);
        });

        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === keys.length - 1;
    }

    sidebarItems.forEach(item => {
        item.addEventListener("click", () => {
            updateActiveState(keys.indexOf(item.getAttribute("data-key")));
        });
    });

    prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) updateActiveState(currentIndex - 1);
    });

    nextBtn.addEventListener("click", () => {
        if (currentIndex < keys.length - 1) updateActiveState(currentIndex + 1);
    });
});
</script>