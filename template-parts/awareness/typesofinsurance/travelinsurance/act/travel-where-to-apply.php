<?php
/**
 * Where to Apply Channels Section Template (Travel Insurance)
 */

$subheading = "CHANNELS";
$heading = "Where to Apply";

$channels = [
    [
        'id' => '01',
        'icon' => '📱',
        'channel' => "Insurer's official mobile app",
        'access' => "Login to policy account; select 'Raise a Claim'",
        'best_for' => "Fastest for well-documented claims; creates automatic digital audit trail"
    ],
    [
        'id' => '02',
        'icon' => '💻',
        'channel' => "Insurer's official website (claims portal)",
        'access' => "Online claim form with document upload",
        'best_for' => "Reimbursement claims post-return; when documentation is ready"
    ],
    [
        'id' => '03',
        'icon' => '🏢',
        'channel' => "Insurer branch / service centre",
        'access' => "Walk-in with physical documents",
        'best_for' => "Complex claims; when document volumes are large or require attestation"
    ],
    [
        'id' => '04',
        'icon' => '🤝',
        'channel' => "Insurance broker / agent (if used)",
        'access' => "Through the intermediary who sold the policy",
        'best_for' => "Assistance with documentation; useful if unfamiliar with the claims process"
    ],
    [
        'id' => '05',
        'icon' => '📞',
        'channel' => "24/7 Assistance helpline",
        'access' => "Number printed on policy certificate",
        'best_for' => "Mandatory first call for all overseas medical emergencies; activates cashless"
    ]
];

$note = "Always use the contact details shown in your current policy documents or the insurer's official channels — not third-party websites or intermediaries not connected to your policy.";
?>

<section class="claims-channels" id="where-to-apply">
  <div class="claims-channels__container">
    <header class="claims-channels__header">
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