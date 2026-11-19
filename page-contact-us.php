    <?php
    /**
     * =========================================================
     * VIMA VIDYA
     * CONTACT — HERO
     * =========================================================
     */
    get_header();
    $contact_hero = [

        'eyebrow' => 'CONTACT VIMAVIDYA',

        'title_dark' => "Let's Start a",
        'title_blue' => 'Conversation.',

        'description' =>
            "At VimaVidya, we believe every question is an opportunity to learn. Whether you're looking for financial education resources, need guidance, or want to explore how we can help, we're here to listen and support you.",

        'background' =>
            'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&q=85&w=1800',

        'breadcrumb' => [
            'Home' => home_url('/'),
            'Contact' => '#'
        ],

        'primary_button' => [
            'text' => 'Get in Touch',
            'url'  => '#contact-form'
        ],

        'secondary_button' => [
            'text' => 'Learn More',
            'url'  => '#contact-info'
        ],

        'card' => [
            'label' => 'GET IN TOUCH',
            'title' => 'We Are Here to Help',
            'description' =>
                'Have questions or need expert guidance? Reach out to our team and start your journey towards financial confidence today.',
            'link_text' => 'Send a Message',
            'link' => '#contact-form'
        ],

        'stats' => [
            [
                'value' => '01',
                'label' => 'Dedicated support team',
                'icon' => 'chat'
            ],
            [
                'value' => '02',
                'label' => 'Quick response & guidance',
                'icon' => 'clock'
            ],
            [
                'value' => '03',
                'label' => 'Tailored financial solutions',
                'icon' => 'shield'
            ]
        ]
    ];
    ?>

    <section
        class="edu-hero contact-hero"
        id="contact-overview"
        style="--edu-bg: url('<?php echo esc_url($contact_hero['background']); ?>');"
    >

        <!-- BACKGROUND -->
        <div class="edu-hero__bg"></div>
        <div class="edu-hero__overlay"></div>

        <!-- MAIN CONTAINER -->
        <div class="edu-hero__container">

            <!-- LEFT CONTENT -->
            <div class="edu-hero__content">

                <!-- EYEBROW -->
                <div class="edu-hero__eyebrow">
                    <span>
                        <?php echo esc_html($contact_hero['eyebrow']); ?>
                    </span>
                </div>

                <!-- TITLE -->
                <h1 class="edu-hero__title">
                    <span class="title-dark">
                        <?php echo esc_html($contact_hero['title_dark']); ?>
                    </span>
                    <span class="title-blue">
                        <?php echo esc_html($contact_hero['title_blue']); ?>
                    </span>
                </h1>

                <!-- DESCRIPTION -->
                <p class="edu-hero__description">
                    <?php echo esc_html($contact_hero['description']); ?>
                </p>

                <!-- BREADCRUMB -->
                <div class="edu-hero__breadcrumb">
                    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                    <span>/</span>
                    <span>Contact</span>
                </div>

                <!-- ACTIONS -->
                <div class="edu-hero__actions">
                    <a
                        href="<?php echo esc_url($contact_hero['primary_button']['url']); ?>"
                        class="edu-hero__button edu-hero__button--primary"
                    >
                        <?php echo esc_html($contact_hero['primary_button']['text']); ?>
                        <span>↗</span>
                    </a>

                    <a
                        href="<?php echo esc_url($contact_hero['secondary_button']['url']); ?>"
                        class="edu-hero__button edu-hero__button--outline"
                    >
                        <?php echo esc_html($contact_hero['secondary_button']['text']); ?>
                        <span>→</span>
                    </a>
                </div>

            </div>

            <!-- RIGHT FLOATING CARD -->
            <div class="edu-hero__card">
                <div class="edu-hero__card-icon">
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.6"
                        aria-hidden="true"
                    >
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                    </svg>
                </div>

                <div class="edu-hero__card-content">
                    <span class="edu-label">
                        <?php echo esc_html($contact_hero['card']['label']); ?>
                    </span>

                    <h2>
                        <?php echo esc_html($contact_hero['card']['title']); ?>
                    </h2>

                    <p>
                        <?php echo esc_html($contact_hero['card']['description']); ?>
                    </p>

                    <a href="<?php echo esc_url($contact_hero['card']['link']); ?>">
                        <?php echo esc_html($contact_hero['card']['link_text']); ?>
                        <span>→</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- STATISTICS -->
        <div class="edu-hero__stats-wrapper">
            <div class="edu-hero__stats">
                <?php foreach ($contact_hero['stats'] as $stat) : ?>
                    <div class="edu-hero__stat">
                        <div class="edu-hero__stat-icon">
                            <?php if ($stat['icon'] === 'chat') : ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                </svg>
                            <?php elseif ($stat['icon'] === 'clock') : ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M12 7v5l3 3" />
                                </svg>
                            <?php else : ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M12 3l7 3v5c0 4.8-3 8.8-7 10-4-1.2-7-5.2-7-10V6l7-3z" />
                                </svg>
                            <?php endif; ?>
                        </div>

                        <div class="edu-hero__stat-content">
                            <strong><?php echo esc_html($stat['value']); ?></strong>
                            <span><?php echo esc_html($stat['label']); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section>

    <?php
/**
 * =========================================================
 * VIMA VIDYA
 * CONTACT FORM SECTION (LIGHT BLUE BACKGROUND)
 * =========================================================
 */
?>

<section class="contact-section contact-section--lightblue" id="contact-form">
    <div class="contact-section__container">
        
        <!-- LEFT INFO -->
        <div class="contact-section__info">
            <h2>Get in Touch</h2>
            <p>We’d love to hear from you. Whether you have a question or need help with a booking, our team is ready to help.</p>

            <ul class="contact-section__details">
                <li>
                    <span class="icon">✉</span>
                    <a href="mailto:contactus@vimavidya.com">contactus@vimavidya.com</a>
                </li>
                <li>
                    <span class="icon">📍</span>
                    <span>1202-Tower B2-Godrej Platinum Pirojshanagar, Vikhroli East Mumbai - 400 079, India</span>
                </li>
            </ul>
        </div>

        <!-- RIGHT FORM CARD -->
        <div class="contact-section__card">
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="contact-name">Name</label>
                    <input type="text" id="contact-name" name="name" required />
                </div>

                <div class="form-group">
                    <label for="contact-email">Email</label>
                    <input type="email" id="contact-email" name="email" required />
                </div>

                <div class="form-group">
                    <label for="contact-message">Message</label>
                    <textarea id="contact-message" name="message" rows="4" required></textarea>
                </div>

                <button type="submit" class="contact-section__button">
                    Send Message
                </button>
            </form>
        </div>

    </div>
</section>

    <?php get_footer(); ?>