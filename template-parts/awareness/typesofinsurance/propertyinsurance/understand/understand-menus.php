<?php
/**
 * Property Insurance Process Steps Section (Navigable)
 */
$subheading = get_field('section_subheading') ?: 'Dive into each section to get a clear, simple and practical understanding of property insurance.';

$steps = get_field('insurance_steps') ?: [
    [
        'number'       => '01',
        'title'        => 'WHAT IT IS',
        'icon_class'   => 'dashicons-admin-home',
        'accent_color' => $color_blue ?? '#007aff',
        'url'          => '#what-it-is', // Section anchor ID or page URL
        'is_active'    => true,
    ],
    [
        'number'       => '02',
        'title'        => 'WHY IT MATTERS',
        'icon_class'   => 'dashicons-shield',
        'accent_color' => '#f59a18',
        'url'          => '#why-it-matters',
        'is_active'    => false,
    ],
    [
        'number'       => '03',
        'title'        => 'TYPES',
        'icon_class'   => 'dashicons-grid-view',
        'accent_color' => '#10b981',
        'url'          => '#types',
        'is_active'    => false,
    ],
    [
        'number'       => '04',
        'title'        => 'WHO CAN BUY',
        'icon_class'   => 'dashicons-groups',
        'accent_color' => '#8b5cf6',
        'url'          => '#who-can-buy',
        'is_active'    => false,
    ],
    [
        'number'       => '05',
        'title'        => 'IMPACT',
        'icon_class'   => 'dashicons-warning',
        'accent_color' => '#f43f5e',
        'url'          => '#impact',
        'is_active'    => false,
    ],
    [
        'number'       => '06',
        'title'        => 'THINGS TO KNOW',
        'icon_class'   => 'dashicons-lightbulb',
        'accent_color' => '#06b6d4',
        'url'          => '#things-to-know',
        'is_active'    => false,
    ],
];
?>

<section class="vv-process-section">
  <div class="vv-container">
    
   

    <div class="vv-process-grid">
      <div class="vv-process-grid__line"></div>
      
      <?php foreach ($steps as $step) : 
        $active_class = !empty($step['is_active']) ? 'vv-process-card--active' : '';
        $target_url   = !empty($step['url']) ? esc_url($step['url']) : '#';
      ?>
        <a href="<?php echo $target_url; ?>" 
           class="vv-process-card <?php echo esc_attr($active_class); ?>" 
           style="--card-accent: <?php echo esc_attr($step['accent_color']); ?>;">
          <div class="vv-process-card__inner">
            <span class="vv-process-card__number"><?php echo esc_html($step['number']); ?></span>
            <div class="vv-process-card__icon">
              <span class="dashicons <?php echo esc_attr($step['icon_class']); ?>"></span>
            </div>
            <h3 class="vv-process-card__title"><?php echo esc_html($step['title']); ?></h3>
          </div>
          <div class="vv-process-card__corner-accent"></div>
        </a>
      <?php endforeach; ?>

    </div>

  </div>
</section>