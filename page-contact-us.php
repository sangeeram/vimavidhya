
<?php
/**
 * =========================================================
 * VIMA VIDYA
 * CONTACT US — COMPLETE PAGE
 * =========================================================
 */

get_header();

// =========================================================
// HERO CONTENT
// =========================================================

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

// =========================================================
// CONTACT FORM STATUS
// =========================================================

$contact_status = isset($_GET['contact_status'])
    ? sanitize_key(wp_unslash($_GET['contact_status']))
    : '';

?>

<!-- ======================================================
     CONTACT HERO
====================================================== -->

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

                <a href="<?php echo esc_url(home_url('/')); ?>">
                    Home
                </a>

                <span>/</span>

                <span>Contact</span>

            </div>

            <!-- ACTION BUTTONS -->
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
                    <path
                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                    />
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

    <!-- ==================================================
         HERO STATISTICS
    ================================================== -->

    <div class="edu-hero__stats-wrapper">

        <div class="edu-hero__stats">

            <?php foreach ($contact_hero['stats'] as $stat) : ?>

                <div class="edu-hero__stat">

                    <div class="edu-hero__stat-icon">

                        <?php if ($stat['icon'] === 'chat') : ?>

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                aria-hidden="true"
                            >
                                <path
                                    d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                                />
                            </svg>

                        <?php elseif ($stat['icon'] === 'clock') : ?>

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                aria-hidden="true"
                            >
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 3" />
                            </svg>

                        <?php else : ?>

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                aria-hidden="true"
                            >
                                <path
                                    d="M12 3l7 3v5c0 4.8-3 8.8-7 10-4-1.2-7-5.2-7-10V6l7-3z"
                                />
                            </svg>

                        <?php endif; ?>

                    </div>

                    <div class="edu-hero__stat-content">

                        <strong>
                            <?php echo esc_html($stat['value']); ?>
                        </strong>

                        <span>
                            <?php echo esc_html($stat['label']); ?>
                        </span>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- ======================================================
     CONTACT FORM SECTION
====================================================== -->

<section
    class="contact-section contact-section--lightblue"
    id="contact-form"
>

    <div class="contact-section__container">

        <!-- ==============================================
             LEFT CONTACT INFORMATION
        =============================================== -->

        <div
            class="contact-section__info"
            id="contact-info"
        >

            <h2>Get in Touch</h2>

            <p>
                We’d love to hear from you. Whether you have a
                question about financial education, need guidance,
                or want to explore our resources, our team is
                ready to help.
            </p>

            <ul class="contact-section__details">

                <!-- EMAIL -->
                <li>

                    <span class="icon" aria-hidden="true">✉</span>

                    <a href="mailto:contactus@vimavidya.com">
                        contactus@vimavidya.com
                    </a>

                </li>

                <!-- ADDRESS -->
                <li>

                    <span class="icon" aria-hidden="true">📍</span>

                    <span>
                        1202-Tower B2-Godrej Platinum
                        Pirojshanagar, Vikhroli East
                        Mumbai - 400 079, India
                    </span>

                </li>

            </ul>

        </div>


        <!-- ==============================================
             RIGHT CONTACT FORM CARD
        =============================================== -->

        <div class="contact-section__card">

            <!-- SUCCESS MESSAGE -->
            <?php if ($contact_status === 'success') : ?>

                <div
                    class="contact-notice contact-notice--success"
                    role="status"
                >
                    <strong>Message Sent Successfully!</strong>

                    <p>
                        Thank you for contacting Vima Vidya.
                        Your message has been received.
                        Our team will get back to you soon.
                    </p>
                </div>

            <?php endif; ?>


            <!-- VALIDATION ERROR -->
            <?php if ($contact_status === 'invalid') : ?>

                <div
                    class="contact-notice contact-notice--error"
                    role="alert"
                >
                    <strong>Please check your details.</strong>

                    <p>
                        Enter a valid name, email address
                        and message before submitting.
                    </p>
                </div>

            <?php endif; ?>


            <!-- DATABASE ERROR -->
            <?php if ($contact_status === 'error') : ?>

                <div
                    class="contact-notice contact-notice--error"
                    role="alert"
                >
                    <strong>Something went wrong.</strong>

                    <p>
                        We could not save your message.
                        Please try again.
                    </p>
                </div>

            <?php endif; ?>


            <!-- CONTACT FORM -->
            <form
                id="vv-contact-form"
                action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                method="POST"
            >

                <!-- WORDPRESS FORM ACTION -->
                <input
                    type="hidden"
                    name="action"
                    value="vv_contact_submit"
                >

                <!-- SECURITY NONCE -->
                <?php
                wp_nonce_field(
                    'vv_contact_submit',
                    'vv_contact_nonce'
                );
                ?>


                <!-- SPAM HONEYPOT -->
                <div
                    class="vv-contact-honeypot"
                    style="position:absolute;left:-9999px;"
                    aria-hidden="true"
                >

                    <label for="contact-website">
                        Website
                    </label>

                    <input
                        type="text"
                        id="contact-website"
                        name="website"
                        tabindex="-1"
                        autocomplete="off"
                    >

                </div>


                <!-- NAME -->
                <div class="form-group">

                    <label for="contact-name">
                        Name <span aria-hidden="true">*</span>
                    </label>

                    <input
                        type="text"
                        id="contact-name"
                        name="name"
                        placeholder="Enter your full name"
                        maxlength="150"
                        autocomplete="name"
                        required
                    >

                </div>


                <!-- EMAIL -->
                <div class="form-group">

                    <label for="contact-email">
                        Email <span aria-hidden="true">*</span>
                    </label>

                    <input
                        type="email"
                        id="contact-email"
                        name="email"
                        placeholder="Enter your email address"
                        maxlength="190"
                        autocomplete="email"
                        required
                    >

                </div>


                <!-- MESSAGE -->
                <div class="form-group">

                    <label for="contact-message">
                        Message <span aria-hidden="true">*</span>
                    </label>

                    <textarea
                        id="contact-message"
                        name="message"
                        rows="4"
                        maxlength="5000"
                        placeholder="How can we help you?"
                        required
                    ></textarea>

                </div>


                <!-- SUBMIT BUTTON -->
                <button
                    type="submit"
                    class="contact-section__button"
                >
                    Send Message
                </button>

            </form>

        </div>

    </div>

</section>

<?php get_footer(); ?>
