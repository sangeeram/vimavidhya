<?php
/**
 * Risk Management Section (Light Theme with Pastel Blue Cards)
 *
 * @package YourTheme
 */

$risk_cards = array(

    array(
        'id'          => 'risk-avoidance',
        'number'      => '01',
        'type'        => 'AVOIDANCE',
        'title'       => 'Risk Avoidance',
        'description' => 'Eliminating activities or situations that expose one to risk. For example, not driving to avoid accidents.',
        'image'       => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Risk Avoidance Strategy',
        'bg_color'    => '#0B132B',
        'accent'      => '#0284c7',
        'icon'        => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
    ),

    array(
        'id'          => 'risk-prevention',
        'number'      => '02',
        'type'        => 'PREVENTION',
        'title'       => 'Risk Prevention',
        'description' => 'Implementing measures to stop risk events from occurring, like installing fire alarms.',
        'image'       => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Risk Prevention Strategy',
        'bg_color'    => '#0B132B',
        'accent'      => '#0369a1',
        'icon'        => '<circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/>',
    ),

    array(
        'id'          => 'risk-reduction',
        'number'      => '03',
        'type'        => 'REDUCTION',
        'title'       => 'Risk Reduction',
        'description' => 'Taking steps to reduce the likelihood or impact of loss, such as wearing a helmet or seatbelt.',
        'image'       => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Risk Reduction Strategy',
        'bg_color'    => '#0B132B',
        'accent'      => '#0284c7',
        'icon'        => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
    ),

    array(
        'id'          => 'risk-transfer',
        'number'      => '04',
        'type'        => 'TRANSFER',
        'title'       => 'Risk Transfer',
        'description' => 'Shifting the financial burden of risk to another party, such as buying insurance to cover potential losses.',
        'image'       => 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Risk Transfer Strategy',
        'bg_color'    => '#0B132B',
        'accent'      => '#1d4ed8',
        'icon'        => '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
    ),

    array(
        'id'          => 'risk-retention',
        'number'      => '05',
        'type'        => 'RETENTION',
        'title'       => 'Risk Retention',
        'description' => 'Accepting and budgeting for certain risks, such as bearing small medical costs yourself.',
        'image'       => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Risk Retention Strategy',
        'bg_color'    => '#0B132B',
        'accent'      => '#4338ca',
        'icon'        => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
    ),

    array(
        'id'          => 'risk-control',
        'number'      => '06',
        'type'        => 'CONTROL',
        'title'       => 'Risk Control',
        'description' => 'Applying policies and procedures to manage and minimize risks, like enforcing workplace safety rules.',
        'image'       => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Risk Control Strategy',
        'bg_color'    => '#0B132B',
        'accent'      => '#0891b2',
        'icon'        => '<polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/>',
    ),

);
?>

