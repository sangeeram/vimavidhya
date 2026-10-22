<?php
$subheading = "CHANNELS";
$heading = "Where to Apply ?";

$channels = [
    [
        'id' => '01',
        'icon' => '💻', // Replace with an <img> or inline SVG icon if desired
        'channel' => "Insurer's official website / app",
        'access' => "Login to policy account; select 'Raise a Claim'",
        'best_for' => "Fastest for simple, well-documented claims"
    ],
    [
        'id' => '02',
        'icon' => '📞',
        'channel' => "Toll-free claims helpline",
        'access' => "Number on the policy document / insurer's website",
        'best_for' => "Immediate notification; especially useful in emergencies"
    ],
    [
        'id' => '03',
        'icon' => '🏢',
        'channel' => "Insurer branch / service centre",
        'access' => "Walk-in with documents; get acknowledgment receipt",
        'best_for' => "Complex claims; disability certification; when documentation is voluminous"
    ],
    [
        'id' => '04',
        'icon' => '🤝',
        'channel' => "Insurance broker / agent (if used)",
        'access' => "Through the intermediary who sold the policy",
        'best_for' => "Useful for assistance with documentation; broker handles insurer coordination"
    ],
    [
        'id' => '05',
        'icon' => '🏥',
        'channel' => "Cashless claim (if applicable)",
        'access' => "At network hospital; present policy details at admission",
        'best_for' => "For accident medical reimbursement add-on; hospital coordinates with insurer"
    ]
];

$note = "Always use the contact details shown in your current policy documents or the insurer's official channels — not third-party websites or intermediaries not connected to your policy.";
?>

<section class="claims-channels">
  <div class="claims-channels__container">
    <header class="claims-channels__header">
      <!-- <span class="claims-channels__subheading"><?php echo htmlspecialchars($subheading); ?></span> -->
      <h2 class="claims-channels__heading"><?php echo htmlspecialchars($heading); ?></h2>
    </header>

    <div class="claims-channels__grid">
      <?php foreach ($channels as $item): ?>
        <div class="claims-channels__card">
          <div class="claims-channels__card-top">
            <div class="claims-channels__icon-wrapper">
              <span class="claims-channels__icon"><?php echo $item['icon']; ?></span>
            </div>
            <span class="claims-channels__number"><?php echo htmlspecialchars($item['id']); ?></span>
          </div>

          <h3 class="claims-channels__card-title"><?php echo htmlspecialchars($item['channel']); ?></h3>

          <div class="claims-channels__detail">
            <span class="claims-channels__detail-label">How to Access</span>
            <p class="claims-channels__detail-text"><?php echo htmlspecialchars($item['access']); ?></p>
          </div>

          <div class="claims-channels__detail">
            <span class="claims-channels__detail-label">Best For</span>
            <p class="claims-channels__detail-text"><?php echo htmlspecialchars($item['best_for']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="claims-channels__notice">
      <p><?php echo htmlspecialchars($note); ?></p>
    </div>
  </div>
</section>