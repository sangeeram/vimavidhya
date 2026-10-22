<?php
$sub_heading    = "THE JOURNEY";
$title_main     = "How Vima Vidya Began";

$main_image_url = "https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=1000&auto=format&fit=crop";

$journey_steps = [
    [
        'id'          => 'beginning',
        'sub_label'   => 'THE BEGINNING',
        'title'       => 'Recognising the Gap',
        'active'      => true,
        'content'     => 'Vima Vidya was born from a simple observation: most people buy insurance because they are told to — not because they understand why. The gap between the industry\'s knowledge and the public\'s understanding was vast.'
    ],
    [
        'id'          => 'purpose',
        'sub_label'   => 'THE PURPOSE',
        'title'       => 'Making Knowledge Accessible',
        'active'      => true,
        'content'     => 'While both public and private efforts exist to spread insurance awareness, they often fall short due to complex terminology, low financial literacy, and unrelatable messaging.'
    ],
    [
        'id'          => 'aims',
        'sub_label'   => 'Our Aims',
        'title'       => 'Making Insurance Easier to Understand',
        'active'      => true,
        'content'     => 'While both public and private efforts exist to spread insurance awareness, they often fall short due to complex terminology, low financial literacy, and unrelatable messaging.'
    ],
    [
        'id'          => 'today',
        'sub_label'   => 'TODAY',
        'title'       => 'An Interactive Platform',
        'active'      => true,
        'content'     => 'Connecting citizens directly with reliable risk guidance across 560+ insurance literacy workshops conducted in various communities.'
    ]
];
?>

<section class="journey-section" data-aos="fade" data-aos-duration="1000">
  <div class="journey-container">
    
    <!-- Top Header -->
    <div class="journey-header" data-aos="fade-right" data-aos-duration="900">
      <span class="journey-subtitle"><?= htmlspecialchars($sub_heading) ?></span>
      <h2 class="journey-title">
        <?= htmlspecialchars($title_main) ?>
       
      </h2>
    </div>

    <!-- Main Grid -->
    <div class="journey-grid">
      
      <!-- Image Column -->
      <div class="journey-image-wrapper" data-aos="fade-right" data-aos-duration="1000">
        <img 
          src="<?= $main_image_url ?>" 
          alt="How Vima Vidya Began" 
          class="journey-img" 
          loading="lazy"
        />
      </div>

      <!-- Accordion Timeline Column -->
      <div class="journey-timeline" data-aos="fade-left" data-aos-duration="1000">
        <?php foreach ($journey_steps as $index => $step): ?>
          <div class="timeline-item <?= $step['active'] ? 'active' : '' ?>" data-target="#step-<?= $step['id'] ?>">
            <div class="timeline-header">
              <span class="dot"></span>
              <div class="timeline-title-group">
                <span class="step-sub-label"><?= htmlspecialchars($step['sub_label']) ?></span>
                <h3 class="step-title"><?= htmlspecialchars($step['title']) ?></h3>
              </div>
            </div>
            <div id="step-<?= $step['id'] ?>" class="timeline-body">
              <p><?= htmlspecialchars($step['content']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- 
<script>
document.querySelectorAll('.timeline-item').forEach(item => {
  item.addEventListener('click', () => {
    document.querySelectorAll('.timeline-item').forEach(el => el.classList.remove('active'));
    item.classList.add('active');
  });
});
</script> -->