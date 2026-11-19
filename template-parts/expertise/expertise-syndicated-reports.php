<?php
    /**
     * =========================================================
     * VIMA VIDYA
     * SYNDICATED REPORTS SECTION (LIST LAYOUT)
     * =========================================================
     */

    $syndicated_reports_data = [
        'section_eyebrow' => 'GLOBAL AUTHORITIES & RESEARCH',
        'title_dark' => 'Syndicated',
        'title_blue' => 'Reports',
        'subtitle' => 'Industry-leading publications and research reports from global insurance authorities.',
        'reports' => [
            [
                'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&q=85&w=1000',
                'category' => 'Swiss Re Institute',
                'title' => 'Sigma Reports (Swiss Re)',
                'description' => 'Published by Swiss Re Institute, Sigma Reports are globally respected publications covering insurance markets, reinsurance economics, risk emerging trends, historical performance, and forward-looking forecasts.',
                'link_text' => 'Read More',
                'url' => 'https://www.swissre.com/institute/research/sigma-research.html'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=85&w=1000',
                'category' => 'Global Think Tanks',
                'title' => 'Risk Reports',
                'description' => 'These include strategic publications from top think tanks and research bodies (e.g., Lloyd’s or World Economic Forum). They assess current and predicted disruptions—ranging from climate change to cyber threats—and offer implications for individuals, businesses, and governments.',
                'link_text' => 'Read More',
                'url' => 'https://www.lloyds.com/insights/risk-reports'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&fit=crop&q=85&w=1000',
                'category' => 'GIC India',
                'title' => 'Yearbook (GI Council Yearbook)',
                'description' => 'An annual publication by the General Insurance Council (GIC) of India. The Yearbook provides statistics on policy volumes, regulatory updates, industry performance metrics, and state-wise penetration rates, based on submissions from licensed insurers.',
                'link_text' => 'Read More',
                'url' => 'https://www.gicouncil.in/statistics/yearbook-archive/'
            ]
        ]
    ];
?>

<section class="syndicated-reports-section" id="syndicated-reports">
    <div class="syndicated-reports__container">

        <!-- SECTION HEADER -->
        <div class="syndicated-reports__header">
            <span class="syndicated-reports__eyebrow"><?php echo esc_html($syndicated_reports_data['section_eyebrow']); ?></span>
            <h2 class="syndicated-reports__title">
                <span class="title-dark"><?php echo esc_html($syndicated_reports_data['title_dark']); ?></span>
                <span class="title-blue"><?php echo esc_html($syndicated_reports_data['title_blue']); ?></span>
            </h2>
            <p class="syndicated-reports__subtitle"><?php echo esc_html($syndicated_reports_data['subtitle']); ?></p>
        </div>

        <!-- STACKED ALTERNATING ROWS (NO CARDS) -->
        <div class="syndicated-reports__list">
            <?php foreach ($syndicated_reports_data['reports'] as $index => $report) : 
                $is_reversed = ($index % 2 !== 0);
            ?>
                <div class="report-row <?php echo $is_reversed ? 'report-row--reversed' : ''; ?>">
                    
                    <!-- IMAGE COLUMN -->
                    <div class="report-row__media">
                        <img src="<?php echo esc_url($report['image']); ?>" alt="<?php echo esc_attr($report['title']); ?>" loading="lazy">
                        <div class="report-row__accent-line"></div>
                    </div>

                    <!-- CONTENT COLUMN -->
                    <div class="report-row__content">
                        <div class="report-row__meta">
                            <span class="report-row__number">0<?php echo $index + 1; ?></span>
                            <span class="report-row__category"><?php echo esc_html($report['category']); ?></span>
                        </div>

                        <h3><?php echo esc_html($report['title']); ?></h3>
                        <p><?php echo esc_html($report['description']); ?></p>

                        <a href="<?php echo esc_url($report['url']); ?>" class="report-row__link">
                            <?php echo esc_html($report['link_text']); ?>
                            <span>→</span>
                        </a>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>