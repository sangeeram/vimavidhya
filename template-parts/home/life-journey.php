<?php
/**
 * Component: Standalone Life Journey Roadmap
 */

$roadmap_stages = [
    [
        'stage_num' => '01',
        'title'     => 'Explore the World',
        'tag'       => 'Travel Insurance',
        'desc'      => 'Every adventure deserves protection.',
        'color'     => '#10B981',
        'image'     => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=800&q=80',
        'link'      => '/what-and-why-is-insurance/?stage=frequent-traveller'
    ],
    [
        'stage_num' => '02',
        'title'     => 'Buy Your First Vehicle',
        'tag'       => 'Motor Insurance',
        'desc'      => 'Every road has its surprises.',
        'color'     => '#3B82F6',
        'image'     => 'https://images.unsplash.com/photo-1558981806-ec527fa84c39?auto=format&fit=crop&w=800&q=80',
        'link'      => '/what-and-why-is-insurance/?stage=new-job'
    ],
    [
        'stage_num' => '03',
        'title'     => 'Build Your Home',
        'tag'       => 'Property Insurance',
        'desc'      => 'Protect your biggest investment.',
        'color'     => '#F59E0B',
       'image'     => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80',
        'link'      => '/what-and-why-is-insurance/?stage=new-homeowner'
    ],
    [
        'stage_num' => '04',
        'title'     => 'Take Care of Yourself',
        'tag'       => 'Health Insurance',
        'desc'      => 'Good health is priceless.',
        'color'     => '#EC4899',
        'image'      => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=800&q=80',
        'link'      => '/what-and-why-is-insurance/?stage=new-parent'
    ],
    [
        'stage_num' => '05',
        'title'     => 'Life Happens',
        'tag'       => 'Personal Accident Insurance',
        'desc'      => "One unexpected moment shouldn't define your future.",
        'color'     => '#EF4444',
        'image'     => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=800&q=80',
        'link'      => '/what-and-why-is-insurance/?stage=young-working'
    ],
    [
        'stage_num' => '06',
        'title'     => 'Secure Your Family',
        'tag'       => 'Life Insurance',
        'desc'      => 'Because the people you love deserve financial security, always.',
        'color'     => '#8B5CF6',
        'image'      => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'link'      => '/what-and-why-is-insurance/?stage=married'
    ],
];
?>

<section class="section-life-journey">
    <div class="roadmap-container">

        <!-- ROADMAP HEADER -->
        <header class="roadmap-header" data-aos="fade-up" data-aos-duration="800">
            <!-- <span class="subtitle">STARTING OUT</span> -->
            <h2 class="title">Wherever Life Takes You, Protection Should Follow</h2>
            <p class="description">Life begins with dreams. Every journey starts somewhere.</p>
        </header>

        <!-- ROADMAP TRACK & ITEMS -->
        <div class="roadmap-wrapper">
            <!-- Background SVG S-Curve Track -->
            <svg class="road-path-svg" viewBox="0 0 1000 3600" preserveAspectRatio="none" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M 500 0 C 250 300, 750 600, 500 900 C 250 1200, 750 1500, 500 1800 C 250 2100, 750 2400, 500 2700 C 250 3000, 750 3300, 500 3600"
                    stroke="#94A3B8" stroke-width="110" stroke-linecap="round" />
                <path
                    d="M 500 0 C 250 300, 750 600, 500 900 C 250 1200, 750 1500, 500 1800 C 250 2100, 750 2400, 500 2700 C 250 3000, 750 3300, 500 3600"
                    stroke="#FFFFFF" stroke-width="8" stroke-dasharray="24 20" stroke-linecap="round" />
            </svg>

            <?php if (!empty($roadmap_stages)) : ?>
            <div class="roadmap-items">
                <?php foreach ($roadmap_stages as $index => $stage) : 
                    $is_left = ($index % 2 === 0);
                    $alignment = $is_left ? 'is-left' : 'is-right';
                ?>
                <div class="roadmap-item <?php echo esc_attr($alignment); ?>"
                    data-aos="<?php echo $is_left ? 'fade-right' : 'fade-left'; ?>" data-aos-duration="900">

                    <!-- Direct Anchor Card -->
                    <a href="<?php echo esc_url($stage['link']); ?>" class="info-card">
                        <span class="stage-label" style="--node-color: <?php echo esc_attr($stage['color']); ?>;">
                            STAGE <?php echo esc_html($stage['stage_num']); ?>
                        </span>
                        <h3 class="stage-title"><?php echo esc_html($stage['title']); ?></h3>
                        <span class="stage-tag"
                            style="color: <?php echo esc_attr($stage['color']); ?>; background-color: <?php echo esc_attr($stage['color']); ?>18;">
                            <?php echo esc_html($stage['tag']); ?>
                        </span>
                        <p class="stage-desc"><?php echo esc_html($stage['desc']); ?></p>
                    </a>

                    <!-- Map Pin Node -->
                    <div class="map-pin" style="--node-color: <?php echo esc_attr($stage['color']); ?>;">
                        <span><?php echo esc_html($stage['stage_num']); ?></span>
                    </div>

                    <!-- Image Thumbnail -->
                    <div class="image-card">
                        <a href="<?php echo esc_url($stage['link']); ?>" class="image-wrapper">
                            <img src="<?php echo esc_url($stage['image']); ?>"
                                alt="<?php echo esc_attr($stage['title']); ?>" loading="lazy" />
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {

    AOS.init({
        duration: 900,
        easing: 'ease-out-cubic',
        once: true,
        offset: 120
    });

});
</script>