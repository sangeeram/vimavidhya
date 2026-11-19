<?php
/**
 * Vima Vidya - Types of Vehicles Covered Component
 */

$vehicles = [
    [
        'category' => 'Private Cars',
        'examples' => 'Hatchbacks, sedans, SUVs, MUVs, personal EVs',
        'tp_duration' => '3 years (mandatory)',
        'key_note' => 'Own Damage (OD) optional but critical; most common category in India',
        'icon' => 'car.png' // Replace with your actual asset path/filename
    ],
    [
        'category' => 'Two-Wheelers',
        'examples' => 'Motorcycles, scooters, mopeds',
        'tp_duration' => '5 years (mandatory)',
        'key_note' => 'Highest accident risk; 26 crore+ registered; 44.5% of all fatal accidents (MoRTH Annual Report 2024–25)',
        'icon' => 'two-wheeler.png'
    ],
    [
        'category' => 'Three-Wheelers',
        'examples' => 'Auto-rickshaws, e-rickshaws',
        'tp_duration' => 'Annual or per classification',
        'key_note' => 'e-Rickshaws now specifically covered under motor policies',
        'icon' => 'three-wheeler.png'
    ],
    [
        'category' => 'Commercial Passenger',
        'examples' => 'Taxis, cabs, school buses, tourist coaches',
        'tp_duration' => 'Annual renewal mandatory',
        'key_note' => 'Passenger liability covers essential; separate commercial category',
        'icon' => 'bus.png'
    ],
    [
        'category' => 'Goods Carrying Vehicles',
        'examples' => 'Trucks, lorries, mini-trucks, pick-ups',
        'tp_duration' => 'Annual renewal mandatory',
        'key_note' => 'Cargo NOT covered under motor policy; needs separate marine transit policy',
        'icon' => 'truck.png'
    ],
    [
        'category' => 'Agricultural / Specialty',
        'examples' => 'Tractors, harvesters, construction equipment',
        'tp_duration' => 'Specific policies available',
        'key_note' => 'Motor policy covers vehicle only; not the crop or attached implements',
        'icon' => 'tractor.png'
    ],
    [
        'category' => 'Electric Vehicles (EVs)',
        'examples' => 'Electric cars, e-bikes, e-three-wheelers',
        'tp_duration' => 'Specific policies available',
        'key_note' => 'Battery Protection add-on available; charging assistance under RSA (Roadside assistance)',
        'icon' => 'ev-car.png'
    ],
    [
        'category' => 'Vintage / Classic Cars',
        'examples' => 'Pre-1940 collectors vehicles',
        'tp_duration' => 'Standard OD + TP',
        'key_note' => 'Agreed Value policy recommended — standard IDV (Insured declared value) not suitable for vintage',
        'icon' => 'vintage-car.png'
    ]
];
?>

<section class="vehicle-coverage-section">
    <div class="container">
        
        <div class="section-header">
            <h2>Types of Vehicles Covered</h2>
            <p>Motor insurance covers a wide range of vehicles. Here's a quick look at the different types, with their TP duration and key notes.</p>
        </div>

        <div class="vehicle-grid">
            <?php foreach ($vehicles as $vehicle): ?>
                <div class="vehicle-card">
                    <div class="card-top">
                        <div class="vehicle-icon">
                            <!-- Update path to point to your image assets directory -->
                            <img src="/assets/images/vehicles/<?php echo htmlspecialchars($vehicle['icon']); ?>" alt="<?php echo htmlspecialchars($vehicle['category']); ?>">
                        </div>
                        <h3><?php echo htmlspecialchars($vehicle['category']); ?></h3>
                        <p class="vehicle-examples"><?php echo htmlspecialchars($vehicle['examples']); ?></p>
                    </div>
                    
                    <div class="card-bottom">
                        <div class="info-block">
                            <div class="info-label">TP Duration</div>
                            <div class="info-value"><?php echo htmlspecialchars($vehicle['tp_duration']); ?></div>
                        </div>
                        <div class="info-block">
                            <div class="info-label">Key Note</div>
                            <div class="info-value"><?php echo htmlspecialchars($vehicle['key_note']); ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>