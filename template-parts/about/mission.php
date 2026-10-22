<?php
// Define video URL and content variables
$youtube_embed_url = "https://www.youtube.com/embed/8LU6gTCJwmc?si=R5tQsNffsWqaFIvy&autoplay=1";
$video_thumbnail   = "https://img.youtube.com/vi/8LU6gTCJwmc/maxresdefault.jpg";
?>

<section class="mission-section">
    <div class="mission-container">

        <!-- Left Column: Video Media Component -->
        <div class="mission-media" data-aos="fade-right" data-aos-duration="800">
            <div class="video-thumbnail-wrapper">
                <img src="<?php echo esc_url($video_thumbnail); ?>" alt="Vima Vidya Mission Video" class="video-poster">
                <div class="video-overlay"></div>

                <!-- Play Button Trigger -->
                <button type="button" class="play-btn" id="openMissionVideo" aria-label="Play Mission Video">
                    <svg viewBox="0 0 100 100" class="play-circle-svg">
                        <circle cx="50" cy="50" r="45" class="svg-bg-circle" />
                        <circle cx="50" cy="50" r="45" class="svg-main-circle" />
                        <polygon points="42,32 68,50 42,68" fill="#ffffff" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Right Column: Content matching Reference Layout -->
        <div class="mission-content" data-aos="fade-left" data-aos-duration="800">
            <span class="mission-eyebrow">Mission</span>
            <h2 class="mission-title">Our Mission</h2>

            <p class="mission-description">
                Vima Vidya is not an insurance company. We do not sell policies. We build understanding.
            </p>

            <p class="mission-description-sub">
                Vima Vidya is a knowledge and awareness platform created to empower every Indian-students,
                professionals, business owners, and the general public—to understand and manage risk effectively through
                the power of insurance.
            </p>
            <p class="mission-description-sub">
                In a world full of uncertainties, knowing how to protect your life, health, income, and property is not
                just important-it's essential. VimaVidya simplifies this journey by providing easy-to-understand
                educational content, tools, and resources that decode the world of insurance.
            </p>

            <!-- Feature Checkpoints List (Matches vertical line indicator style) -->
            <!-- <ul class="mission-features">
                <li class="feature-item">
                    <span class="feature-title">AWARENESS</span>
                    <p class="feature-text">We help you see and recognise risks in your everyday life.</p>
                </li>
                <li class="feature-item">
                    <span class="feature-title">EDUCATION</span>
                    <p class="feature-text">We explain how insurance works in plain, human language.</p>
                </li>
                <li class="feature-item">
                    <span class="feature-title">KNOWLEDGE</span>
                    <p class="feature-text">We equip you to make informed, confident financial decisions.</p>
                </li>
            </ul> -->
        </div>

    </div>

    <!-- Video Lightbox / Modal -->
    <div class="video-modal" id="videoModal" aria-hidden="true">
        <div class="video-modal-overlay" id="closeMissionOverlay"></div>
        <div class="video-modal-content">
            <button class="close-modal" id="closeMissionVideo" aria-label="Close modal">&times;</button>
            <div class="iframe-container">
                <iframe id="missionIframe" data-src="<?php echo esc_url($youtube_embed_url); ?>" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const openBtn = document.getElementById('openMissionVideo');
    const closeBtn = document.getElementById('closeMissionVideo');
    const overlay = document.getElementById('closeMissionOverlay');
    const modal = document.getElementById('videoModal');
    const iframe = document.getElementById('missionIframe');

    if (!openBtn || !modal || !iframe) return;

    const openModal = () => {
        const videoSrc = iframe.getAttribute('data-src');
        if (videoSrc) {
            iframe.setAttribute('src', videoSrc);
        }
        modal.classList.add('is-active');
        modal.setAttribute('aria-hidden', 'false');
    };

    const closeModal = () => {
        modal.classList.remove('is-active');
        modal.setAttribute('aria-hidden', 'true');
        iframe.removeAttribute('src'); // Stops video playback when closed
    };

    openBtn.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', closeModal);

    // ESC Key listener
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('is-active')) {
            closeModal();
        }
    });
});
</script>