<?php
// Define base URL path or asset directory if needed
$img_base_path = 'https://images.unsplash.com/';

$insurance_items = [
    [
        'id'           => 'life',
        'category'     => 'LIFE',
        'title'        => 'The Broadwinner',
        'image'        => $img_base_path . 'photo-1511895426328-dc8714191300?q=80&w=800&auto=format&fit=crop',
        'fallback_img' => 'https://picsum.photos/id/1005/600/350',
        'description'  => 'If the family primary earner passes away unexpectedly life insurance ensures dependents can continue without financial devastation.'
    ],
    [
        'id'           => 'health',
        'category'     => 'HEALTH',
        'title'        => 'The Medical Emergency',
        'image'        => $img_base_path . 'photo-1584515979956-d9f6e5d09982?q=80&w=800&auto=format&fit=crop',
        'fallback_img' => 'https://fastly.picsum.photos/id/1015/600/350.jpg?hmac=JSJAtICX7skf7Yz_LIirzjcCLr1SFED_dNDVFRnI4wo',
        'description'  => 'Cover sudden medical bills and secure quality healthcare without financial stress.'
    ],
    [
        'id'           => 'motor',
        'category'     => 'MOTOR',
        'title'        => 'The Road Accident',
        'image'        => $img_base_path . 'photo-1563720223185-11003d516935?q=80&w=800&auto=format&fit=crop',
        'fallback_img' => 'https://picsum.photos/id/1071/600/350',
        'description'  => 'Ensure complete coverage for vehicle repairs and third-party liabilities.'
    ],
    [
        'id'           => 'property',
        'category'     => 'PROPERTY',
        'title'        => 'The Flood',
        'image'        => $img_base_path . 'photo-1547683905-f686c993aae5?q=80&w=800&auto=format&fit=crop',
        'fallback_img' => 'https://picsum.photos/id/1040/600/350',
        'description'  => 'Safeguard your home and property assets from natural disasters.'
    ],
    [
        'id'           => 'travel',
        'category'     => 'TRAVEL',
        'title'        => 'The Trip Emergency',
        'image'        => $img_base_path . 'photo-1436491865332-7a61a109cc05?q=80&w=800&auto=format&fit=crop',
        'fallback_img' => 'https://picsum.photos/id/1036/600/350',
        'description'  => 'Stay covered for trip cancellations, lost baggage, and overseas medical emergencies.'
    ],
    [
        'id'           => 'income',
        'category'     => 'INCOME',
        'title'        => 'The Income Stop',
        'image'        => $img_base_path . 'photo-1507679799987-c73779587ccf?q=80&w=800&auto=format&fit=crop',
        'fallback_img' => 'https://picsum.photos/id/1059/600/350',
        'description'  => 'Disability or serious illness can halt your earnings. Protect your household cash flow.'
    ]
];
?>

<section class="insurance-section">
    <div class="container">
        <span class="subtitle">WHY IT MATTERS</span>
        <h2 class="title">Why Insurance Matters</h2>

        <div class="content-wrapper">
            <!-- Sidebar Navigation -->
            <ul class="tab-list">
                <?php foreach ($insurance_items as $index => $item): 
                    $img_src = !empty($item['image']) ? $item['image'] : $item['fallback_img'];
                ?>
                    <li class="tab-item <?= $index === 0 ? 'active' : ''; ?>" 
                        data-category="<?= htmlspecialchars($item['category']); ?>"
                        data-title="<?= htmlspecialchars($item['title']); ?>"
                        data-image="<?= htmlspecialchars($img_src); ?>"
                        data-fallback-img="<?= htmlspecialchars($item['fallback_img']); ?>"
                        data-desc="<?= htmlspecialchars($item['description']); ?>">
                        <span class="category"><?= htmlspecialchars($item['category']); ?></span>
                        <span class="item-title"><?= htmlspecialchars($item['title']); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Active Content Display -->
            <div class="display-card">
                <div class="image-wrapper">
                    <img id="display-image" 
                         src="<?= htmlspecialchars(!empty($insurance_items[0]['image']) ? $insurance_items[0]['image'] : $insurance_items[0]['fallback_img']); ?>" 
                         alt="Insurance Preview">
                    <div class="card-overlay">
                        <span id="display-category" class="tag"><?= htmlspecialchars($insurance_items[0]['category']); ?></span>
                    </div>
                </div>
                <p id="display-desc" class="description"><?= htmlspecialchars($insurance_items[0]['description']); ?></p>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const tabItems = document.querySelectorAll('.tab-item');
    const displayImage = document.getElementById('display-image');
    const displayCategory = document.getElementById('display-category');
    const displayDesc = document.getElementById('display-desc');

    function switchTab(selectedTab) {
        if (selectedTab.classList.contains('active')) return;

        // 1. Update active tab UI state
        tabItems.forEach(tab => tab.classList.remove('active'));
        selectedTab.classList.add('active');

        // 2. Extract dataset attributes
        const { category, title, image, desc } = selectedTab.dataset;

        // 3. Smooth fade-out transition for content
        displayImage.style.opacity = '0.3';

        setTimeout(() => {
            // Update Text Content (safely checked)
            if (displayCategory) displayCategory.textContent = category;
            if (displayDesc) displayDesc.textContent = desc;

            // Update Image Source
            if (displayImage) {
                displayImage.src = image;
                displayImage.alt = `${title} Preview`;
                displayImage.style.opacity = '1';
            }
        }, 150);
    }

    // Attach Click Event Listeners cleanly (removed inline onclick)
    tabItems.forEach(tab => {
        tab.addEventListener('click', function() {
            switchTab(this);
        });
    });

    // Fallback Image Error Handling
    if (displayImage) {
        displayImage.addEventListener('error', function() {
            const activeTab = document.querySelector('.tab-item.active');
            if (activeTab && activeTab.dataset.fallbackImg) {
                this.src = activeTab.dataset.fallbackImg;
            }
        });
    }
});
</script>