<section id="risk-management" class="risk-management" aria-labelledby="risk-management-title">

    <div class="risk-management__container">

        <header class="risk-management__header">
            <div class="risk-management__heading">
                <span class="risk-management__eyebrow" data-aos="fade-up">Strategic Framework</span>
                <h2 id="risk-management-title" class="risk-management__title" data-aos="fade-up"
                    data-aos-duration="800">
                    Risk Management
                </h2>
            </div>
        </header>

        <!-- OVERVIEW GRID -->
        <div class="risk-management__overview">

            <article class="risk-management__overview-card" data-aos="fade-right" data-aos-duration="1500">
                <span class="risk-management__card-eyebrow">UNDERSTANDING RISK</span>
                <h3 class="risk-management__overview-title">What Are Risks?</h3>

                <p class="risk-management__overview-body">
                    Life and business are full of uncertainties — an unexpected medical
                    emergency, a factory shutdown, a lawsuit, a natural disaster, or
                    damage to what you've spent years building.
                </p>

                <blockquote class="risk-management__highlight">
                    Whether you're an individual, a family, a small shop, or a large
                    organisation, no one can predict when these events will happen.
                    <strong>But we can prepare for them.</strong>
                </blockquote>
            </article>

            <article class="risk-management__overview-card" data-aos="fade-left" data-aos-duration="1500">
                <span class="risk-management__card-eyebrow">STRATEGIC IMPORTANCE</span>
                <h3 class="risk-management__overview-title">Why Is Risk Management Important?</h3>

                <blockquote class="risk-management__quote">
                    "It isn't about living in fear — it's about making confident, informed decisions so that when life
                    surprises you, your foundation holds."
                </blockquote>

                <p class="risk-management__overview-body">
                    Risk management means identifying potential threats and preparing for them before they happen. It
                    helps reduce uncertainty, protect finances, maintain continuity, and safeguard what matters most —
                    your health, loved ones, and long-term goals.
                </p>

                <div class="risk-management__tag">
                    PREPARATION &bull; PROTECTION &bull; RESILIENCE
                </div>
            </article>

        </div>

    </div>

    <!-- SECTION HEADING -->
    <div class="risk-management__intro">
        <h2 class="risk-management__heading" data-aos="fade-up" data-aos-duration="800">
            The six ways to <span>manage risk</span>
        </h2>

        <p class="risk-management__subheading" data-aos="fade-up" data-aos-duration="1000">
            Every risk you face can be handled in one of six ways.
            Click on any card to learn more.
        </p>
    </div>

    <!-- HORIZONTAL CARD RAIL -->
    <div class="risk-management__rail">
        <div class="risk-management__track">

            <!-- ORIGINAL CARDS -->
            <div class="risk-management__group">
                <?php foreach ($risk_cards as $card) : ?>
                <article class="risk-card" style="background-color: <?php echo esc_attr($card['bg_color']); ?>;">

                    <!-- Background Image Layer -->
                    <div class="risk-card__bg-image"
                        style="background-image: url('<?php echo esc_url($card['image']); ?>');">
                    </div>

                    <!-- Content Box -->
                    <div class="risk-card__box">
                        <div class="risk-card__icon" style="color: <?php echo esc_attr($card['accent']); ?>;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <?php echo $card['icon']; ?>
                            </svg>
                        </div>

                        <h3 class="risk-card__title">
                            <?php echo esc_html($card['title']); ?>
                        </h3>

                        <p class="risk-card__description">
                            <?php echo esc_html($card['description']); ?>
                        </p>
                    </div>

                    <a href="<?php echo esc_url(home_url('/managing-risks/#' . $card['id'])); ?>"
                        class="risk-card__btn">
                        Explore &rarr;
                    </a>

                </article>
                <?php endforeach; ?>
            </div>

            <!-- DUPLICATE FOR INFINITE LOOP -->
            <div class="risk-management__group" aria-hidden="true">
                <?php foreach ($risk_cards as $card) : ?>
                <article class="risk-card" style="background-color: <?php echo esc_attr($card['bg_color']); ?>;">

                    <!-- Background Image Layer -->
                    <div class="risk-card__bg-image"
                        style="background-image: url('<?php echo esc_url($card['image']); ?>');">
                    </div>

                    <div class="risk-card__box">
                        <div class="risk-card__icon" style="color: <?php echo esc_attr($card['accent']); ?>;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <?php echo $card['icon']; ?>
                            </svg>
                        </div>

                        <h3 class="risk-card__title">
                            <?php echo esc_html($card['title']); ?>
                        </h3>

                        <p class="risk-card__description">
                            <?php echo esc_html($card['description']); ?>
                        </p>
                    </div>

                    <span class="risk-card__btn">
                        Explore &rarr;
                    </span>

                </article>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

    <!-- KEY TAKEAWAY CARD -->
    <div class="risk-management__container" data-aos="fade-up" data-aos-duration="1700">
        <div class="risk-management__takeaway">
            <span class="risk-management__card-eyebrow">KEY TAKEAWAY</span>
            <h3 class="risk-management__takeaway-title">Protecting What Matters Most</h3>
            <p class="risk-management__takeaway-body">
                Of all these approaches, <strong>risk transfer through insurance</strong> is often the most practical
                and effective for individuals. Rather than absorbing a potentially devastating financial blow yourself,
                insurance allows you to transfer that burden — safeguarding your savings, protecting your family, and
                keeping your long-term plans on track even when the unexpected happens.
            </p>
            <p class="risk-management__takeaway-body">
                <strong>Risk management isn't just about reacting when things go wrong — it's about being
                    prepared</strong> so that
                nothing that matters most to you derails. With the right cover in place, you can face life's
                uncertainties with clarity and confidence.
            </p>
        </div>
    </div>

</section>