<?php
    /**
     * =========================================================
     * VIMA VIDYA
     * CUSTOM REPORTS SECTION
     * =========================================================
     */

    $custom_reports_data = [
        'eyebrow' => 'INSIGHTS & ANALYTICS',
        'title' => 'Custom Reports',
        'image' => get_template_directory_uri() . '/assets/images/expertise/customer-image.png',
        'description' => 'These are original reports created by the VimaVidya team to serve the needs of Indian insurance consumers. They analyze needs, behaviors, and educational gaps in risk awareness, offering tailored insights for different user groups—such as students, working professionals, and job seekers.',
        'link_text' => 'Explore Custom Reports',
        'url' => '/contact-us/'
    ];
?>

<section class="custom-reports-section" id="custom-reports">
    <div class="custom-reports__container">

        <!-- SECTION HEADER -->
        <div class="custom-reports__header">
            <span class="custom-reports__eyebrow"><?php echo esc_html($custom_reports_data['eyebrow']); ?></span>
            <h2 class="custom-reports__title"><?php echo esc_html($custom_reports_data['title']); ?></h2>
        </div>

        <!-- FEATURED REPORT CARD -->
        <div class="custom-reports__card">
            
            <!-- LEFT IMAGE -->
            <div class="custom-reports__media">
                <img src="<?php echo esc_url($custom_reports_data['image']); ?>" alt="<?php echo esc_attr($custom_reports_data['title']); ?>" loading="lazy">
                <div class="custom-reports__badge">Research & Data</div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="custom-reports__content">
                <h3>Consumer Behavior & Risk Awareness</h3>
                <p><?php echo esc_html($custom_reports_data['description']); ?></p>
                
                <a href="<?php echo esc_url($custom_reports_data['url']); ?>" class="custom-reports__button">
                    <?php echo esc_html($custom_reports_data['link_text']); ?>
                    <span>→</span>
                </a>
            </div>

        </div>

    </div>
</section>